<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>



    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.ico" type="image/png" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.ico" type="image/png" />



</head>
<?php if ( is_front_page()  ) {
    echo '<body  id="page-top" >';
}else{
    echo '<body >';
}?>






<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container ">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/img/logo/logo.png" style="width: 50px;"> Joel Winter </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


            <?php
            wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 10,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarResponsive',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
            );
            ?>

    </div>
</nav>






