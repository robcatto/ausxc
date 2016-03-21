<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header item-content" style="padding: 1.6em 0; padding-top: 5px;">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->


    <div class="feature-image-full-bleed"><?php the_post_thumbnail(); ?></div>
    <div class="streamAreaWithSideBar">
        <div class="entry-content item-content item-body max-width-640 centerDiv">
            <?php
            the_content();


            ?>


        </div><!-- .entry-content -->
    </div>


</article><!-- #post-## -->