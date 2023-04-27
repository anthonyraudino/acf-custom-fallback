<?php
/*
Plugin Name: ACF Field Fallback
Plugin URI: https://github.com/anthonyraudino/acf-custom-fallback/
Description: This plugin extends Advanced Custom Fields by allowing you to display custom fallback text when a field is empty using the [acf_field_fallback] shortcode. Additionally, you can use the [acf_checkboxes_list] shortcode to display ACF checkboxes fields in a list format.
Version: 2.0
Author: Anthony Raudino
Author URI: https://madewithhearts.com.au/
License: GPL2
*/

// Add shortcode
function acf_field_fallback_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'field_name' => '',
        'post_id' => get_queried_object_id(),
        'fallback' => 'N/A',
        'prefix' => '',
        'suffix' => '',
    ), $atts, 'acf_field_fallback' );

    if ( empty( $atts['field_name'] ) ) {
        return '';
    }

    $field_value = get_field( $atts['field_name'], $atts['post_id'], false );

    if ( empty( $field_value ) ) {
        $field_value = $atts['fallback'];
    }

    if ( $field_value === $atts['fallback'] ) {
        // Field value is fallback, do not display prefix and suffix
        $output = $field_value;
    } else {
        // Field value is not fallback, display prefix, suffix, and capitalize the text
        $output = $atts['prefix'] . " " . ucfirst( $field_value ) . " " . $atts['suffix'];
    }

    return $output;
}
add_shortcode( 'acf_field_fallback', 'acf_field_fallback_shortcode' );

// Add shortcode to display values from ACF checkboxes in a list format
function acf_checkboxes_list_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'field_name' => '',
        'post_id' => get_queried_object_id(),
    ), $atts, 'acf_checkboxes_list' );

    if ( empty( $atts['field_name'] ) ) {
        return '';
    }

    $field_value = get_field( $atts['field_name'], $atts['post_id'], false );

    if ( empty( $field_value ) ) {
        return '';
    }

    $output = '<ul class="acf-custom-list">';
    foreach ( $field_value as $value ) {
        $output .= '<li class="acf-custom-list-item">' . $value . '</li>';
    }
    $output .= '</ul>';

    return $output;
}
add_shortcode( 'acf_checkboxes_list', 'acf_checkboxes_list_shortcode' );
