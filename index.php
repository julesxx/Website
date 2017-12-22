<?php get_header(); ?>

    <header class="container_fluid ">
        <div class="content">
            <?php echo '   <div id="large-header" style="background: url(' . $url . '); background-repeat:no-repeat;  background-size:width:100%"  >' ?>
            <canvas></canvas>
            <img style="width: 25%; min-width: 200px;" class="main-title animated  tada" src="<?php echo get_bloginfo( 'template_directory' );?>/img/logo/logo.png" />        </div>
    </header>


<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Design und Entwicklung aus Leidenschaft</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">Als Student der Digitales Publizieren studiert, lege ich großen Wert auf das Zusammenspiel zwischen Design, Struktur und Qualität.
                    Durch eine Fülle an Auswahl zwischen Methoden und Frameworks, spezialisierte ich mich auf die unten aufgeführten Fähigkeiten. Vielleicht suchen Sie einen Macher in den unten aufgelisteten Bereichen. </p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Fähigkeiten</a>
            </div>
        </div>
    </div>
</section>

<section id="services">

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-xs-12 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-code text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Webentwicklung</h3>
                    <p class="text-muted mb-0">Sie haben eine Idee und brauchen Unterstüzung in der Konzeption oder in der Umsetzung. Ich biete ihnen von Node.js, Angular bis PHP Lösungsansätze!</p>
                </div>
            </div>

            <div class="col-lg-3 col-xs-12 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-microchip text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Appentwicklung</h3>
                    <p class="text-muted mb-0">Sie brauchen eine App die auf Android oder IOS funktioniert. Ich biete ihnen von nativer Entwicklung bis zur hybride App Unterstüzung!</p>
                </div>
            </div>

            <div class="col-xs-12 col-lg-6  text-center" id="morphing"> <svg width="50%" viewBox="0 0 140 140">
                    <g fill="none" fill-rule="evenodd">
                        <g fill="currentColor" fill-opacity=".15" transform="translate(0 6)">
                            <polygon points="70 0 136.574 48.369 111.145 126.631 28.855 126.631 3.426 48.369"></polygon>
                            <polygon points="70 18 119.455 53.931 100.565 112.069 39.435 112.069 20.545 53.931"></polygon>
                            <polygon points="70 34.86 101.727 57.911 89.609 95.209 50.391 95.209 38.273 57.911"></polygon>
                            <polygon points="70 50.898 84.864 61.697 79.186 79.171 60.814 79.171 55.136 61.697"></polygon>
                        </g>
                        <polygon class="polymorph" stroke-width="1" stroke="currentColor" points="70 26.11636724411994 119.44950780916942 60.24450780916941 101.51441409913643 119.49838286245877 52.099921908305845 99.51463275588006 5.542367244119939 55.11595314498351 "></polygon>
                    </g>
                </svg> </div>


            <div class="col-lg-3 col-xs-12 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-bar-chart text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">CMS</h3>
                    <p class="text-muted mb-0">Sie müssen ihre Websitestruktur neu aufsetzen und möchten ein CMS einsetzten, ich biete Ihnen Beratung und Modelle zum Umsetzen </p>
                </div>
            </div>
            <div class="col-lg-12 col-xs-12 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Printprodukte</h3>
                    <p class="text-muted mb-0">Sie planen ein neues Printprodukt- von dem Design bis zur Lieferung zu Ihnen - werden Sie von mir begleitet! </p>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="p-0" id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <hr class="my-4">
            </div>  <?php $catquery = new WP_Query( 'cat=7&posts_per_page=5' ); ?>


            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>

            <div class="col-lg-4 col-sm-6">




                <a class="portfolio-box" href="<?php the_permalink() ?>">
                    <img class="img-fluid" src="<?php echo the_post_thumbnail_url("full")?>" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Webentwicklung
                            </div>
                            <div class="project-name">
                                <?php the_title(); ?>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <?php endwhile;
            wp_reset_postdata();

            ?>

</section>


<!-- <section class="bg-dark text-white">
   <div class="container text-center">
     <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
     <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
   </div>
 </section>-->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Tretten Sie mit mir in Kontakt</h2>
                <hr class="my-4">
                <p class="mb-5">Sind Sie bereit ein Projekt mit mir zu Starten? Das ist toll! Rufen Sie mich an oder schreiben Sie mit eine E-Mail</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p>123-456-6789</p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="mailto:winter-design@outlook.de">winter-design@outlook.de</a>
                </p>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>