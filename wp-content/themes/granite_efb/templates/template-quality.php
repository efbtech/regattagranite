<?php
/**
 * Template Name: Quality page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$child_args = array(
    'post_parent' => 122, // The parent id.
    'post_type'   => 'page',
    'post_status' => 'publish'
);

$children = get_children( $child_args );
//print_r($children);
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

                <div class="container mb-3 pb-3" style="border-bottom: 1px solid #CCC;">
                    <h2 class="title mb-2 text-uppercase"><?php echo get_field('second_main_title'); ?></h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<h3 class="mb-2 text-uppercase"><span class="tl"><?php //echo get_field('second_title'); ?></span></h3> -->
                            <?php echo get_field('second_description'); ?>
                        </div>
                        
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-4 mb-2">
                            <h5 class="mb-1 text-uppercase text-center">Teakwoods tiles inspection</h5>
                            <?php echo do_shortcode('[wonderplugin_gridgallery id=23]'); ?>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <h5 class="mb-1 text-uppercase text-center">COPPER QUARTZITE INSPECTION</h5>
                            <?php echo do_shortcode('[wonderplugin_gridgallery id=24]'); ?>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <h5 class="mb-1 text-uppercase text-center">GREEN MARBLE INSPECTION</h5>
                            <?php echo do_shortcode('[wonderplugin_gridgallery id=26]'); ?>
                        </div>
                        
                    </div>
                </div>

                <div class="container mb-3 pb-3" style="border-bottom: 1px solid #CCC;">
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<h3 class="mb-2 text-uppercase"><span class="tl"><?php //echo get_field('third_title'); ?></span></h3> -->
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <h5 class="mb-2 text-uppercase text-center">KANDLA GREY INSPECTION</h5>
                            <?php echo do_shortcode('[wonderplugin_gridgallery id=27]'); ?>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5 class="mb-2 text-uppercase text-center">LIME BLACK INSPECTION</h5>
                            <?php echo do_shortcode('[wonderplugin_gridgallery id=28]'); ?>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5 class="mb-2 text-uppercase text-center">MODAK SANDSTONE Inspection</h5>
                            <?php echo do_shortcode('[wonderplugin_gridgallery id=29]'); ?>
                        </div>
                        
                    </div>
                    <p class="text-center mt-2"><a class="btn btn-black m-auto" id="lm">Discover More</a></p>
                    <p class="mt-2">At Regatta Universal Exports, we follow a unique quality control system that comprises strict manufacturing procedures to ensure flawless products. We have a team of qualified, experienced, and dedicated professionals, who ensure the effectiveness of our quality control measures. We keep ourselves updated with new trends and equipped with modern techniques in order to deliver the best products to our customers. Our quality control analysts put rigorous checks at every stage of production. At Regatta, we ensure the delivery of only quality products to our clients.</p>
                </div>

               





            </div><!-- End .page-content -->
</main>
<?php get_footer(); ?>