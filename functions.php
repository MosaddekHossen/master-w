<?php

/**
 * Essential theme supports
 * */
function theme_setup()
{
    /**  thumbnails **/
    add_theme_support("post-thumbnails");

    /** automatic feed link**/
    add_theme_support('automatic-feed-links');

    /*
      * Make theme available for translation.
      * Translations can be filed in the /languages/ directory.
      * If you're building a theme based on sectox, use a find and replace
      * to change 'sectox' to the name of your theme in all the template files.
  */

    /** tag-title **/
    add_theme_support('title-tag');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('post-formats', array(
        'image',
        'video',
        'audio',
        'gallery',
        'quote'
    ));

    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'master'),
            // 'footer-menu' => __('Footer Menu', 'harry'),
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

function master_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'menu_class'      => 'navbar-nav',
            'menu_id'         => '',
            'container'       => 'false',
            'fallback_cb'     => 'Master_Walker_Nav_Menu::fallback',
            'walker'     => new Master_Walker_Nav_Menu,
        )
    );
}

// master_header
function master_header()
{
    get_template_part('template-parts/header/header');
}

// Kirki class condition
if (class_exists('Kirki')) {
    include_once("include/master-kirki.php");
}

// nec files
include_once('include/common/scripts.php');
include_once('include/nav-walker.php');
include_once('include/template-functions.php');
