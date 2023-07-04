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


<body class="body" <?php body_class(); ?>><?php wp_body_open(); ?>

    <header class="header">
        <div class="header_in">
            <div class="header_nav">
                <ul class="navlist">
                    <li class="nav_home">
                        <a href=<?php
                      echo get_page_link( 7 );
                      ?>>
                            <span>HOME</span>
                        </a>
                    </li>

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
                        </a>
                    </li>

                    <li class="nav_team">
                        <a href=<?php
                        echo get_page_link( 38 );
                        ?>>
                            <span>TEAM</span>
                        </a>
                    </li>

                    <li class="nav_store">
                        <a href=<?php
                          echo get_page_link(  );
                          ?>>
                            <span>STORE</span>
                        </a>
                    </li>

                    <li class="nav_sponcer">
                        <a href=<?php
                          echo get_page_link( 40 );
                          ?>>
                            <span>SPONSOR</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </header>