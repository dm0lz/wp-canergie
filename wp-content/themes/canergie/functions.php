
<?php

function wpbootstrap_scripts_with_jquery(){
   // Register the script like this for a theme:
   wp_register_script( 'custom-script', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ) );
   // jquery For either a plugin or a theme, you can then enqueue the script:
   wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function my_theme_setup(){
  load_theme_textdomain('canergie', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'my_theme_setup');

?>
