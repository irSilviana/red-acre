<footer class="site-footer ">
    <section class="footer d-flex flex-column">
        <div class="container footer-nav-wrapper row d-flex flex-wrap flex-md-nowrap flex-column flex-sm-row justify-content-md-between align-items-start order-sm-0">
            <div class="footer-main-nav order-lg-0">
                <!-- Trading -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer_1',
                    'menu_class' => 'footer-nav',
                    'depth' => 2,
                )) ?>
            </div>
            <div class="footer-main-nav order-lg-5">
                <!-- Resources -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer_6',
                    'menu_class' => 'footer-nav',
                    'depth' => 2,
                )) ?>
            </div>
            <div class="footer-main-nav order-lg-1">
                <!-- Affiliate -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer_2',
                    'menu_class' => 'footer-nav',
                    'depth' => 2,
                )) ?>
            </div>
            <div class="footer-main-nav order-lg-3">
                <!-- Learn -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer_4',
                    'menu_class' => 'footer-nav',
                    'depth' => 2,
                )) ?>
            </div>
            <div class="footer-main-nav order-lg-4">
                <!-- About -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer_5',
                    'menu_class' => 'footer-nav',
                    'depth' => 2,
                )) ?>
            </div>
            <div class="footer-main-nav order-lg-2">
                <!-- Help -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer_3',
                    'menu_class' => 'footer-nav',
                    'depth' => 2,
                )) ?>
            </div>
        </div>
        <div class="container footer-disclosure row order-sm-2">
            <p><?php esc_html_e(get_theme_mod('set_disclosure', __('RISK DISCLOSURE:*The services and information provided by The Bored Traders Club are not directed at citizens or residents in the USA.', 'red-acre'))); ?></p>
        </div>
        <div class="container footer-social-wrapper d-flex justify-content-center order-sm-1">
            <?php
            // Get data for the social media icons
            $set_sosmed_icon_1_img = wp_get_attachment_url(get_theme_mod('set_sosmed_icon_1_img'));
            $set_sosmed_icon_2_img = wp_get_attachment_url(get_theme_mod('set_sosmed_icon_2_img'));
            $set_sosmed_icon_3_img = wp_get_attachment_url(get_theme_mod('set_sosmed_icon_3_img'));
            $set_sosmed_icon_4_img = wp_get_attachment_url(get_theme_mod('set_sosmed_icon_4_img'));

            // Get data for the social media URLs
            $set_sosmed_icon_1_link =  get_theme_mod('set_sosmed_icon_1_link');
            $set_sosmed_icon_2_link =  get_theme_mod('set_sosmed_icon_2_link');
            $set_sosmed_icon_3_link =  get_theme_mod('set_sosmed_icon_3_link');
            $set_sosmed_icon_4_link =  get_theme_mod('set_sosmed_icon_4_link');
            ?>

            <div class="social-icon ">
                <a href="<?php echo esc_url($set_sosmed_icon_1_link) ?>" target="_blank" rel="noopener noreferrer"><img src="<? echo esc_url($set_sosmed_icon_1_img); ?>" alt=""></a>
            </div>
            <div class="social-icon ">
                <a href="<?php echo esc_url($set_sosmed_icon_2_link) ?>" target="_blank" rel="noopener noreferrer"><img src="<? echo esc_url($set_sosmed_icon_2_img); ?>" alt="">
                </a>
            </div>
            <div class="social-icon ">
                <a href="<?php echo esc_url($set_sosmed_icon_3_link) ?>" target="_blank" rel="noopener noreferrer"><img src="<? echo esc_url($set_sosmed_icon_3_img); ?>" alt=""></a>
            </div>
            <div class="social-icon ">
                <a href="<?php echo esc_url($set_sosmed_icon_4_link) ?>" target="_blank" rel="noopener noreferrer"><img src="<? echo esc_url($set_sosmed_icon_4_img); ?> " alt=""></a>
            </div>

        </div>

        <div class="container footer-legal-nav row order-sm-3">
            <ul class="d-flex  flex-column flex-sm-row justify-content-center">
                <?php wp_nav_menu(array(
                    'theme_location' => 'legal',
                    'menu_class' => 'footer-legal-nav ul d-flex flex-column flex-sm-row justify-content-center',
                    'depth' => 1,
                )) ?>
            </ul>
        </div>
    </section>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>