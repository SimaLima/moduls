<?php
/**
 * Widget API: New_Widget class.
 *
 * Displays...
 *
 * @see https://developer.wordpress.org/themes/functionality/widgets/
 * @version 1.0.0
 */

if ( ! class_exists( 'New_Widget' ) ) :
class New_Widget extends WP_Widget {
    /**
     * Sets up a new widget instance.
     */
    function __construct() {
        parent::__construct(
            'base-id',
            __( 'Widget name' ),
            array(
                'classname'                   => 'widget_classname',
                'description'                 => __( 'Widget description.' ),
                'customize_selective_refresh' => true,
            ),
        );
        $this->alt_option_name = 'widget_classname';
    }


    /**
     * Creating widget front-end.
     *
     * @param array $args     = widget arguments
     * @param array $instance = saved values from database
     */
    public function widget( $args, $instance ) {
        if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }

        // title
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : 'Default title';
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        // display widget and content
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        echo __( 'Hello, World!', 'text_domain' );
        echo $args['after_widget'];
    }


    /**
     * Widget Backend: outputs the settings form for widget.
     *
     * @param array $instance = current settings
     */
    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : 'Default title';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php
    }


    /**
     * Updating widget - replacing old instances with new.
     *
     * @param array $new_instance = new settings set by user
     * @param array $old_instance = previously saved settings
     * @return array = updated values to be saved
     */
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

        return $instance;
    }
}
endif;

// Register the widget.
function custom_widget() {
    register_widget( 'Widget name' );
}
add_action( 'widgets_init', 'custom_widget' );
