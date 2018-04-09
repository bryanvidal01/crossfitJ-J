<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <script src="https://use.typekit.net/xsj3weg.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/style.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="image-logo" alt="">
                        <span class="text">
                            Crossfit J&J
                        </span>
                    </a>
                </div>
                <div class="col-sm-8 text-right">
                    <ul class="navigation">
                        <li>
                            <a href="#">
                                Accueil
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                La box
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Tarifs
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contacts
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
