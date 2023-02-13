<?php
/**
 * Template Name: Home page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header(); ?>
<style type="text/css">
	#wns{display: none;}
</style>
                <?php if(wp_is_mobile()) { ?>
                    <div style="width:100%;">
                    <img style="width:100%;" src="https://www.regattaexports.com/wp-content/uploads/2021/09/Lime-black-lime-stone-banner-300x136.jpg">
                    </div>
                <?php } else { ?>
                    <div id="slider" style="position: relative; top:-84px;">;
                        <div class="intro-slider-container">
                            <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false,"autoplay": true, "autoplayTimeout":5000,"autoplayHoverPause":false}'>
                                <div class="intro-slide lazy" style="height: 500px; background: url(<?php echo get_field('first_banner'); ?>);" data-bg="url(<?php echo get_field('first_banner'); ?>)">
                                </div><!-- End .intro-slide -->
                                <div class="intro-slide lazy" style="height: 500px; background: url(<?php echo get_field('second_banner'); ?>)" data-bg="url(<?php echo get_field('second_banner'); ?>)">
                                </div><!-- End .intro-slide -->
                            
                            </div><!-- End .owl-carousel owl-simple -->
                            

                            <span class="slider-loader text-white"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div>
            <?php } ?>

            <main class="main">
            <div class="container">
                <div class="heading heading-center mb-3">
                    <h1 class="title"><?php echo get_field('head_title'); ?> </h1>
                </div><!-- End .heading -->
            </div>

            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo get_field('main_image'); ?>">
                    </div>
                    <div class="col-sm-2">
                        <img src="<?php echo get_field('excel_image'); ?>">
                    </div>
                    <div class="col-sm-4">
                        <h2><?php echo get_field('about_us_heading'); ?></h2>
                        <p><?php echo get_field('about_us_text'); ?></p>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo get_field('title_1'); ?>
                                </h4>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body"><?php echo get_field('content_1'); ?></div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h4 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?php echo get_field('title_2'); ?></h4>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body"><?php echo get_field('content_2'); ?></div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h4 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><?php echo get_field('title_3'); ?></h4>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body"><?php echo get_field('content_3'); ?></div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h4 class="mb-0" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><?php echo get_field('title_4'); ?></h4>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                  <div class="card-body"><?php echo get_field('content_4'); ?></div>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="icon-boxes-container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">
                        <span class="bottomline">Where does it come from ?</span>
                    </h2><!-- End .title -->
                    <p>Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit Lorem spum dir sit </p>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="text-center owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":3
                                    },
                                    "480": {
                                        "items":5
                                    },
                                    "768": {
                                        "items":5
                                    },
                                    "992": {
                                        "items":5
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                                                            <div class="text-center">
                                    <img src="https://www.regattaexports.com/wp-content/uploads/2021/09/Certificates-05.png" class="mcert lazy">
                                    <span id="desx21682" style="display: none"><p>The certificate states that Regatta Universal Exports is a part of the Dun &amp; Bradstreet Global Database with the D-U-N-S number: 91-618-8252. This Dun &amp; Bradstreet D‑U‑N‑S Number is a unique nine-digit identifier and assigned once its patented identity resolution process, part of DUNSRight methodology, identifies a company as being unique from any other in the Dun &amp; Bradstreet Data Cloud.</p>
                                    </span>
                                </div>
                                                                <div class="text-center">
                                    <img src="https://www.regattaexports.com/wp-content/uploads/2021/09/Certificates-03.png" class="mcert lazy">
                                    <span id="desx21683" style="display: none"><p>This membership certificate is a testament to our lifetime membership of All Indian Granites &amp; Stone Association, Bangalore.</p>
</span>
                                </div>
                                                                <div class="text-center">
                                    <img src="https://www.regattaexports.com/wp-content/uploads/2021/09/Certificates-05.png" data-src="https://www.regattaexports.com/wp-content/uploads/2021/09/Certificates-05.png" data-url="https://www.regattaexports.com/wp-content/uploads/2019/01/CDOS-Certificate.jpg" data-id="21927" class="mcert lazy">
                                    <span id="desx21927" style="display: none"><p>This is a membership certificate that certifies the lifetime membership of Regatta Universal Exports at the Centre for Development of Stones (CDOS). Centre for Development of Stones (CDOS) is an autonomous organization promoted by the Government of Rajasthan and Rajasthan State Industrial Development &amp; Investment Corporation Ltd. (RIICO) as a non-profit making organization to develop, promote and support the dimension stone industry in India.</p>
</span>
                                </div>
                                                                <div class="text-center">
                                    <img src="https://www.regattaexports.com/wp-content/uploads/2021/09/01-ISO-9001-2015.png" data-src="https://www.regattaexports.com/wp-content/uploads/2021/09/01-ISO-9001-2015.png" data-url="https://www.regattaexports.com/wp-content/uploads/2021/09/ISO-9001-2015-Certificate.jpg" data-id="21680" class="mcert lazy">
                                    <span id="desx21680" style="display: none"><p>This certificate certifies the abilities of Regatta Universal Exports to consistently deliver natural stone products &amp; services that meet customer and regulatory measurements. It enables a process-oriented approach to documenting and reviewing the structure, procedures, and responsibilities needed to achieve effective quality management in an organization.</p>
</span>
                                </div>
                                                                <div class="text-center">
                                    <img src="https://www.regattaexports.com/wp-content/uploads/2021/10/Certificates-09.png" data-src="https://www.regattaexports.com/wp-content/uploads/2021/10/Certificates-09.png" data-url="https://www.regattaexports.com/wp-content/uploads/2021/10/Capexil_Regatta-exports-1.jpg" data-id="21704" class="mcert lazy">
                                    <span id="desx21704" style="display: none"><p>CAPEXIL has been the voice of the Indian business community. This certificate certifies Regatta Universal Exports as a Merchant cum Manufacturer Exporter in its database. CAPEXIL is a fervent supporter of exporters to the Government and its major objective is to provide export assistance to its member exporters.</p>
</span>
                                </div>
                                                                <div class="text-center">
                                    <img src="https://www.regattaexports.com/wp-content/uploads/2021/09/Certificates-01.png" data-src="https://www.regattaexports.com/wp-content/uploads/2021/09/Certificates-01.png" data-url="https://www.regattaexports.com/wp-content/uploads/2021/09/One-Star-Export-Certificate.jpg" data-id="21681" class="mcert lazy">
                                    <span id="desx21681" style="display: none"><p>This certificate of recognition states Regatta Universal Exports has given the level of One Start Export House in regard to the provisions of the Foreign Trade Policy, 2015-2020.</p>
</span>
                                </div>
                                                                <div class="text-center">
                                    <img src="https://www.regattaexports.com/wp-content/uploads/2021/09/Certificates-04.png" data-src="https://www.regattaexports.com/wp-content/uploads/2021/09/Certificates-04.png" data-url="https://www.regattaexports.com/wp-content/uploads/2021/09/CE-Certificate-1.jpg" data-id="21684" class="mcert lazy">
                                    <span id="desx21684" style="display: none"><p>This certificate indicates that all our products (granite, marble, sandstone, limestone, quartzite, slate stone, &amp; ceramic stones) have been thoroughly examined and deemed to meet EU safety, health, and environmental protection requirements.</p>
</span>
                                </div>
                                
                            
                        </div><!-- End .owl-carousel -->
                    </div>
                  </div>
                </div>
            </div>
            
        </main>
<?php get_footer(); ?>