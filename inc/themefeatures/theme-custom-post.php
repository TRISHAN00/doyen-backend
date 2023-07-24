<?php


//custom post
function theme_custom_post()
{
    register_post_type(
        'whyStudyAbroad',

        $args = array(
            'labels' => array(
                'name' => __('Why Study Abroad'),
                'singular_name' => __('why_study_abroad'),
                'add_new' => 'Add New Item',
                'edit_item' => 'Edit Item',
                'search_items' => 'Search Item',

            ),

            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_rest' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );

//    find university
    register_post_type(
        'findUniversity',
        $args = array(
            'labels' => array(
                'name' => __('Find University'),
                'singular_name' => __('find_university'),
                'add_new' => 'Add New University',
                'edit_item' => 'Edit University',
                'search_items' => 'Search University ',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );


    // Testimonial Details
    register_post_type(
        'testimonialDetail',
        $args = array(
            'labels' => array(
                'name' => __('Testimonial Details'),
                'singular_name' => __('testimonial_details'),
                'add_new' => 'Add New Testimonial Details',
                'edit_item' => 'Edit Testimonial Details',
                'search_items' => 'Search Testimonial Details',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );

    // Scholarships Start
    register_post_type(
        'scholarships',
        $args = array(
            'labels' => array(
                'name' => __('Scholarships Details'),
                'singular_name' => __('scholarships_details'),
                'add_new' => 'Add New Scholarships Details',
                'edit_item' => 'Edit Scholarships Details',
                'search_items' => 'Search Scholarships Details',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );

    register_post_type(
        'ieltsScore',
        $args = array(
            'labels' => array(
                'name' => __('IELTS Score Details'),
                'singular_name' => __('ielts_details'),
                'add_new' => 'Add New IELTS Details',
                'edit_item' => 'Edit IELTS Details',
                'search_items' => 'Search IELTS Details',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );

    register_post_type(
        'studyInUsa',
        $args = array(
            'labels' => array(
                'name' => __('Study In USA Details'),
                'singular_name' => __('studyInUsa_details'),
                'add_new' => 'Add New Study In USA Details',
                'edit_item' => 'Edit Study In USA Details',
                'search_items' => 'Search Study In USA Details',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );

    register_post_type(
        'studyInUk',
        $args = array(
            'labels' => array(
                'name' => __('Study In UK Details'),
                'singular_name' => __('studyInUk_details'),
                'add_new' => 'Add New Study In UK Details',
                'edit_item' => 'Edit Study In UK Details',
                'search_items' => 'Search Study In UK Details',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );

    register_post_type(
        'studyInAustralia',
        $args = array(
            'labels' => array(
                'name' => __('Study In Australia Details'),
                'singular_name' => __('studyInAustralia_details'),
                'add_new' => 'Add New Study In Australia Details',
                'edit_item' => 'Edit Study In Australia Details',
                'search_items' => 'Search Study In Australia Details',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );

    register_post_type(
        'studyInCanada',
        $args = array(
            'labels' => array(
                'name' => __('Study In Canada Details'),
                'singular_name' => __('studyInCanada_details'),
                'add_new' => 'Add New Study In Canada Details',
                'edit_item' => 'Edit Study In Canada Details',
                'search_items' => 'Search Study In Canada Details',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );

    register_post_type(
        'universityRanking',
        $args = array(
            'labels' => array(
                'name' => __('University Ranking Details'),
                'singular_name' => __('universityRanking_details'),
                'add_new' => 'Add New University Ranking Details',
                'edit_item' => 'Edit University Ranking Details',
                'search_items' => 'Search Study In Canada Details',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );

    register_post_type(
        'healthCover',
        $args = array(
            'labels' => array(
                'name' => __('Health Cover Details'),
                'singular_name' => __('healthCover_details'),
                'add_new' => 'Add New Health Cover Details',
                'edit_item' => 'Edit Health Cover Details',
                'search_items' => 'Search Health Cover Details',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )
    );
}

add_action('init', 'theme_custom_post');

//custom taxonomy
//function theme_category_taxonomy()
//{
//    $labels = array(
//        'name' => _x('Category', 'taxonomy general name', 'textdomain'),
//        'singular_name' => _x('Category', 'taxonomy singular name', 'textdomain'),
//        'search_items' => __('Search Category', 'textdomain'),
//        'all_items' => __('All Category', 'textdomain'),
//        'parent_item' => __('Parent Category', 'textdomain'),
//        'parent_item_colon' => __('Parent Category:', 'textdomain'),
//        'edit_item' => __('Edit Category', 'textdomain'),
//        'update_item' => __('Update Category', 'textdomain'),
//        'add_new_item' => __('Add New Category', 'textdomain'),
//        'new_item_name' => __('New Category', 'textdomain'),
//        'menu_name' => __('Category', 'textdomain'),
//    );
//
//    $args = array(
//        'hierarchical' => true,
//        'labels' => $labels,
//        'show_ui' => true,
//        'show_admin_column' => true,
//        'query_var' => true,
//        'rewrite' => array('slug' => 'slidertaxonomy'),
//    );
//
//    register_taxonomy('slidertaxonomy', array('homeSlider'), $args);
//
//   // register_taxonomy('homeslidercateogry', array('homeSlider'), $args);
//}


function theme_category_taxonomy()
{
    $labels = array(
        'name' => _x('Country', 'taxonomy general name', 'textdomain'),
        'singular_name' => _x('Country', 'taxonomy singular name', 'textdomain'),
        'search_items' => __('Search Country', 'textdomain'),
        'all_items' => __('All Country', 'textdomain'),
        'parent_item' => __('Parent Country', 'textdomain'),
        'parent_item_colon' => __('Parent Country:', 'textdomain'),
        'edit_item' => __('Edit Country', 'textdomain'),
        'update_item' => __('Update Country', 'textdomain'),
        'add_new_item' => __('Add New Country', 'textdomain'),
        'new_item_name' => __('New Country', 'textdomain'),
        'menu_name' => __('Country', 'textdomain'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'find-university'),
    );

    register_taxonomy('country', array('finduniversity'), $args);

    // register_taxonomy('homeslidercateogry', array('homeSlider'), $args);

    $labels = array(
        'name' => _x('City', 'taxonomy general name', 'textdomain'),
        'singular_name' => _x('City', 'taxonomy singular name', 'textdomain'),
        'search_items' => __('Search City', 'textdomain'),
        'all_items' => __('All City', 'textdomain'),
        'parent_item' => __('Parent City', 'textdomain'),
        'parent_item_colon' => __('Parent City:', 'textdomain'),
        'edit_item' => __('Edit City', 'textdomain'),
        'update_item' => __('Update City', 'textdomain'),
        'add_new_item' => __('Add New City', 'textdomain'),
        'new_item_name' => __('New City', 'textdomain'),
        'menu_name' => __('City', 'textdomain'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'city'),
    );

    register_taxonomy('city', array('finduniversity'), $args);
}


// hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'theme_category_taxonomy', 2);






