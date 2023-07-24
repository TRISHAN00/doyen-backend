<?php

add_action('rest_api_init', function () {

    register_rest_route(
        'page',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_PAGE_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'page',
        'home',
        array(
            'method' => 'GET',
            'callback' => 'GET_PAGE_BY_SLUG_HOME',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );

    /// Success

    register_rest_route(
        'getSuccess',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_SUCCESS',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'success-stories',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_SUCCESS_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );

//


    /// Study Abroad

    register_rest_route(
        'getStudy',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_STUDY',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'study',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_STUDY_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );


//    find university
    register_rest_route(
        'getUniversity',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_FIND_UNIVERSITY',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'university',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_FIND_UNIVERSITY_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );

    //    Testimonial Start
    register_rest_route(
        'getTestimonial',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_TESTIMONIAL',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'testimonial',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_TESTIMONIAL_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //    Testimonial Start


    //  Scholarships Start
    register_rest_route(
        'getScholarship',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_SCHOLARSHIP',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'scholarship',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_SCHOLARSHIP_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //  Scholarships End

    //  IETS score Start
    register_rest_route(
        'getIelts',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_IELTS',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'ielts',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_IELTS_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //  IETS score End

    //  Study In USA start
    register_rest_route(
        'getStudyInUsa',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_STUDY_IN_USA',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'studyInUsa',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_STUDY_IN_USA_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //  Study In USA end

    //  Study In UK start
    register_rest_route(
        'getStudyInUk',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_STUDY_IN_UK',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'studyInUk',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_STUDY_IN_UK_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //  Study In UK end


    //  Study In UK start
    register_rest_route(
        'getStudyInUk',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_STUDY_IN_UK',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'studyInUk',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_STUDY_IN_UK_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //  Study In UK end


    //  Study In Australia start
    register_rest_route(
        'getStudyInAustralia',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_STUDY_IN_AUSTRALIA',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'studyInAustralia',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_STUDY_IN_AUSTRALIA_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //  Study In Australia end

    //  Study In Canada start
    register_rest_route(
        'getStudyInCanada',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_STUDY_IN_CANADA',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'studyInCanada',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_STUDY_IN_CANADA_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //  Study In Canada end

    //  University Ranking start
    register_rest_route(
        'getUniversityRanking',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_UNIVERSITY_RANKING',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'universityRanking',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_UNIVERSITY_RANKING_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //  University Ranking end

    //  Health Cover start
    register_rest_route(
        'getHealthCover',
        'all',
        array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'GET_HEALTH_COVER',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        'healthCover',
        '(?P<slug>[-\w]{1,255})',
        array(
            'method' => 'GET',
            'callback' => 'GET_HEALTH_COVER_BY_SLUG',
            'args' => array(
                //call back with get id
                'id' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_numeric($param);
                    }
                ),
            ),
            'permission_callback' => function () {
                return true;
            }
        )
    );
    //  Health Cover end

//    DYNAMIC CUSTOM POST ROUTER
    register_rest_route(
        'getPosts',
        '/(?P<slug>[-\w]{1,255})/(?P<posttype>[-\w]{1,255})',
        array(
            'methods' => 'GET',
            'callback' => 'GET_POST_BY_SLUG',
            'args' => array(
                'slug' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_string($param);
                    },
                ),
                'posttype' => array(
                    'validate_callback' => function ($param, $request, $key) {
                        return is_string($param);
                    },
                ),
            ),
            'permission_callback' => function () {
                return true;
            },
        )
    );


});

// ALL PAGE MAIN API START
function GET_PAGE_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'page',
        'post_status' => 'publish',
    );
    $op = array();
    $myposts = get_posts($args);
    if ($request['slug'] == 'home') {

        foreach ($myposts as $single):
            setup_postdata($single);
            $meta = get_post_meta($single->ID);
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

            $image = array();
            $get_image = get_post_meta($single->ID, 'home_corporate_group', true);

            if (!empty($get_image)) {
                foreach ($get_image as $singleImage) {
                    $image[] = array(
                        'url' => $singleImage['home_corporate_group_image']
                    );
                }
            }

            $countries = array();
            $get_countries = get_post_meta($single->ID, 'home_countries_group', true);
            if (!empty($get_countries)) {
                foreach ($get_countries as $singleCountry) {
                    $countries[] = array(
                        'title' => $singleCountry['home_countries_group_title'],
                        'desc' => $singleCountry['home_countries_group_desc'],
                        'image' => $singleCountry['home_countries_group_image']
                    );
                }
            }

            $counter = array();
            $get_counter = get_post_meta($single->ID, 'home_counter_group', true);

            if (!empty($get_counter)) {
                foreach ($get_counter as $singleCounter) {
                    $counter[] = array(
                        'title' => $singleCounter['home_counter_title'],
                        'number' => $singleCounter['home_counter_number'],
                    );
                }
            }


            $universities = array();
            $get_universities = get_post_meta($single->ID, 'home_universities_group', true);
            if (!empty($get_universities)) {
                foreach ($get_universities as $singleUniversities) {
                    $universities[] = array(
                        'name' => $singleUniversities['home_universities_name'],
                        'location' => $singleUniversities['home_universities_location'],
                        'image' => $singleUniversities['home_universities_image'],
                        'short_desc' => $singleUniversities['home_universities_desc']
                    );
                }
            }

            $course = array();
            $get_course = get_post_meta($single->ID, 'home_course_group', true);
            if (!empty($get_course)) {
                foreach ($get_course as $singleCourse) {
                    $course[] = array(
                        'title' => $singleCourse['home_course_title'],
                        'desc' => $singleCourse['home_course_desc'],
                        'image' => $singleCourse['home_course_img']
                    );
                }
            }

            $testimonial = array();
            $get_testimonial = get_post_meta($single->ID, 'home_testimonial_group', true);
            if (!empty($get_testimonial)) {
                foreach ($get_testimonial as $singleTestimonial) {
                    $testimonial[] = array(
                        'thumbnail' => $singleTestimonial['home_testimonial_thumb'],
                        'url' => $singleTestimonial['home_testimonial_url'],
                        'desc' => $singleTestimonial['home_testimonial_desc'],
                        'author' => $singleTestimonial['home_testimonial_author'],
                        'address' => $singleTestimonial['home_testimonial_address'],
                    );
                }
            }


            $partner = array();
            $get_partner = get_post_meta($single->ID, 'home_partner_group', true);
            if (!empty($get_partner)) {
                foreach ($get_partner as $singlePartner) {
                    $partner[] = array(
                        'thumbnail' => $singlePartner['home_partner_img'],

                    );
                }
            }

            $bannerSlider = array();
            $get_bannerSlider = get_post_meta($single->ID, 'home_banner_slider_box_group', true);
            if (!empty($get_bannerSlider)) {
                foreach ($get_bannerSlider as $singleBannerSlider) {
                    $bannerSlider[] = array(
                        'title' => $singleBannerSlider['home_banner_slider_box_title'],
                        'desc' => $singleBannerSlider['home_banner_slider_box_desc'],
                        'image' => $singleBannerSlider['home_banner_slider_box_img'],
                    );
                }
            }


            $array2 = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_password' => $single->post_password,
                'post_name' => $single->post_name,
                'to_ping' => $single->to_ping,
                'post_parent' => $single->post_parent,
                'banner' => array(
                    'banner' => $bannerSlider,
                    'courseName' => !empty(get_post_meta($single->ID, 'home_banner_course_name', true)) ? get_post_meta($single->ID, 'home_banner_course_name', true) : '',
                    'course_img' => !empty(get_post_meta($single->ID, 'home_banner_course_img', true)) ? get_post_meta($single->ID, 'home_banner_course_img', true) : '',
                    'eligibility_name' => !empty(get_post_meta($single->ID, 'home_banner_eligibility_name', true)) ? get_post_meta($single->ID, 'home_banner_eligibility_name', true) : '',
                    'eligibility_img' => !empty(get_post_meta($single->ID, 'home_banner_eligibility_img', true)) ? get_post_meta($single->ID, 'home_banner_eligibility_img', true) : '',
                    'calculator_name' => !empty(get_post_meta($single->ID, 'home_banner_calculator_name', true)) ? get_post_meta($single->ID, 'home_banner_calculator_name', true) : '',
                    'calculator_img' => !empty(get_post_meta($single->ID, 'home_banner_calculator_img', true)) ? get_post_meta($single->ID, 'home_banner_calculator_img', true) : '',
                    'location_name' => !empty(get_post_meta($single->ID, 'home_banner_location_name', true)) ? get_post_meta($single->ID, 'home_banner_location_name', true) : '',
                    'location_img' => !empty(get_post_meta($single->ID, 'home_banner_location_img', true)) ? get_post_meta($single->ID, 'home_banner_location_img', true) : '',
                ),
                'counter' => array(
                    'title' => !empty(get_post_meta($single->ID, 'home_counter_title', true)) ? get_post_meta($single->ID, 'home_counter_title', true) : '',
                    'description_big' => !empty(get_post_meta($single->ID, 'home_counter_desc', true)) ? get_post_meta($single->ID, 'home_counter_desc', true) : '',
                    'description_small' => !empty(get_post_meta($single->ID, 'home_counter_sm_desc', true)) ? get_post_meta($single->ID, 'home_counter_sm_desc', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'home_counter_img', true)) ? get_post_meta($single->ID, 'home_counter_img', true) : '',
                    'counters' => $counter,
                ),
                'countries' => array(
                    'title' => !empty(get_post_meta($single->ID, 'home_countries_title', true)) ? get_post_meta($single->ID, 'home_countries_title', true) : '',
                    'countries' => $countries,
                ),
                'assistance' => array(
                    'title' => !empty(get_post_meta($single->ID, 'home_assistance_title', true)) ? get_post_meta($single->ID, 'home_assistance_title', true) : '',
                    'description' => !empty(get_post_meta($single->ID, 'home_assistance_desc', true)) ? get_post_meta($single->ID, 'home_assistance_desc', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'home_assistance_img', true)) ? get_post_meta($single->ID, 'home_assistance_img', true) : '',
                ),
                'universities' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'home_universities_subtitle', true)) ? get_post_meta($single->ID, 'home_universities_subtitle', true) : '',
                    'university' => $universities,
                ),
                'course' => array(
                    'big_text' => !empty(get_post_meta($single->ID, 'home_course_big_text', true)) ? get_post_meta($single->ID, 'home_course_big_text', true) : '',
                    'courses' => $course,
                ),
                'testimonial' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'home_testimonial_subtitle', true)) ? get_post_meta($single->ID, 'home_testimonial_subtitle', true) : '',
                    'testimonials' => $testimonial,
                ),
                'partner' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'home_partner_subtitle', true)) ? get_post_meta($single->ID, 'home_partner_subtitle', true) : '',
                    'partners' => $partner,
                ),

            );

            // return $array;
            $op[] = $array2;
        endforeach;

        wp_reset_postdata();
        $total = array(
            'page_data' => $op,
        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();
    }  elseif ($request['slug'] == 'doyens-guide-to-study-abroad') {

        foreach ($myposts as $single):
            setup_postdata($single);
            $meta = get_post_meta($single->ID);
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

            $content_text = array();
            $get_content_text = get_post_meta($single->ID, 'doyen_guid_study_abroad_content_group', true);
            if (!empty($get_content_text)) {
                foreach ($get_content_text as $singleContentText) {
                    $content_text[] = array(
                        'title' => $singleContentText['doyen_study_abroad_content_post_title'],
                        'description1' => $singleContentText['doyen_study_abroad_content_post_desc_one'],
                        'description2' => $singleContentText['doyen_study_abroad_content_post_desc_two'],
                        'link_text' => $singleContentText['doyen_study_abroad_content_post_link_text'],
                        'link_url' => $singleContentText['doyen_study_abroad_content_post_link_url'],
                        'button_text' => $singleContentText['doyen_study_abroad_content_button_text'],
                        'button_url' => $singleContentText['doyen_study_abroad_content_button_url'],
                    );
                }
            }

            $array2 = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_password' => $single->post_password,
                'post_name' => $single->post_name,
                'to_ping' => $single->to_ping,
                'post_parent' => $single->post_parent,
                'innerBanner' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'doyen_study_inner_banner_subtitle', true)) ? get_post_meta($single->ID, 'doyen_study_inner_banner_subtitle', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'doyen_study_inner_banner_image', true)) ? get_post_meta($single->ID, 'doyen_study_inner_banner_image', true) : '',
                ),
                'content' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'doyen_guild_study_abroad_content_subtitle', true)) ? get_post_meta($single->ID, 'doyen_guild_study_abroad_content_subtitle', true) : '',
                    'title' => !empty(get_post_meta($single->ID, 'doyen_guild_study_abroad_content_title', true)) ? get_post_meta($single->ID, 'doyen_guild_study_abroad_content_title', true) : '',
                    'content_text' => $content_text
                ),
                'feature' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'doyen_guid_study_abroad_feature_subtitle', true)) ? get_post_meta($single->ID, 'doyen_guid_study_abroad_feature_subtitle', true) : '',
                    'left' => !empty(get_post_meta($single->ID, 'doyen_guid_study_abroad_feature_left_title', true)) ? get_post_meta($single->ID, 'doyen_guid_study_abroad_feature_left_title', true) : '',
                    'right_bottom_title' => !empty(get_post_meta($single->ID, 'doyen_guid_study_abroad_feature_right_title', true)) ? get_post_meta($single->ID, 'doyen_guid_study_abroad_feature_right_title', true) : '',
                    'right_top_small' => !empty(get_post_meta($single->ID, 'doyen_guid_study_abroad_feature_right_small_title', true)) ? get_post_meta($single->ID, 'doyen_guid_study_abroad_feature_right_small_title', true) : '',
                ),

            );

            // return $array;
            $op[] = $array2;
        endforeach;
        wp_reset_postdata();
        $total = array(

            'page_data' => $op,

        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();
    } elseif ($request['slug'] == 'study-abroad-benefits') {

        foreach ($myposts as $single):
            setup_postdata($single);
            $meta = get_post_meta($single->ID);
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

            $content_text = array();
            $get_content_text = get_post_meta($single->ID, 'study_abroad_benefit_content_group', true);
            if (!empty($get_content_text)) {
                foreach ($get_content_text as $singleContentText) {
                    $content_text[] = array(
                        'title' => $singleContentText['study_abroad_benefit_content_title'],
                        'description' => $singleContentText['study_abroad_benefit_content_desc'],
                        'button_text' => $singleContentText['study_abroad_benefit_content_button_text'],
                        'button_url' => $singleContentText['study_abroad_benefit_content_button_url'],
                        'video_thumb' => $singleContentText['study_abroad_benefit_content_video_thumb'],
                        'video_url' => $singleContentText['study_abroad_benefit_content_video_url'],
                    );
                }
            }

            $array2 = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_password' => $single->post_password,
                'post_name' => $single->post_name,
                'to_ping' => $single->to_ping,
                'post_parent' => $single->post_parent,
                'innerBanner' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'study_abroad_benefit_inner_banner_title', true)) ? get_post_meta($single->ID, 'study_abroad_benefit_inner_banner_title', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'study_abroad_benefit_inner_banner_image', true)) ? get_post_meta($single->ID, 'study_abroad_benefit_inner_banner_image', true) : '',
                ),
                'content' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'study_abroad_benefit_content_subtitle', true)) ? get_post_meta($single->ID, 'study_abroad_benefit_content_subtitle', true) : '',
                    'title' => !empty(get_post_meta($single->ID, 'study_abroad_benefit_content_title', true)) ? get_post_meta($single->ID, 'study_abroad_benefit_content_title', true) : '',
                    'content_text' => $content_text
                ),
                'feature' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'study_abroad_benefit_feature_subtitle', true)) ? get_post_meta($single->ID, 'study_abroad_benefit_feature_subtitle', true) : '',
                    'left' => !empty(get_post_meta($single->ID, 'study_abroad_benefit_feature_left_title', true)) ? get_post_meta($single->ID, 'study_abroad_benefit_feature_left_title', true) : '',
                    'right_bottom_title' => !empty(get_post_meta($single->ID, 'study_abroad_benefit_feature_right_title', true)) ? get_post_meta($single->ID, 'study_abroad_benefit_feature_right_title', true) : '',
                    'right_top_small' => !empty(get_post_meta($single->ID, 'study_abroad_benefit_feature_right_small_title', true)) ? get_post_meta($single->ID, 'study_abroad_benefit_feature_right_small_title', true) : '',
                ),
            );

            // return $array;
            $op[] = $array2;
        endforeach;
        wp_reset_postdata();
        $total = array(

            'page_data' => $op,

        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();
    } elseif ($request['slug'] == 'are-you-ready-to-apply') {

        foreach ($myposts as $single):
            setup_postdata($single);
            $meta = get_post_meta($single->ID);
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

            $content_text = array();
            $get_content_text = get_post_meta($single->ID, 'are_ready_to_apply_content_group', true);
            if (!empty($get_content_text)) {
                foreach ($get_content_text as $singleContentText) {
                    $content_text[] = array(
                        'title' => $singleContentText['are_ready_to_apply_content_title'],
                        'description' => $singleContentText['are_ready_to_apply_content_desc'],
                    );
                }
            }

            $address_text = array();
            $get_address_text = get_post_meta($single->ID, 'are_ready_to_apply_address_group', true);
            if (!empty($get_address_text)) {
                foreach ($get_address_text as $singleAddressText) {
                    $address_text[] = array(
                        'name' => $singleAddressText['are_ready_to_apply_address_name'],
                        'address' => $singleAddressText['are_ready_to_apply_address_address'],
                        'phone' => $singleAddressText['are_ready_to_apply_address_phone'],
                        'ielts' => $singleAddressText['are_ready_to_apply_address_ielts'],
                        'email' => $singleAddressText['are_ready_to_apply_address_email'],
                        'timings' => $singleAddressText['are_ready_to_apply_address_timing'],
                    );
                }
            }

            $array2 = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_password' => $single->post_password,
                'post_name' => $single->post_name,
                'to_ping' => $single->to_ping,
                'post_parent' => $single->post_parent,
                'innerBanner' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'are_ready_to_apply_inner_banner_title', true)) ? get_post_meta($single->ID, 'are_ready_to_apply_inner_banner_title', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'are_ready_to_apply_inner_banner_image', true)) ? get_post_meta($single->ID, 'are_ready_to_apply_inner_banner_image', true) : '',
                ),
                'content' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'are_ready_to_apply_content_subtitle', true)) ? get_post_meta($single->ID, 'are_ready_to_apply_content_subtitle', true) : '',
                    'title' => !empty(get_post_meta($single->ID, 'are_ready_to_apply_content_title', true)) ? get_post_meta($single->ID, 'are_ready_to_apply_content_title', true) : '',
                    'content_text' => $content_text
                ),
                'address_text' => $address_text,
                'feature' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'are_ready_to_apply_feature_subtitle', true)) ? get_post_meta($single->ID, 'are_ready_to_apply_feature_subtitle', true) : '',
                    'left' => !empty(get_post_meta($single->ID, 'are_ready_to_apply_feature_left_title', true)) ? get_post_meta($single->ID, 'are_ready_to_apply_feature_left_title', true) : '',
                    'right_bottom_title' => !empty(get_post_meta($single->ID, 'are_ready_to_apply_feature_right_title', true)) ? get_post_meta($single->ID, 'are_ready_to_apply_feature_right_title', true) : '',
                    'right_top_small' => !empty(get_post_meta($single->ID, 'are_ready_to_apply_feature_right_small_title', true)) ? get_post_meta($single->ID, 'are_ready_to_apply_feature_right_small_title', true) : '',
                ),
            );

            // return $array;
            $op[] = $array2;
        endforeach;
        wp_reset_postdata();
        $total = array(

            'page_data' => $op,

        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();
    } elseif ($request['slug'] == 'find-a-university') {

        foreach ($myposts as $single):
            setup_postdata($single);
            $meta = get_post_meta($single->ID);
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


            $array2 = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_password' => $single->post_password,
                'post_name' => $single->post_name,
                'to_ping' => $single->to_ping,
                'post_parent' => $single->post_parent,
                'innerBanner' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'findUniversity_inner_banner_subtitle', true)) ? get_post_meta($single->ID, 'findUniversity_inner_banner_subtitle', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'findUniversity_inner_banner_image', true)) ? get_post_meta($single->ID, 'findUniversity_inner_banner_image', true) : '',
                ),
                'content_title' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'findUniversity_content_subtitle', true)) ? get_post_meta($single->ID, 'findUniversity_content_subtitle', true) : '',
                    'title' => !empty(get_post_meta($single->ID, 'findUniversity_content_title', true)) ? get_post_meta($single->ID, 'findUniversity_content_title', true) : '',
                ),
                'feature' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'findUniversity_feature_subtitle', true)) ? get_post_meta($single->ID, 'findUniversity_feature_subtitle', true) : '',
                    'left' => !empty(get_post_meta($single->ID, 'findUniversity_feature_left_title', true)) ? get_post_meta($single->ID, 'findUniversity_feature_left_title', true) : '',
                    'right_bottom_title' => !empty(get_post_meta($single->ID, 'findUniversity_feature_right_title', true)) ? get_post_meta($single->ID, 'findUniversity_feature_right_title', true) : '',
                    'right_top_small' => !empty(get_post_meta($single->ID, 'findUniversity_feature_right_small_title', true)) ? get_post_meta($single->ID, 'findUniversity_feature_right_small_title', true) : '',
                ),
            );


            $country = array();
            $city = array();

            $term_country = get_terms(array(
                'taxonomy' => 'country',
                'hide_empty' => true,
            ));
            $term_city = get_terms(array(
                'taxonomy' => 'city',
                'hide_empty' => true,
            ));

            $total = array();


            foreach ($term_country as $singleCountry) {
                $country[] = array(
                    'value' => $singleCountry->slug,
                    'label' => $singleCountry->name,

                );
            }
            foreach ($term_city as $singleCity) {
                $city[] = array(
                    'value' => $singleCity->slug,
                    'label' => $singleCity->name,
                );;
            }


            $country_req = get_term_by('slug', $request['country'], 'country', 'ARRAY_A');
            $city_req = get_term_by('slug', $request['city'], 'city', 'ARRAY_A');

            global $wpdb;
            global $json_api;

            $get_country = get_term_by('slug', $request['country'], 'country', 'ARRAY_A');
            $get_city = get_term_by('slug', $request['city'], 'city', 'ARRAY_A');

            $myposts = null;
            $args = null;

            if (empty($request['country']) && empty($request['city'])) {
                $args = array(
                    'post_type' => 'findUniversity',
                    'post_status' => 'publish',
                    'posts_per_page' => !empty($request['page']) ? $request['page'] * 9 : 1 * 9,
                    'paged' => 1,
                );

                $myposts = get_posts($args);


                foreach ($myposts as $index => $single) : setup_postdata($single);

                    $project_list = array();
                    $project_listing_group = array();
                    $meta = get_post_meta($single->ID);
                    $project_details = get_post_meta($single->ID, 'project', true);
                    $country_terms = wp_get_post_terms($single->ID, 'country', array('fields' => 'names'));
                    $city_terms = wp_get_post_terms($single->ID, 'city', array('fields' => 'names'));


                    $array[] = array(
                        'ID' => $single->ID,
                        'post_author' => $single->post_author,
                        'post_date' => $single->post_date,
                        'post_date_gmt' => $single->post_date_gmt,
                        'post_content' => $single->post_content,
                        'post_title' => $single->post_title,
                        'post_excerpt' => $single->post_excerpt,
                        'post_status' => $single->post_status,
                        'comment_status' => $single->comment_status,
                        'ping_status' => $single->ping_status,
                        'post_name' => $single->post_name,
                        'post_parent' => $single->post_parent,
                        'menu_order' => $single->menu_order,
//                'meta' => $meta,
                        'project_info' => $project_details,
                        'country' => !empty($country_terms) ? $country_terms[0] : '',
                        'city' => !empty($city_terms) ? $city_terms[0] : '',


                    );

                    // return $array;
                    $project_list = $array;


                endforeach;
                wp_reset_postdata();

                $total = array(
                    'filter' => array(
                        'country' => $country,
                        'city' => $city,
                    ),
                    'list' => $project_list
                );

//                header('Content-type: application/json');
//                echo json_encode($total, JSON_PRETTY_PRINT);
//                die();

            } else {
                $get_all_sorting_country = null;
                $get_all_sorting_city = null;


                if (isset($country_req['slug'])) {
                    $tax_query[] = array(
                        'taxonomy' => 'country',
                        'field' => 'slug',
                        'terms' => !empty($country_req['slug']) ? $country_req['slug'] : ''
                    );
                }

                if (isset($city_req['slug'])) {
                    $tax_query[] = array(
                        'taxonomy' => 'city',
                        'field' => 'slug',
                        'terms' => !empty($city_req['slug']) ? $city_req['slug'] : ''
                    );
                }


                $args = array(
                    'post_type' => 'findUniversity',
                    'post_status' => 'publish',
                    'posts_per_page' => !empty($request['page']) ? $request['page'] * 9 : 1 * 9,
                    'tax_query' => array(
                        'relation' => 'OR',
                        $tax_query
                    )
                );

                $myposts = get_posts($args);


                $totoal_query = null;
                $get_personal_info = array();
                $total = array();


                foreach ($myposts as $index => $single) : setup_postdata($single);

                    $meta = get_post_meta($single->ID);
                    $termbrandall = null;
                    $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


                    $get_country = get_the_terms($single->ID, 'country');
                    $get_city = get_the_terms($single->ID, 'city');

                    if ($get_country) {
                        foreach ($get_country as $singleCountry) {
                            $product_size = isset($singleCountry->slug) ? $singleCountry->slug : '';
                            $product_size_id = isset($singleCountry->term_id) ? $singleCountry->term_id : '';

                            $get_all_sorting_country[] = array(
                                'value' => isset($singleCountry->slug) ? $singleCountry->slug : '',
                                'label' => isset($singleCountry->name) ? $singleCountry->name : '',
                            );

                        }

                    }
                    if ($get_city) {
                        foreach ($get_city as $singleCity) {
                            $product_size = isset($singleCity->slug) ? $singleCity->slug : '';
                            $product_size_id = isset($singleCity->term_id) ? $singleCity->term_id : '';

                            $get_all_sorting_city[] = array(
                                'value' => isset($singleCity->slug) ? $singleCity->slug : '',
                                'label' => isset($singleCity->name) ? $singleCity->name : '',
                            );

                        }

                    }

                    $project_details = get_post_meta($single->ID, 'project', true);
                    $country_terms = wp_get_post_terms($single->ID, 'country', array('fields' => 'names'));
                    $city_terms = wp_get_post_terms($single->ID, 'city', array('fields' => 'names'));


                    $array[] = array(
                        'ID' => $single->ID,
                        'post_author' => $single->post_author,
                        'brand_id' => !empty($termbrandall->term_id) ? $termbrandall->term_id : '',
                        'brand_name' => !empty($termbrandall->name) ? $termbrandall->name : '',
                        'brand_slug' => !empty($termbrandall->slug) ? $termbrandall->slug : '',
                        'post_date' => $single->post_date,
                        'post_feature_image' => $src,
                        'post_date_gmt' => $single->post_date_gmt,
                        'post_content' => $single->post_content,
                        'post_title' => $single->post_title,
                        'post_excerpt' => $single->post_excerpt,
                        'post_status' => $single->post_status,
                        'comment_status' => $single->comment_status,
                        'ping_status' => $single->ping_status,
                        'post_name' => $single->post_name,
                        'post_parent' => $single->post_parent,
                        'menu_order' => $single->menu_order,
//            'meta' => $meta
                        'project_info' => $project_details,
//
                        'country' => !empty($country_terms) ? $country_terms[0] : '',
                        'city' => !empty($city_terms) ? $city_terms[0] : '',
//
                    );
                    $project_list = $array;

                endforeach;
                wp_reset_postdata();


                $total = array(
                    'filter' => array(
                        'country' => $get_all_sorting_country ? $get_all_sorting_country : $country,
                        'city' => $get_all_sorting_city ? $get_all_sorting_city : $city,
                    ),
                    'list' => $project_list
                );
                $all_app_sort = null;
                $all_surface_sort = null;
                $all_size_sort = null;
                $project_list = null;
                $totoal_query = null;

            }

            // return $array;
            $op[] = array_merge($array2, $total);

        endforeach;
        wp_reset_postdata();

        header('Content-type: application/json');
        echo json_encode($op, JSON_PRETTY_PRINT);
        die();
    } elseif ($request['slug'] == 'testimonial') {

        foreach ($myposts as $single):
            setup_postdata($single);
            $meta = get_post_meta($single->ID);
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);



            $array2 = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_password' => $single->post_password,
                'post_name' => $single->post_name,
                'to_ping' => $single->to_ping,
                'post_parent' => $single->post_parent,
                'innerBanner' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'testimonial_inner_banner_subtitle', true)) ? get_post_meta($single->ID, 'testimonial_inner_banner_subtitle', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'testimonial_inner_banner_image', true)) ? get_post_meta($single->ID, 'testimonial_inner_banner_image', true) : '',
                ),
                'feature' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'testimonial_feature_subtitle', true)) ? get_post_meta($single->ID, 'testimonial_feature_subtitle', true) : '',
                    'left' => !empty(get_post_meta($single->ID, 'testimonial_feature_left_title', true)) ? get_post_meta($single->ID, 'testimonial_feature_left_title', true) : '',
                    'right_bottom_title' => !empty(get_post_meta($single->ID, 'testimonial_feature_right_title', true)) ? get_post_meta($single->ID, 'testimonial_feature_right_title', true) : '',
                    'right_top_small' => !empty(get_post_meta($single->ID, 'testimonial_feature_right_small_title', true)) ? get_post_meta($single->ID, 'testimonial_feature_right_small_title', true) : '',
                ),

            );

            // return $array;
            $op[] = $array2;
        endforeach;
        wp_reset_postdata();
        $total = array(

            'page_data' => $op,

        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();
    } elseif ($request['slug'] == 'general') {

        foreach ($myposts as $single):
            setup_postdata($single);
            $meta = get_post_meta($single->ID);
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


            $get_post_type = get_post_meta($single->ID, 'concern_product_one_type', true);


// Get the post type from the post meta field 'concern_product_one_type'
//            $get_post_type = get_post_meta($single->ID, 'concern_product_one_type', true);

// If the post type value is empty or not set, you can provide a default value.
// For example, if you expect the post type to be a string, you can set the default as 'post'.
// $get_post_type = !empty($get_post_type) ? $get_post_type : 'post';

// Define the arguments for the query
            $args = array(
                'post_type' => $get_post_type,
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );

// Query the selected custom post type
            $custom_query = new WP_Query($args);

// Check if there are posts found
            if ($custom_query->have_posts()) {
                while ($custom_query->have_posts()) {
                    $custom_query->the_post();

                    // Your code for displaying the custom post type content goes here
                    // For example, you can use functions like the_title(), the_content(), etc.
                    // For example:
                    the_title(); // Displays the post title
                    // the_content(); // Displays the post content
                    var_dump(the_title());
                }
                wp_reset_postdata(); // Reset the post data to the main query
            } else {
                // If no posts are found for the specified post type
                echo 'No posts found.';
            }

            $accordion = array();
            $get_accordion = get_post_meta($single->ID, 'general_accordion_group', true);
            if (!empty($get_accordion)) {
                foreach ($get_accordion as $single_accordion) {
                    $accordion[] = array(
                        'title' => $single_accordion['general_accordion_title'],
                        'description' => $single_accordion['general_accordion_desc'],
                    );
                }
            }

            $title_desc = array();
            $get_title_desc = get_post_meta($single->ID, 'general_title_description_group', true);
            if (!empty($get_title_desc)) {
                foreach ($get_title_desc as $single_title_desc) {
                    $title_desc[] = array(
                        'desc' => $single_title_desc['general_title_description_desc'],
                        'link_text' => $single_title_desc['general_title_description_link_text'],
                        'link_text_url' => $single_title_desc['general_title_description_link_text_url'],
                    );
                }
            }

            $address = array();
            $get_address = get_post_meta($single->ID, 'address_card_box_group', true);
            if (!empty($get_address)) {
                foreach ($get_address as $single_title_desc) {
                    $address[] = array(
                        'name' => $single_title_desc['address_card_box_name'],
                        'address' => $single_title_desc['address_card_box_address'],
                        'phone' => $single_title_desc['address_card_box_phone'],
                        'ielts' => $single_title_desc['address_card_box_ielts'],
                        'email' => $single_title_desc['address_card_box_email'],
                        'timing' => $single_title_desc['address_card_box_timing'],
                    );
                }
            }

            $lists = array();
            $get_lists = get_post_meta($single->ID, 'general_list_box_group', true);
            if (!empty($get_lists)) {
                foreach ($get_lists as $single_list) {
                    $lists[] = array(
                        'name' => $single_list['general_list_box_name'],
                    );
                }
            }

            $testimonial = array();
            $get_testimonial = get_post_meta($single->ID, 'testimonial_box_group', true);
            if (!empty($get_testimonial)) {
                foreach ($get_testimonial as $single_testimonial) {
                    $testimonial[] = array(
                        'thumb' => $single_testimonial['testimonial_box_thumb'],
                        'thumb_url' => $single_testimonial['testimonial_box_thumb_url'],
                        'desc' => $single_testimonial['testimonial_box_desc'],
                        'name' => $single_testimonial['testimonial_box_name'],
                        'address' => $single_testimonial['testimonial_box_address'],
                    );
                }
            }

            $myposts = get_posts($args);

            $array2 = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_password' => $single->post_password,
                'post_name' => $single->post_name,
                'to_ping' => $single->to_ping,
                'post_parent' => $single->post_parent,
                'title_post_box' => array(
                    'title' => !empty(get_post_meta($single->ID, 'general_title_post_box_title', true)) ? get_post_meta($single->ID, 'general_title_post_box_title', true) : '',
                    'subtitle' => !empty(get_post_meta($single->ID, 'general_title_post_box_subtitle', true)) ? get_post_meta($single->ID, 'general_title_post_box_subtitle', true) : '',
                    'desc' => !empty(get_post_meta($single->ID, 'general_title_post_box_desc', true)) ? get_post_meta($single->ID, 'general_title_post_box_desc', true) : '',
                    'button_text' => !empty(get_post_meta($single->ID, 'general_title_post_box_button', true)) ? get_post_meta($single->ID, 'general_title_post_box_button', true) : '',
                    'button_text_url' => !empty(get_post_meta($single->ID, 'general_title_post_box_button_url', true)) ? get_post_meta($single->ID, 'general_title_post_box_button_url', true) : '',
                ),
                'table' => array(
                    'title' => !empty(get_post_meta($single->ID, 'general_table_box_title_field', true)) ? get_post_meta($single->ID, 'general_table_box_title_field', true) : '',
                    'desc' => !empty(get_post_meta($single->ID, 'general_table_box_desc', true)) ? get_post_meta($single->ID, 'general_table_box_desc', true) : '',
                    'code' => !empty(get_post_meta($single->ID, 'general__table_box_code', true)) ? get_post_meta($single->ID, 'general__table_box_code', true) : '',
                ),
                'plain_text_box' => array(
                    'title' => !empty(get_post_meta($single->ID, 'general_table_box_title_field', true)) ? get_post_meta($single->ID, 'general_table_box_title_field', true) : '',
                    'desc' => !empty(get_post_meta($single->ID, 'general_table_box_desc', true)) ? get_post_meta($single->ID, 'general_table_box_desc', true) : '',
                    'button_text' => !empty(get_post_meta($single->ID, 'general_plain_text_box_button_text_url', true)) ? get_post_meta($single->ID, 'general_plain_text_box_button_text_url', true) : '',
                    'button_url' => !empty(get_post_meta($single->ID, 'general_plain_text_box_button_text_url', true)) ? get_post_meta($single->ID, 'general_plain_text_box_button_text_url', true) : '',
                    'desc_2' => !empty(get_post_meta($single->ID, 'general_plain_text_box_desc_2', true)) ? get_post_meta($single->ID, 'general_plain_text_box_desc_2', true) : '',
                ),
                'video_gallery' => array(
                    'title' => !empty(get_post_meta($single->ID, 'general_video_popup_title', true)) ? get_post_meta($single->ID, 'general_video_popup_title', true) : '',
                    'desc' => !empty(get_post_meta($single->ID, 'general_video_popup_desc', true)) ? get_post_meta($single->ID, 'general_video_popup_desc', true) : '',
                    'link_text' => !empty(get_post_meta($single->ID, 'general_video_popup_link_text', true)) ? get_post_meta($single->ID, 'general_video_popup_link_text', true) : '',
                    'link_text_url' => !empty(get_post_meta($single->ID, 'general_video_popup_link_url', true)) ? get_post_meta($single->ID, 'general_video_popup_link_url', true) : '',
                    'thumb' => !empty(get_post_meta($single->ID, 'general_video_popup_thumb', true)) ? get_post_meta($single->ID, 'general_video_popup_thumb', true) : '',
                    'thumb_url' => !empty(get_post_meta($single->ID, 'general_video_popup_thumb_url', true)) ? get_post_meta($single->ID, 'general_video_popup_thumb_url', true) : '',
                ),
                'accordion' => $accordion,
                'title_description' => array(
                    'title' => !empty(get_post_meta($single->ID, 'general_title_description_title', true)) ? get_post_meta($single->ID, 'general_title_description_title', true) : '',
                    'details' => $title_desc,
                ),
                'address' => array(
                    'title' => !empty(get_post_meta($single->ID, 'address_card_box_title', true)) ? get_post_meta($single->ID, 'address_card_box_title', true) : '',
                    'desc' => !empty(get_post_meta($single->ID, 'address_card_box_desc', true)) ? get_post_meta($single->ID, 'address_card_box_desc', true) : '',
                    'details' => $address,
                ),
                'lists' => array(
                    'title' => !empty(get_post_meta($single->ID, 'general_list_box_title', true)) ? get_post_meta($single->ID, 'general_list_box_title', true) : '',
                    'desc' => !empty(get_post_meta($single->ID, 'general_list_box_desc', true)) ? get_post_meta($single->ID, 'general_list_box_desc', true) : '',
                    'details' => $lists,
                ),
                'testimonial' => $testimonial,
            );


            // return $array;
            $op[] = $array2;
        endforeach;
        wp_reset_postdata();
        $total = array(

            'page_data' => $op,

        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();
    } elseif ($request['slug'] == 'contact-us') {

        foreach ($myposts as $single):
            setup_postdata($single);
            $meta = get_post_meta($single->ID);
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

//            $healthCover = array();
//            $get_healthCover = get_post_meta($single->ID, 'health_cover_content_group', true);
//            if (!empty($get_healthCover)) {
//                foreach ($get_healthCover as $single_healthCover) {
//                    $healthCover[] = array(
//                        'title' => $single_healthCover['health_cover_content_title'],
//                        'description' => $single_healthCover['health_cover_content_desc'],
//                    );
//                }
//            }


            $array2 = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_password' => $single->post_password,
                'post_name' => $single->post_name,
                'to_ping' => $single->to_ping,
                'post_parent' => $single->post_parent,
                'innerBanner' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'contact_us_inner_banner_subtitle', true)) ? get_post_meta($single->ID, 'contact_us_inner_banner_subtitle', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'contact_us_inner_banner_image', true)) ? get_post_meta($single->ID, 'contact_us_inner_banner_image', true) : '',
                ),
                'address_title' => !empty(get_post_meta($single->ID, 'contact_us_office_address', true)) ? get_post_meta($single->ID, 'contact_us_office_address', true) : '',
                'map_content' => array(
                    'title' => !empty(get_post_meta($single->ID, 'contact_us_office_map_title', true)) ? get_post_meta($single->ID, 'contact_us_office_map_title', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'contact_us_office_map_image', true)) ? get_post_meta($single->ID, 'contact_us_office_map_image', true) : '',
                    'map_url' => !empty(get_post_meta($single->ID, 'contact_us_office_map_url', true)) ? get_post_meta($single->ID, 'contact_us_office_map_url', true) : '',
                ),
                'feature' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'contact_us_feature_subtitle', true)) ? get_post_meta($single->ID, 'contact_us_feature_subtitle', true) : '',
                    'left' => !empty(get_post_meta($single->ID, 'contact_us_feature_left_title', true)) ? get_post_meta($single->ID, 'contact_us_feature_left_title', true) : '',
                    'right_bottom_title' => !empty(get_post_meta($single->ID, 'contact_us_feature_right_title', true)) ? get_post_meta($single->ID, 'contact_us_feature_right_title', true) : '',
                    'right_top_small' => !empty(get_post_meta($single->ID, 'contact_us_feature_right_small_title', true)) ? get_post_meta($single->ID, 'contact_us_feature_right_small_title', true) : '',
                ),
            );

            // return $array;
            $op[] = $array2;
        endforeach;
        wp_reset_postdata();
        $total = array(

            'page_data' => $op,

        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();
    } else {

        foreach ($myposts as $single):
            setup_postdata($single);
            $meta = get_post_meta($single->ID);
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);
//            $slider = array();
//            $clients = array();
//            $home__crafting = array();
//            $home__brand_slider_group = array();
//            $get_slider = get_post_meta($single->ID, 'home_slider_group', true);
//            $brand = get_post_meta($single->ID, 'home__brand_slider_group', true);
//            $home__crafting_slider_group = get_post_meta($single->ID, 'home__crafting_slider_group', true);
//            $home__clients_slider_group = get_post_meta($single->ID, 'home__clients_slider_group', true);
//            if (!empty($get_slider)) {
//                foreach ($get_slider as $singleSlider) {
//                    $slider[] = $singleSlider;
//                }
//            }
//            if (!empty($home__crafting_slider_group)) {
//                foreach ($get_slider as $singleCrafting) {
//                    $home__crafting[] = $singleCrafting;
//                }
//            }
//            if (!empty($brand)) {
//                foreach ($brand as $singleBrand) {
//                    $home__brand_slider_group[] = $singleBrand;
//                }
//            }
//
//            if (!empty($home__clients_slider_group)) {
//                foreach ($home__clients_slider_group as $singleClient) {
//                    $clients[] = $singleClient;
//                }
//            }


            $title_desc = array();
            $get_title_desc = get_post_meta($single->ID, 'general_title_description_group', true);
            if (!empty($get_title_desc)) {
                foreach ($get_title_desc as $single_title_desc) {
                    $title_desc[] = array(
                        'desc' => $single_title_desc['general_title_description_desc'],
                        'link_text' => $single_title_desc['general_title_description_link_text'],
                        'link_text_url' => $single_title_desc['general_title_description_link_text_url'],
                    );
                }
            }

            $address = array();
            $get_address = get_post_meta($single->ID, 'general_card_box_group', true);
            if (!empty($get_address)) {
                foreach ($get_address as $single_title_desc) {
                    $address[] = array(
                        'name' => $single_title_desc['general_card_box_group_name'],
                        'address' => $single_title_desc['general_card_box_group_address'],
                        'phone' => $single_title_desc['general_card_box_group_phone'],
                        'ielts' => $single_title_desc['general_card_box_group_itelts'],
                        'email' => $single_title_desc['general_card_box_group_email'],
                        'timing' => $single_title_desc['general_card_box_group_timing'],
                    );
                }
            }

            $lists = array();
            $get_lists = get_post_meta($single->ID, 'general_list_box_group', true);
            if (!empty($get_lists)) {
                foreach ($get_lists as $single_list) {
                    $lists[] = array(
                        'name' => $single_list['general_list_box_name'],
                    );
                }
            }

            $testimonial = array();
            $get_testimonial = get_post_meta($single->ID, 'testimonial_box_group', true);
            if (!empty($get_testimonial)) {
                foreach ($get_testimonial as $single_testimonial) {
                    $testimonial[] = array(
                        'thumb' => $single_testimonial['testimonial_box_thumb'],
                        'thumb_url' => $single_testimonial['testimonial_box_thumb_url'],
                        'desc' => $single_testimonial['testimonial_box_desc'],
                        'name' => $single_testimonial['testimonial_box_name'],
                        'address' => $single_testimonial['testimonial_box_address'],
                    );
                }
            }

            $generalContent = array();
            $get_generalContent = get_post_meta($single->ID, 'general_content_group', true);
            if (!empty($get_generalContent)) {
                foreach ($get_generalContent as $singleGeneralContent) {
                    $generalContent[] = array(
                        'subtitle' => $singleGeneralContent['general_content_group_title'],
                        'desc_one' => $singleGeneralContent['general_content_group_desc_one'],
                        'desc_two' => $singleGeneralContent['general_content_group_desc_two'],
                        'button_text' => $singleGeneralContent['general_content_group_button_text'],
                        'button_url' => $singleGeneralContent['general_content_group_button_url'],
                        'link_text' => $singleGeneralContent['general_content_group_desc_link_text'],
                        'link_url' => $singleGeneralContent['general_content_group_desc_link_url'],
                        'video_thumb' => $singleGeneralContent['general_content_group_thumb'],
                        'video_url' => $singleGeneralContent['general_content_group_thumb_url'],
                    );
                }
            }

            $studyCard = array();
            $get_studyCard = get_post_meta($single->ID, 'general_study_card_box_group', true);
            if (!empty($get_studyCard)) {
                foreach ($get_studyCard as $singleStudyCard) {
                    $studyCard[] = array(
                        'image' => $singleStudyCard['general_study_card_box_img'],
                        'title' => $singleStudyCard['general_study_card_box_title'],
                        'short_desc' => $singleStudyCard['general_study_card_box_desc'],
                        'url' => $singleStudyCard['general_study_card_box_link'],
                    );
                }
            }

            $popularCourse = array();
            $get_popularCourse = get_post_meta($single->ID, 'general_popular_courser_box_group', true);
            if (!empty($get_popularCourse)) {
                foreach ($get_popularCourse as $singlePopularCourse) {
                    $popularCourse[] = array(
                        'image' => $singlePopularCourse['general_popular_courser_box_group_img'],
                        'title' => $singlePopularCourse['general_popular_courser_box_group_title'],
                        'short_desc' => $singlePopularCourse['general_popular_courser_box_group_desc'],
                        'url' => $singlePopularCourse['general_popular_courser_box_group_url'],
                    );
                }
            }

            $accordion = array();
            $get_accordion = get_post_meta($single->ID, 'general_accordion_box_group', true);
            if (!empty($get_accordion)) {
                foreach ($get_accordion as $single_accordion) {
                    $accordion[] = array(
                        'title' => $single_accordion['general_accordion_box_group_title'],
                        'description' => $single_accordion['general_accordion_box_group_desc'],
                    );
                }
            }

            $video_popup = array();
            $get_video_popup = get_post_meta($single->ID, 'general_video_popup_group', true);
            if (!empty($get_video_popup)) {
                foreach ($get_video_popup as $single_popup) {
                    $video_popup[] = array(
                        'author' => $single_popup['general_video_popup_author'],
                        'info' => $single_popup['general_video_popup_info'],
                        'desc' => $single_popup['general_video_popup_desc'],
                        'thumb' => $single_popup['general_accordion_box_group_thumb'],
                        'url' => $single_popup['general_accordion_box_group_URL'],
                    );
                }
            }


            $array = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_password' => $single->post_password,
                'post_name' => $single->post_name,
                'to_ping' => $single->to_ping,
                'post_parent' => $single->post_parent,
                'innerBanner' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'general_inner_banner_subtitle', true)) ? get_post_meta($single->ID, 'general_inner_banner_subtitle', true) : '',
                    'image' => !empty(get_post_meta($single->ID, 'general_inner_banner_img', true)) ? get_post_meta($single->ID, 'general_inner_banner_img', true) : '',
                ),
                'content_data' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'general_content_subtitle', true)) ? get_post_meta($single->ID, 'general_content_subtitle', true) : '',
                    'title' => !empty(get_post_meta($single->ID, 'general_content_title', true)) ? get_post_meta($single->ID, 'general_content_title', true) : '',
                    'content' => $generalContent
                ),
                'address' => array(
                    'details' => $address,
                ),
                'study_card' => array(
                    'details' => $studyCard,
                ),
                'popular_course' => array(
                    'details' => $popularCourse,
                ),
                'accordion' => array(
                    'details' => $accordion,
                ),
                'table' => array(
                    'title' => !empty(get_post_meta($single->ID, 'general_table_box_title_field', true)) ? get_post_meta($single->ID, 'general_table_box_title_field', true) : '',
                    'desc' => !empty(get_post_meta($single->ID, 'general_table_box_desc', true)) ? get_post_meta($single->ID, 'general_table_box_desc', true) : '',
                    'code' => !empty(get_post_meta($single->ID, 'general__table_box_code', true)) ? get_post_meta($single->ID, 'general__table_box_code', true) : '',
                ),
                'video_popup' => array(
                    'details' => $video_popup,
                ),
                'cta' => array(
                    'subtitle' => !empty(get_post_meta($single->ID, 'general_cta_subtitle', true)) ? get_post_meta($single->ID, 'general_cta_subtitle', true) : '',
                    'left_text' => !empty(get_post_meta($single->ID, 'general_cta_left_title', true)) ? get_post_meta($single->ID, 'general_cta_left_title', true) : '',
                    'right_top' => !empty(get_post_meta($single->ID, 'general_cta_right_title', true)) ? get_post_meta($single->ID, 'general_cta_right_title', true) : '',
                    'right_bottom' => !empty(get_post_meta($single->ID, 'general_cta_small_title', true)) ? get_post_meta($single->ID, 'general_cta_small_title', true) : '',
                )
                // 'subtitle' => !empty(get_post_meta($single->ID, 'banner_subtitle', true)) ? get_post_meta($single->ID, 'banner_subtitle', true) : '',
                // 'title' => !empty(get_post_meta($single->ID, 'banner_title', true)) ? get_post_meta($single->ID, 'banner_title', true) : '',
                // 'banner' => !empty(get_post_meta($single->ID, 'banner_image', true)) ? get_post_meta($single->ID, 'banner_image', true) : '',

                // 'slider' => $slider,
                // 'featured_project' => array(
                //     'title' => !empty(get_post_meta($single->ID, 'featured_title', true)) ? get_post_meta($single->ID, 'featured_title', true) : '',
                //     'subtitle' => !empty(get_post_meta($single->ID, 'featured_subtitle', true)) ? get_post_meta($single->ID, 'featured_subtitle', true) : '',
                //     'list' => $featured_projects
                // ),
                // 'brand' => array(
                //     'title' => !empty(get_post_meta($single->ID, 'brand_title', true)) ? get_post_meta($single->ID, 'brand_title', true) : '',
                //     'subtitle' => !empty(get_post_meta($single->ID, 'brand_subtitle', true)) ? get_post_meta($single->ID, 'brand_subtitle', true) : '',
                //     'list' => $home__brand_slider_group
                // ),
                // 'crafting_luxury' => array(
                //     'title' => !empty(get_post_meta($single->ID, 'crafting_title', true)) ? get_post_meta($single->ID, 'crafting_title', true) : '',
                //     'subtitle' => !empty(get_post_meta($single->ID, 'crafting_subtitle', true)) ? get_post_meta($single->ID, 'crafting_subtitle', true) : '',
                //     'list' => $home__crafting
                // ),
                // 'clients' => array(
                //     'title' => !empty(get_post_meta($single->ID, 'client_title', true)) ? get_post_meta($single->ID, 'client_title', true) : '',
                //     'subtitle' => !empty(get_post_meta($single->ID, 'client_subtitle', true)) ? get_post_meta($single->ID, 'client_subtitle', true) : '',
                //     'list' => $clients
                // ),
                // 'about_section' => array(
                //     'title' => !empty(get_post_meta($single->ID, 'anh_title', true)) ? get_post_meta($single->ID, 'anh_title', true) : '',
                //     'subtitle' => !empty(get_post_meta($single->ID, 'anh_subtitle', true)) ? get_post_meta($single->ID, 'anh_subtitle', true) : ',',
                //     'desc' => !empty(get_post_meta($single->ID, 'anh_description', true)) ? get_post_meta($single->ID, 'anh_description', true) : ',',
                //     'image_first' => !empty(get_post_meta($single->ID, 'anh_image1', true)) ? get_post_meta($single->ID, 'anh_image1', true) : ',',
                //     'image_last' => !empty(get_post_meta($single->ID, 'anh_image2', true)) ? get_post_meta($single->ID, 'anh_image2', true) : ',',
                // ),
                // 'video' => array(
                //     'url' => !empty(get_post_meta($single->ID, 'url', true)) ? get_post_meta($single->ID, 'url', true) : ',',
                //     'thumb' => !empty(get_post_meta($single->ID, 'video_thumbnail', true)) ? get_post_meta($single->ID, 'video_thumbnail', true) : ',',

                // )
            );

            // return $array;
            $op[] = $array;
        endforeach;
        wp_reset_postdata();
        $total = array(

            'page_data' => $op,

        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();
    }


    header('Content-type: application/json');
    echo json_encode($op, JSON_PRETTY_PRINT);
    die();
}

