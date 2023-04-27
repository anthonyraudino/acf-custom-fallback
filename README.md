## Advanced Custom Fields Custom Field Fallback Plugin

The Advanced Custom Fields Custom Field Fallback plugin extends the functionality of Advanced Custom Fields (ACF) by allowing you to display a custom fallback text if field content is empty.

### Installation

To install the plugin, simply download the zip file from the repository and upload it to your WordPress website via the plugins menu in the WordPress dashboard.

### Usage

The plugin provides two shortcodes: `[acf_field_fallback]` and `[acf_checkboxes_list]`.

#### `[acf_field_fallback]` Shortcode

The `[acf_field_fallback]` shortcode allows you to display the value of an ACF field with fallback text and optional prefix/suffix. 

Here's an example shortcode: 

```
[acf_field_fallback field_name="my_field_name" fallback="N/A" prefix="The value is: " suffix="." capitalize="true"]
```

Here are the options for the `[acf_field_fallback]` shortcode:

- `field_name`: Required. The name of the ACF field you want to display.
- `post_id`: Optional. The ID of the post you want to display the field for. Defaults to the current post.
- `fallback`: Optional. The fallback text to display if the field is empty. Defaults to "N/A".
- `prefix`: Optional. Text to add before the field value. Defaults to empty.
- `suffix`: Optional. Text to add after the field value. Defaults to empty.
- `capitalize`: Optional. Whether to capitalize the text. Defaults to true.

#### `[acf_checkboxes_list]` Shortcode

The `[acf_checkboxes_list]` shortcode allows you to display the values of an ACF checkboxes field in a list format.

Here's an example shortcode:

```
[acf_checkboxes_list field_name="my_checkboxes_field_name"]
```

Here are the options for the `[acf_checkboxes_list]` shortcode:

- `field_name`: Required. The name of the ACF checkboxes field you want to display.
- `post_id`: Optional. The ID of the post you want to display the field for. Defaults to the current post.

### Example

Let's say you have a custom post type called "Books" with an ACF field called "Author". You want to display the author name on the frontend of your website, but if the author field is empty, you want to display the text "Unknown".

Here's how you could use the `[acf_field_fallback]` shortcode to achieve this:

1. Open the post or page where you want to display the author name.
2. Add the following shortcode to the post or page content:

```
[acf_field_fallback field_name="author" fallback="Unknown"]
```

3. Save the post or page.

Now, when a visitor views the post or page, they will see the author name if it is filled in, and "Unknown" if the author field is empty.

### Support

If you have any questions or issues with the plugin, please feel free to open an issue in the repository.

Sure, here's an updated readme that includes a GPL license note:

# Advanced Custom Fields Custom Field Fallback

A shortcode plugin that extends Advanced Custom Fields and allows you to display a custom fallback text if field content is empty.

## Description

This plugin extends Advanced Custom Fields by allowing you to display custom fallback text when a field is empty using the `[acf_field_fallback]` shortcode. Additionally, you can use the `[acf_checkboxes_list]` shortcode to display ACF checkboxes fields in a list format.

## Installation

To install the plugin, simply download the latest release from the GitHub repository and upload it to your WordPress site using the standard plugin installation process. Once installed and activated, you can start using the new shortcodes in your posts, pages, or templates.

## License

This plugin is released under the GNU General Public License v3.0. You are free to modify and distribute the plugin as per your requirements.
