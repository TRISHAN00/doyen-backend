<?php
/**
 * boyen_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package doyen_theme
 */


//update theme requirements
//custom here
@ini_set('upload_max_filesize', '128M');
@ini_set('post_max_size', '128M');
@ini_set('memory_limit', '256M');
@ini_set('max_execution_time', '300');
@ini_set('max_input_time', '300');
@ini_set('max_input_vars', 5000);




// Theme Version
require_once get_template_directory() . '/inc/version.php';



// Theme Features
require_once get_template_directory() . '/inc/themefeatures/all-features.php';




// Theme Siderbar , Widgets
require_once get_template_directory() . '/inc/themefeatures/widgets-list.php';




// Theme Scripts and Jquery
require_once get_template_directory() . '/inc/themefeatures/theme-scripts.php';




//show required plugin install message
require_once get_template_directory() . '/inc/requires-plugin/example.php';




//show required plugin install message
require_once get_template_directory() . '/inc/themefeatures/others-features.php';



//codestar framework registrer
require_once get_theme_file_path() . '/inc/framework/codestar-framework-master/codestar-framework.php';




// themeOption from codestare framework
require_once get_template_directory() . '/inc/themefeatures/theme-option.php';




//for custom elementor widget or addons
require_once get_template_directory() . '/inc/elementorAddons/index.php';






//for custom post and custom taxonomy
require_once get_template_directory() . '/inc/themefeatures/theme-custom-post.php';








// for not showing admin bar with admin login view
add_filter('show_admin_bar', '__return_false');


// for not showing admin bar with admin login view
add_filter('show_admin_bar', '__return_false');


// cbm2 init with theme
require_once get_template_directory() . '/inc/cmb2/init.php';


//cmb2 field file int here
require_once get_template_directory() . '/inc/themefeatures/custom_meta_field.php';


//cmb2 field file int here
require_once get_template_directory() . '/inc/themefeatures/rest_api.php';


//this code for change the logo in dashboard wordpress
function wpb_custom_logo()
{
    echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/img/logo.png) !important;
background-position: 0 0;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}

//hook into the administrative header output

add_action('rest_api_init', function () {
    header("Access-Control-Allow-Origin: *");
});

function add_custom_headers()
{

    add_filter('rest_pre_serve_request', function ($value) {
        header('Access-Control-Allow-Headers: Authorization, X-WP-Nonce,Content-Type, X-Requested-With');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        header('Access-Control-Allow-Credentials: true');

        return $value;
    });
}
add_action('rest_api_init', 'add_custom_headers', 15);