// ALL PAGE MAIN API END

/**
 * @param int|WP_Post $single
 * @return array
 */

// Custom Post by Slug


function GET_POST_BY_SLUG($request)
{
    global $json_api;
    $blog_list = array();
    $args = array(
        'post_type' => $request['posttype'],
        'name' => $request['slug'],
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => !empty($request['page']) ? $request['page'] * 8 : 1 * 8,
        'paged' => 1,
    );

    $myposts = get_posts($args);

    foreach ($myposts as $single):
        setup_postdata($single);

        $blog_list = array();

        $meta = get_post_meta($single->ID);
        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);
        $terms = get_the_terms($single->ID, 'tag');
        $all_term = array();

        if (!empty($terms)) {
            foreach ($terms as $singleTerm) {
                $all_term[] = array(
                    'name' => $singleTerm->name,
                );
            }
        }

        $accordion = array();
        $get_accordion = get_post_meta($single->ID, 'general_accordion_group', true);
        if (!empty($get_accordion)) {
            foreach ($get_accordion as $single_accordion) {
                $accordion[] = array(
                    'title' => $single_accordion['general_accordion_title'],
                    'description' => $single_accordion['general_accordion_desc'],
                );
            }
        }

        $title_desc = array();
        $get_title_desc = get_post_meta($single->ID, 'general_title_description_group', true);
        if (!empty($get_title_desc)) {
            foreach ($get_title_desc as $single_title_desc) {
                $title_desc[] = array(
                    'desc' => $single_title_desc['general_title_description_desc'],
                    'link_text' => $single_title_desc['general_title_description_link_text'],
                    'link_text_url' => $single_title_desc['general_title_description_link_text_url'],
                );
            }
        }

        $address = array();
        $get_address = get_post_meta($single->ID, 'address_card_box_group', true);
        if (!empty($get_address)) {
            foreach ($get_address as $single_title_desc) {
                $address[] = array(
                    'name' => $single_title_desc['address_card_box_name'],
                    'address' => $single_title_desc['address_card_box_address'],
                    'phone' => $single_title_desc['address_card_box_phone'],
                    'ielts' => $single_title_desc['address_card_box_ielts'],
                    'email' => $single_title_desc['address_card_box_email'],
                    'timing' => $single_title_desc['address_card_box_timing'],
                );
            }
        }

        $lists = array();
        $get_lists = get_post_meta($single->ID, 'general_list_box_group', true);
        if (!empty($get_lists)) {
            foreach ($get_lists as $single_list) {
                $lists[] = array(
                    'name' => $single_list['general_list_box_name'],
                );
            }
        }

        $testimonial = array();
        $get_testimonial = get_post_meta($single->ID, 'testimonial_box_group', true);
        if (!empty($get_testimonial)) {
            foreach ($get_testimonial as $single_testimonial) {
                $testimonial[] = array(
                    'thumb' => $single_testimonial['testimonial_box_thumb'],
                    'thumb_url' => $single_testimonial['testimonial_box_thumb_url'],
                    'desc' => $single_testimonial['testimonial_box_desc'],
                    'name' => $single_testimonial['testimonial_box_name'],
                    'address' => $single_testimonial['testimonial_box_address'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'title_post_box' => array(
                'title' => !empty(get_post_meta($single->ID, 'general_title_post_box_title', true)) ? get_post_meta($single->ID, 'general_title_post_box_title', true) : '',
                'subtitle' => !empty(get_post_meta($single->ID, 'general_title_post_box_subtitle', true)) ? get_post_meta($single->ID, 'general_title_post_box_subtitle', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'general_title_post_box_desc', true)) ? get_post_meta($single->ID, 'general_title_post_box_desc', true) : '',
                'button_text' => !empty(get_post_meta($single->ID, 'general_title_post_box_button', true)) ? get_post_meta($single->ID, 'general_title_post_box_button', true) : '',
                'button_text_url' => !empty(get_post_meta($single->ID, 'general_title_post_box_button_url', true)) ? get_post_meta($single->ID, 'general_title_post_box_button_url', true) : '',
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'general_table_box_title_field', true)) ? get_post_meta($single->ID, 'general_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'general_table_box_desc', true)) ? get_post_meta($single->ID, 'general_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'general__table_box_code', true)) ? get_post_meta($single->ID, 'general__table_box_code', true) : '',
            ),
            'plain_text_box' => array(
                'title' => !empty(get_post_meta($single->ID, 'general_plain_text_box_title', true)) ? get_post_meta($single->ID, 'general_plain_text_box_title', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'general_plain_text_box_desc', true)) ? get_post_meta($single->ID, 'general_plain_text_box_desc', true) : '',
                'button_text' => !empty(get_post_meta($single->ID, 'general_plain_text_box_button_text', true)) ? get_post_meta($single->ID, 'general_plain_text_box_button_text', true) : '',
                'button_url' => !empty(get_post_meta($single->ID, 'general_plain_text_box_button_text_url', true)) ? get_post_meta($single->ID, 'general_plain_text_box_button_text_url', true) : '',
                'desc_2' => !empty(get_post_meta($single->ID, 'general_plain_text_box_desc_2', true)) ? get_post_meta($single->ID, 'general_plain_text_box_desc_2', true) : '',
            ),
            'video_gallery' => array(
                'title' => !empty(get_post_meta($single->ID, 'general_video_popup_title', true)) ? get_post_meta($single->ID, 'general_video_popup_title', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'general_video_popup_desc', true)) ? get_post_meta($single->ID, 'general_video_popup_desc', true) : '',
                'link_text' => !empty(get_post_meta($single->ID, 'general_video_popup_link_text', true)) ? get_post_meta($single->ID, 'general_video_popup_link_text', true) : '',
                'link_text_url' => !empty(get_post_meta($single->ID, 'general_video_popup_link_url', true)) ? get_post_meta($single->ID, 'general_video_popup_link_url', true) : '',
                'thumb' => !empty(get_post_meta($single->ID, 'general_video_popup_thumb', true)) ? get_post_meta($single->ID, 'general_video_popup_thumb', true) : '',
                'thumb_url' => !empty(get_post_meta($single->ID, 'general_video_popup_thumb_url', true)) ? get_post_meta($single->ID, 'general_video_popup_thumb_url', true) : '',
            ),
            'accordion' => $accordion,
            'title_description' => array(
                'title' => !empty(get_post_meta($single->ID, 'general_title_description_title', true)) ? get_post_meta($single->ID, 'general_title_description_title', true) : '',
                'details' => $title_desc,
            ),
            'address' => array(
                'title' => !empty(get_post_meta($single->ID, 'address_card_box_title', true)) ? get_post_meta($single->ID, 'address_card_box_title', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'address_card_box_desc', true)) ? get_post_meta($single->ID, 'address_card_box_desc', true) : '',
                'details' => $address,
            ),
            'lists' => array(
                'title' => !empty(get_post_meta($single->ID, 'general_list_box_title', true)) ? get_post_meta($single->ID, 'general_list_box_title', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'general_list_box_desc', true)) ? get_post_meta($single->ID, 'general_list_box_desc', true) : '',
                'details' => $lists,
            ),
            'testimonial' => $testimonial,
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

    $project_listing_group = null;
    $project_product_text_img_group = null;
    $project_product_details_group = null;
}


