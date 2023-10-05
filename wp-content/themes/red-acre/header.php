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
                    <div class="row  d-flex flex-row justify-content-beetwen align-items-center">
                        <div class="col-2 logo d-flex align-items-center">
                            <?php
                            if (has_custom_logo()) {

                                the_custom_logo(); ?>
                                <span class="site-title-text-logo"><?php bloginfo(); ?></span>
                            <?php
                            } else {
                            ?>
                                <a class="site-title-text" href="<?php echo esc_url(home_url('/')); ?>"><span><?php bloginfo(); ?></span></a>
                            <?php

                            }
                            ?>
                        </div>
                        <div class="col my-4 d-flex flex-row justify-content-end">
                            <div class="row menu-area-wrapper d-flex flex-row justify-content-end align-items-center flex-nowrap">
                                <div class="col menu-area order-2 order-xxl-1">
                                    <nav class="main-nav">
                                        <a class="toggle-nav" href="#"><img src="/wp-content/uploads/2023/10/Vector.png" alt=""></a>
                                        <?php wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'depth' => 0,
                                            'menu_class' => 'container d-flex flex-column flex-sm-row justify-content-between ',
                                        )); ?>
                                    </nav>
                                </div>
                                <div class="col login-signup d-flex flex-row order-1 order-xxl-2">
                                    <button><a href="#">Login</a></button>
                                    <button><a href="#">Sign Up</a></button>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </section>

        </header>