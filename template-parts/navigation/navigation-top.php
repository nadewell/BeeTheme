<?php
/**
 * The Naviagation menu template 
 *
 * This is the template that displays navbar or main navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NadeWp
 * @since 1.0
 * @version 1.0
 */
?>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php 
        $args = array(
            'menu'              =>  'primary',
            'menu_class'        => 'navbar-nav ml-auto',
            'container'         => '',
            'theme_location'    => 'primary',
            'walker'            => new Primary_Nav()
        );
        wp_nav_menu($args);
    ?>
    <?php //get_search_form(); ?>
</div>