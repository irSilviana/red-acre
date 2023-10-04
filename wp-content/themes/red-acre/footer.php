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
                <!-- <h2>
                    Help
                </h2>
                <ul class="footer-nav">
                    <li>FAQ</li>
                    <li>Contact Us</li>
                </ul> -->
            </div>
        </div>
        <div class="container footer-disclosure row order-sm-2">
            <p>RISK DISCLOSURE:*The services and information provided by The Bored Traders Club are not directed at citizens or residents in the USA. Additionally, they are not intended for distribution to or used by any individual in any jurisdiction where such distribution would be contrary to local law or regulation.
            </p>
        </div>
        <div class="container footer-social-wrapper d-flex justify-content-center order-sm-1">
            <div class="social-icon "><img src="/wp-content/uploads/2023/10/Instagram.png" alt=""></div>
            <div class="social-icon"><img src="/wp-content/uploads/2023/10/Twitter.png" alt=""></div>
            <div class="social-icon"><img src="/wp-content/uploads/2023/10/Facebook.png" alt=""></div>
            <div class="social-icon"><img src="/wp-content/uploads/2023/10/LinkedIn.png" alt=""></div>
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