//get Success Details
function GET_SUCCESS_BY_SLUG($request)
{

    $args = array(
        'name' => $request['slug'],
        'post_type' => 'success',
        'post_status' => 'publish',
        'numberposts' => 1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );
    $myposts = get_posts($args);
    $get_personal_info = array();
    $project_list = array();

    foreach ($myposts as $singleSucc):
        setup_postdata($singleSucc);

        $success = array();

        $meta = get_post_meta($singleSucc->ID);
        $src = wp_get_attachment_url(get_post_thumbnail_id($singleSucc->ID), 'full', true);

        $terms = get_the_terms($singleSucc->ID, 'tag');
        $all_term = array();

        if (!empty($terms)) {
            foreach ($terms as $singleTerm) {
                $all_term[] = array(
                    'name' => $singleTerm->name,
                );
            }
        }


        $succes[] = array(
            'ID' => $singleSucc->ID,
            'post_author' => $singleSucc->post_author,
            'post_date' => $singleSucc->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $singleSucc->post_date_gmt,
            'post_content' => $singleSucc->post_content,
            'post_title' => $singleSucc->post_title,
            'post_excerpt' => $singleSucc->post_excerpt,
            'post_status' => $singleSucc->post_status,
            'comment_status' => $singleSucc->comment_status,
            'ping_status' => $singleSucc->ping_status,
            'post_name' => $singleSucc->post_name,
            'post_parent' => $singleSucc->post_parent,
            'menu_order' => $singleSucc->menu_order,
            'short_desc' => !empty(get_post_meta($singleSucc->ID, 'success_short_desc', true)) ? get_post_meta($singleSucc->ID, 'success_short_desc', true) : '',
            'short_desc2' => !empty(get_post_meta($singleSucc->ID, 'success_short_desc2', true)) ? get_post_meta($singleSucc->ID, 'success_short_desc2', true) : '',
            'thumb' => !empty(get_post_meta($singleSucc->ID, 'success_thumb', true)) ? get_post_meta($singleSucc->ID, 'success_thumb', true) : '',
            'banner' => !empty(get_post_meta($singleSucc->ID, 'success_banner', true)) ? get_post_meta($singleSucc->ID, 'success_banner', true) : '',
            'date' => !empty(get_post_meta($singleSucc->ID, 'success_date_picker', true)) ? get_post_meta($singleSucc->ID, 'success_date_picker', true) : '',
            'tag' => $all_term,
            'video_thumb' => !empty(get_post_meta($singleSucc->ID, 'success_video_thumb', true)) ? get_post_meta($singleSucc->ID, 'success_video_thumb', true) : '',
            'video' => !empty(get_post_meta($singleSucc->ID, 'success_video_url', true)) ? get_post_meta($singleSucc->ID, 'success_video_url', true) : '',
        );

        // return $array;
        $success = $succes;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($success, JSON_PRETTY_PRINT);
    die();
}

