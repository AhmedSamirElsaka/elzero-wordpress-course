<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>  
        <meta charset="<?php bloginfo( 'charset' );?>">
        <title><?php bloginfo( 'name' );?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>">
        <?php wp_head();?>
    </head>
    <body>

  

    <nav class="navbar navbar-expand-lg navbar-light bg-dark right " style="padding-inline: 8px;">
  <a class="navbar-brand text-white" href="#">Ahmed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon color-white"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="#">Action</a>
          <a class="dropdown-item text-white"  href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-white" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="#">Disabled</a>
      </li>
    </ul>
  
  </div>
</nav>