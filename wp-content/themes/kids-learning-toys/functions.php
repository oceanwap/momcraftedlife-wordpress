<?php
/**
 * Kids Learning Toys functions and definitions
 *
 * @package Kids Learning Toys
 */

if ( ! function_exists( 'kids_learning_toys_setup' ) ) :
function kids_learning_toys_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'kids-learning-toys', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

    add_theme_support('woocommerce');

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );
}
endif; // kids_learning_toys_setup
add_action( 'after_setup_theme', 'kids_learning_toys_setup' );

function kids_learning_toys_scripts() {
	wp_enqueue_style( 'kids-learning-toys-basic-style', get_stylesheet_uri() );

	$kids_learning_toys_enable_animations = get_option( 'kids_learning_toys_enable_animations', true );

    if ( $kids_learning_toys_enable_animations ) {
        //animation
	wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
    }

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );

	// script.js
	wp_enqueue_script('kids-learning-toys-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'kids_learning_toys_scripts' );

// Get start function

function kids_learning_toys_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('kids-learning-toys-admin-js', get_theme_file_uri('/inc/dashboard/admin.js'), array('jquery'), true);
    wp_localize_script(
        'kids-learning-toys-admin-js',
        'kids_learning_toys',
        array(
            'admin_ajax'    =>  admin_url('admin-ajax.php'),
            'wpnonce'           =>  wp_create_nonce('kids_learning_toys_dismissed_notice_nonce')
        )
    );
    wp_enqueue_script('kids-learning-toys-admin-js');

    wp_localize_script( 'kids-learning-toys-admin-js', 'kids_learning_toys_scripts_localize',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action('admin_enqueue_scripts', 'kids_learning_toys_enqueue_admin_script');

//dismiss function 
add_action( 'wp_ajax_kids_learning_toys_dismissed_notice_handler', 'kids_learning_toys_ajax_notice_dismiss_fuction' );

function kids_learning_toys_ajax_notice_dismiss_fuction() {
    if (!wp_verify_nonce($_POST['wpnonce'], 'kids_learning_toys_dismissed_notice_nonce')) {
        exit;
    }
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

//get start box
function kids_learning_toys_custom_admin_notice() {
    // Check if the notice is dismissed
    if ( ! get_option('dismissed-get_started_notice', FALSE ) )  {
        // Check if not on the theme documentation page
        $kids_learning_toys_current_screen = get_current_screen();
        if ($kids_learning_toys_current_screen && $kids_learning_toys_current_screen->id !== 'appearance_page_kids-learning-toys-guide-page') {
            $kids_learning_toys_theme = wp_get_theme();
            ?>
            <div class="notice notice-info is-dismissible" data-notice="get_started_notice">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php _e('Kids Learning Toys', 'kids-learning-toys'); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'kids-learning-toys'); ?></p>
                    </div>
                    <div class="notice-buttons-box">
                        <a class="button-primary livedemo" href="<?php echo esc_url( KIDS_LEARNING_TOYS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'kids-learning-toys'); ?></a>
                        <a class="button-primary buynow" href="<?php echo esc_url( KIDS_LEARNING_TOYS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'kids-learning-toys'); ?></a>
                        <a class="button-primary theme-install" href="themes.php?page=kids-learning-toys-guide-page"><?php _e('Begin Installation', 'kids-learning-toys'); ?></a> 
                    </div>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'kids_learning_toys_custom_admin_notice');

//after switch theme
add_action('after_switch_theme', 'kids_learning_toys_after_switch_theme');
function kids_learning_toys_after_switch_theme () {
    update_option('dismissed-get_started_notice', FALSE );
}

//get-start-function-end//

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

require get_template_directory() .'/inc/TGM/tgm.php';

require get_template_directory() . '/custom-setting.php';

require get_parent_theme_file_path( '/inc/customizer/customizer.php' );