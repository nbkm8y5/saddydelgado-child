<?php
/**
 * The template for displaying archive featured areas pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
            if (have_posts()) : ?>

                <header class="page-header">
                    <!--Page Title-->
                    <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    the_archive_description('<div class="taxonomy-description">', '</div>');
                    ?>
                </header><!-- .page-header -->
                <!--The Content-->
                <?php
                /* Start the Loop */
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                // query
                $neighborhoods = new WP_Query(array(
                    'post_type' => 'neighborhoods',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 10,
                    'meta_key' => 'nh_name',
                    'orderby' => 'meta_value',
                    'order' => 'ASC'
                ));

                while ($neighborhoods->have_posts()) : $neighborhoods->the_post(); ?>

                    <div class="row featured-items">
                        <div class="col-lg-6"><a href="<?php the_field('nh_idx'); ?>"><img class="img-responsive"
                                                                                           src="<?php the_field('nh_image'); ?>"
                                                                                           alt="<?php the_field('nh_name'); ?>"/></a>
                        </div>
                        <div class="col-lg-6 featured-areas">
                            <div><a href="<?php the_field('nh_idx'); ?>"><h2><?php the_field('nh_name'); ?></h2></a>
                                <h3><?php the_field('nh_city'); ?></h3></div>

                            <div><?php the_field('nh_description'); ?><br></div>
                            <div><a href="<?php the_field('nh_contact'); ?>">Contact Saddy Today</a></div>
                        </div>
                    </div>
                    <!--                    /*-->
                    <!--                     * Include the Post-Format-specific template for the content.-->
                    <!--                     * If you want to override this in a child theme, then include a file-->
                    <!--                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.-->
                    <!--                     */-->
                    <!--                    get_template_part( 'template-parts/content', get_post_format() );-->

                <?php endwhile;

//                the_posts_navigation();
                wp_pagenavi();

            else :

                get_template_part('template-parts/content', 'none');

            endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
