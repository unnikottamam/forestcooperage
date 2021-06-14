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
                    <a href="<?php echo home_url(); ?>" class="header__toggle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="menu">
                    </a>
                </div>
            </div>
        </div>
    </header>