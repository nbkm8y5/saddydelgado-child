<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package saddydelgado
 */

//$fh_name = get_field('fh_name');
//$fh_city = get_field('fh_city');
//$fh_description = get_field('fh_description');
//$fh_image = get_field('fh_image');
//$fh_idx = get_field('fh_idx');
//$fh_contact = get_field('fh_contact');

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', get_post_format());?>

                <div class="row featured-items">
                <div class="col-lg-6 featured-item-image"><a href="<?php the_field('fh_idx'); ?>"><img class="img-responsive"
                                                                                   src="<?php the_field('fh_image'); ?>"
                                                                                   alt="<?php the_field('fh_name'); ?>"/></a>
                </div>
                <div class="col-lg-6 featured-areas">
                    <div><a href="<?php the_field('fh_idx'); ?>"><h2><?php the_field('fh_name'); ?></h2></a>
                        <h3><?php the_field('fh_city'); ?></h3></div>

                    <div><?php the_field('fh_description'); ?><br></div>
                    <div><a href="<?php the_field('fh_contact'); ?>"><i class="fa fa-phone" aria-hidden="true"></i>
                             Contact Saddy Today</a></div>
                </div>
            </div>

                <?php the_post_navigation();
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
