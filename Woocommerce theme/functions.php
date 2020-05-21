<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', '','all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() .  '/app.css', '', '','all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery',1 ,true );
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');


add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form'));

register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'footer-menu' =>'Footer Menu'
    )
);

//

add_image_size('post_image', 1000, 600, false);


register_sidebar(

    array(

        'name'=>'Page Sidebar',
        'id'=> 'page-sidebar',
        'class'=>'',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'

    )

);

register_sidebar(

    array(

        'name'=>'Blog Sidebar',
        'id'=> 'blog-sidebar',
        'class'=>'',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'

    )

);

register_sidebar(

    array(

        'name'=>'Woocommerce sidebar',
        'id'=>'woocommerce-sidebar',
        'class'=>'',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'

    )

);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'thumbnail_image_height' => 150,


        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



//function filterFunction() {
//  $input = document.getElementById("myInput");
//  $filter = input.value.toUpperCase();
//  $div = document.getElementById("myDropdown");
//  $a = div.getElementsByTagName("a");
//  for ($i = 0; i < a.length; i++) {
//      txtValue = a[i].textContent || a[i].innerText;
//      if (txtValue.toUpperCase().indexOf(filter) > -1) {
//          a[i].style.display = "";
//      } else {
//          a[i].style.display = "none";
//      }
//  }
//}