//Get Success List
function GET_SUCCESS($request)
{
    global $json_api;
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'success',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => !empty($request['page']) ? $request['page'] * 8 : 1 * 8,
        'paged' => 1,

    );


    $myposts = get_posts($args);


    foreach ($myposts as $single):
        setup_postdata($single);

        $blog_list = array();


        $meta = get_post_meta($single->ID);
        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);
        $terms = get_the_terms($single->ID, 'tag');
        $all_term = array();

        if (!empty($terms)) {
            foreach ($terms as $singleTerm) {
                $all_term[] = array(
                    'name' => $singleTerm->name,
                );
            }
        }


        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'short_desc' => !empty(get_post_meta($single->ID, 'success_short_desc', true)) ? get_post_meta($single->ID, 'success_short_desc', true) : '',
            'short_desc2' => !empty(get_post_meta($single->ID, 'success_short_desc2', true)) ? get_post_meta($single->ID, 'success_short_desc2', true) : '',
            'thumb' => !empty(get_post_meta($single->ID, 'success_thumb', true)) ? get_post_meta($single->ID, 'success_thumb', true) : '',
            'percentage' => !empty(get_post_meta($single->ID, 'success_percentage', true)) ? get_post_meta($single->ID, 'success_percentage', true) : '',
            'quote' => !empty(get_post_meta($single->ID, 'success_quote', true)) ? get_post_meta($single->ID, 'success_quote', true) : '',
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

    $project_listing_group = null;
    $project_product_text_img_group = null;
    $project_product_details_group = null;
}


