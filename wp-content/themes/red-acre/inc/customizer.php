<?php

function red_acre_customizer($wp_customize)
{
    // 1 Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Hero Section', 'red-acre'),
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
            'section' => 'sec_hero',
            'mime_type' => 'image'
        )
    ));

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
