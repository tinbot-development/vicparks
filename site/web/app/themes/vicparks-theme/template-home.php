<?php
/**
 * Template Name: Page - Home
 */

?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/home/content', 'home'); ?>
<?php endwhile; ?>
