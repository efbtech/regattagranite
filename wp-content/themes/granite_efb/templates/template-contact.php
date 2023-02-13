<?php
/**
 * Template Name: contact page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header(); ?>
<style type="text/css">
    .page-header{padding: 14.6rem 0 24.6rem;}
</style>
<main class="main">
		<div class="page-header text-center" style="background-image: url('<?php echo get_field('efb_banner'); ?>')">
        		<div class="container">
        			<h1 class="page-title"><?php echo get_the_title(); ?></h1>
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
            		<div class="row">
            			<div class="col-sm-12">
                        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.541346041624!2d77.31518981508152!3d28.58353238243715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce45ee69632a1%3A0x87129587514e0de9!2sRegatta+Universal+Exports!5e0!3m2!1sen!2sin!4v1487231327506" width="100%" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                        
                            <div class="wp-block-columns">
<div class="wp-block-column">
<h3>Reach Us</h3>



<hr class="wp-block-separator has-text-color has-background has-subtle-background-background-color has-subtle-background-color mt-1 mb-1">



<p><strong>Regatta Universal Exports</strong><br>D-69, Second Floor,<br>Sector2, Noida<br>U.P. 201301, India</p>



<p><strong>Office</strong>: +91-120-4736000</p>



<p><strong>Fax</strong>:+ 91-120-4736028</p>



<p><strong>International Enquiry Calls</strong>: +91- 9910066990</p>



<p><strong>Domestic Enquiry Calls</strong>: +91-9818755008</p>



<p><strong>Email Us</strong>:  <a href="mailto:Info@regattaexports.com" rel="nofollow">Info@regattaexports.com</a></p>



<hr class="wp-block-separator is-style-wide">



<p><strong>North India Factory- Natural Stones</strong></p>



<p>A-40 and H-47 A to C, H 36 (A to C) H 39 B<br>RIICO industrial area, Hattipura<br>Bundi-323001,<br>Rajasthan, India</p>



<hr class="wp-block-separator is-style-wide">



<p><strong>South India Factory- Granite</strong></p>



<p>No#835/1B Alentham (vill)<br>Bennangur(post)<br>Hosur to Denkanikottai Road<br>Krishnagiri ,Tamilnadu-635109, India</p>
</div>



<div class="wp-block-column">
<h3>Get in Touch</h3>



<hr class="wp-block-separator has-text-color has-background has-subtle-background-background-color has-subtle-background-color mt-1 mb-1">


<?php 
if(ip_info("Visitor", "Country Code") != 'IN') {
    echo do_shortcode('[contact-form-7 id="286" title="Contact us form"]'); 
} else {
    echo '<img src="https://www.regattaexports.com/wp-content/uploads/2021/10/Head-Office.jpg" style="width:90%; margin:0 auto;">';
}
?>
</div>
</div>
                        </div>
            		</div>
            	</div>

                

            </div><!-- End .page-content -->
</main>
<?php get_footer(); ?>