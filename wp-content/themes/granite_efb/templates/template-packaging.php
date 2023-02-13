<?php
/**
 * Template Name: Packaging page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header(); ?>
<style type="text/css">
    .page-header{padding: 14.6rem 0 24.6rem;}
	#wns{display: none;}
	.factory_section ul li {
		display: flex;
	}
	.factory_section ul li:before {
		content: "\25B6";
		margin-right: 9px;
	}
	.factory_section h3{
		background: #000;
    color: #FFF;
    padding: 9px;
    /* WIDTH: 218PX; */
    position: absolute;
    left: 22rem;
    font-size: 19px;
	}
    .tl {background: #555050; color: #FFF; font-size: 19px; padding: 7px 18px;}
    .bottomline {
        background: url(<?php echo get_template_directory_uri(); ?>/assets/images/headlingline.png);
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: contain;
        padding-bottom: 5px;
        font-size: 1.9rem;
    }
    .num1 {content: url('<?php echo get_template_directory_uri(); ?>/assets/images/numbers/1.png');}
    .num2 {content: url('<?php echo get_template_directory_uri(); ?>/assets/images/numbers/2.png');}
    .num3 {content: url('<?php echo get_template_directory_uri(); ?>/assets/images/numbers/3.png');}
    .num4 {content: url('<?php echo get_template_directory_uri(); ?>/assets/images/numbers/4.png');}
    .num5 {content: url('<?php echo get_template_directory_uri(); ?>/assets/images/numbers/5.png');}
    .num6 {content: url('<?php echo get_template_directory_uri(); ?>/assets/images/numbers/6.png');}
    @media screen and (min-width: 600px) and (max-width: 781px) {.wp-block-image img{width:100%; border-radius: 10px !important;}.wp-block-column:not(:only-child){flex-basis:calc(100% - 1em) !important;}.wp-block-column:nth-child(even){margin-left: 0;}}
</style>
<main class="main">
		<div class="page-header text-center" style="background-image: url('<?php echo get_field('efb_banner'); ?>')">
        		<div class="container">
        			<h1 class="page-title text-uppercase"><?php echo get_the_title(); ?></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content pb-3">
            	<div class="container pb-2">
            		<h2 class="title mb-2 text-uppercase"><?php echo get_field('first_title'); ?></h2>
            		<div class="row">
            			<div class="col-sm-12"><?php echo get_the_content(); ?></div>
            		</div>
            	</div>

                <!--<div class="container mb-3 pb-3" style="border-bottom: 1px solid #CCC;">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <h5 class="mb-2 text-uppercase text-center">CRATE SETUP</h5>
                            <img class="m-auto" src="<?php //echo get_template_directory_uri(); ?>/assets/images/packagin/Crate-Setup-Thumbnail.jpg">
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5 class="mb-2 text-uppercase text-center">PACKAGING STORE</h5>
                            <img class="m-auto" src="<?php //echo get_template_directory_uri(); ?>/assets/images/packagin/Packaging-Store-Thumbnail.jpg">
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5 class="mb-2 text-uppercase text-center">PLACING THE NATURAL STONE</h5>
                            <img class="m-auto" src="<?php //echo get_template_directory_uri(); ?>/assets/images/packagin/Placing-the-natural-stone-Thumbnail.jpg">
                        </div>
                        
                    </div>
                    <p class="text-center mt-2"><a class="btn btn-black m-auto" id="lm">Discover More</a></p>
                    
                </div>

            </div> --><!-- End .page-content -->
</main>
<?php get_footer(); ?>