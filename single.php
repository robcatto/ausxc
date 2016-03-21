<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <style type="text/css">
        .navBarMobile {
            display: none;
        }

        .brandBarMobile {
            box-shadow: 0 1px 4px rgba(0, 0, 0, .04);
        }
        #logo-color {
            fill: #323232;
        }

        article {
            padding-bottom: 30px;
            border-bottom: 1px solid #e2e2e2;
        }

    </style>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                // Include the single post content template.
                get_template_part( 'template-parts/content', 'single' );



                // End of the loop.
            endwhile;
            ?>



        </main>

        <nav class="navigation"> <?php the_post_navigation(); ?></nav>

    </div>


