<?php
/**
 * Term methods.
 * Methods included:
 *   - insert
 *   - update
 *   - delete
 *   - get_terms
 *   - term_exists
 *   - set_object_terms/add_object_terms
 *   - get_object_terms
 *   - remove_object_terms
 */


/**
 * Insert term.
 *
 * @param string $term = new term name
 * @param string $taxonomy = taxonomy to which to add the term
 * @param array/string $args = optional arguments
 * @return array/wp_error
 *
 * @see https://developer.wordpress.org/reference/functions/wp_insert_term/
 */
wp_insert_term( 'term-name', 'taxonomy', array() );


/**
 * Update term.
 *
 * @param int $term_id = id of term
 * @param string $taxonomy = taxonomy of the term
 * @param array/string $args = arguments
 * @return array/wp_error
 *
 * @see https://developer.wordpress.org/reference/functions/wp_update_term/
 */
 wp_update_term(
     100,
     'taxonomy',
     array(
          'name' => 'new_name',
          'slug' => 'new_slug'
     )
 );


 /**
  * Delete term.
  *
  * @param int $term_id = id of term
  * @param string $taxonomy = taxonomy of the term
  * @param array/string $args = optional arguments
  * @return bool/int/wp_error
  *
  * @see https://developer.wordpress.org/reference/functions/wp_delete_term/
  */
wp_delete_term( 100, 'taxonomy' );


/**
 * Get terms.
 *
 * Retrieves the terms in taxonomy or taxonomies.
 *
 * @param array/string $args = list of arguments
 * @return wp_term/wp_error
 *
 * @see https://developer.wordpress.org/reference/functions/get_terms/
 * @see https://developer.wordpress.org/reference/classes/wp_term_query/__construct/
 */
$terms = get_terms( array(
    'taxonomy' => 'media-categories',
    'hide_empty' => false,
    'orderby' => id,
    'exclude' => array(1, 2, 3)
) );


/**
 * Term exists.
 *
 * Checks if term exists.
 *
 * @param int/string $term = id, slug or name of term
 * @param string $taxonomy = taxonomy name
 * @param int $parent = optional id of parent term
 * @return mixed (main: null / ['term_id', 'taxonomy_id'])
 *
 * @see https://developer.wordpress.org/reference/functions/term_exists/
 */
term_exists( 'term', 'taxonomy' );


/**
 * Set/add object terms.
 *
 * Create object and term/s relationship.
 *
 * @param int $object_id = object to relate to
 * @param string/int/array $terms = single or list of terms (slug, id)
 * @param string $taxonomy = context in which to relate the term to the object
 * @param bool $append = delete difference of terms
 * @return array/wp_error
 *
 * @see https://developer.wordpress.org/reference/functions/wp_set_object_terms/
 * @see https://developer.wordpress.org/reference/functions/wp_add_object_terms/
 */
wp_set_object_terms( 100, array(500, 600), 'taxonomy', true );  // replaces all existing terms
wp_add_object_terms( 100, array(500, 600), 'taxonomy' );  // only adds terms to existing


/**
 * Get object terms.
 *
 * Retrievers the terms associated with the object.
 *
 * @param int/int[] $object_ids = ids of the objects
 * @param string/string[] $taxonomies = taxonomy names to retrieve terms from
 * @param array/string $args = array of arguments
 * @return array/wp_error
 *
 * @see https://developer.wordpress.org/reference/functions/wp_get_object_terms/
 */
wp_get_object_terms( 100, 'taxonomy' );


/**
 * Remove object terms.
 *
 * Remove term/s associated with object.
 *
 * @param int $object_id = object to relate to
 * @param string/int/array $terms = single or list of terms (slug, id)
 * @param string $taxonomy = taxonomy name
 * @return bool/wp_error
 *
 * @see https://developer.wordpress.org/reference/functions/wp_remove_object_terms/
 */
wp_remove_object_terms( 100, array('term-1', 'term-2'), 'taxonomy' );
