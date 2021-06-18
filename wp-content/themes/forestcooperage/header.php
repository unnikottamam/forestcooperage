<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package forestcooperage
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/hnc3tjz.css">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="container-fluid">
            <div class="row header__row align-items-center">
                <div class="col-8">
                    <a href="<?php echo home_url(); ?>" class="header__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fc-logo.svg" alt="logo">
                    </a>
                </div>
                <div class="col-4 text-end">
                    <a href="#menutoggle" class="header__toggle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="menu">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="header__menu text-center text-white">
        <div class="container-fluid">
            <div class="row header__menurow align-items-center">
                <div class="col-12 header__menutop">
                    <div class="row align-items-center">
                        <div class="col-8 text-start">
                            <a href="<?php echo home_url(); ?>" class="header__logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/fc-logo.svg" alt="logo">
                            </a>
                        </div>
                        <div class="col-4 text-end">
                            <a href="#menutoggle" class="header__menuclose">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/close-icon.svg" alt="menu">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row header__menuinn align-items-center">
                        <div class="col-12">
                            <?php wp_nav_menu([
                              'container_class' => '',
                              'theme_location' => 'menu-1',
                              'container' => '',
                              'menu_class' => 'header__menulist',
                            ]); ?>
                        </div>
                        <div class="col-12">
                            <div class="header__widget">
                                <?php the_field(
                                  'footer_widget_1',
                                  'options'
                                ); ?>
                            </div>
                            <div class="footer__form">
                                <?php echo do_shortcode(
                                  '[contact-form-7 id="248" title="Footer form"]'
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 header__menufooter">
                    <p>
                        <a href="https://www.instagram.com/forestcooperage/" target="_blank">Instagram
                            @forestcooperage</a>
                        <span>|</span>
                        <a href="https://www.facebook.com/Forestcooperage/" target="_blank">Facebook
                            @forestcooperage</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php if (
      is_404() ||
      is_search() ||
      is_cart() ||
      is_checkout() ||
      is_product() ||
      is_account_page() ||
      is_wc_endpoint_url()
    ) {
      get_template_part('template-parts/content', 'banner');
    } ?>