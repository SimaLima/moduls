<?php
/**
 * Create slug from title.
 *
 * @param string $title = title value
 * @return string = title transformed to slug
 */
function createSlug($title = ''){
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
    return $slug;
}

echo create_slug('some random text for testing');  // 'some-random-text-for-testing'
