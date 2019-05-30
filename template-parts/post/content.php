<?php
/**
 * The post content template 
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
        <h2 class="post-title"><a  href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    </div>
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>
</article>