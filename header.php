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


  <body <?php body_class(); ?>><?php wp_body_open(); ?>

    <header class="header">
      <div class="header_in">
        <h1 class="header_logo">
          <a href="/">
            <span>
              <img src="<?php echo get_theme_file_uri( "./imgs/star.jpeg" ); ?>" width="41" height="41" alt="RadicalpopGaming">
            </span>
          </a>
        </h1>
        <div class="header_nav">
          <ul class="navlist">  
            <li class="nav_about">
              <a href=<?php
                      echo get_page_link( 44 );
                      ?>>
                <span>ABOUT</span>
              </a>  
            </li>

            <li class="nav_news">
              <a href=<?php
                        echo get_page_link( 36 );
                        ?>>
                  <span>NEWS</span>
            </li>

            <li class="nav_team">
              <a href=<?php
                        echo get_page_link( 38 );
                        ?>>
                  <span>TEAM</span>
            </li>
            
            <li class="nav_store">
              <a href=<?php
                          echo get_page_link(  );
                          ?>>
                    <span>STORE</span>
            </li>

            <li class="nav_sponcer">
              <a href=<?php
                          echo get_page_link( 40 );
                          ?>>
                    <span>SPONCER</span>
            </li>

          </ul>
        </div>
      </div>
    </header>