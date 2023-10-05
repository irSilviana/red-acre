<?php

function red_acre_customizer($wp_customize)
{
    // 1 Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Main Page Hero Section', 'red-acre'),
        )
    );

    // Hero Backround
    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'set_hero_background',
        array(
            'label' => __('Hero Image', 'red-acre'),
            'description' => __('Recommended size 1130 x 958 pixels'),
            'section' => 'sec_hero',
            'mime_type' => 'image'
        )
    ));

    // Title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'red-acre'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => __('Hero Title', 'red-acre'),
            'description' => __('Please, type your title here', 'red-acre'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // Subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'red-acre'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => __('Hero Subtitle', 'red-acre'),
            'description' => __('Please, type your subtitle here', 'red-acre'),
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    // 3 List data
    $wp_customize->add_setting(
        'set_hero_list_1',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some list_1', 'red-acre'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_list_1',
        array(
            'label' => __('Hero list 1', 'red-acre'),
            'description' => __('Please, type your first list here', 'red-acre'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'set_hero_list_2',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some list_2', 'red-acre'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_list_2',
        array(
            'label' => __('Hero list 2', 'red-acre'),
            'description' => __('Please, type your second list here', 'red-acre'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'set_hero_list_3',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some list_3', 'red-acre'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_list_3',
        array(
            'label' => __('Hero list 3', 'red-acre'),
            'description' => __('Please, type your third list here', 'red-acre'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // 2 Social Media
    $wp_customize->add_section(
        'sec_sosmed',
        array(
            'title' => __('Social Media Section', 'red-acre'),
        )
    );

    // Social Media Icons
    // icon 1
    $wp_customize->add_setting(
        'set_sosmed_icon_1_img',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'set_sosmed_icon_1_img',
        array(
            'label' => __('Icon 1', 'red-acre'),
            'description' => __('Social media icon 1', 'red-acre'),
            'section' => 'sec_sosmed',
            'mime_type' => 'image'
        )
    ));

    $wp_customize->add_setting(
        'set_sosmed_icon_1_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_sosmed_icon_1_link',
        array(
            'label' => __('Social Media 1 URL', 'red-acre'),
            'description' => __('Please, type your social media URL address here', 'red-acre'),
            'section' => 'sec_sosmed',
            'type' => 'url'
        )
    );

    // icon 2
    $wp_customize->add_setting(
        'set_sosmed_icon_2_img',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'set_sosmed_icon_2_img',
        array(
            'label' => __('Icon 2', 'red-acre'),
            'description' => __('Social media icon 2', 'red-acre'),
            'section' => 'sec_sosmed',
            'mime_type' => 'image'
        )
    ));

    $wp_customize->add_setting(
        'set_sosmed_icon_2_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_sosmed_icon_2_link',
        array(
            'label' => __('Social Media 2 URL', 'red-acre'),
            'description' => __('Please, type your social media URL address here', 'red-acre'),
            'section' => 'sec_sosmed',
            'type' => 'url'
        )
    );

    // icon 3
    $wp_customize->add_setting(
        'set_sosmed_icon_3_img',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'set_sosmed_icon_3_img',
        array(
            'label' => __('Icon 3', 'red-acre'),
            'description' => __('Social media icon 3', 'red-acre'),
            'section' => 'sec_sosmed',
            'mime_type' => 'image'
        )
    ));

    $wp_customize->add_setting(
        'set_sosmed_icon_3_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_sosmed_icon_3_link',
        array(
            'label' => __('Social Media 3 URL', 'red-acre'),
            'description' => __('Please, type your social media URL address here', 'red-acre'),
            'section' => 'sec_sosmed',
            'type' => 'url'
        )
    );

    // icon 4
    $wp_customize->add_setting(
        'set_sosmed_icon_4_img',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'set_sosmed_icon_4_img',
        array(
            'label' => __('Icon 4', 'red-acre'),
            'description' => __('Social media icon 4', 'red-acre'),
            'section' => 'sec_sosmed',
            'mime_type' => 'image'
        )
    ));

    $wp_customize->add_setting(
        'set_sosmed_icon_4_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_sosmed_icon_4_link',
        array(
            'label' => __('Social Media 4 URL', 'red-acre'),
            'description' => __('Please, type your social media URL address here', 'red-acre'),
            'section' => 'sec_sosmed',
            'type' => 'url'
        )
    );

    // 3 Disclosure Section
    $wp_customize->add_section(
        'sec_disclosure',
        array(
            'title' => __('Disclosure Settings', 'red-acre'),
            'description' => __('Disclosure section on the footer area', 'red-acre')
        )
    );

    $wp_customize->add_setting(
        'set_disclosure',
        array(
            'type' => 'theme_mod',
            'default' => __('RISK DISCLOSURE:*The Services And Information Provided By The Bored Traders Club Are Not Directed At Citizens Or Residents In The USA.', 'red-acre'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_disclosure',
        array(
            'label' => __('Disclosure Information', 'red-acre'),
            'description' => __('Please, type your full disclosure here', 'red-acre'),
            'section' => 'sec_disclosure',
            'type' => 'textarea'
        )
    );
}

add_action('customize_register', 'red_acre_customizer');
