<?php
/**
 * Options methods.
 * Methods included:
 *   - add
 *   - get
 *   - update
 *   - delete
 */


/**
 * Add option
 *
 * @param string $option = name of the option
 * @param mixed $value = value of the option
 * @return bool
 *
 * @see https://developer.wordpress.org/reference/functions/add_option/
 */
add_option( '_some_option', 'value' );


/**
 * Get option
 *
 * @param string $option = name of the option
 * @return mixed
 *
 * @see https://developer.wordpress.org/reference/functions/get_option/
 */
get_option( '_some_option', 'default_value' );


/**
 * Update option
 *
 * @param string $option = name of the option
 * @param mixed $value = value of the option
 * @return bool
 *
 * @see https://developer.wordpress.org/reference/functions/update_option/
 */
update_option( '_some_option', 'updated_value' );


/**
 * Delete option
 *
 * @param string $option = name of the option
 * @return bool
 *
 * @see https://developer.wordpress.org/reference/functions/delete_option/
 */
delete_option( '_some_option' );
