<?php
/**
 * The index page 
 *
 * This is the template that displays all post of blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NadeWp
 * @since 1.0
 * @version 1.0
 */
?>

<?php   get_header();   ?>
<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-md-8 col-sm-12">
            <main id="main" class="site-main" role="main">
                <?php
                    if(have_posts()):
                        while(have_posts()):the_post();
                        get_template_part('template-parts/post/content');
                        endwhile;
                        the_posts_pagination();
                    endif;
                ?>
            </main>
        </div>
        <?php   get_sidebar();  ?>
    </div>
</div>
<?php   get_footer();