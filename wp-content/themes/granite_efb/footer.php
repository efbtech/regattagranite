<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<footer style="background:#858d98; color:#FFF;">
<div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="icon-box icon-box-side lefticon">
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">HEAD OFFICE</h3>
                        <p><?php echo nl2br(get_field('head_office',2)); ?></p>
                    </div><!-- End .icon-box-content -->
                </div>
            </div>
            <div class="col-sm-4">
                <div class="icon-box icon-box-side lefticon">
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">MANUFACTURING UNIT (01)</h3>
                        <p><?php echo nl2br(get_field('manufact_1',2)); ?></p>
                    </div><!-- End .icon-box-content -->
                </div>
            </div>
            <div class="col-sm-4">
                <div class="icon-box icon-box-side lefticon">
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">MANUFACTURING UNIT (02)</h3>
                        <p><?php echo nl2br(get_field('manufact_2',2)); ?></p>
                    </div><!-- End .icon-box-content -->
                </div>
            </div>
        </div>
      </div>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>
