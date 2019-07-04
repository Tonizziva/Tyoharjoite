<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
    
<style>
    
@font-face {
  font-family: helvetica;
  src: url(wp-content/themes/wp-bootstrap-4/assets/fonts/Helvetica.dfont);
}
    
h1 {
    font-size: 3em;
}
    
.font-big-5{
    font-size: 5em;
}
    
.font-big-3{
    font-size: 3em;
}

.font-small{
    font-size:0.9em;
}

.font-small-1{
    font-size:0.7em;
}
    
.bold {
    font-weight: bold;
}
    
.white{
    color: white;
}
    
body {
    font-family: helvetica;
    
}
    
.masthead {
    height: 100vh;
    min-height: 500px;
    background-size: cover;
    background-color: aquamarine;
    background-image: url(wp-content/themes/wp-bootstrap-4/assets/images/Tapered_Angle_Iron_Table_Leg.jpg);
    background-repeat: no-repeat;
  
}    
    
@media only screen and (max-width: 1300px) {
    .masthead {
        height: 80vh;
    }
}
    
@media only screen and (max-width: 1000px) {
    .masthead {
        height: 60vh;
    }
}
    
@media only screen and (max-width: 880px) {
    .masthead {
        background-size: 100% 100%;
        height: 50vh;
    }
}

</style>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead"><!-- Navigation -->

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"><h1 class="bold">WEDO</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link bold" href="#">CHAIRS
                    <span class="sr-only">(current)</span>
                  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link bold " href="#">TABLES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bold" href="#">INFO</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        
      <div class="container h-75">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h1 class="white bold font-big-5"><?php echo get_theme_mod("oma_teema_headline") ?></h1>
            <p class="lead white font-big-3"><?php echo get_theme_mod("oma_teema_smallline") ?></p>
          </div>
        </div>
      </div>
    </header>

	<div id="content" class="site-content">
