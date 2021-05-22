<?php
/**
 * Get page template name in admin.
 *
 * Using global $post and post meta find page template name.
 *
 * @return string/bool = template_name/false
 */
function getPageTemplateName() {
    global $post;
    if ( ! isset( $post ) ) return false;

    $page_template = get_post_meta( $post->ID, '_wp_page_template', true );
    if ( empty( $page_template ) ) return false;

    return $page_template;
}
