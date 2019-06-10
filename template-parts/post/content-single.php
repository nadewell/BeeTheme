<?php
/**
 * The post content template for single post
 *
 * This is the template that displays the post content
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NadeWp
 * @since 1.0
 * @version 1.0
 */
?>
<article <?php post_class(); ?>>
    <div class="post-thumb" data-image="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' )[0]; ?>">
        <h2 class="post-title"><?php the_title(); ?></h2>
    </div>
    <div class="post-meta">
        <ul>
            <li><?php the_date(); ?></li>
            <li><?php the_category(); ?></li>
            <li><?php the_author(); ?></li>
        </ul>
    </div>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
</article>