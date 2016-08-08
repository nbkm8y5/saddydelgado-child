<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package saddydelgado
 */

//$nh_name = get_field('nh_name');
//$nh_city = get_field('nh_city');
//$nh_description = get_field('nh_description');
//$nh_image = get_field('nh_image');
//$nh_idx = get_field('nh_idx');
//$nh_contact = get_field('nh_contact');

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', get_post_format());?>

                <div class="row featured-items">
                    <div class="col-lg-6 featured-item-image"><a href="<?php the_field('nh_idx'); ?>"><img class="img-responsive"
                                                                                                           src="<?php the_field('nh_image'); ?>"
                                                                                                           alt="<?php the_field('nh_name'); ?>"/></a>
                    </div>
                    <div class="col-lg-6 featured-areas">
                        <div><a href="<?php the_field('nh_idx'); ?>"><h2><?php the_field('nh_name'); ?></h2></a>
                            <h3><?php the_field('nh_city'); ?></h3></div>

                        <div><?php the_field('nh_description'); ?><br></div>
                        <div><a href="<?php the_field('nh_contact'); ?>"><i class="fa fa-phone" aria-hidden="true"></i>
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
