<?php

add_action('cmb2_admin_init', 'cmb2_sample_metaboxes');


function cmb2_sample_metaboxes()
{

    $custom_post_types = get_post_types(array(
        'public' => true,  // Only retrieve public post types
        '_builtin' => false, // Exclude built-in post types like 'post' and 'page'
    ));

    $custom_post_type_labels = array(); // Initialize an empty array

// Loop through the custom post types
    foreach ($custom_post_types as $post_type) {
        $post_type_object = get_post_type_object($post_type);
        $custom_post_type_labels[$post_type] = $post_type_object->labels->name; // Add the label name to the array with the post type as the key
    }

// Retrieve the selected custom post type from the option
    $selected_post_type = get_option('concern_product_one_type');


// Output the array of custom post type labels
//    print_r($custom_post_type_labels);


    //======================================= Home Page Start ==============================================//

    //home banner sections start

    $home_banner_slider_box = new_cmb2_box(
        array(
            'id' => 'home_banner_slider',
            'title' => 'Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_home.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $home_banner_slider_box->add_field(
        array(
            'name' => 'Course Box Name',
            'id' => 'home_banner_course_name',
            'type' => 'textarea_small',
        )
    );
    $home_banner_slider_box->add_field(
        array(
            'name' => 'Course Box Image',
            'id' => 'home_banner_course_img',
            'type' => 'file',
        )
    );

    $home_banner_slider_box->add_field(
        array(
            'name' => 'Eligibility Box Name',
            'id' => 'home_banner_eligibility_name',
            'type' => 'textarea_small',
        )
    );
    $home_banner_slider_box->add_field(
        array(
            'name' => 'Eligibility Box Image',
            'id' => 'home_banner_eligibility_img',
            'type' => 'file',
        )
    );

    $home_banner_slider_box->add_field(
        array(
            'name' => 'Calculator Box Name',
            'id' => 'home_banner_calculator_name',
            'type' => 'textarea_small',
        )
    );
    $home_banner_slider_box->add_field(
        array(
            'name' => 'Calculator Box Image',
            'id' => 'home_banner_calculator_img',
            'type' => 'file',
        )
    );

    $home_banner_slider_box->add_field(
        array(
            'name' => 'Location',
            'id' => 'home_banner_location_name',
            'type' => 'textarea_small',
        )
    );
    $home_banner_slider_box->add_field(
        array(
            'name' => 'Calculator Box Image',
            'id' => 'home_banner_location_img',
            'type' => 'file',
        )
    );

    $home_banner_slider_box_group = $home_banner_slider_box->add_field(
        array(
            'id' => 'home_banner_slider_box_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Banner Slider {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Banner Slider', 'cmb2'),
                'remove_button' => __('Remove Banner Slider', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $home_banner_slider_box->add_group_field(
        $home_banner_slider_box_group,
        array(
            'name' => 'Title',
            'id' => 'home_banner_slider_box_title',
            'type' => 'textarea_small',
        )
    );

    $home_banner_slider_box->add_group_field(
        $home_banner_slider_box_group,
        array(
            'name' => 'Description',
            'id' => 'home_banner_slider_box_desc',
            'type' => 'textarea',
        )
    );

    $home_banner_slider_box->add_group_field(
        $home_banner_slider_box_group,
        array(
            'name' => 'Banner Image',
            'id' => 'home_banner_slider_box_img',
            'type' => 'file',
        )
    );


    //home banner section end


    //counters Start

    $home_counter_box = new_cmb2_box(
        array(
            'id' => 'home_counter',
            'title' => 'Counters',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_home.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $home_counter_box->add_field(
        array(
            'name' => 'Title',
            'id' => 'home_counter_title',
            'type' => 'textarea_small',
        )
    );

    $home_counter_box->add_field(
        array(
            'name' => 'Description Big',
            'id' => 'home_counter_desc',
            'type' => 'textarea',
        )
    );

    $home_counter_box->add_field(
        array(
            'name' => 'Description Small',
            'id' => 'home_counter_sm_desc',
            'type' => 'textarea',
        )
    );

    $home_counter_box->add_field(
        array(
            'name' => 'Image',
            'id' => 'home_counter_img',
            'type' => 'file',
        )
    );
    $home_counter_group = $home_counter_box->add_field(
        array(
            'id' => 'home_counter_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Counter {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Counter', 'cmb2'),
                'remove_button' => __('Remove Counter', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $home_counter_box->add_group_field(
        $home_counter_group,
        array(
            'name' => 'Number',
            'id' => 'home_counter_number',
            'type' => 'textarea_small',
        )
    );

    $home_counter_box->add_group_field(
        $home_counter_group,
        array(
            'name' => 'Title',
            'id' => 'home_counter_title',
            'type' => 'textarea_small',
        )
    );
    //Counters End


    //Countries Start
    $home_countries_box = new_cmb2_box(
        array(
            'id' => 'home_countries',
            'title' => 'Countries',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_home.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );


    $home_countries_box->add_field(
        array(
            'name' => 'Title',
            'id' => 'home_countries_title',
            'type' => 'textarea_small',
        )
    );


    $home_countries_group = $home_countries_box->add_field(
        array(
            'id' => 'home_countries_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Entry {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Entry', 'cmb2'),
                'remove_button' => __('Remove Entry', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $home_countries_box->add_group_field(
        $home_countries_group,
        array(
            'name' => 'Title',
            'id' => 'home_countries_group_title',
            'type' => 'textarea_small',
        )
    );

    $home_countries_box->add_group_field(
        $home_countries_group,
        array(
            'name' => 'Short Description',
            'id' => 'home_countries_group_desc',
            'type' => 'textarea',
        )
    );

    $home_countries_box->add_group_field(
        $home_countries_group,
        array(
            'name' => 'Image',
            'id' => 'home_countries_group_image',
            'type' => 'file',
        )
    );
    //Countries End


//    Assistance Start
    $home_assistance_box = new_cmb2_box(
        array(
            'id' => 'home_assistance',
            'title' => 'Assistance',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_home.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $home_assistance_box->add_field(
        array(
            'name' => 'Title',
            'id' => 'home_assistance_title',
            'type' => 'textarea_small',
        )
    );

    $home_assistance_box->add_field(
        array(
            'name' => 'Description',
            'id' => 'home_assistance_desc',
            'type' => 'textarea',
        )
    );

    $home_assistance_box->add_field(
        array(
            'name' => 'Image',
            'id' => 'home_assistance_img',
            'type' => 'file',
        )
    );


    //    Assistance End


//    Universities Start
    $home_universities_box = new_cmb2_box(
        array(
            'id' => 'home_universities',
            'title' => 'Universities',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_home.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $home_universities_box->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'home_universities_subtitle',
            'type' => 'textarea_small',
        )
    );

    $home_universities_group = $home_universities_box->add_field(
        array(
            'id' => 'home_universities_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Universities {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Universities', 'cmb2'),
                'remove_button' => __('Remove Universities', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $home_universities_box->add_group_field(
        $home_universities_group,
        array(
            'name' => 'Name',
            'id' => 'home_universities_name',
            'type' => 'textarea_small',
        )
    );

    $home_universities_box->add_group_field(
        $home_universities_group,
        array(
            'name' => 'Location',
            'id' => 'home_universities_location',
            'type' => 'textarea_small',
        )
    );

    $home_universities_box->add_group_field(
        $home_universities_group,
        array(
            'name' => 'Image',
            'id' => 'home_universities_image',
            'type' => 'file',
        )
    );

    $home_universities_box->add_group_field(
        $home_universities_group,
        array(
            'name' => 'Short Description',
            'id' => 'home_universities_desc',
            'type' => 'textarea_small',
        )
    );
    //    Universities End


//    Course Start
    $home_course_box = new_cmb2_box(
        array(
            'id' => 'home_course',
            'title' => 'Course',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_home.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $home_course_box->add_field(
        array(
            'name' => 'Big Text',
            'id' => 'home_course_big_text',
            'type' => 'textarea_small',
        )
    );
    $home_course_group = $home_course_box->add_field(
        array(
            'id' => 'home_course_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Course {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Course', 'cmb2'),
                'remove_button' => __('Remove Course', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $home_course_box->add_group_field(
        $home_course_group,
        array(
            'name' => 'Title',
            'id' => 'home_course_title',
            'type' => 'textarea_small',
        )
    );

    $home_course_box->add_group_field(
        $home_course_group,
        array(
            'name' => 'Description',
            'id' => 'home_course_desc',
            'type' => 'textarea',
        )
    );

    $home_course_box->add_group_field(
        $home_course_group,
        array(
            'name' => 'Image',
            'id' => 'home_course_img',
            'type' => 'file',
        )
    );
    //    Course End

//    Testimonial Start
    $home_testimonial_box = new_cmb2_box(
        array(
            'id' => 'home_testimonial',
            'title' => 'Testimonial',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_home.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $home_testimonial_box->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'home_testimonial_subtitle',
            'type' => 'textarea_small',
        )
    );

    $home_testimonial_group = $home_testimonial_box->add_field(
        array(
            'id' => 'home_testimonial_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Testimonial {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Testimonial', 'cmb2'),
                'remove_button' => __('Remove Testimonial', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $home_testimonial_box->add_group_field(
        $home_testimonial_group,
        array(
            'name' => 'Thumbnail',
            'id' => 'home_testimonial_thumb',
            'type' => 'file',
        )
    );

    $home_testimonial_box->add_group_field(
        $home_testimonial_group,
        array(
            'name' => 'Thumbnail URL',
            'id' => 'home_testimonial_url',
            'type' => 'text_url',
        )
    );

    $home_testimonial_box->add_group_field(
        $home_testimonial_group,
        array(
            'name' => 'Description',
            'id' => 'home_testimonial_desc',
            'type' => 'textarea',
        )
    );

    $home_testimonial_box->add_group_field(
        $home_testimonial_group,
        array(
            'name' => 'Author',
            'id' => 'home_testimonial_author',
            'type' => 'textarea_small',
        )
    );

    $home_testimonial_box->add_group_field(
        $home_testimonial_group,
        array(
            'name' => 'Address',
            'id' => 'home_testimonial_address',
            'type' => 'textarea_small',
        )
    );


//    Testimonial end


//    Partner Start
    $home_partner_box = new_cmb2_box(
        array(
            'id' => 'home_partner',
            'title' => 'Partner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_home.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );


    $home_partner_box->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'home_partner_subtitle',
            'type' => 'textarea_small',
        )
    );

    $home_partner_group = $home_partner_box->add_field(
        array(
            'id' => 'home_partner_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Partner {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Partner', 'cmb2'),
                'remove_button' => __('Remove Partner', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $home_partner_box->add_group_field(
        $home_partner_group,
        array(
            'name' => 'Image',
            'id' => 'home_partner_img',
            'type' => 'file',
        )
    );

    //    Partner End


    //======================================= Home Page End ==============================================//

    //======================================= Why Study Abroad Page Start ==============================================//

    //    why Study Abroad  Inner banner start
    $why_study_abroad_innerBanner_box = new_cmb2_box(
        array(
            'id' => 'why_study_inner_banner',
            'title' => 'Inner Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_why_study_abroad.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $why_study_abroad_innerBanner_box->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'why_study_inner_banner_subtitle',
            'type' => 'textarea_small',
        )
    );

    $why_study_abroad_innerBanner_box->add_field(
        array(
            'name' => 'Image',
            'id' => 'why_study_inner_banner_image',
            'type' => 'file',
        )
    );
    //    why Study Abroad  Inner banner end


    //    why Study Abroad  Content start

    $why_study_abroad_content_box = new_cmb2_box(
        array(
            'id' => 'why_study_content',
            'title' => 'Content',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_why_study_abroad.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $why_study_abroad_content_box->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'why_study_content_subtitle',
            'type' => 'textarea',
        )
    );


    //    Why study abroad feature start
    $why_study_abroad_feature_box = new_cmb2_box(
        array(
            'id' => 'why_study_abroad_feature_box',
            'title' => 'Feature',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_why_study_abroad.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $why_study_abroad_feature_box->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'why_study_abroad_feature_subtitle',
            'type' => 'textarea_small',
        )
    );

    $why_study_abroad_feature_box->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'why_study_abroad_feature_left_title',
            'type' => 'textarea_small',
        )
    );
    $why_study_abroad_feature_box->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'why_study_abroad_feature_right_title',
            'type' => 'textarea_small',
        )
    );
    $why_study_abroad_feature_box->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'why_study_abroad_feature_right_small_title',
            'type' => 'textarea_small',
        )
    );
    //    Why study abroad feature end


    //======================================= Why Study Abroad Page end ==============================================//

    //======================================= Doyen Guid to Study Abroad Page Start ==============================================//
    //    doyen Study Abroad  Inner banner start
    $doyen_guid_study_abroad = new_cmb2_box(
        array(
            'id' => 'doyen_guild_study_abroad_inner_banner',
            'title' => 'Inner Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_doyens-guide_to_study_abroad.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $doyen_guid_study_abroad->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'doyen_study_inner_banner_subtitle',
            'type' => 'textarea_small',
        )
    );
    $doyen_guid_study_abroad->add_field(
        array(
            'name' => 'Image',
            'id' => 'doyen_study_inner_banner_image',
            'type' => 'file',
        )
    );

    //    doyen Study Abroad  Inner banner end


    //    doyen Study Abroad  Content start
    $doyen_guid_study_abroad_content = new_cmb2_box(
        array(
            'id' => 'doyen_guild_study_abroad_content',
            'title' => 'Content',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_doyens-guide_to_study_abroad.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $doyen_guid_study_abroad_content->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'doyen_guild_study_abroad_content_subtitle',
            'type' => 'textarea_small',
        )
    );
    $doyen_guid_study_abroad_content->add_field(
        array(
            'name' => 'Title',
            'id' => 'doyen_guild_study_abroad_content_title',
            'type' => 'textarea_small',
        )
    );

    $doyen_guid_study_abroad_content_group = $doyen_guid_study_abroad_content->add_field(
        array(
            'id' => 'doyen_guid_study_abroad_content_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Doyen Study Abroad Card {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Doyen Study Abroad Card', 'cmb2'),
                'remove_button' => __('Remove Doyen Study Abroad Card', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $doyen_guid_study_abroad_content->add_group_field(
        $doyen_guid_study_abroad_content_group,
        array(
            'name' => 'Title',
            'id' => 'doyen_study_abroad_content_post_title',
            'type' => 'textarea_small',
        )
    );
    $doyen_guid_study_abroad_content->add_group_field(
        $doyen_guid_study_abroad_content_group,
        array(
            'name' => 'Description 1',
            'id' => 'doyen_study_abroad_content_post_desc_one',
            'type' => 'textarea',
        )
    );
    $doyen_guid_study_abroad_content->add_group_field(
        $doyen_guid_study_abroad_content_group,
        array(
            'name' => 'Description 2',
            'id' => 'doyen_study_abroad_content_post_desc_two',
            'type' => 'textarea',
        )
    );
    $doyen_guid_study_abroad_content->add_group_field(
        $doyen_guid_study_abroad_content_group,
        array(
            'name' => 'Link Text',
            'id' => 'doyen_study_abroad_content_post_link_text',
            'type' => 'textarea_small',
        )
    );

    $doyen_guid_study_abroad_content->add_group_field(
        $doyen_guid_study_abroad_content_group,
        array(
            'name' => 'Link URL',
            'id' => 'doyen_study_abroad_content_post_link_url',
            'type' => 'text_url',
        )
    );

    $doyen_guid_study_abroad_content->add_group_field(
        $doyen_guid_study_abroad_content_group,
        array(
            'name' => 'Button Text',
            'id' => 'doyen_study_abroad_content_button_text',
            'type' => 'textarea_small',
        )
    );
    $doyen_guid_study_abroad_content->add_group_field(
        $doyen_guid_study_abroad_content_group,
        array(
            'name' => 'Button URL',
            'id' => 'doyen_study_abroad_content_button_url',
            'type' => 'text_url',
        )
    );


//    end

    //    Doyen Guid study abroad feature start
    $doyen_guid_study_abroad_feature = new_cmb2_box(
        array(
            'id' => 'doyen_guid_study_abroad_feature',
            'title' => 'Feature',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_doyens-guide_to_study_abroad.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $doyen_guid_study_abroad_feature->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'doyen_guid_study_abroad_feature_subtitle',
            'type' => 'textarea_small',
        )
    );

    $doyen_guid_study_abroad_feature->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'doyen_guid_study_abroad_feature_left_title',
            'type' => 'textarea_small',
        )
    );
    $doyen_guid_study_abroad_feature->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'doyen_guid_study_abroad_feature_right_title',
            'type' => 'textarea_small',
        )
    );
    $doyen_guid_study_abroad_feature->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'doyen_guid_study_abroad_feature_right_small_title',
            'type' => 'textarea_small',
        )
    );
    //    Why study abroad feature end


    //======================================= Doyen Guid to Study Abroad Page End ==============================================//


    //======================================= Study Abroad Benefits Page Start ==============================================//
    $study_abroad_benefit_inner_banner = new_cmb2_box(
        array(
            'id' => 'study_abroad_benefit_inner_banner',
            'title' => 'Inner Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_study_abroad_benefits.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $study_abroad_benefit_inner_banner->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'study_abroad_benefit_inner_banner_title',
            'type' => 'textarea_small',
        )
    );
    $study_abroad_benefit_inner_banner->add_field(
        array(
            'name' => 'Image',
            'id' => 'study_abroad_benefit_inner_banner_image',
            'type' => 'file',
        )
    );

//    study abroad benefit content start
    $study_abroad_benefit_content = new_cmb2_box(
        array(
            'id' => 'study_abroad_benefit_content',
            'title' => 'Content',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_study_abroad_benefits.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $study_abroad_benefit_content->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'study_abroad_benefit_content_subtitle',
            'type' => 'textarea_small',
        )
    );
    $study_abroad_benefit_content->add_field(
        array(
            'name' => 'Title',
            'id' => 'study_abroad_benefit_content_title',
            'type' => 'textarea_small',
        )
    );
    $study_abroad_benefit_content_group = $study_abroad_benefit_content->add_field(
        array(
            'id' => 'study_abroad_benefit_content_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Study Abroad Benefits {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Study Abroad Benefits', 'cmb2'),
                'remove_button' => __('Remove Study Abroad Benefits', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $study_abroad_benefit_content->add_group_field(
        $study_abroad_benefit_content_group,
        array(
            'name' => 'Title',
            'id' => 'study_abroad_benefit_content_title',
            'type' => 'textarea_small',
        )
    );
    $study_abroad_benefit_content->add_group_field(
        $study_abroad_benefit_content_group,
        array(
            'name' => 'Description',
            'id' => 'study_abroad_benefit_content_desc',
            'type' => 'textarea',
        )
    );
    $study_abroad_benefit_content->add_group_field(
        $study_abroad_benefit_content_group,
        array(
            'name' => 'Button Text',
            'id' => 'study_abroad_benefit_content_button_text',
            'type' => 'textarea_small',
        )
    );
    $study_abroad_benefit_content->add_group_field(
        $study_abroad_benefit_content_group,
        array(
            'name' => 'Button URL',
            'id' => 'study_abroad_benefit_content_button_url',
            'type' => 'text_url',
        )
    );
    $study_abroad_benefit_content->add_group_field(
        $study_abroad_benefit_content_group,
        array(
            'name' => 'Video Thumb',
            'id' => 'study_abroad_benefit_content_video_thumb',
            'type' => 'file',
        )
    );
    $study_abroad_benefit_content->add_group_field(
        $study_abroad_benefit_content_group,
        array(
            'name' => 'Video URL',
            'id' => 'study_abroad_benefit_content_video_url',
            'type' => 'text_url',
        )
    );
//    study abroad benefit content end

    //    study abroad Benefit feature start
    $study_abroad_benefit_feature_box = new_cmb2_box(
        array(
            'id' => 'study_abroad_benefit_feature_box',
            'title' => 'Feature',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_study_abroad_benefits.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $study_abroad_benefit_feature_box->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'study_abroad_benefit_feature_subtitle',
            'type' => 'textarea_small',
        )
    );

    $study_abroad_benefit_feature_box->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'study_abroad_benefit_feature_left_title',
            'type' => 'textarea_small',
        )
    );
    $study_abroad_benefit_feature_box->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'study_abroad_benefit_feature_right_title',
            'type' => 'textarea_small',
        )
    );
    $study_abroad_benefit_feature_box->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'study_abroad_benefit_feature_right_small_title',
            'type' => 'textarea_small',
        )
    );
    //    Why study abroad feature end
    //======================================= Study Abroad Benefits Page End ==============================================//


    //======================================= Are You Ready to Apply Page Start ==============================================//

//    inner banner start
    $are_ready_to_apply_inner_banner = new_cmb2_box(
        array(
            'id' => 'are_ready_to_apply_inner_banner',
            'title' => 'Inner Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_are_you_ready_to_apply.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $are_ready_to_apply_inner_banner->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'are_ready_to_apply_inner_banner_title',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_inner_banner->add_field(
        array(
            'name' => 'Image',
            'id' => 'are_ready_to_apply_inner_banner_image',
            'type' => 'file',
        )
    );
    //    inner banner end

//    content start
    $are_ready_to_apply_content = new_cmb2_box(
        array(
            'id' => 'are_ready_to_apply_content',
            'title' => 'Content',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_are_you_ready_to_apply.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $are_ready_to_apply_content->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'are_ready_to_apply_content_subtitle',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_content->add_field(
        array(
            'name' => 'Title',
            'id' => 'are_ready_to_apply_content_title',
            'type' => 'textarea_small',
        )
    );

    $are_ready_to_apply_content_group = $are_ready_to_apply_content->add_field(
        array(
            'id' => 'are_ready_to_apply_content_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Ready to Apply Card {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Ready to Apply Card', 'cmb2'),
                'remove_button' => __('Remove Ready to Apply Card', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );
    $are_ready_to_apply_content->add_group_field(
        $are_ready_to_apply_content_group,
        array(
            'name' => 'Title',
            'id' => 'are_ready_to_apply_content_title',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_content->add_group_field(
        $are_ready_to_apply_content_group,
        array(
            'name' => 'Description',
            'id' => 'are_ready_to_apply_content_desc',
            'type' => 'textarea',
        )
    );
//    content end

//    address start
    $are_ready_to_apply_address = new_cmb2_box(
        array(
            'id' => 'are_ready_to_apply_address',
            'title' => 'Address',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_are_you_ready_to_apply.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $are_ready_to_apply_address_group = $are_ready_to_apply_address->add_field(
        array(
            'id' => 'are_ready_to_apply_address_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Address Card {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Address Card', 'cmb2'),
                'remove_button' => __('Remove Address Card', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );
    $are_ready_to_apply_address->add_group_field(
        $are_ready_to_apply_address_group,
        array(
            'name' => 'Name',
            'id' => 'are_ready_to_apply_address_name',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_address->add_group_field(
        $are_ready_to_apply_address_group,
        array(
            'name' => 'Address',
            'id' => 'are_ready_to_apply_address_address',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_address->add_group_field(
        $are_ready_to_apply_address_group,
        array(
            'name' => 'Phone',
            'id' => 'are_ready_to_apply_address_phone',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_address->add_group_field(
        $are_ready_to_apply_address_group,
        array(
            'name' => 'IELTS',
            'id' => 'are_ready_to_apply_address_ielts',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_address->add_group_field(
        $are_ready_to_apply_address_group,
        array(
            'name' => 'Email',
            'id' => 'are_ready_to_apply_address_email',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_address->add_group_field(
        $are_ready_to_apply_address_group,
        array(
            'name' => 'Timings',
            'id' => 'are_ready_to_apply_address_timing',
            'type' => 'textarea_small',
        )
    );
//    address end

//    feature start
    $are_ready_to_apply_feature = new_cmb2_box(
        array(
            'id' => 'are_ready_to_apply_feature',
            'title' => 'Feature',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_are_you_ready_to_apply.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $are_ready_to_apply_feature->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'are_ready_to_apply_feature_subtitle',
            'type' => 'textarea_small',
        )
    );

    $are_ready_to_apply_feature->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'are_ready_to_apply_feature_left_title',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_feature->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'are_ready_to_apply_feature_right_title',
            'type' => 'textarea_small',
        )
    );
    $are_ready_to_apply_feature->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'are_ready_to_apply_feature_right_small_title',
            'type' => 'textarea_small',
        )
    );
    //    feature end
    //======================================= Are You Ready to Apply Page End ==============================================//


    //======================================= Find University Start ==============================================//

//    Inner Banner
    $findUniversity_inner_banner = new_cmb2_box(
        array(
            'id' => 'findUniversity_inner_banner',
            'title' => 'Inner Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_find_university.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $findUniversity_inner_banner->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'findUniversity_inner_banner_subtitle',
            'type' => 'textarea_small',
        )
    );

    $findUniversity_inner_banner->add_field(
        array(
            'name' => 'Image',
            'id' => 'findUniversity_inner_banner_image',
            'type' => 'file',
        )
    );

//    Content Titles

    $findUniversity_content_title = new_cmb2_box(
        array(
            'id' => 'findUniversity_content_title',
            'title' => 'Content Title',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_find_university.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $findUniversity_content_title->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'findUniversity_content_subtitle',
            'type' => 'textarea_small',
        )
    );
    $findUniversity_content_title->add_field(
        array(
            'name' => 'Title',
            'id' => 'findUniversity_content_title',
            'type' => 'textarea_small',
        )
    );


//    Feature
    $findUniversity_feature = new_cmb2_box(
        array(
            'id' => 'findUniversity_feature',
            'title' => 'Feature',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_find_university.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $findUniversity_feature->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'findUniversity_feature_subtitle',
            'type' => 'textarea_small',
        )
    );

    $findUniversity_feature->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'findUniversity_feature_left_title',
            'type' => 'textarea_small',
        )
    );
    $findUniversity_feature->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'findUniversity_feature_right_title',
            'type' => 'textarea_small',
        )
    );
    $findUniversity_feature->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'findUniversity_feature_right_small_title',
            'type' => 'textarea_small',
        )
    );

////    custom post field find university card start
//    $findUniversity_content = new_cmb2_box(
//        array(
//            'id' => 'findUniversity_content',
//            'title' => 'Card Details',
//            'context' => 'normal',
//            'object_types' => array('finduniversity'),
//            // Post type
//            'priority' => 'high',
//            'show_names' => true,
//            // Show field names on the left
//            'closed' => true,
//        )
//    );
//
//
//    $findUniversity_content_group = $findUniversity_content->add_field(
//        array(
//            'id' => 'findUniversity_content_group',
//            'type' => 'group',
//            //'repeatable'  => false, // use false if you want non-repeatable group
//            'options' => array(
//                'group_title' => __('University Card {#}', 'cmb2'),
//                // since version 1.1.4, {#} gets replaced by row number
//                'add_button' => __('Add University Card', 'cmb2'),
//                'remove_button' => __('Remove University Card', 'cmb2'),
//                'sortable' => true,
//                // 'closed'         => true, // true to have the groups closed by default
//                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
//            ),
//        )
//    );
//
//    $findUniversity_content->add_group_field(
//        $findUniversity_content_group,
//        array(
//            'name' => 'Image',
//            'id' => 'findUniversity_content_image',
//            'type' => 'file',
//        )
//    );
//
//    $findUniversity_content->add_group_field(
//        $findUniversity_content_group,
//        array(
//            'name' => 'Title',
//            'id' => 'findUniversity_content_title',
//            'type' => 'textarea_small',
//        )
//    );
//
//    $findUniversity_content->add_group_field(
//        $findUniversity_content_group,
//        array(
//            'name' => 'Short Description',
//            'id' => 'findUniversity_content_desc',
//            'type' => 'textarea_small',
//        )
//    );
//
//    $findUniversity_content->add_group_field(
//        $findUniversity_content_group,
//        array(
//            'name' => 'Details Link',
//            'id' => 'findUniversity_content_details_link',
//            'type' => 'text_url',
//        )
//    );
//
////    popular course
//    $findUniversity_popular_course_content = new_cmb2_box(
//        array(
//            'id' => 'findUniversity_popular_course_content',
//            'title' => 'Popular Course',
//            'context' => 'normal',
//            'object_types' => array('finduniversity'),
//            // Post type
//            'priority' => 'high',
//            'show_names' => true,
//            // Show field names on the left
//            'closed' => true,
//        )
//    );
//
//    $findUniversity_popular_course_content->add_field(
//        array(
//            'name' => 'Subtitle',
//            'id' => 'findUniversity_popular_course_content_subtitle',
//            'type' => 'textarea_small',
//        )
//    );
//
//
//    $findUniversity_popular_course_content_group = $findUniversity_popular_course_content->add_field(
//        array(
//            'id' => 'findUniversity_popular_course_content_group',
//            'type' => 'group',
//            //'repeatable'  => false, // use false if you want non-repeatable group
//            'options' => array(
//                'group_title' => __('Popular Course {#}', 'cmb2'),
//                // since version 1.1.4, {#} gets replaced by row number
//                'add_button' => __('Add Popular Course', 'cmb2'),
//                'remove_button' => __('Remove Popular Course', 'cmb2'),
//                'sortable' => true,
//                // 'closed'         => true, // true to have the groups closed by default
//                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
//            ),
//        )
//    );
//
//    $findUniversity_popular_course_content->add_group_field(
//        $findUniversity_popular_course_content_group,
//        array(
//            'name' => 'Title',
//            'id' => 'findUniversity_popular_course_content_title',
//            'type' => 'textarea_small',
//        )
//    );
//
//    $findUniversity_popular_course_content->add_group_field(
//        $findUniversity_popular_course_content_group,
//        array(
//            'name' => 'Short Description',
//            'id' => 'findUniversity_popular_course_content_desc',
//            'type' => 'textarea_small',
//        )
//    );
//
//    $findUniversity_popular_course_content->add_group_field(
//        $findUniversity_popular_course_content_group,
//        array(
//            'name' => 'Image',
//            'id' => 'findUniversity_popular_course_content_image',
//            'type' => 'file',
//        )
//    );
//    $findUniversity_popular_course_content->add_group_field(
//        $findUniversity_popular_course_content_group,
//        array(
//            'name' => 'Course Details Link',
//            'id' => 'findUniversity_popular_course_content_details',
//            'type' => 'text_url',
//        )
//    );

//    custom post field find university end
    //======================================= Find University End ==============================================//



    //======================================= Testimonial Start ==============================================//
    // Inner Banner Start
    $testimonial = new_cmb2_box(
        array(
            'id' => 'testimonial_inner_banner',
            'title' => 'Inner Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_testimonial.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $testimonial->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'testimonial_inner_banner_subtitle',
            'type' => 'textarea_small',
        )
    );
    $testimonial->add_field(
        array(
            'name' => 'Image',
            'id' => 'testimonial_inner_banner_image',
            'type' => 'file',
        )
    );
    // Inner Banner End

    // Testimonial Content Start
    $testimonial_content = new_cmb2_box(
        array(
            'id' => 'testimonial_content',
            'title' => 'Testimonial',
            'context' => 'normal',
            'object_types' => array('testimonialdetail'),
            // Post type
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

//    $testimonial_content->add_group_field(
//        $testimonial_content_group,
//        array(
//            'name' => 'Video Thumb',
//            'id' => 'testimonial_content_thumb',
//            'type' => 'file',
//        )
//    );

    $testimonial_content->add_field(
        array(
            'name' => 'Video URL',
            'id' => 'testimonial_content_url',
            'type' => 'text_url',
        )
    );

//    $testimonial_content->add_group_field(
//        $testimonial_content_group,
//        array(
//            'name' => 'Description',
//            'id' => 'testimonial_content_desc',
//            'type' => 'textarea',
//        )
//    );

//    $testimonial_content->add_group_field(
//        $testimonial_content_group,
//        array(
//            'name' => 'Name',
//            'id' => 'testimonial_content_name',
//            'type' => 'textarea_small',
//        )
//    );

    $testimonial_content->add_field(
        array(
            'name' => 'Info',
            'id' => 'testimonial_content_info',
            'type' => 'textarea_small',
        )
    );


    $testimonial_feature = new_cmb2_box(
        array(
            'id' => 'testimonial_feature',
            'title' => 'Feature',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_testimonial.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $testimonial_feature->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'testimonial_feature_subtitle',
            'type' => 'textarea_small',
        )
    );

    $testimonial_feature->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'testimonial_feature_left_title',
            'type' => 'textarea_small',
        )
    );
    $testimonial_feature->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'testimonial_feature_right_title',
            'type' => 'textarea_small',
        )
    );
    $testimonial_feature->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'testimonial_feature_right_small_title',
            'type' => 'textarea_small',
        )
    );
    // Testimonial Feature End
    //======================================= Testimonial End ==============================================//


    //======================================= Health Cover Start ==============================================//
    // Inner Banner Start
    $health_cover = new_cmb2_box(
        array(
            'id' => 'health_cover_inner_banner',
            'title' => 'Inner Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_health_cover.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $health_cover->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'health_cover_inner_banner_subtitle',
            'type' => 'textarea_small',
        )
    );
    $health_cover->add_field(
        array(
            'name' => 'Image',
            'id' => 'health_cover_inner_banner_image',
            'type' => 'file',
        )
    );
    // Inner Banner End

    // Health Cover Content Start
    $health_cover_content = new_cmb2_box(
        array(
            'id' => 'health_cover_content',
            'title' => 'Content',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_health_cover.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $health_cover_content->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'health_cover_content_subtitle',
            'type' => 'textarea_small',
        )
    );
    $health_cover_content_group = $health_cover_content->add_field(
        array(
            'id' => 'health_cover_content_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Health Cover {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Health Cover', 'cmb2'),
                'remove_button' => __('Remove Health Cover', 'cmb2'),
                'sortable' => true,
                'closed' => false, // Open the group by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $health_cover_content->add_group_field(
        $health_cover_content_group,
        array(
            'name' => 'Title',
            'id' => 'health_cover_content_title',
            'type' => 'textarea_small',
        )
    );
    $health_cover_content->add_group_field(
        $health_cover_content_group,
        array(
            'name' => 'Description',
            'id' => 'health_cover_content_desc',
            'type' => 'textarea',
        )
    );
    // Health Cover Content End

    // Health Cover Feature Start

    $health_cover_feature = new_cmb2_box(
        array(
            'id' => 'health_cover_feature',
            'title' => 'Feature',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_health_cover.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $health_cover_feature->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'health_cover_feature_subtitle',
            'type' => 'textarea_small',
        )
    );

    $health_cover_feature->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'health_cover_feature_left_title',
            'type' => 'textarea_small',
        )
    );
    $health_cover_feature->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'health_cover_feature_right_title',
            'type' => 'textarea_small',
        )
    );
    $health_cover_feature->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'health_cover_feature_right_small_title',
            'type' => 'textarea_small',
        )
    );
    // Health Cover Feature End
    //======================================= Health Cover Start ==============================================//

    //======================================= Contact US Start ==============================================//
    // Inner Banner Start
    $contact_us = new_cmb2_box(
        array(
            'id' => 'contact_us',
            'title' => 'Inner Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_contact_us.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $contact_us->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'contact_us_inner_banner_subtitle',
            'type' => 'textarea_small',
        )
    );
    $contact_us->add_field(
        array(
            'name' => 'Image',
            'id' => 'contact_us_inner_banner_image',
            'type' => 'file',
        )
    );
    // Inner Banner End

    // Office Address Start
    $contact_us_office_address = new_cmb2_box(
        array(
            'id' => 'contact_us_office_address',
            'title' => 'Office Address',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_contact_us.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $contact_us_office_address->add_field(
        array(
            'name' => 'Title',
            'id' => 'contact_us_office_address',
            'type' => 'textarea_small',
        )
    );


    // Office Address End

    // Map Start
    $contact_us_office_map = new_cmb2_box(
        array(
            'id' => 'contact_us_office_map',
            'title' => 'Office Map',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_contact_us.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $contact_us_office_map->add_field(
        array(
            'name' => 'Title',
            'id' => 'contact_us_office_map_title',
            'type' => 'textarea_small',
        )
    );
    $contact_us_office_map->add_field(
        array(
            'name' => 'Map Image',
            'id' => 'contact_us_office_map_image',
            'type' => 'file',
        )
    );
    $contact_us_office_map->add_field(
        array(
            'name' => 'Map URL',
            'id' => 'contact_us_office_map_url',
            'type' => 'text_url',
        )
    );
    // Map End

    // Health Cover Feature Start
    $contact_us_feature = new_cmb2_box(
        array(
            'id' => 'contact_us_feature',
            'title' => 'Feature',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_contact_us.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $contact_us_feature->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'contact_us_feature_subtitle',
            'type' => 'textarea_small',
        )
    );

    $contact_us_feature->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'contact_us_feature_left_title',
            'type' => 'textarea_small',
        )
    );
    $contact_us_feature->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'contact_us_feature_right_title',
            'type' => 'textarea_small',
        )
    );
    $contact_us_feature->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'contact_us_feature_right_small_title',
            'type' => 'textarea_small',
        )
    );
    // Health Cover Feature End
    //======================================= Contact US End ==============================================//

    //======================================= General Page Start ==============================================//
    $general_inner_banner = new_cmb2_box(
        array(
            'id' => 'general_inner_banner',
            'title' => 'Inner Banner',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $general_inner_banner->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'general_inner_banner_subtitle',
            'type' => 'textarea_small',
        )
    );


    $general_inner_banner->add_field(
        array(
            'name' => 'Image',
            'id' => 'general_inner_banner_img',
            'type' => 'file',
        )
    );

//    Content Start
    $general_content = new_cmb2_box(
        array(
            'id' => 'general_content',
            'title' => 'Content',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $general_content->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'general_content_subtitle',
            'type' => 'textarea_small',
        )
    );
    $general_content->add_field(
        array(
            'name' => 'Title',
            'id' => 'general_content_title',
            'type' => 'textarea_small',
        )
    );
    $general_content_group = $general_content->add_field(
        array(
            'id' => 'general_content_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('General Content {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another General Content', 'cmb2'),
                'remove_button' => __('Remove General Content', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $general_content->add_group_field(
        $general_content_group,
        array(
            'name' => 'Title',
            'id' => 'general_content_group_title',
            'type' => 'textarea_small',
        )
    );

    $general_content->add_group_field(
        $general_content_group,
        array(
            'name' => 'Description 1',
            'id' => 'general_content_group_desc_one',
            'type' => 'wysiwyg',
            'options' => array(
                'teeny' => true,
            ),
        )
    );
    $general_content->add_group_field(
        $general_content_group,
        array(
            'name' => 'Description 2',
            'id' => 'general_content_group_desc_two',
            'type' => 'wysiwyg',
            'options' => array(
                'teeny' => true,
            ),
        )
    );

    $general_content->add_group_field(
        $general_content_group,
        array(
            'name' => 'Button Text',
            'id' => 'general_content_group_button_text',
            'type' => 'text',
        )
    );

    $general_content->add_group_field(
        $general_content_group,
        array(
            'name' => 'Button URL',
            'id' => 'general_content_group_button_url',
            'type' => 'text_url',
        )
    );


    $general_content->add_group_field(
        $general_content_group,
        array(
            'name' => 'Link Text',
            'id' => 'general_content_group_desc_link_text',
            'type' => 'textarea_small',
        )
    );

    $general_content->add_group_field(
        $general_content_group,
        array(
            'name' => 'Link URL',
            'id' => 'general_content_group_desc_link_url',
            'type' => 'text_url',
        )
    );
    $general_content->add_group_field(
        $general_content_group,
        array(
            'name' => 'Video Thumb',
            'id' => 'general_content_group_thumb',
            'type' => 'file',
        )
    );
    $general_content->add_group_field(
        $general_content_group,
        array(
            'name' => 'Video URL',
            'id' => 'general_content_group_thumb_url',
            'type' => 'text_url',
        )
    );

//    Content End

    //    Address Card Start
    $general_card_box = new_cmb2_box(
        array(
            'id' => 'general_card_box',
            'title' => 'Address Card',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $general_card_box_group = $general_card_box->add_field(
        array(
            'id' => 'general_card_box_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Address Card {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Address Card', 'cmb2'),
                'remove_button' => __('Remove Address Card', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );
    $general_card_box->add_group_field(
        $general_card_box_group,
        array(
            'name' => 'Name',
            'id' => 'general_card_box_group_name',
            'type' => 'textarea_small',
        )
    );

    $general_card_box->add_group_field(
        $general_card_box_group,
        array(
            'name' => 'Address',
            'id' => 'general_card_box_group_address',
            'type' => 'textarea_small',
        )
    );

    $general_card_box->add_group_field(
        $general_card_box_group,
        array(
            'name' => 'Phone',
            'id' => 'general_card_box_group_phone',
            'type' => 'textarea_small',
        )
    );
    $general_card_box->add_group_field(
        $general_card_box_group,
        array(
            'name' => 'IELTS',
            'id' => 'general_card_box_group_itelts',
            'type' => 'textarea_small',
        )
    );
    $general_card_box->add_group_field(
        $general_card_box_group,
        array(
            'name' => 'Email',
            'id' => 'general_card_box_group_email',
            'type' => 'textarea_small',
        )
    );
    $general_card_box->add_group_field(
        $general_card_box_group,
        array(
            'name' => 'Timing',
            'id' => 'general_card_box_group_timing',
            'type' => 'textarea_small',
        )
    );
//    Address Card End


//    General Popular Course Card Start
    $general_popular_courser_box = new_cmb2_box(
        array(
            'id' => 'general_popular_courser_box',
            'title' => 'Popular Course Card',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $general_popular_courser_box_group = $general_popular_courser_box->add_field(
        array(
            'id' => 'general_popular_courser_box_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Popular Course {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Popular Course', 'cmb2'),
                'remove_button' => __('Remove Popular Course', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );
    $general_popular_courser_box->add_group_field(
        $general_popular_courser_box_group,
        array(
            'name' => 'Image',
            'id' => 'general_popular_courser_box_group_img',
            'type' => 'file',
        )
    );
    $general_popular_courser_box->add_group_field(
        $general_popular_courser_box_group,
        array(
            'name' => 'Title',
            'id' => 'general_popular_courser_box_group_title',
            'type' => 'textarea_small',
        )
    );
    $general_popular_courser_box->add_group_field(
        $general_popular_courser_box_group,
        array(
            'name' => 'Short Description',
            'id' => 'general_popular_courser_box_group_desc',
            'type' => 'textarea',
        )
    );
    $general_popular_courser_box->add_group_field(
        $general_popular_courser_box_group,
        array(
            'name' => 'URL',
            'id' => 'general_popular_courser_box_group_url',
            'type' => 'text_url',
        )
    );
//    General Popular Course Card End

//    General Accordion Start
    $general_accordion_box = new_cmb2_box(
        array(
            'id' => 'general_accordion_box',
            'title' => 'Accordion',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $general_accordion_box_group = $general_accordion_box->add_field(
        array(
            'id' => 'general_accordion_box_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Accordion {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Accordion', 'cmb2'),
                'remove_button' => __('Remove Accordion', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );
    $general_accordion_box->add_group_field(
        $general_accordion_box_group,
        array(
            'name' => 'Title',
            'id' => 'general_accordion_box_group_title',
            'type' => 'textarea_small',
        )
    );
    $general_accordion_box->add_group_field(
        $general_accordion_box_group,
        array(
            'name' => 'Description',
            'id' => 'general_accordion_box_group_desc',
            'type' => 'wysiwyg',
            'options' => array(
                'teeny' => true,
            ),
        )
    );
//    General Accordion End

    //    Table with Title Start
    $general_table_box = new_cmb2_box(
        array(
            'id' => 'general_table_box',
            'title' => 'Table',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );


    $general_table_box->add_field(
        array(
            'name' => 'Table Code',
            'id' => 'general__table_box_code',
            'type' => 'textarea',
        )
    );
    //    Table with Title End

//    Video Gallery Start
//    $general_video_popup = new_cmb2_box(
//        array(
//            'id' => 'general_video_gallery_box',
//            'title' => 'Video Popup Gallery',
//            'context' => 'normal',
//            'object_types' => array('page'),
//            // Post type
//            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
//            'priority' => 'high',
//            'show_names' => true,
//            // Show field names on the left
//            'closed' => true,
//        )
//    );
//    $general_video_popup_group = $general_video_popup->add_field(
//        array(
//            'id' => 'general_video_popup_group',
//            'type' => 'group',
//            //'repeatable'  => false, // use false if you want non-repeatable group
//            'options' => array(
//                'group_title' => __('Gellery {#}', 'cmb2'),
//                // since version 1.1.4, {#} gets replaced by row number
//                'add_button' => __('Add Another Gellery', 'cmb2'),
//                'remove_button' => __('Remove Gellery', 'cmb2'),
//                'sortable' => true,
//                // 'closed'         => true, // true to have the groups closed by default
//                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
//            ),
//        )
//    );
//    $general_video_popup->add_group_field(
//        $general_video_popup_group,
//        array(
//            'name' => 'Author',
//            'id' => 'general_video_popup_author',
//            'type' => 'textarea_small',
//        )
//    );
//    $general_video_popup->add_group_field(
//        $general_video_popup_group,
//        array(
//            'name' => 'Info',
//            'id' => 'general_video_popup_info',
//            'type' => 'textarea_small',
//        )
//    );
//    $general_video_popup->add_group_field(
//        $general_video_popup_group,
//        array(
//            'name' => 'Description',
//            'id' => 'general_video_popup_desc',
//            'type' => 'wysiwyg',
//            'options' => array(
//                'teeny' => true,
//            ),
//        )
//    );
//
//    $general_video_popup->add_group_field(
//        $general_video_popup_group,
//        array(
//            'name' => 'Thumb Image',
//            'id' => 'general_accordion_box_group_thumb',
//            'type' => 'file',
//        )
//    );
//    $general_video_popup->add_group_field(
//        $general_video_popup_group,
//        array(
//            'name' => 'Thumb URL',
//            'id' => 'general_accordion_box_group_URL',
//            'type' => 'text_url',
//        )
//    );
//    Video Gallery End

//    Accordion Start
    $general_accordion = new_cmb2_box(
        array(
            'id' => 'general_accordion_box',
            'title' => 'Accordion',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $general_accordion_group = $general_accordion->add_field(
        array(
            'id' => 'general_accordion_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Accordion {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Accordion', 'cmb2'),
                'remove_button' => __('Remove Accordion', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );
    $general_accordion->add_group_field(
        $general_accordion_group,
        array(
            'name' => 'Title',
            'id' => 'general_accordion_title',
            'type' => 'textarea_small',
        )
    );
    $general_accordion->add_group_field(
        $general_accordion_group,
        array(
            'name' => 'Description',
            'id' => 'general_accordion_desc',
            'type' => 'wysiwyg',
            'options' => array(
                'teeny' => true,
            ),
        )
    );
//    Accordion End


////    Popular University Ranking Start
//    $university_ranking = new_cmb2_box(
//        array(
//            'id' => 'university_ranking',
//            'title' => 'University Ranking Card',
//            'context' => 'normal',
//            'object_types' => array('page'),
//            // Post type
//            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
//            'priority' => 'high',
//            'show_names' => true,
//            // Show field names on the left
//            'closed' => true,
//        )
//    );
//    $university_ranking->add_field(array(
//        'name' => 'Post Type',
//        'id' => 'concern_product_one_type',
//        'type' => 'select',
//        'options' => $custom_post_type_labels,
//        'default' => $selected_post_type, // Set the default value to the selected custom post type
//    ));
////    Popular University Ranking End


//    CTA start
    $general_cta = new_cmb2_box(
        array(
            'id' => 'general_cta',
            'title' => 'CTA',
            'context' => 'normal',
            'object_types' => array('page'),
            // Post type
            'show_on' => array('key' => 'page-template', 'value' => 'template/template_general.php'),
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $general_cta->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'general_cta_subtitle',
            'type' => 'textarea_small',
        )
    );

    $general_cta->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'general_cta_left_title',
            'type' => 'textarea_small',
        )
    );
    $general_cta->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'general_cta_right_title',
            'type' => 'textarea_small',
        )
    );
    $general_cta->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'general_cta_small_title',
            'type' => 'textarea_small',
        )
    );
//    CTA End


//    SCHOLARSHIP START ///////////////////////////////////////////////////////////////////////

    $scholarship_details = new_cmb2_box(
        array(
            'id' => 'scholarship_details',
            'title' => 'Scholarship Details Content',
            'context' => 'normal',
            'object_types' => array('scholarships', 'ieltsscore', 'studyinusa', 'studyinuk', 'studyinaustralia', 'studyincanada', 'healthcover', 'universityranking', 'finduniversity', 'whystudyabroad'),
            // Post type
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $scholarship_details->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'scholarship_details_subtitle',
            'type' => 'textarea_small',
        )
    );

    $scholarship_details->add_field(
        array(
            'name' => 'Title',
            'id' => 'scholarship_details_title',
            'type' => 'textarea_small',
        )
    );
    $scholarship_details_group = $scholarship_details->add_field(
        array(
            'id' => 'scholarship_details_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Scholarships Content {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Scholarships Content', 'cmb2'),
                'remove_button' => __('Remove Scholarships Content', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );

    $scholarship_details->add_group_field(
        $scholarship_details_group,
        array(
            'name' => 'Title',
            'id' => 'scholarship_details_group_title',
            'type' => 'textarea_small',
        )
    );

    $scholarship_details->add_group_field(
        $scholarship_details_group,
        array(
            'name' => 'Description 1',
            'id' => 'scholarship_details_group_desc_one',
            'type' => 'textarea',
        )
    );
    $scholarship_details->add_group_field(
        $scholarship_details_group,
        array(
            'name' => 'Description 2',
            'id' => 'scholarship_details_group_desc_two',
            'type' => 'textarea',
        )
    );

    $scholarship_details->add_group_field(
        $scholarship_details_group,
        array(
            'name' => 'Button Text',
            'id' => 'scholarship_details_group_button_text',
            'type' => 'text',
        )
    );

    $scholarship_details->add_group_field(
        $scholarship_details_group,
        array(
            'name' => 'Button URL',
            'id' => 'scholarship_details_group_button_url',
            'type' => 'text_url',
        )
    );


    $scholarship_details->add_group_field(
        $scholarship_details_group,
        array(
            'name' => 'Link Text',
            'id' => 'scholarship_details_group_link_text',
            'type' => 'textarea_small',
        )
    );

    $scholarship_details->add_group_field(
        $scholarship_details_group,
        array(
            'name' => 'Link URL',
            'id' => 'scholarship_details_group_link_url',
            'type' => 'text_url',
        )
    );
    $scholarship_details->add_group_field(
        $scholarship_details_group,
        array(
            'name' => 'Video Thumb',
            'id' => 'scholarship_details_group_video_thumb',
            'type' => 'file',
        )
    );
    $scholarship_details->add_group_field(
        $scholarship_details_group,
        array(
            'name' => 'Video URL',
            'id' => 'scholarship_details_group_video_url',
            'type' => 'text_url',
        )
    );

//    table
    $scholarship_table = new_cmb2_box(
        array(
            'id' => 'scholarship_table',
            'title' => 'Table',
            'context' => 'normal',
            'object_types' => array('scholarships', 'ieltsscore', 'studyinusa', 'studyinuk', 'studyinaustralia', 'studyincanada', 'healthcover', 'universityranking', 'finduniversity', 'whystudyabroad'),
            // Post type
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $scholarship_table->add_field(
        array(
            'name' => 'Table Code',
            'id' => 'scholarship_table_box_code',
            'type' => 'textarea',
        )
    );
    //    Table with Title End

    //    Scholarship Accordion Start
    $scholarship_accordion_box = new_cmb2_box(
        array(
            'id' => 'scholarship_accordion_box',
            'title' => 'Accordion',
            'context' => 'normal',
            'object_types' => array('scholarships', 'ieltsscore', 'studyinusa', 'studyinuk', 'studyinaustralia', 'studyincanada', 'healthcover', 'universityranking', 'finduniversity', 'whystudyabroad'),
            // Post type
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $scholarship_accordion_box_group = $scholarship_accordion_box->add_field(
        array(
            'id' => 'scholarship_accordion_box_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Accordion {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Accordion', 'cmb2'),
                'remove_button' => __('Remove Accordion', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );
    $scholarship_accordion_box->add_group_field(
        $scholarship_accordion_box_group,
        array(
            'name' => 'Title',
            'id' => 'scholarship_accordion_box_group_title',
            'type' => 'textarea_small',
        )
    );
    $scholarship_accordion_box->add_group_field(
        $scholarship_accordion_box_group,
        array(
            'name' => 'Description',
            'id' => 'scholarship_accordion_box_group_desc',
            'type' => 'textarea',
        )
    );
//    scholarship Accordion End


    //    Video Gallery Start
//    $scholarship_video_popup = new_cmb2_box(
//        array(
//            'id' => 'scholarship_video_gallery_box',
//            'title' => 'Video Popup Gallery',
//            'context' => 'normal',
//            'object_types' => array('scholarships', 'ieltsscore', 'studyinaustralia),
//            // Post type
//            'priority' => 'high',
//            'show_names' => true,
//            // Show field names on the left
//            'closed' => true,
//        )
//    );
//    $scholarship_video_popup_group = $scholarship_video_popup->add_field(
//        array(
//            'id' => 'scholarship_video_popup_group',
//            'type' => 'group',
//            //'repeatable'  => false, // use false if you want non-repeatable group
//            'options' => array(
//                'group_title' => __('Gellery {#}', 'cmb2'),
//                // since version 1.1.4, {#} gets replaced by row number
//                'add_button' => __('Add Another Gellery', 'cmb2'),
//                'remove_button' => __('Remove Gellery', 'cmb2'),
//                'sortable' => true,
//                // 'closed'         => true, // true to have the groups closed by default
//                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
//            ),
//        )
//    );
//    $scholarship_video_popup->add_group_field(
//        $scholarship_video_popup_group,
//        array(
//            'name' => 'Author',
//            'id' => 'scholarship_video_popup_author',
//            'type' => 'textarea_small',
//        )
//    );
//    $scholarship_video_popup->add_group_field(
//        $scholarship_video_popup_group,
//        array(
//            'name' => 'Info',
//            'id' => 'scholarship_video_popup_info',
//            'type' => 'textarea_small',
//        )
//    );
//    $scholarship_video_popup->add_group_field(
//        $scholarship_video_popup_group,
//        array(
//            'name' => 'Description',
//            'id' => 'scholarship_video_popup_desc',
//            'type' => 'wysiwyg',
//            'options' => array(
//                'teeny' => true,
//            ),
//        )
//    );
//
//    $scholarship_video_popup->add_group_field(
//        $scholarship_video_popup_group,
//        array(
//            'name' => 'Thumb Image',
//            'id' => 'scholarship_accordion_box_group_thumb',
//            'type' => 'file',
//        )
//    );
//    $scholarship_video_popup->add_group_field(
//        $scholarship_video_popup_group,
//        array(
//            'name' => 'Thumb URL',
//            'id' => 'scholarship_accordion_box_group_URL',
//            'type' => 'text_url',
//        )
//    );
//    Video Gallery End


//    //    Address Card Start
//    $scholarship_card_box = new_cmb2_box(
//        array(
//            'id' => 'scholarship_card_box',
//            'title' => 'Address Card',
//            'context' => 'normal',
//            'object_types' => array('scholarships', 'ieltsscore'),
//            // Post type
//            'priority' => 'high',
//            'show_names' => true,
//            // Show field names on the left
//            'closed' => true,
//        )
//    );
//
//    $scholarship_card_box_group = $scholarship_card_box->add_field(
//        array(
//            'id' => 'scholarship_card_box_group',
//            'type' => 'group',
//            //'repeatable'  => false, // use false if you want non-repeatable group
//            'options' => array(
//                'group_title' => __('Address Card {#}', 'cmb2'),
//                // since version 1.1.4, {#} gets replaced by row number
//                'add_button' => __('Add Another Address Card', 'cmb2'),
//                'remove_button' => __('Remove Address Card', 'cmb2'),
//                'sortable' => true,
//                // 'closed'         => true, // true to have the groups closed by default
//                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
//            ),
//        )
//    );
//    $scholarship_card_box->add_group_field(
//        $scholarship_card_box_group,
//        array(
//            'name' => 'Name',
//            'id' => 'scholarship_card_box_group_name',
//            'type' => 'textarea_small',
//        )
//    );
//
//    $scholarship_card_box->add_group_field(
//        $scholarship_card_box_group,
//        array(
//            'name' => 'Address',
//            'id' => 'scholarship_card_box_group_address',
//            'type' => 'textarea_small',
//        )
//    );
//
//    $scholarship_card_box->add_group_field(
//        $scholarship_card_box_group,
//        array(
//            'name' => 'Phone',
//            'id' => 'scholarship_card_box_group_phone',
//            'type' => 'textarea_small',
//        )
//    );
//    $scholarship_card_box->add_group_field(
//        $scholarship_card_box_group,
//        array(
//            'name' => 'IELTS',
//            'id' => 'scholarship_card_box_group_phone',
//            'type' => 'textarea_small',
//        )
//    );
//    $scholarship_card_box->add_group_field(
//        $scholarship_card_box_group,
//        array(
//            'name' => 'Email',
//            'id' => 'scholarship_card_box_group_email',
//            'type' => 'textarea_small',
//        )
//    );
//    $scholarship_card_box->add_group_field(
//        $scholarship_card_box_group,
//        array(
//            'name' => 'Timing',
//            'id' => 'scholarship_card_box_group_timing',
//            'type' => 'textarea_small',
//        )
//    );
//    Address Card End

//    scholarship Popular Course Card Start
    $scholarship_popular_courser_box = new_cmb2_box(
        array(
            'id' => 'scholarship_popular_courser_box',
            'title' => 'Popular Course Card',
            'context' => 'normal',
            'object_types' => array('scholarships', 'ieltsscore', 'studyinusa', 'studyinuk', 'studyinaustralia', 'studyincanada', 'healthcover', 'universityranking', 'finduniversity', 'whystudyabroad'),
            // Post type
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );
    $scholarship_popular_courser_box_group = $scholarship_popular_courser_box->add_field(
        array(
            'id' => 'scholarship_popular_courser_box_group',
            'type' => 'group',
            //'repeatable'  => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('Popular Course {#}', 'cmb2'),
                // since version 1.1.4, {#} gets replaced by row number
                'add_button' => __('Add Another Popular Course', 'cmb2'),
                'remove_button' => __('Remove Popular Course', 'cmb2'),
                'sortable' => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        )
    );
    $scholarship_popular_courser_box->add_group_field(
        $scholarship_popular_courser_box_group,
        array(
            'name' => 'Image',
            'id' => 'scholarship_popular_courser_box_group_img',
            'type' => 'file',
        )
    );
    $scholarship_popular_courser_box->add_group_field(
        $scholarship_popular_courser_box_group,
        array(
            'name' => 'Title',
            'id' => 'scholarship_popular_courser_box_group_title',
            'type' => 'textarea_small',
        )
    );
    $scholarship_popular_courser_box->add_group_field(
        $scholarship_popular_courser_box_group,
        array(
            'name' => 'Short Description',
            'id' => 'scholarship_popular_courser_box_group_desc',
            'type' => 'textarea',
        )
    );
    $scholarship_popular_courser_box->add_group_field(
        $scholarship_popular_courser_box_group,
        array(
            'name' => 'URL',
            'id' => 'scholarship_popular_courser_box_group_url',
            'type' => 'text_url',
        )
    );
//    scholarship Popular Course Card End

    //    CTA start
    $scholarship_cta = new_cmb2_box(
        array(
            'id' => 'scholarship_cta',
            'title' => 'CTA',
            'context' => 'normal',
            'object_types' => array('scholarships', 'ieltsscore', 'studyinusa', 'studyinuk', 'studyinaustralia', 'studyincanada', 'healthcover', 'universityranking', 'finduniversity', 'whystudyabroad'),
            // Post type
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'closed' => true,
        )
    );

    $scholarship_cta->add_field(
        array(
            'name' => 'Subtitle',
            'id' => 'scholarship_cta_subtitle',
            'type' => 'textarea_small',
        )
    );

    $scholarship_cta->add_field(
        array(
            'name' => 'Left Title',
            'id' => 'scholarship_cta_left_title',
            'type' => 'textarea_small',
        )
    );
    $scholarship_cta->add_field(
        array(
            'name' => 'Right Box Title',
            'id' => 'scholarship_cta_right_title',
            'type' => 'textarea_small',
        )
    );
    $scholarship_cta->add_field(
        array(
            'name' => 'Right Box Small Title',
            'id' => 'scholarship_cta_small_title',
            'type' => 'textarea_small',
        )
    );
//    CTA End

//    SCHOLARSHIP END

}

?>