// Find a University Start
function GET_FIND_UNIVERSITY($request)
{

    $country = array();
    $city = array();

    $term_country = get_terms(array(
        'taxonomy' => 'country',
        'hide_empty' => true,
    ));
    $term_city = get_terms(array(
        'taxonomy' => 'city',
        'hide_empty' => true,
    ));
    $total = array();


    foreach ($term_country as $singleCountry) {
        $country[] = array(
            'value' => $singleCountry->slug,
            'label' => $singleCountry->name,

        );
    }
    foreach ($term_city as $singleCity) {
        $city[] = array(
            'value' => $singleCity->slug,
            'label' => $singleCity->name,
        );;
    }


    $country_req = get_term_by('slug', $request['country'], 'country', 'ARRAY_A');
    $city_req = get_term_by('slug', $request['city'], 'city', 'ARRAY_A');

    global $wpdb;
    global $json_api;

    $get_country = get_term_by('slug', $request['country'], 'country', 'ARRAY_A');
    $get_city = get_term_by('slug', $request['city'], 'city', 'ARRAY_A');

    $myposts = null;
    $args = null;

    if (empty($request['country']) && empty($request['city'])) {
        $args = array(
            'post_type' => 'findUniversity',
            'post_status' => 'publish',
            'posts_per_page' => !empty($request['page']) ? $request['page'] * 9 : 1 * 9,
            'paged' => 1,
        );

        $myposts = get_posts($args);


        foreach ($myposts as $index => $single) : setup_postdata($single);

            $project_list = array();
            $project_listing_group = array();
            $meta = get_post_meta($single->ID);
            $project_details = get_post_meta($single->ID, 'project', true);


            $array[] = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'post_date' => $single->post_date,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_name' => $single->post_name,
                'post_parent' => $single->post_parent,
                'menu_order' => $single->menu_order,
//                'meta' => $meta,
                'project_info' => $project_details,


            );

            // return $array;
            $project_list = $array;


        endforeach;
        wp_reset_postdata();

        $total = array(
            'filter' => array(
                'country' => $country,
                'city' => $city,
            ),
            'list' => $project_list
        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();

    } else {
        $get_all_sorting_country = null;
        $get_all_sorting_city = null;


        if (isset($country_req['slug'])) {
            $tax_query[] = array(
                'taxonomy' => 'country',
                'field' => 'slug',
                'terms' => !empty($country_req['slug']) ? $country_req['slug'] : ''
            );
        }

        if (isset($city_req['slug'])) {
            $tax_query[] = array(
                'taxonomy' => 'city',
                'field' => 'slug',
                'terms' => !empty($city_req['slug']) ? $city_req['slug'] : ''
            );
        }


        $args = array(
            'post_type' => 'findUniversity',
            'post_status' => 'publish',
            'posts_per_page' => !empty($request['page']) ? $request['page'] * 9 : 1 * 9,
            'tax_query' => array(
                'relation' => 'OR',
                $tax_query
            )
        );

        $myposts = get_posts($args);


        $totoal_query = null;
        $get_personal_info = array();
        $total = array();


        foreach ($myposts as $index => $single) : setup_postdata($single);

            $meta = get_post_meta($single->ID);
            $termbrandall = null;
            $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


            $get_country = get_the_terms($single->ID, 'country');
            $get_city = get_the_terms($single->ID, 'city');

            if ($get_country) {
                foreach ($get_country as $singleCountry) {
                    $product_size = isset($singleCountry->slug) ? $singleCountry->slug : '';
                    $product_size_id = isset($singleCountry->term_id) ? $singleCountry->term_id : '';

                    $get_all_sorting_country[] = array(
                        'value' => isset($singleCountry->slug) ? $singleCountry->slug : '',
                        'label' => isset($singleCountry->name) ? $singleCountry->name : '',
                    );

                }

            }
            if ($get_city) {
                foreach ($get_city as $singleCity) {
                    $product_size = isset($singleCity->slug) ? $singleCity->slug : '';
                    $product_size_id = isset($singleCity->term_id) ? $singleCity->term_id : '';

                    $get_all_sorting_city[] = array(
                        'value' => isset($singleCity->slug) ? $singleCity->slug : '',
                        'label' => isset($singleCity->name) ? $singleCity->name : '',
                    );

                }

            }

            $project_details = get_post_meta($single->ID, 'project', true);
//            $project_location_terms = wp_get_post_terms($single->ID, 'project_location', array('fields' => 'names'));
//            $project_type_terms = wp_get_post_terms($single->ID, 'project_type', array('fields' => 'names'));
//            $project_collection_terms = wp_get_post_terms($single->ID, 'project_collection', array('fields' => 'names'));


            $array[] = array(
                'ID' => $single->ID,
                'post_author' => $single->post_author,
                'brand_id' => !empty($termbrandall->term_id) ? $termbrandall->term_id : '',
                'brand_name' => !empty($termbrandall->name) ? $termbrandall->name : '',
                'brand_slug' => !empty($termbrandall->slug) ? $termbrandall->slug : '',
                'post_date' => $single->post_date,
                'post_feature_image' => $src,
                'post_date_gmt' => $single->post_date_gmt,
                'post_content' => $single->post_content,
                'post_title' => $single->post_title,
                'post_excerpt' => $single->post_excerpt,
                'post_status' => $single->post_status,
                'comment_status' => $single->comment_status,
                'ping_status' => $single->ping_status,
                'post_name' => $single->post_name,
                'post_parent' => $single->post_parent,
                'menu_order' => $single->menu_order,
//            'meta' => $meta
                'project_info' => $project_details,

            );
            $project_list = $array;

        endforeach;
        wp_reset_postdata();


        $total = array(
            'filter' => array(
                'country' => $get_all_sorting_country ? $get_all_sorting_country : $country,
                'city' => $get_all_sorting_city ? $get_all_sorting_city : $city,
            ),
            'list' => $project_list
        );

        header('Content-type: application/json');
        echo json_encode($total, JSON_PRETTY_PRINT);
        die();

        $all_app_sort = null;
        $all_surface_sort = null;
        $all_size_sort = null;
        $project_list = null;
        $totoal_query = null;
    }
}
function GET_FIND_UNIVERSITY_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'finduniversity',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $findUniversityCard_details = array();
        $get_findUniversityCard_details = get_post_meta($single->ID, 'findUniversity_content_group', true);
        if (!empty($get_findUniversityCard_details)) {
            foreach ($get_findUniversityCard_details as $singleFindUniversityCard_details) {
                $findUniversityCard_details[] = array(
                    'image' => $singleFindUniversityCard_details['findUniversity_content_image'],
                    'title' => $singleFindUniversityCard_details['findUniversity_content_title'],
                    'detail_link' => $singleFindUniversityCard_details['findUniversity_content_details_link'],
                );
            }
        }

        $findUniversityPopularCourse_details = array();
        $get_findUniversity_popular_course = get_post_meta($single->ID, 'findUniversity_popular_course_content_group', true);
        if (!empty($get_findUniversity_popular_course)) {
            foreach ($get_findUniversity_popular_course as $single_findUniversity_popular_course) {
                $findUniversityPopularCourse_details[] = array(
                    'title' => $single_findUniversity_popular_course['findUniversity_popular_course_content_title'],
                    'desc' => $single_findUniversity_popular_course['findUniversity_popular_course_content_desc'],
                    'image' => $single_findUniversity_popular_course['findUniversity_popular_course_content_image'],
                    'details_link' => $single_findUniversity_popular_course['findUniversity_popular_course_content_details'],
                );
            }
        }


        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'card_details' => $findUniversityCard_details,
            'popular_course_subtitle' => !empty(get_post_meta($single->ID, 'findUniversity_popular_course_content_subtitle', true)) ? get_post_meta($single->ID, 'findUniversity_popular_course_content_subtitle', true) : '',
            'popular_course' => $findUniversityPopularCourse_details
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
// Find a University End

