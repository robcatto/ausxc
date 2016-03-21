<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

<style type="text/css">
    .ccfic {
        width: 86.25%;
        margin: 0 auto;
        padding: 1.4em 0px;
        border-bottom: 1px solid #e2e2e2;
        font-size: 14px;
        font-family: sans-serif;
        color: #a1a1a1;
    }

</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header item-content" style="padding: 1.6em 0;">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->


    <div class="feature-image-full-bleed"><?php the_post_thumbnail( $size, $attr ); ?></div>
<div class="streamAreaWithSideBar">
    <div class="entry-content item-content item-body max-width-640 centerDiv">
        <?php
        the_content();


        ?>


    </div><!-- .entry-content -->
</div>


</article><!-- #post-## -->


