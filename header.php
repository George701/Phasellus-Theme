<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="container">

        <!--  site-header  -->
        <header class="site-header">

            <div class="hd-search">
                <?php get_search_form();?>
            </div>

            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

            <h5>
                <?php bloginfo('description'); ?>
                <!-- Different content for specific page -->
                <?php if (is_page('services')) {?>
                - This is for the Services page.
                <?php }?>
            </h5>



            <nav class="site-nav clearfix">

                <?php

                    $args = array(
                        'theme_location' => 'primary'
                    );

                ?>

                <?php wp_nav_menu($args); ?>

            </nav>

        </header>


