<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory');?>/blog.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cousine:wght@400;700&family=Roboto:wght@700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body>
    <div id="wrap">
      <header class="blog-header">
        <section class="banner">
          <div class="container">
            <div class="row justify-content-center">
              <div class = "container">
                <div class="row justify-content-center">
                  <img id="blog-title" src="http://magmag.fun/wp-content/uploads/2020/03/logo-1.png">
                </div>
                <div class="row justify-content-center">
                  <h2 class="lead blog-description"><?php echo get_bloginfo('description'); ?></h2>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="blog-masthead">
          <div class="container">
            <nav class="blog-nav">
              <div id="blog-nav-container">
                <div class="container justify-content-center">
                  <a id="mobile-menu-button" class ="d-md-none" id="mobile-menu-button" data-toggle="collapse" data-target="#mobileMenuCollapse" role="button" aria-expanded="false" aria-controls="mobileMenuCollapse">
                    <div class="container"><i class="fas fa-bars"></i> Menu</div>
                  </a>
                </div>
                <div class="collapse.show" id="mobileMenuCollapse">
                  <?php wp_list_pages('&title_li=');?>
                </div>
              </div>
            </nav>
          </div>
        </section>
      </header>
