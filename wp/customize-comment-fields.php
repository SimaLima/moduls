<?php
/**
 * Remove field from comment form.
 *
 * @param string[] $fields = default comment fields
 *
 * @see https://developer.wordpress.org/reference/hooks/comment_form_default_fields/
 */
function remove_comment_field( $fields ) {
    $fields['url'] = '';
    return $fields;
}
add_filter( 'comment_form_default_fields', 'remove_comment_field' );


/**
 * Customize comment fields.
 *
 * Change fields order in comment form (name, email, texarea, cookies).
 * Set placeholders in inputs and texarea.
 *
 * @param array $fields = the comment fields
 *
 * @see https://developer.wordpress.org/reference/hooks/comment_form_fields/
 */
function customize_comment_fields( $fields ) {

    // SET PLACEHOLDERS
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="Name *"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input',
        '<input placeholder="Email *"',
        $fields['email']
    );
    $fields['comment'] = str_replace(
        '<textarea',
        '<textarea placeholder="Your comment *"',
        $fields['comment']
    );
    $fields['cookies'] = str_replace(
        '>Save my name, email, and website in this browser for the next time I comment.</',
        '>Save my name and email in this browser for the next time I comment.</',
        $fields['cookies']
    );

    // CUSTOMIZE FIELD ORDER
    $comment_field = $fields['comment'];
    $cookie_field = $fields['cookies'];
    unset($fields['comment']);
    unset($fields['cookies']);

    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookie_field;

    return $fields;

}
add_filter( 'comment_form_fields', 'customize_comment_fields' );
