<?php 

function kids_learning_toys_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'kids-learning-toys-theme-settings', // Menu slug
        'kids_learning_toys_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'kids_learning_toys_add_admin_menu' );

function kids_learning_toys_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'kids-learning-toys' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'kids_learning_toys_settings_group' );
            do_settings_sections( 'kids-learning-toys-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function kids_learning_toys_register_settings() {
    register_setting( 'kids_learning_toys_settings_group', 'kids_learning_toys_enable_animations' );

    add_settings_section(
        'kids_learning_toys_settings_section',
        __( 'Animation Settings', 'kids-learning-toys' ),
        null,
        'kids-learning-toys-theme-settings'
    );

    add_settings_field(
        'kids_learning_toys_enable_animations',
        __( 'Enable Animations', 'kids-learning-toys' ),
        'kids_learning_toys_enable_animations_callback',
        'kids-learning-toys-theme-settings',
        'kids_learning_toys_settings_section'
    );
}
add_action( 'admin_init', 'kids_learning_toys_register_settings' );

function kids_learning_toys_enable_animations_callback() {
    $checked = get_option( 'kids_learning_toys_enable_animations', true );
    ?>
    <input type="checkbox" name="kids_learning_toys_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

