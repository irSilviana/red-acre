<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="logo">Logo</div>
                <div class="menu-area">About | Affilliates | Trading | etc</div>
                <div class="login-signup">
                    <button>Login</button>
                    <button>Sign Up</button>
                </div>
            </section>
        </header>