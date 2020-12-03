<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Playfair+Display:700,700i,900&display=swap"
          rel="stylesheet" type="text/css"/>
    <style>
        .d-readmore {
            line-height: 1.8;
            min-height: 3px;
            overflow: hidden;
        }

        .d-readmore_btn {
            cursor: pointer;
        }
    </style>


    <!-- Document Title
    ============================================= -->
    <!--    <title>Interior Design Studio | Canvas</title>-->
    <?php wp_head(); ?>
</head>

<body class="stretched side-push-panel">


<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="header-size-md" data-sticky-shrink="false">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row justify-content-between">

                    <!-- Logo
                    ============================================= -->
                    <?php

                    if (function_exists('the_custom_logo')) {

                        $custom_logo_id = get_theme_mod('custom_logo');

                        $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
//                            var_dump($logo);
//                            exit();

                    } ?>

                    <div id="logo" class="mr-lg-0 py-2">
                        <a href="<?= get_home_url(); ?>" class="standard-logo"><img src="<?php echo $logo; ?>"
                                                                                    alt="Canvas Logo"></a>
                        <a href="<?= get_home_url(); ?>" class="retina-logo"><img src="<?php echo $logo; ?>"
                                                                                  alt="Canvas Logo"></a>
                    </div><!-- #logo end -->


                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <!--                    <nav class="primary-menu with-arrows">-->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'menu_class' => 'menu-container',
                        'container_class' => 'primary-menu',
                        'walker' => new  Cooperative_Nav_Walker()
                    )); ?>
                    <!--                    </nav>-->
                    <!-- #primary-menu end -->

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>

    </header><!-- #header end -->
    <?php if (!is_front_page() && !is_single()) :
    ?>
    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container">
            <?php
            if (is_category()) :
                the_archive_description('<h2 class="h1" style="font-weight: 800">', '</h2>');
            endif;
            ?>
            <?php if (!is_category()) : ?>
                <h1><?php the_title(); ?></h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= get_home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                </ol>
            <?php else: ?>
                <h1><?php single_cat_title(); ?></h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= get_home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php single_cat_title(); ?></li>
                </ol>

            <?php endif; ?>
        </div>

    </section><!-- #page-title end -->
<?php endif; ?>