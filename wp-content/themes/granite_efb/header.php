<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/css/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page-wrapper">
        <header class="header header-2 header-intro-clearance">
            <div class="header-middle sticky-header">
                <div class="container-fluid">
                    <div class="header-left">
                        <a href="#" class="logo">
                            <img class="lazy" src="images/logo.png" alt="Regatta Logo">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container">
                                    <a href="#" >HOME</a>
                                </li>
                                <li class="megamenu-container">
                                    <a href="#">ABOUT US</a>
                                </li>
                                <li class="megamenu-container">
                                    <a href="#" class="sf-with-ul">CATALOGUE</a>
                                    <ul>
                                        <li><a href="#">Product 1</a></li>
                                        <li><a href="#">Product 2</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu-container">
                                    <a href="#">PROJECTS</a>
                                </li>
                                <li class="megamenu-container">
                                    <a href="#">INFRASTRUCTURE</a>
                                </li>
                                <li class="megamenu-container">
                                    <a href="#">BLOG</a>
                                </li>
                                <li class="megamenu-container">
                                    <a href="#">CONTACT US</a>
                                </li>                                                                       
                                                               
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                        
                        <div class="header-search mr-4">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="hidden" name="post_type" value="product">
                                    <input type="search" class="form-control" name="s" id="q" placeholder="Search Product" required="">
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div>  
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->