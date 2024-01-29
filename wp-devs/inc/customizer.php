<?php

function wpdevs_customizer( $wp_customize ) {
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'wp-devs'),
            'description' => __('Copyright Settings', 'wp-devs')
        )    
    );

            $wp_customize->add_setting(
                'set_copyright',
                array(
                    'type' => 'theme_mod',
                    'default' => __('Copyright X - All Rights Reserved', 'wp-devs'),
                    'sanitize_callback' => 'sanitize_text_field'
                )
                );
                $wp_customize->add_control(
                    'set_copyright',
                    array(
                        'label' => __('Copyright Information', 'wp-devs'),
                        'description' => __('Please, type your copyright information here', 'wp-devs'),
                        'section' => 'sec_copyright',
                        'type' => 'text'
                    )
                    );

      // 2 Hero
      $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Hero Sections ', 'wp-devs')
            
        )    
    );
                // Hero Image
                $wp_customize->add_setting(
                    'set_hero_background',
                    array(
                        'type' => 'theme_mod',

                        'sanitize_callback' => ''
                    )
                    );
                    $wp_customize->add_control(
                        new WP_Customize_Media_Control(
                            $wp_customize,
                            'set_hero_background', 
                            array(
                                'label' => __('Hero Image', 'wp-devs'),
                                'section' => 'sec_hero',
                                'mime_type' => 'images'
                            )
                            ));


                        // Set Hero Height
                        $wp_customize->add_setting(
                            'set_hero_height',
                            array(
                                'type' => 'theme_mod',
                                'default' => '800',
                                'sanitize_callback' => 'absint'
                            )
                            );
                            $wp_customize->add_control(
                                'set_hero_height',
                                array(
                                    'label' => __('Hero Height', 'wp-devs'),
                                    'description' => __('Please, type your hero height here', 'wp-devs'),
                                    'section' => 'sec_hero',
                                    'type' => 'number'
                                )
                                );

                // Title
                    $wp_customize->add_setting(
                        'set_hero_title',
                        array(
                            'type' => 'theme_mod',
                            'default' => __('Please, add a title', 'wp-devs'),
                            'sanitize_callback' => 'sanitize_text_field'
                        )
                        );
                        $wp_customize->add_control(
                            'set_hero_title',
                            array(
                                'label' => __('Hero Title', 'wp-devs'),
                                'description' => __('Please, type your title here'),
                                'section' => 'sec_hero',
                                'type' => 'text'
                            )
                            );
      
                          // Sub Title
                $wp_customize->add_setting(
                    'set_hero_subtitle',
                    array(
                        'type' => 'theme_mod',
                        'default' => __('Please, add a sub title', 'wp-devs'),
                        'sanitize_callback' => 'sanitize_textarea_field'
                    )
                    );
                    $wp_customize->add_control(
                        'set_hero_subtitle',
                        array(
                            'label' => __('Hero Subtitle', 'wp-devs'),
                            'description' => __('Please, type your sub title here', 'wp-devs'),
                            'section' => 'sec_hero',
                            'type' => 'textarea'
                        )
                        );

                             // Button Text
                $wp_customize->add_setting(
                    'set_hero_button_text',
                    array(
                        'type' => 'theme_mod',
                        'default' => __('Learn More','wp-devs'),
                        'sanitize_callback' => 'sanitize_text_field'
                    )
                    );
                    $wp_customize->add_control(
                        'set_hero_button_text',
                        array(
                            'label' => __('Hero Button Text','wp-devs'),
                            'description' => __('Please, type your button text here','wp-devs'),
                            'section' => 'sec_hero',
                            'type' => 'text'
                        )
                        );


                             // Button Link
                $wp_customize->add_setting(
                    'set_hero_button_link',
                    array(
                        'type' => 'theme_mod',
                        'default' => '#',
                        'sanitize_callback' => 'esc_url_raw'
                    )
                    );
                    $wp_customize->add_control(
                        'set_hero_button_link',
                        array(
                            'label' => __('Hero Button URL', 'wp-devs'),
                            'description' => __('Please, add your hero button link here', 'wp-devs'),
                            'section' => 'sec_hero',
                            'type' => 'url'
                        )
                        );


    	// 3. Blog
	$wp_customize->add_section( 
        'sec_blog', 
        array(
		    'title' => __('Blog Section','wp-devs')
	) );
    
            // Posts per page
            $wp_customize->add_setting( 
                'set_per_page', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
            ) );

            $wp_customize->add_control( 
                'set_per_page', 
                array(
                    'label' => __('Posts per page','wp-devs'),
                    'description' => __('How many items to display in the post list?','wp-devs'),			
                    'section' => 'sec_blog',
                    'type' => 'number'
            ) );

            // Post categories to include
            $wp_customize->add_setting( 
                'set_category_include', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_category_include', 
                array(
                    'label' => __('Post categories to include', 'wp-devs'), 
                    'description' => __('Comma separated values or single category ID', 'wp-devs'),
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );	

            // Post categories to exclude
            $wp_customize->add_setting( 
                'set_category_exclude', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_category_exclude', 
                array(
                    'label' => __('Post categories to exclude', 'wp-devs'),
                    'description' => __('Comma separated values or single category ID', 'wp-devs'),			
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );                    

    }

    add_action('customize_register', 'wpdevs_customizer');