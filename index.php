<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"?></script?> -->
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
  
<?php get_header(); ?>
<?php if (have_posts()): ?>
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>