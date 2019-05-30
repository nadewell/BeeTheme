<?php
/**
 * The Branding or Logo template 
 *
 * This is the template that displays logo
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NadeWp
 * @since 1.0
 * @version 1.0
 */
?>
<?php if( has_custom_logo() ): ?>
<a class="navbar-brand" href="<?php echo site_url(); ?>">
    <img class="custom-logo" src="" alt="<?php bloginfo('name'); ?>">
</a>
<?php else: ?>      
    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
<?php endif; ?>      
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="navbar-toggler-icon"></i>
    <span class="screen-reader-text">Menu</span>
</button>