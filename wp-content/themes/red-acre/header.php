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
            <section class="top-bar container">
                <div class="logo"><img src="wp-content\themes\red-acre\assets\images\logo.svg" alt="site-logo" srcset=""></div>
                <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'red-acre'); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>
                </nav>
                <div class="login-signup">
                    <button>Login</button>
                    <button>Sign Up</button>
                </div>
            </section>
        </header>