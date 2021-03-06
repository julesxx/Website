<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php
// Start the loop.
while (have_posts()) :
the_post();
$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

    <header class="container_fluid ">
        <div class="content">
            <?php echo '   <div id="large-header" style="background: url(' . $url . '); background-repeat:no-repeat;  background-size:width:100%"  >' ?>
            <canvas></canvas>
            <h1 class="text-center posthead"> <?php echo esc_html(get_the_title()); ?> </h1>
        </div>
    </header>

<section class="container_fluid <?php if(in_category(5)){print_r("webdev");} elseif(in_category(11)){print_r("print");}?> ">
<div class="container">
    <div class="row">

        <?php
        $content = get_the_content();?>
        <div class='col-xs-12 col-md-6 text-left '>

            <?php echo $content;


            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */


            // If comments are open or we have at least one comment, load up the comment template.
            /*if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
*/
            // End the loop.
            endwhile;

            ?>
        </div>
        <div class="col-xs-12 col-md-6 text-center polaroids" >


           <?php

           if (class_exists('MultiPostThumbnails')) :

               MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
               MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image');
           endif;

           ?>

        </div>

    </div>

</div>
</section>

</main><!-- .site-main -->
</div><!-- .content-area -->


<?php get_footer(); ?>
