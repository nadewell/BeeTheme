<?php
/**
 * The Search form template 
 *
 * This is the template that displays search form
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NadeWp
 * @since 1.0
 * @version 1.0
 */
?>
<form class="searchform form-inline my-2 my-lg-0" id="searchform" action="<?php echo home_url( '/' ); ?>" method="get" role="search">
    <input class="form-control mr-sm-2" type="search" name="s" id="search" value="<?php get_search_query(); ?>" >
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" id="searchsubmit"><i class="material-icons">search</i></button>
</form>