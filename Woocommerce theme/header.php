<!DOCTYPE html>
<html>
<head>
    <title></title>

    <?php wp_head();?>

</head>
<body <?php body_class('test');?>>


<header>
    <div class="container ">

        <div class="row ">

            <div class="col d-flex align-items-center justify-content-between">

                <a href="<?php bloginfo('url');?>">
                    <img src="<?php bloginfo('template_directory');?>/images/logo.svg.png" class="img-fluid logo">
                </a>

                <div class="search-form-container">

                    <?php get_search_form(); ?>

                </div>

                <?php
                wp_nav_menu(
                        array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'top-menu'
                        )
                )
                ?>

            </div>

        </div>

    </div>

</header>
