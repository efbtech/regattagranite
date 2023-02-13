<?php
/**
 * Template Name: Factory page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$child_args = array(
    'post_parent' => 122, // The parent id.
    'post_type'   => 'page',
    'post_status' => 'publish',
    'orderby' => 'menu_order',
    'order' => 'ASC',
);

$children = get_children( $child_args );
get_header(); ?>
<style type="text/css">
	#wns{display: none;}
	.factory_section ul li {
		display: flex;
	}
	.factory_section ul li:before {
		content: "\25B6";
		margin-right: 9px;
	}
	
	.vert { border-right: 2px solid; position: absolute; top: 6.3rem; width: 10px; height: 30px; right: 32rem; }
	.horz { border-bottom: 2px solid; position: absolute; top: 6.3rem; width: 93%; height: 30px; }
    .page-header{padding: 14.6rem 0 24.6rem;}
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
            		<h2 class="title mb-2 text-uppercase"><?php echo get_field('custom_title'); ?></h2>
            		<div class="row">
            			<div class="col-sm-12"><?php the_excerpt(); ?></div>
            		</div>
            	</div> 



                <div class="container mb-3 pb-3 factory_section" style="border-bottom: 1px solid #CCC;">
                	<h2 class="title mb-2 text-uppercase">DIFFERENT PROCESSES AT FACTORY STAGE</h2>
                    <div class="row">
                    	<?php 
                        $ai = 0;
                        foreach ($children as $pk => $pg) { ?>
                        <div class="col-sm-6 <?php if($ai==2 || $ai==3) { ?>mt-lg-3<?php } ?>">
                            <div class="row mb-2">
							  <div class="col-lg-5 col-sm-12 col-md-12">
                                <a href="<?php echo get_permalink($pg->ID); ?>">
                                    <img class="rounded border border-dark" src="<?php echo get_the_post_thumbnail_url($pg->ID,'full'); ?>">
                                </a>
							  </div>
							  
							  <div class="col-lg-7 col-sm-12 col-md-12">
                                <h3 class="mt-2 ml-4"><?php echo $pg->post_title; ?></h3>
							  	<div class="efm"><?php echo get_field('efb_points',$pg->ID); ?></div>
							  </div>
							</div>
                    	</div>
                    	<?php $ai++; } ?>
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="container factory_section">
            		<div class="row">
            			<div class="col-sm-12"><?php echo get_the_content(); ?></div>
            		</div>
            	</div>




            </div><!-- End .page-content -->
</main>
<?php get_footer(); ?>