<?php
/**
 * Conditional tags.
 *
 * @see: https://developer.wordpress.org/themes/basics/conditional-tags/
 */

// blog, main page
is_home();

// front page
is_front_page();

// admin panel
is_admin();

// single post (true: post, attachment, cpt, false: if on page)
is_single();

// single post, page or attachment (true: is_single, is_page, is_attachment)
is_singular();

// sticky (true: stick this post to the front page)
is_sticky();

// post type
get_post_type();
post_type_exists();
is_post_type_hierarchical( $post_type );
is_post_type_archive();

// post_type = page
is_page();

// is page template
is_page_template();

// any archive page (category, tag, author, date)
is_archive();

// category page
is_category();

// tag page
is_tag();
has_tag();

// taxonomy page
is_tax();
has_term();
taxonomy_exists();

// author page
is_author();
// multi author site
is_multi_author();

// date page
is_date();
is_year();
is_month();
is_day();
is_time();
is_new_day();

// search page
is_search();

// 404 page
is_404();

// privacy policy page
is_privacy_policy();

// attachment
is_attachment();
