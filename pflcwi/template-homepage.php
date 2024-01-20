<?php 
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<?= do_shortcode('[banner1_section]') ?>
<?= do_shortcode('[aboutUs_section]') ?>
<!-- titte section -->
<?= do_shortcode('[tittle_section]') ?>
<!-- our project section -->
<?= do_shortcode('[ourProject_section]') ?>
<!-- slider 2 section -->
<?= do_shortcode('[slider2]') ?>
<!-- event section -->
<?= do_shortcode('[event_section]') ?>

<?php get_footer(); ?>