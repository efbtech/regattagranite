<?php
/**
 * Template Name: Delivery page
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
            	<div class="container mb-3 pb-3" style="border-bottom: 1px solid #CCC;">
            		<h2 class="title mb-2 text-uppercase"><?php echo get_field('first_title'); ?></h2>
            		<div class="row">
            			<div class="col-sm-12"><?php echo get_the_content(); ?></div>
            		</div>
            	</div>

                <div class="container mb-3 pb-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="p-3 m-0" style="background: #CCC;">MAJOR INDIAN PORTS(STATEWISE)</h5>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th class="pl-3 pt-1 pb-1">State(s)</th>
                                        <th class="pl-3 pt-1 pb-1">Port(s)</th>
                                    </tr>
                                    <tr>
                                        <td class="pl-3 pt-1 pb-1">Gujarat</td>
                                        <td class="pl-3 pt-1 pb-1">Kandla Port, Mundra Port, and Pipavav Port</td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3 pt-1 pb-1">Maharashtra</td>
                                        <td class="pl-3 pt-1 pb-1">JNPT (Nhava Sheva) Port</td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3 pt-1 pb-1">Tamil Nadu</td>
                                        <td class="pl-3 pt-1 pb-1">Chennai Port, Kattupalli Port, and Tuticorin Port</td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3 pt-1 pb-1">Andhra Pradesh</td>
                                        <td class="pl-3 pt-1 pb-1">Krishnapatnam Port and Vizag Port</td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                        <div class="col-sm-6 text-center">
                            <img class="text-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/delivery/Regatta-Exports-Delivery-Map.png">
                        </div>
                    </div>
                    
                </div>

               





            </div><!-- End .page-content -->
</main>
<?php get_footer(); ?>