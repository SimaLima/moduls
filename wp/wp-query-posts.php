<?php
/**
 * Basic WP_Query loop.
 *
 * @see https://developer.wordpress.org/reference/classes/wp_query/
 */

$posts = new WP_Query( array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 3
));

if ( $posts->have_posts() ) :
    while( $posts->have_posts() ) : $posts->the_post();
    ?>

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

        <?php
        if ( has_post_thumbnail() && ! post_password_required() ) :
            the_post_thumbnail( 'thumbnail-size' );
        endif;
        ?>

        <?php $category = get_the_category(); ?>
        <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>"><?php esc_html_e( $category[0]->name ) ?></a>;

        <?php
    endwhile;
    wp_reset_postdata();
endif;
