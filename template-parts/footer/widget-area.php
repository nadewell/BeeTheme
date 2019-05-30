<?php
/**
 * The footer widget area template 
 *
 * This is the template that displays the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NadeWp
 * @since 1.0
 * @version 1.0
 */
?>
<footer class="site-footer">
    <div class="container">

        <div class="row">
            <!-- Footer Widget Area 1 -->
            <?php if( is_active_sidebar('footer-1') ): ?>
            <div class="widget-area col-md-3 col-sm-12"><?php dynamic_sidebar('footer-1'); ?></div>
            <?php endif; ?><!-- /Footer Widget Area 1 -->

            <!-- Footer Widget Area 2 -->
            <?php if( is_active_sidebar('footer-2') ): ?>
            <div class="widget-area col-md-3 col-sm-12"><?php dynamic_sidebar('footer-2'); ?></div>
            <?php endif; ?><!-- /Footer Widget Area 2 -->

            <!-- Footer Widget Area 3 -->
            <?php if( is_active_sidebar('footer-3') ): ?>
            <div class="widget-area col-md-3 col-sm-12"><?php dynamic_sidebar('footer-3'); ?></div>
            <?php endif; ?><!-- /Footer Widget Area 3 -->

            <!-- Footer Widget Area 4 -->
            <?php if( is_active_sidebar('footer-4') ): ?>
            <div class="widget-area col-md-3 col-sm-12"><?php dynamic_sidebar('footer-4'); ?></div>
            <?php endif; ?><!-- /Footer Widget Area 4 -->
        </div>

        <?php get_template_part('template-parts/footer/site-copyright'); ?>

    </div>
</footer>