<?php
/**
 * Index File
 */

get_header();

?>

<style type="text/css">
    .ccfic {
        display: none;
    }
    
    .body {
        background: #f4f4f4;
    }
</style>

<?php if (has_post_thumbnail($post->ID)): ?>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

    <div class="featured-story-image"
         style="background-image: url('<?php echo $image[0]; ?>'); background-size: cover; background-position: 50% 50%">
        <div class="featured-story-image featured-story-image-overlay table">
            <div class="tableCell verticalAlignBottom">
                <div class="streamAreaWithSideBar">
                    <div class="site-padding max-width-640 centerDiv">

                        <div class="headline-kicker"><?php the_category( $post->ID ); ?></div>
                            <h2 class="featured-story-title">
                                <a class="featured-story-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                    </div>
                </div>
            </div>
        </div>


    </div>
<?php endif; ?>
<div class="streamAreaWithSideBar">
<div class="max-width-640 centerDiv">

<!-- Start the Stream of Posts Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Test if the current post is in category 3. -->
<!-- If it is, the div box is given the CSS class "post-cat-three". -->
<!-- Otherwise, the div box is given the CSS class "post". -->

<?php if ( is_sticky( 'true' ) ) : ?>
<div class="sticky">
    <?php else : ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="streamItem">
        <div class="post card streamItemPost site-padding">
            <?php endif; ?>

            <div class="streamItemPost-inner">

                <header>
                    <div class="block-postMeta">
                        <div class="author-image tableCell verticalAlignMiddle">
                            <?php userphoto_the_author_photo(); ?>
                        </div>

                        <div class="streamItemPost-meta postMetaInline-avatar tableCell verticalAlignMiddle"><div class="block"> <a class="byline author vcard"><?= __('', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></a></div>
                            <div class="inline"><?php the_date(); ?></div>
                            <div class="middotDivider inline"></div>
                            <div class="inline"><?php post_read_time(); ?></div>
                        </div>

                    </div>
                </header>

                <a href="<?php the_permalink(); ?>">
                    <div class="streamItemTitle"><h2 class="entry-title"> <?php the_title(); ?><br><h4 class="streamitemSubtitle"><?php the_subtitle(); ?></h4></h2></div>


                    <div class="feature-image-preview"><?php the_post_thumbnail();; ?></div>
                </a>





                <!-- Display the Post's content in a div box. -->

                <div class="entry">

                </div>



            </div>
        </div> <!-- closes the first div box -->
    </article>

    <!-- Stop The Loop (but note the "else:" - see next line). -->

    <?php endwhile; else : ?>


        <!-- The very first "if" tested to see if there were any Posts to -->
        <!-- display.  This "else" part tells what do if there weren't any. -->
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


        <!-- REALLY stop The Loop. -->
    <?php endif; ?>

</div>
</div>

<?php get_footer(); ?>
