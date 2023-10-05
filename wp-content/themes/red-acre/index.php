<?php get_header(); ?>
<div id="content" class="site-content container px-0">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?
            // Get data for the Hero section
            $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
            $hero_title = get_theme_mod('set_hero_title', __('Please type some title', 'red-acre'));
            $hero_subtitle = get_theme_mod('set_hero_subtitle', __('Please type some text for the subtitle', 'red-acre'));

            $list_1 = get_theme_mod('set_hero_list_1', __('Please type some title', 'red-acre'));
            $list_2 = get_theme_mod('set_hero_list_2', __('Please type some title', 'red-acre'));
            $list_3 = get_theme_mod('set_hero_list_3', __('Please type some title', 'red-acre'));
            ?>

            <section class="hero container row d-flex align-items-start align-items-lg-center px-3 py-4 mx-0" style="background-image:url('<?php echo esc_url($hero_background); ?>')">
                <div class="col-sm-12 col-lg-6 col-xl-5 col-xxl-4 mb-5 pb-5 px-0">
                    <h1><?php echo esc_html($hero_title); ?></h1>
                    <p class="sub-heading"><?php echo nl2br(esc_html($hero_subtitle)); ?></p>
                    <ul>
                        <?php
                        if ($list_1) { ?>
                            <li>
                                <? echo esc_html($list_1); ?>
                            </li>
                        <?php
                        }
                        ?>
                        <?php
                        if ($list_2) { ?>
                            <li>
                                <? echo esc_html($list_2); ?>
                            </li>
                        <?php
                        }
                        ?>
                        <?php
                        if ($list_3) { ?>
                            <li>
                                <? echo esc_html($list_3); ?>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </section>
            <section class="services container row px-3 pt-4 mx-0">
                <div class="col-12">
                    <h2>
                        <?php esc_html_e('Tools to Compliment Your Trading', 'red-acre') ?>
                    </h2>
                    <p class="sub-heading text-start text-md-center py-4 py-sm-5">
                        <?php esc_html_e('Access news & economic calendar, technical indicators & charts, Forex Calculators, educational resources and many more tools to help you excel.', 'red-acre') ?></p>
                </div>
                <div class="col-12">
                    <div class="row d-flex flex-wrap flex-column flex-lg-row justify-content-between align-items-center services-items">
                        <div class="col col-lg-3 text-center service-item">
                            <img src="/wp-content/uploads/2023/10/economic-calendar.png" alt="">
                            <h3>
                                Economic Calendar
                            </h3>
                            <p>
                                Access all major events & economic news that impact financial markets.
                            </p>
                        </div>
                        <div class="col col-lg-3 text-center service-item">
                            <img src="/wp-content/uploads/2023/10/trading-calculator.png" alt="">
                            <h3>
                                Trading Calculators
                            </h3>
                            <p>
                                Make trading calculations in real-time & forecast the potential growth of your account.
                            </p>
                        </div>
                        <div class="col col-lg-3 text-center service-item">
                            <img src="/wp-content/uploads/2023/10/educational-resources.png" alt="">
                            <h3>
                                Educational Resources
                            </h3>
                            <p>
                                From top tips & trading psychology to more ways to earn, we make learning more fun.
                            </p>
                        </div>
                    </div>
                </div>

            </section>
        </main>
    </div>
</div>

<?php get_footer(); ?>