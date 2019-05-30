<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NadeWp
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Site Header -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <?php get_template_part('template-parts/header/site-branding'); ?>

                    <?php get_template_part('template-parts/navigation/navigation-top'); ?>
                </nav>
                <?php get_template_part('template-parts/header/header-image'); ?>
            </div>
        </div>
    </header><!-- /Site Header -->
    <!-- Page Content -->
    <div class="site-content-contain">
        <div id="page" class="site-content">
