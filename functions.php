<?php


function add_my_styles() {
    wp_register_style( 'animate', '/wp-content/themes/JoelWinter/css/animate.css');
    wp_enqueue_style( 'animate' );
    wp_register_style( 'bootstrap', '/wp-content/themes/JoelWinter/vendor/bootstrap/css/bootstrap.css');
    wp_enqueue_style( 'bootstrap' );
    wp_register_style( 'font-awesome', '/wp-content/themes/JoelWinter/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'font-awesome' );


    wp_register_style( 'fontOpen', 'https://fonts.googleapis.com/css?family=Roboto+Mono:100,300,400,500,700');
    wp_enqueue_style( 'fontOpen' );
    wp_register_style( 'fontMerri', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');
    wp_enqueue_style( 'fontMerri' );



    wp_register_style( 'fontSerif', 'https://fonts.googleapis.com/css?family=Alegreya');
    wp_enqueue_style( 'fontSerif' );


    wp_register_style( 'magnific', '/wp-content/themes/JoelWinter/vendor/magnific-popup/magnific-popup.css');
    wp_enqueue_style( 'magnific' );


    wp_register_style( 'normalize', '/wp-content/themes/JoelWinter/css/normalize.css');
    wp_enqueue_style( 'normalize' );

    wp_register_style( 'component', '/wp-content/themes/JoelWinter/css/component.css');
    wp_enqueue_style( 'component' );

    wp_register_style( 'creative', '/wp-content/themes/JoelWinter/css/creative.css');
    wp_enqueue_style( 'creative' );

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


<?php add_theme_support( 'post-thumbnails' ); ?>

  <?php  function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logo.png);

            background-size: 100%;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>

<?php
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


if (class_exists('MultiPostThumbnails')) {

    new MultiPostThumbnails(array(
        'label' => 'Secondary Image',
        'id' => 'secondary-image',
        'post_type' => 'post'
    ) );

};

if (class_exists('MultiPostThumbnails')) {

    new MultiPostThumbnails(array(
        'label' => 'Third Image',
        'id' => 'third-image',
        'post_type' => 'post'
    ) );

};


require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'joelwinter' ),
) );

?>

<?php function is_subcategory( $cat_id = NULL ) {

    if ( !$cat_id )
        $cat_id = get_query_var( 'cat' );

    if ( $cat_id ) {

        $cat = get_category( $cat_id );
        if ( $cat->category_parent > 0 )
            return true;
    }

    return false;
}
?>
