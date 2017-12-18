<?php

if( !defined(THEME_IMG_PATH)){
    define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
}
function add_my_styles() {
    wp_register_style( 'bootstrap', '/wp-content/themes/JoelWinter/vendor/bootstrap/css/bootstrap.css');
    wp_enqueue_style( 'bootstrap' );
    wp_register_style( 'font-awesome', '/wp-content/themes/JoelWinter/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'font-awesome' );


    wp_register_style( 'fontOpen', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style( 'fontOpen' );
    wp_register_style( 'fontMerri', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');
    wp_enqueue_style( 'fontMerri' );

    wp_register_style( 'magnific', '/wp-content/themes/JoelWinter/vendor/magnific-popup/magnific-popup.css');
    wp_enqueue_style( 'magnific' );

    wp_register_style( 'creative', '/wp-content/themes/JoelWinter/css/creative.css');
    wp_enqueue_style( 'creative' );

    wp_register_style( 'normalize', '/wp-content/themes/JoelWinter/css/normalize.css');
    wp_enqueue_style( 'normalize' );

    wp_register_style( 'component', '/wp-content/themes/JoelWinter/css/component.css');
    wp_enqueue_style( 'component' );

}
add_action('init', 'add_my_styles');

function add_my_scripts() {
    if ( !is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', ( '/wp-content/themes/JoelWinter/vendor/jquery/jquery.min.js' ), false, null, true );
        wp_enqueue_script( 'jquery' );
        wp_register_script( 'bootstrap', '/wp-content/themes/JoelWinter/vendor/bootstrap/js/bootstrap.bundle.js', array('jquery'));
        wp_enqueue_script( 'bootstrap' );
        wp_register_script( 'jqueryeasing', '/wp-content/themes/JoelWinter/vendor/jquery-easing/jquery.easing.js',array('jquery'));
        wp_enqueue_script( 'jqueryeasing' );
        wp_register_script( 'magnific', '/wp-content/themes/JoelWinter/vendor/magnific-popup/jquery.magnific-popup.js',array('jquery'));
        wp_enqueue_script( 'magnific' );



        wp_register_script( 'anime', '/wp-content/themes/JoelWinter/js/anime.min.js');
        wp_enqueue_script( 'anime' );
        wp_register_script( 'scroll', '/wp-content/themes/JoelWinter/vendor/scrollreveal/scrollreveal.min.js');
        wp_enqueue_script( 'anime' );


        wp_register_script( 'tweenlite', '/wp-content/themes/JoelWinter/js/TweenLite.min.js');
        wp_enqueue_script( 'tweenlite' );
        wp_register_script( 'easepack', '/wp-content/themes/JoelWinter/js/EasePack.min.js');
        wp_enqueue_script( 'easepack' );
        wp_register_script( 'raf', '/wp-content/themes/JoelWinter/js/rAF.js');
        wp_enqueue_script( 'raf' );
        wp_register_script( 'demo', '/wp-content/themes/JoelWinter/js/demo-1.js');
        wp_enqueue_script( 'demo' );

        wp_register_script( 'creative', '/wp-content/themes/JoelWinter/js/creative.js');
        wp_enqueue_script( 'creative' );

    } }
add_action('wp_footer', 'add_my_scripts');




?>