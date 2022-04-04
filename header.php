<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <title>Hello, world!</title>
    <?php wp_head(); ?>
</head>
<body>

<!-- Logo -->
<br>
<div class="mx-auto" style="width: 300px;">
<?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo(); 
}  ?>

</div>
<br>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="collapse navbar-collapse" id="navbarNav">
  <?php wp_nav_menu( array(
    'theme_location'  => 'header_menu',
    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'bs-example-navbar-collapse-1',
    'menu_class'      => 'navbar-nav mx-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) ); ?>
  </div>
  
</nav>
<!-- /navbar -->