// Testimonial Start
function GET_TESTIMONIAL($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'testimonialdetail',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);



        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'video_url' => !empty(get_post_meta($single->ID, 'testimonial_content_url', true)) ? get_post_meta($single->ID, 'testimonial_content_url', true) : '',
            'info' => !empty(get_post_meta($single->ID, 'testimonial_content_info', true)) ? get_post_meta($single->ID, 'testimonial_content_info', true) : '',
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}

function GET_TESTIMONIAL_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'testimonialdetail',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);




        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'video_url' => !empty(get_post_meta($single->ID, 'testimonial_content_url', true)) ? get_post_meta($single->ID, 'testimonial_content_url', true) : '',
            'info' => !empty(get_post_meta($single->ID, 'testimonial_content_info', true)) ? get_post_meta($single->ID, 'testimonial_content_info', true) : '',
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}

// Testimonial End

//SCHOLARSHIP START
function GET_SCHOLARSHIP($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'scholarships',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),

            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}
function GET_SCHOLARSHIP_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'scholarships',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),
            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
//SCHOLARSHIP END


//IELTS SCORE START
function GET_IELTS($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'ieltsscore',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),

            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}
function GET_IELTS_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'ieltsscore',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),
            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
//IELTS SCORE END

// Get Study In USA start
function GET_STUDY_IN_USA($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'studyinusa',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),

            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}
