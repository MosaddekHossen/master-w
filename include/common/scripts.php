<?php
function add_theme_scripts()
{
    wp_enqueue_style('all', get_template_directory_uri() . '/assets/css/all.css', array(), '1.1', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.1', 'all');
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.1', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.1', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.1', 'all');
    wp_enqueue_style('lightslider', get_template_directory_uri() . '/assets/css/lightslider.min.css', array(), '1.1', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1', 'all');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.1', 'all');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all');
    wp_enqueue_style('price_rangs', get_template_directory_uri() . '/assets/css/price_rangs.css', array(), '1.1', 'all');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.min.css', array(), '1.1', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.1', 'all');
    wp_enqueue_style('slick-min', get_template_directory_uri() . '/assets/css/slick.min.css', array(), '1.1', 'all');
    wp_enqueue_style('swiper-min', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '1.1', 'all');
    wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '1.1', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), 1.1, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1.1, true);
    wp_enqueue_script('contact', get_template_directory_uri() . '/assets/js/contact.js', array(), 1.1, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1.1, true);
    wp_enqueue_script('gmaps', get_template_directory_uri() . '/assets/js/gmaps.min.js', array(), 1.1, true);
    wp_enqueue_script('jquery-1', get_template_directory_uri() . '/assets/js/jquery-1.12.1.min.js', array(), 1.1, true);
    wp_enqueue_script('jquery-3', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js', array(), 1.1, true);
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array(), 1.1, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), 1.1, true);
    wp_enqueue_script('downCount', get_template_directory_uri() . '/assets/js/jquery.downCount.js', array(), 1.1, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), 1.1, true);
    wp_enqueue_script('form', get_template_directory_uri() . '/assets/js/jquery.form.js', array(), 1.1, true);
    wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), 1.1, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), 1.1, true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), 1.1, true);
    wp_enqueue_script('lightslider', get_template_directory_uri() . '/assets/js/lightslider.min.js', array(), 1.1, true);
    wp_enqueue_script('mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array(), 1.1, true);
    wp_enqueue_script('masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.js', array(), 1.1, true);
    wp_enqueue_script('masonry-min', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array(), 1.1, true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1.1, true);
    wp_enqueue_script('particles', get_template_directory_uri() . '/assets/js/particles.min.js', array(), 1.1, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 1.1, true);
    wp_enqueue_script('price_rangs', get_template_directory_uri() . '/assets/js/price_rangs.js', array(), 1.1, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), 1.1, true);
    wp_enqueue_script('stellar', get_template_directory_uri() . '/assets/js/stellar.js', array(), 1.1, true);
    wp_enqueue_script('swiper-jquery', get_template_directory_uri() . '/assets/js/swiper.jquery.js', array(), 1.1, true);
    wp_enqueue_script('swiper-min', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), 1.1, true);
    wp_enqueue_script('swiper_custom', get_template_directory_uri() . '/assets/js/swiper_custom.js', array(), 1.1, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), 1.1, true);
    wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array(), 1.1, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
