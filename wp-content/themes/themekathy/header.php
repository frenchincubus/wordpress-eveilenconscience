<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eveil et Conscience</title>
    <link rel="stylesheet" href="<?php home_url(); if(!is_home()) echo "../"; else "";?>wp-content/themes/themekathy/style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
      <div class="row" height="auto" width="100%">
        <?php if ( is_home() ||  is_front_page() ) : ?>
        <img src="wp-content/uploads/2018/05/32627653_1891179274234939_5009556021903884288_n-2000x1200.jpg" alt="accueil" width="100%" height="450px">
        <?php else : ?>
        <img src="../wp-content/uploads/2018/05/32627653_1891179274234939_5009556021903884288_n-2000x1200.jpg" alt="accueil" width="100%" height="450px" id="imgelse">
        <?php endif; ?>
      </div>
      <div class="row">
        <div class="">
          <h1 id="titre"><a href="<?php echo get_option('home'); ?>/" >Eveil en Conscience</a></h1>
          <p id="sous-titre">Nous sommes co-créateurs de nos vies</p>
        </div>
        <nav class="nav navhead" role="navigation">
          <div class="container-fluid nav-ul">
            <div class="navbar-header">
              <div id="btn-nav"><button class="btn btn-default" id="bouton" onclick="menuDropdown()"><span id="span" class="glyphicon glyphicon-option-horizontal"></span></button></div>
              <div id="barnav">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
              </div> 
            </div>
          </div>
        </nav>
      </div>

   
