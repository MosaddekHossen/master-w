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

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Sidebar 01', 'master'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown footer.', 'master'),
        'before_widget' => '<li id="%1$s" class="single_footer_part %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Sidebar 02', 'master'),
        'id'            => 'sidebar-2',
        'description'   => __('Widgets in this area will be shown footer.', 'master'),
        'before_widget' => '<li id="%1$s" class="single_footer_part %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Sidebar 03', 'master'),
        'id'            => 'sidebar-3',
        'description'   => __('Widgets in this area will be shown footer.', 'master'),
        'before_widget' => '<li id="%1$s" class="single_footer_part %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Sidebar 04', 'master'),
        'id'            => 'sidebar-4',
        'description'   => __('Widgets in this area will be shown footer.', 'master'),
        'before_widget' => '<li id="%1$s" class="single_footer_part %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Sidebar 05', 'master'),
        'id'            => 'sidebar-5',
        'description'   => __('Widgets in this area will be shown footer.', 'master'),
        'before_widget' => '<li id="%1$s" class="single_footer_part %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

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

// master_footer
function master_footer()
{
    get_template_part('template-parts/footer/footer');
}

// Kirki class condition
if (class_exists('Kirki')) {
    include_once("include/master-kirki.php");
}

// nec files
include_once('include/common/scripts.php');
include_once('include/nav-walker.php');
include_once('include/template-functions.php');
