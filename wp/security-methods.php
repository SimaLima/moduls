<?php
/**
 * Sanitization: securing input.
 *
 * @see https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/
 */
sanitize_email();
sanitize_file_name();
sanitize_html_class();
sanitize_key();
sanitize_meta();
sanitize_mime_type();
sanitize_option();
sanitize_sql_orderby();
sanitize_text_field();
sanitize_title();
sanitize_title_for_query();
sanitize_title_with_dashes();
sanitize_user();
esc_url_raw();
wp_filter_post_kses();
wp_filter_nohtml_kses();


/**
 * Data validation.
 *
 * @see https://developer.wordpress.org/themes/theme-security/data-validation/
 */
isset();
empty();
strpos();
is_email();
term_exists();
username_exists();
validate_file();
// ... many more


/**
 * Escaping: securing output.
 *
 * @see https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/
 */
esc_html();
esc_url();
esc_js();
esc_attr();
esc_textarea();
// localization
esc_html__();
esc_html_e();
esc_html_x();
esc_attr__();
esc_attr_e();
esc_attr_x();


/**
 * Database escaping.
 *
 * @see 'wpdb-methods file'
 * @see https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/
 */
$wpdb->get_row($sql);
$wpdb->get_var($sql);
$wpdb->get_results($sql);
$wpdb->get_col($sql);
$wpdb->query($sql);
$wpdb->update($sql);
$wpdb->insert($sql);
$wpdb->prepare();
