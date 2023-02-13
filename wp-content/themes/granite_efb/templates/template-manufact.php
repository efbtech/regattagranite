<?php
/**
 * Template Name: Manufacturing page
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
	.vert {
		border-right: 2px solid;
    position: absolute;
    top: 6.3rem;
    width: 10px;
    height: 30px;
    right: 27rem;
	}
	.horz {
		border-bottom: 2px solid;
    position: absolute;
    top: 6.3rem;
    width: 52%;
    height: 30px;
	}
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
            		<h2 class="title mb-2 text-uppercase"><?php echo get_field('first_title'); ?></h2>
            		<div class="row">
            			<div class="col-sm-12"><?php echo get_the_content(); ?></div>
            		</div>
            	</div>

                <div class="container mb-3 pb-3" style="border-bottom: 1px solid #CCC;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-2">
                            <h2 class="title mb-2 text-uppercase"><?php echo get_field('second_title'); ?></h2>
                            <?php echo get_field('second_description'); ?>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12"><img class="img-thumbnail m-auto" src="<?php echo get_field('second_image'); ?>"></div>
                    </div>
                </div>

                <div class="container mb-3 pb-3" style="border-bottom: 1px solid #CCC;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 order-1 order-md-1 order-lg-0"><img class="img-thumbnail m-auto" src="<?php echo get_field('third_image'); ?>"></div>
                        <div class="col-lg-6 col-md-12 col-sm-12 order-0 order-md-0 order-lg-1 mb-2">
                            <h2 class="title mb-2 text-uppercase"><?php echo get_field('third_title'); ?></h2>
                            <?php echo get_field('third_description'); ?>
                        </div>
                    </div>
                </div> 

                <div class="container mb-3 pb-3" style="border-bottom: 1px solid #CCC;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-2">
                            <h2 class="title mb-2 text-uppercase"><?php echo get_field('forth_title'); ?></h2>
                            <?php echo get_field('forth_description'); ?>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12"><img class="img-thumbnail m-auto" src="<?php echo get_field('forth_image'); ?>"></div>
                    </div>
                </div>

                <div class="container mt-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo get_field('manu_last_paragraph'); ?>
                        </div>
                    </div>
                </div>





            </div><!-- End .page-content -->
</main>
<?php get_footer(); ?>