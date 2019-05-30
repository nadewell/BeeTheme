<?php
/**
 * The sidebar template 
 *
 * This is the template displays that blog sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NadeWp
 * @since 1.0
 * @version 1.0
 */
?>
<?php 
    if( ! is_active_sidebar( 'sidebar' ) ){
        return;
    }
?>
<div class="sidebar widget-area col-md-4 col-sm-12" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'twentyseventeen' ); ?>">
<?php dynamic_sidebar('sidebar') ?>                    
</div>