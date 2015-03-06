<?php
  $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $name = get_bloginfo( 'name' );
  $title = get_the_title();

  function convert_email_adr($email) {
    $pieces = str_split(trim($email));
    $new_mail = '';
    foreach ($pieces as $val) {
      $new_mail .= '&#'.ord($val).';';
    }
    return $new_mail;
  }

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?= bloginfo( 'charset' ) ?>" />
  <?php
    if ( is_front_page() || is_home() ) {
      echo "<title>" . $name . "</title>";
    } else {
      if ( $title ) {
        echo "<title>" . $title . " | " . $name . "</title>";
      } else {
        echo "<title>" . $name . "</title>";
      }
    }
  ?>

  <!-- Meta -->
<?php
  if( is_single() ) {
    while ( have_posts() ) : the_post();
?>
  <meta name="description" content="<?= the_field('post_seo_description') ?>" />
<?php
    endwhile;
  } else {
?>
  <meta name="description" content="<?= the_field('seo_description') ?>" />
<?php
  }
?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="index, follow" />

  <!-- Google Authorship and Publisher Markup -->
  <link href="https://plus.google.com/115102331729937117292/posts" rel="author">
  <link href="https://plus.google.com/115102331729937117292" rel="publisher">

  <!-- Twitter Card data --> 
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@Digital8Creates" />
<?php
  if( is_single() ) {
    while ( have_posts() ) : the_post();
?>
  <meta name="twitter:creator" content="<?= the_field('author_twitter_handle') ?>" />
  <meta name="description" content="<?= the_field('post_seo_description') ?>" />
  <meta name="twitter:title" content="<?= the_title() ?>" />
  <meta name="twitter:description" content="<?= the_field('post_seo_description') ?>" />
<?php
    endwhile;
  } else {
?>
  <meta name="twitter:title" content="<?= the_field('seo_title') ?>" />
  <meta name="twitter:description" content="<?= the_field('seo_description') ?>" />
<?php
  }
?>
<?php
  if( the_field('twitter_image_url') ) {
?>
  <meta name="twitter:image:src" content="<?= the_field('twitter_image_url') ?>" />
<?php
  } else {
?>
  <meta name="twitter:image:src" content="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/social-twitter.png" />
<?php
  }
?>

  <!-- Open Graph -->
<?php
  if( is_single() ) {
    while ( have_posts() ) : the_post();
?>
  <meta property="og:title" content="<?= the_title() ?>" />
  <meta property="og:description" content="<?= the_field('post_seo_description') ?>" />
<?php
    endwhile;
  } else {
?>
  <meta property="og:title" content="<?= the_field('seo_title') ?>" />
  <meta property="og:description" content="<?= the_field('seo_description') ?>" />
<?php
  }
?>
  <meta property="og:site_name" content="Digital 8 Productions, LLC" />
  <meta property="og:url" content="<?= $full_url ?>" />
<?php
  if( the_field('facebook_image_url') ) {
?>
  <meta property="og:image" content="<?= the_field('facebook_image_url') ?>" />
<?php
  }
?>
  <meta property="og:image" content="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/social-facebook.png" />

  <!-- GeoTag -->
  <meta name="geo.region" content="US-FL" />
  <meta name="geo.placename" content="Orlando" />

  <!-- Wordpress -->
  <?php wp_head(); ?>

  <!-- Humans -->
  <link type="text/plain" rel="author" href="humans.txt" />

  <!-- Icons -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/icon/favicon.ico" />
  <link rel="apple-touch-icon" href="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/icon/60x60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/icon/76x76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/icon/120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/icon/152x152.png">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:700,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:700' rel='stylesheet' type='text/css'>

  <!-- CSS -->
  <?php
    echo '<link rel="stylesheet" type="text/css" href="' . esc_url( get_template_directory_uri() ) . '/assets/css/';

    if ( is_front_page() || is_home() ) {
      echo 'index';
    } elseif ( is_single() ) {
      echo 'post';
    } else {
      if ( $title ) {
        echo strtolower($title);
      } else {
      echo 'core';
      }
    }
    echo '.css">'
  ?>

  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div id="container">
    <div id="sticky-container">
      <header id="header">
        <div class="content">
          <div class="left">
            <?php if (function_exists(clean_left_menu())) clean_left_menu(); ?>
          </div><!-- .left -->
          
          <div class="right">
            <?php if (function_exists(clean_right_menu())) clean_right_menu(); ?>
          </div><!-- .right -->

          <a id="link-home" class="img-container" href="/"><img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/img/eight-bg.png" alt="Digital 8 Home"></a>
        </div><!-- .content -->
      </header>
      
      <span id='home-arrow'></span>

      <div class="content">
        <div id="page">