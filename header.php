<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>タイトル</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <link href="reset.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <?php wp_head(); ?>
  </head>
  <div class="breadcrumb">
  <?php
    if ( function_exists( 'bcn_display' ) ) { 
      bcn_display();
    }
  ?>
  <?php get_search_form(); ?>
</div>
  <body <?php body_class(); ?>><?php wp_body_open(); ?>
    <header>ヘッダー</header>