function GET_STUDY_IN_USA_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'studyinusa',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),
            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
// Get Study In USA end

// Get Study In UK start
function GET_STUDY_IN_UK($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'studyinuk',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),

            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}
function GET_STUDY_IN_UK_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'studyinuk',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),
            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
// Get Study In UK end

// Get Study In Australia start
function GET_STUDY_IN_AUSTRALIA($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'studyinaustralia',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),

            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}
function GET_STUDY_IN_AUSTRALIA_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'studyinaustralia',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),
            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
// Get Study In Australia end

// Get Study In Canada start
function GET_STUDY_IN_CANADA($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'studyincanada',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),

            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}
function GET_STUDY_IN_CANADA_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'studyincanada',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),
            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
// Get Study In Canada end



// Health Cover Start
function GET_HEALTH_COVER($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'healthcover',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),

            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}
function GET_HEALTH_COVER_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'healthcover',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),
            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
// Health Cover End

// University Ranking Start
function GET_UNIVERSITY_RANKING($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'universityranking',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),

            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}
function GET_UNIVERSITY_RANKING_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'universityranking',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),
            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
// University Ranking End

// University Ranking Start
function GET_STUDY($request)
{
    $blog_list = array();
    $args = null;
    $args = array(
        'post_type' => 'whystudyabroad',
        'post_status' => 'publish',
    );
    $myposts = get_posts($args);

    foreach ($myposts as $single) : setup_postdata($single);

        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);

        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_group_title'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),

            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list[] = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();
}
function GET_STUDY_BY_SLUG($request)
{
    $args = array(
        'name' => $request['slug'],
        'post_type' => 'whystudyabroad',
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'numberposts' => 1
    );
    $myposts = get_posts($args);

    $blog_list = array();

    foreach ($myposts as $single) : setup_postdata($single);


        $src = wp_get_attachment_url(get_post_thumbnail_id($single->ID), 'full', true);


        $scholarshipContent = array();
        $get_scholarshipContent = get_post_meta($single->ID, 'scholarship_details_group', true);
        if (!empty($get_scholarshipContent)) {
            foreach ($get_scholarshipContent as $singleScholarship) {
                $scholarshipContent[] = array(
                    'title' => $singleScholarship['scholarship_details_title'],
                    'subtitle' => $singleScholarship['scholarship_details_subtitle'],
                    'paragraph_one' => $singleScholarship['scholarship_details_group_desc_one'],
                    'btn_text' => $singleScholarship['scholarship_details_group_button_text'],
                    'btn_url' => $singleScholarship['scholarship_details_group_button_url'],
                    'paragraph_two' => $singleScholarship['scholarship_details_group_desc_two'],
                    'link_text' => $singleScholarship['scholarship_details_group_link_text'],
                    'link_url' => $singleScholarship['scholarship_details_group_link_url'],
                    'video_thumb' => $singleScholarship['scholarship_details_group_video_thumb'],
                    'video_url' => $singleScholarship['scholarship_details_group_video_url'],
                );
            }
        }

        $scholarshipAccordion = array();
        $get_scholarshipAccordion = get_post_meta($single->ID, 'scholarship_accordion_box_group', true);
        if (!empty($get_scholarshipAccordion)) {
            foreach ($get_scholarshipAccordion as $single_scholarshipAccordion) {
                $scholarshipAccordion[] = array(
                    'title' => $single_scholarshipAccordion['scholarship_accordion_box_group_title'],
                    'description' => $single_scholarshipAccordion['scholarship_accordion_box_group_desc'],
                );
            }
        }


        $addressScholarship = array();
        $get_addressScholarship = get_post_meta($single->ID, 'scholarship_card_box_group', true);
        if (!empty($get_addressScholarship)) {
            foreach ($get_addressScholarship as $single_addressScholarship) {
                $addressScholarship[] = array(
                    'name' => $single_addressScholarship['scholarship_card_box_group_name'],
                    'address' => $single_addressScholarship['scholarship_card_box_group_address'],
                    'phone' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'ielts' => $single_addressScholarship['scholarship_card_box_group_phone'],
                    'email' => $single_addressScholarship['scholarship_card_box_group_email'],
                    'timing' => $single_addressScholarship['scholarship_card_box_group_timing'],
                );
            }
        }

        $scholarshipVideoGallery = array();
        $get_scholarshipVideoGallery = get_post_meta($single->ID, 'scholarship_video_popup_group', true);
        if (!empty($get_scholarshipVideoGallery)) {
            foreach ($get_scholarshipVideoGallery as $single_scholarshipVideoGallery) {
                $scholarshipVideoGallery[] = array(
                    'author' => $single_scholarshipVideoGallery['scholarship_video_popup_author'],
                    'info' => $single_scholarshipVideoGallery['scholarship_video_popup_info'],
                    'desc' => $single_scholarshipVideoGallery['scholarship_video_popup_desc'],
                    'thumb' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_thumb'],
                    'thumb_url' => $single_scholarshipVideoGallery['scholarship_accordion_box_group_URL'],
                );
            }
        }

        $scholarshipPopularCourse = array();
        $get_scholarshipPopularCourse = get_post_meta($single->ID, 'scholarship_popular_courser_box_group', true);
        if (!empty($get_scholarshipPopularCourse)) {
            foreach ($get_scholarshipPopularCourse as $single_scholarshipPopularCourse) {
                $scholarshipPopularCourse[] = array(
                    'image' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_img'],
                    'title' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_title'],
                    'short_desc' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_desc'],
                    'url' => $single_scholarshipPopularCourse['scholarship_popular_courser_box_group_url'],
                );
            }
        }

        $array[] = array(
            'ID' => $single->ID,
            'post_author' => $single->post_author,
            'post_date' => $single->post_date,
            'post_feature_image' => $src,
            'post_date_gmt' => $single->post_date_gmt,
            'post_content' => $single->post_content,
            'post_title' => $single->post_title,
            'post_excerpt' => $single->post_excerpt,
            'post_status' => $single->post_status,
            'comment_status' => $single->comment_status,
            'ping_status' => $single->ping_status,
            'post_name' => $single->post_name,
            'post_parent' => $single->post_parent,
            'menu_order' => $single->menu_order,
            'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_details_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_details_subtitle', true) : '',
            'title' => !empty(get_post_meta($single->ID, 'scholarship_details_title', true)) ? get_post_meta($single->ID, 'scholarship_details_title', true) : '',
            'scholarship_content' => $scholarshipContent,
            'address' => array(
                'details' => $addressScholarship,
            ),
            'accordion' => array(
                'details' => $scholarshipAccordion,
            ),
            'table' => array(
                'title' => !empty(get_post_meta($single->ID, 'scholarship_table_box_title_field', true)) ? get_post_meta($single->ID, 'scholarship_table_box_title_field', true) : '',
                'desc' => !empty(get_post_meta($single->ID, 'scholarship_table_box_desc', true)) ? get_post_meta($single->ID, 'scholarship_table_box_desc', true) : '',
                'code' => !empty(get_post_meta($single->ID, 'scholarship_table_box_code', true)) ? get_post_meta($single->ID, 'scholarship_table_box_code', true) : '',
            ),
            'video_gallery' => $scholarshipVideoGallery,
            'popular_course' => $scholarshipPopularCourse,
            'cta' => array(
                'subtitle' => !empty(get_post_meta($single->ID, 'scholarship_cta_subtitle', true)) ? get_post_meta($single->ID, 'scholarship_cta_subtitle', true) : '',
                'left_text' => !empty(get_post_meta($single->ID, 'scholarship_cta_left_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_left_title', true) : '',
                'right_top' => !empty(get_post_meta($single->ID, 'scholarship_cta_right_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_right_title', true) : '',
                'right_bottom' => !empty(get_post_meta($single->ID, 'scholarship_cta_small_title', true)) ? get_post_meta($single->ID, 'scholarship_cta_small_title', true) : '',
            )
        );

        // return $array;
        $blog_list = $array;

    endforeach;
    wp_reset_postdata();

    header('Content-type: application/json');
    echo json_encode($blog_list, JSON_PRETTY_PRINT);
    die();

}
// University Ranking End

?>