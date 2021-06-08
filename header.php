<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

// WordPress 5.2 wp_body_open implementation
if (function_exists('wp_body_open')) {
    wp_body_open();
} else {
    do_action('wp_body_open');
}

?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#content"><?php esc_html_e('Skip to content', 'wp-bootstrap-starter'); ?></a>
    <?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')): ?>
    <header id="overhead" role="banner">
        <div class="empty-space"></div>
        <div class="logo-nav">
            <?php if (get_theme_mod('wp_bootstrap_starter_logo')): ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_theme_mod('wp_bootstrap_starter_logo')); ?>"
                         alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                </a>
            <?php else : ?>
                <a class="site-title"
                   href="<?php echo esc_url(home_url('/')); ?>"><?php esc_url(bloginfo('name')); ?></a>
            <?php endif; ?>

        </div>
        <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 190" version="1.1"
             xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(17, 122, 139, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(17, 122, 139, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                  d="M0,76L80,88.7C160,101,320,127,480,120.3C640,114,800,76,960,60.2C1120,44,1280,51,1440,53.8C1600,57,1760,57,1920,57C2080,57,2240,57,2400,76C2560,95,2720,133,2880,123.5C3040,114,3200,57,3360,53.8C3520,51,3680,101,3840,123.5C4000,146,4160,139,4320,139.3C4480,139,4640,146,4800,148.8C4960,152,5120,152,5280,152C5440,152,5600,152,5760,145.7C5920,139,6080,127,6240,101.3C6400,76,6560,38,6720,22.2C6880,6,7040,13,7200,31.7C7360,51,7520,82,7680,95C7840,108,8000,101,8160,98.2C8320,95,8480,95,8640,79.2C8800,63,8960,32,9120,44.3C9280,57,9440,114,9600,133C9760,152,9920,133,10080,117.2C10240,101,10400,89,10560,95C10720,101,10880,127,11040,136.2C11200,146,11360,139,11440,136.2L11520,133L11520,190L11440,190C11360,190,11200,190,11040,190C10880,190,10720,190,10560,190C10400,190,10240,190,10080,190C9920,190,9760,190,9600,190C9440,190,9280,190,9120,190C8960,190,8800,190,8640,190C8480,190,8320,190,8160,190C8000,190,7840,190,7680,190C7520,190,7360,190,7200,190C7040,190,6880,190,6720,190C6560,190,6400,190,6240,190C6080,190,5920,190,5760,190C5600,190,5440,190,5280,190C5120,190,4960,190,4800,190C4640,190,4480,190,4320,190C4160,190,4000,190,3840,190C3680,190,3520,190,3360,190C3200,190,3040,190,2880,190C2720,190,2560,190,2400,190C2240,190,2080,190,1920,190C1760,190,1600,190,1440,190C1280,190,1120,190,960,190C800,190,640,190,480,190C320,190,160,190,80,190L0,190Z"></path>
        </svg>
    </header><!-- #masthead -->

    <?php if (is_front_page() && !get_theme_mod('header_banner_visibility')): ?>
        <div id="page-sub-header">
            <div class="container flex flex-end">
                <div class="circle-card card-1" tabindex="0">
                    <span class="card-icon">
                        <i class="fa fa-laptop-code"></i>
                    </span>
                    <h1 class="card-title">This is a title</h1>
                    <p class="card-description">Lorem ipsum dolor sit amet and this is all the lorem ipsum text I
                        remember</p>
                </div>

                <div class="circle-card card-2" tabindex="0">
                    <span class="card-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </span>
                    <h1 class="card-title">This is a title</h1>
                    <p class="card-description">Lorem ipsum dolor sit amet and this is all the lorem ipsum text I
                        remember</p>
                </div>

                <div class="circle-card card-3" tabindex="0">
                    <span class="card-icon">
                        <i class="fa fa-cat"></i>
                    </span>
                    <h1 class="card-title">This is a title</h1>
                    <p class="card-description">Lorem ipsum dolor sit amet and this is all the lorem ipsum text I
                        remember</p>
                </div>

                <div class="square-card" tabindex="0">
                    <span class="card-icon">
                        <i class="fa fa-cat"></i>
                    </span>
                    <h1 class="card-title">This is a title</h1>
                    <p class="card-description">Lorem ipsum dolor sit amet and this is all the lorem ipsum text I
                        remember</p>
                </div>
            </div>
            <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
        </div>
    <?php endif; ?>
    <div id="content" class="site-content">
        <div class="container">
            <div class="row">
<?php endif; ?>