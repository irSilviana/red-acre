<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site ">
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="row py-2 d-flex flex-row justify-content-beetwen align-items-center">
                        <div class="col logo d-flex align-items-center">
                            <?php
                            if (has_custom_logo()) {

                                the_custom_logo(); ?>
                                <span class="site-title-text"><?php bloginfo(); ?></span>
                            <?php
                            } else {
                            ?>
                                <a class="site-title-text" href="<?php echo esc_url(home_url('/')); ?>"><span><?php bloginfo(); ?></span></a>
                            <?php

                            }
                            ?>
                        </div>
                        <div class="col">
                            <div class="row d-flex flex-row justify-content-end align-items-center flex-nowrap">
                                <div class="col menu-area">
                                    <nav class="main-nav">
                                        <!-- <button class="check-button">
                                    <div class="menu-icon">
                                        <div class="bar1"></div>
                                        <div class="bar2"></div>
                                        <div class="bar3"></div>
                                    </div>
                                </button> -->
                                        <?php wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'depth' => 0,
                                            'menu_class' => 'd-flex flex-column flex-sm-row justify-content-between ',
                                        )); ?>
                                    </nav>
                                </div>
                                <div class="col login-signup d-flex flex-row ">
                                    <button><a href="#">Login</a></button>
                                    <button><a href="#">Sign Up</a></button>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </section>

        </header>