// Main Js File
var base_url = 'https://www.regattaexports.com/';

jQuery(document).ready(function( $ ) {
    'use strict';

    owlCarousels();
    quantityInputs();

    jQuery('#newslt').click(function(){
            
        if (jQuery('#nws').is(':hidden')) {
           
           jQuery('#nws').show('slide',{direction:'bottom'},1000);
        } else {
           
           jQuery('#nws').hide('slide',{direction:'bottom'},1000);
        }
    });

    /*jQuery('.wpcf7-form-control').focusout(function() {
        jQuery.ajax({
            type: "POST",
            url: base_url+'wp-admin/admin-ajax.php?action=ontypeform',
            data: jQuery('.wpcf7-form').serialize(), // serializes the form's elements.
            success: function(data)
            {
                
            }
          });
      });*/

    // Header Search Toggle
    jQuery("#qForm").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = jQuery(this);
        var url = form.attr('action');
        
        jQuery('#qsubmit').html('Please wait ...');
        jQuery.ajax({
               type: "POST",
               url: url,
               data: form.serialize(), // serializes the form's elements.
               success: function(data)
               {
                   jQuery('#ntc').html('<span class="text-success">'+data+'</span>');
                   jQuery('#qsubmit').css('display','none');
                   jQuery('#quote-modal').modal('hide');
               }
             });

        
    });

    jQuery("#cqForm").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = jQuery(this);
        var url = form.attr('action');
        
        jQuery('#qsubmit').html('Please wait ...');
        jQuery.ajax({
               type: "POST",
               url: url,
               data: form.serialize(), // serializes the form's elements.
               success: function(data)
               {
                   jQuery('#ntc').html('<span class="text-success">'+data+'</span>');
                   jQuery('#qsubmit').css('display','none');
                   jQuery('#quote-modal').modal('hide');
               }
             });

        
    });

    jQuery("#headqForm").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = jQuery(this);
        var url = form.attr('action');
        
        jQuery('#qsubmit').html('Please wait ...');
        jQuery.ajax({
               type: "POST",
               url: url,
               data: form.serialize(), // serializes the form's elements.
               success: function(data)
               {
                   jQuery('#ntc').html('<span class="text-success">'+data+'</span>');
                   jQuery('#qsubmit').css('display','none');
                   jQuery('#quote-modal').modal('hide');
               }
             });

        
    });

    jQuery('.csr li.nav-item img').on('click', function (e) {
        jQuery('.csr li.nav-item img').css('opacity','0.4');
        jQuery(this).css('opacity','1');
    });

    jQuery('#lm').on('click', function (e) {
        jQuery("#whatns").css('height','auto');
        jQuery("#whatns").css('overflow','unset');
        jQuery("#whatns").slideDown();
        jQuery('#lm').hide();
    });

    $('.quick').on('click', function (e) {
        var pid = $(this).data('id');
        $.get(base_url+"wp-admin/admin-ajax.php", {id:pid,action:'getprd'}, function(data){
            var gls = '';
            var lb = '';
            var tb = '<table class="table">';
            jQuery('#alttag').html(data.gals[0].alt)
            var mi = '<a data-fancybox="productgal" data-src="'+data.product_img+'" data-caption="'+data.product_alt+'" href="#"><img id="product-zoom" src="'+data.product_img+'" data-zoom-image="'+data.product_img+'" alt="'+data.product_alt+'"></a>';
            $.each(data.gals, function(i, gal) {
                console.log(i+'-'+gal.alt);
                if(i<6){
                gls += '<a class="product-gallery-item" data-fancybox="productgal" data-src="'+gal.guid+'" data-caption="'+gal.alt+'" href="#"><img src="'+gal.guid+'" alt="'+gal.alt+'"></a>';
                }
            });
            $.each(data.info, function(x, inf) {
                if(x == 'prdorigin') {
                    lb = 'Origin';
                }
                if(x == 'ps_slab') {
                    lb = 'Slab';
                }
                if(x == 'prdcolor') {
                    lb = 'Color';
                }
                if(x == 'ps_tiles') {
                    lb = 'Tiles';
                }
                if(x == 'ps_gangsaw') {
                    lb = 'Gangsaw';
                }
                if(x == 'ps_countertop') {
                    lb = 'Countertop';
                }
                if(x == 'ps_cutter_slab') {
                    lb = 'Cutter Slab';
                }
                if(x == 'ps_palisade') {
                    lb = 'Palisade';
                }
                if(x == 'wall_cladding'){ lb='Wall Cladding'}
                if(x == 'ps_step_blocks'){ lb='Step Blocks'}
                if(x == 'prdthickness'){ lb='Thickness'}
                if(x == 'prdfinish'){ lb='Finish'}
                if(x == 'prdothernames'){ lb='Other Names'}
                if(x == 'prdedge'){ lb='Edge'}


                tb += '<tr><th class="text-uppercase">'+lb+'</th><td class="text-uppercase">'+inf+'</td></tr>';
            });
            tb += '</table>';
             $('.efbpgal').html(gls);
             $('.efbmi').html(mi);
             $('.efbtb').html(tb);
             $('#alttag').html(data.product_alt);
             if(data.showbt == 1) {
                $('.product-details-action').html('<a href="#" class="btn btn-success" onclick="quoteopen(\''+data.product_title+'\')">Request a Quote</a>');
             }
             $('#epdt').html(data.product_title);
             $('#prdModal').modal('show');

            $('.product-gallery-item').on('click', function (e) {
                $('#product-zoom-gallery').find('a').removeClass('active');
                $(this).addClass('active');
                
                $('#alttag').text($(this).attr('alt'));
            });

        });
        
    });

    jQuery(document).on('click', '.mcert', function(e) {
        jQuery('#cerim').html('<img src="'+jQuery(this).data('url')+'" style="width:100%;">');
        jQuery('#des').html(jQuery('#desx'+jQuery(this).data('id')).html());
        jQuery('#certModal').modal('show');
    });

    var $searchWrapper = $('.header-search-wrapper'),
    	$body = $('body'),
        $searchToggle = $('.search-toggle');

	$searchToggle.on('click', function (e) {
		$searchWrapper.toggleClass('show');
		$(this).toggleClass('active');
		$searchWrapper.find('input').focus();
		e.preventDefault();
	});

	$body.on('click', function (e) {
		if ( $searchWrapper.hasClass('show') ) {
			$searchWrapper.removeClass('show');
			$searchToggle.removeClass('active');
			$body.removeClass('is-search-active');
		}
        //if (!jQuery(e.target).is('.megamenu.show')) {
            jQuery('.megamenu').removeClass('show');
            //jQuery('.mdm').removeClass('active');
        //}
	});

	$('.header-search').on('click', function (e) {
		e.stopPropagation();
	});

	// Sticky header 
    var catDropdown = $('.category-dropdown'),
        catInitVal = catDropdown.data('visible');
        
        console.log($(window).width());
        console.log($('.sticky-header').length);
	if ( $('.sticky-header').length && $(window).width() >= 992 ) {
		var sticky = new Waypoint.Sticky({
			element: $('.sticky-header')[0],
			stuckClass: 'fixed',
			offset: -300,
            handler: function ( direction ) {
                // Show category dropdown
                if ( catInitVal &&  direction == 'up') {
                    catDropdown.addClass('show').find('.dropdown-menu').addClass('show');
                    catDropdown.find('.dropdown-toggle').attr('aria-expanded', 'true');
                    return false;
                }

                // Hide category dropdown on fixed header
                if ( catDropdown.hasClass('show') ) {
                    catDropdown.removeClass('show').find('.dropdown-menu').removeClass('show');
                    catDropdown.find('.dropdown-toggle').attr('aria-expanded', 'false');
                } 
            }
		});
	}

    // Menu init with superfish plugin
    /*if ( $.fn.superfish ) {
        $('.menu, .menu-vertical').superfish({
            popUpSelector: 'ul, .megamenu',
            hoverClass: 'show',
            delay: 0,
            speed: 80,
            speedOut: 80 ,
            autoArrows: true
        });
    }*/

    /*Custom EFB*/
    //$('#mdm, .megamenu')
    $('#mdm').click(
        function(e){
            $('.megamenu').toggleClass('show');
            //$(this).toggleClass('active');
            e.stopPropagation()
        }/*,
        function(e){
            $('.megamenu').css('display','none');
        }*/

    );
    $(window).on('scroll', function() {
    	$('.megamenu').removeClass('show');
    });
    /*End custom*/

	// Mobile Menu Toggle - Show & Hide
    $('.mobile-menu-toggler').on('click', function (e) {
		$body.toggleClass('mmenu-active');
		$(this).toggleClass('active');
		e.preventDefault();
    });

    $('.mobile-menu-overlay, .mobile-menu-close').on('click', function (e) {
		$body.removeClass('mmenu-active');
		$('.menu-toggler').removeClass('active');
		e.preventDefault();
    });

	// Add Mobile menu icon arrows to items with children
    $('.mobile-menu').find('li').each(function () {
        var $this = $(this);

        if ( $this.find('ul').length ) {
            $('<span/>', {
                'class': 'mmenu-btn'
            }).appendTo($this.children('a'));
        }
    });

    // Mobile Menu toggle children menu
    $('.mmenu-btn').parent().on('click', function (e) {
        var $parent = $(this).closest('li'),
            $targetUl = $parent.find('ul').eq(0);

            if ( !$parent.hasClass('open') ) {
                $targetUl.slideDown(300, function () {
                    $parent.addClass('open');
                });
            } else {
                $targetUl.slideUp(300, function () {
                    $parent.removeClass('open');
                });
            }

        e.stopPropagation();
        e.preventDefault();
    });

	// Sidebar Filter - Show & Hide
    var $sidebarToggler = $('.sidebar-toggler');
    $sidebarToggler.on('click', function (e) {
		$body.toggleClass('sidebar-filter-active');
		$(this).toggleClass('active');
		e.preventDefault();
    });

    $('.sidebar-filter-overlay').on('click', function (e) {
		$body.removeClass('sidebar-filter-active');
		$sidebarToggler.removeClass('active');
		e.preventDefault();
    });

    // Clear All checkbox/remove filters in sidebar filter
    $('.sidebar-filter-clear').on('click', function (e) {
    	$('.sidebar-shop').find('input').prop('checked', false);

    	e.preventDefault();
    });

    // Product hover
    if ( $.fn.hoverIntent ) {
        $('.product-3').hoverIntent(function () {
            var $this = $(this),
                animDiff = ( $this.outerHeight() - ( $this.find('.product-body').outerHeight() + $this.find('.product-media').outerHeight()) ),
                animDistance = ( $this.find('.product-footer').outerHeight() - animDiff );

            $this.find('.product-footer').css({ 'visibility': 'visible', 'transform': 'translateY(0)' });
            $this.find('.product-body').css('transform', 'translateY('+ -animDistance +'px)');

        }, function () {
            var $this = $(this);

            $this.find('.product-footer').css({ 'visibility': 'hidden', 'transform': 'translateY(100%)' });
            $this.find('.product-body').css('transform', 'translateY(0)');
        });
    }

    // Slider For category pages / filter price
    if ( typeof noUiSlider === 'object' ) {
		var priceSlider  = document.getElementById('price-slider');

		// Check if #price-slider elem is exists if not return
		// to prevent error logs
		if (priceSlider == null) return;

		noUiSlider.create(priceSlider, {
			start: [ 0, 750 ],
			connect: true,
			step: 50,
			margin: 200,
			range: {
				'min': 0,
				'max': 1000
			},
			tooltips: true,
			format: wNumb({
		        decimals: 0,
		        prefix: '$'
		    })
		});

		// Update Price Range
		priceSlider.noUiSlider.on('update', function( values, handle ){
			$('#filter-price-range').text(values.join(' - '));
		});
	}

	// Product countdown
	if ( $.fn.countdown ) {
		$('.product-countdown').each(function () {
			var $this = $(this), 
				untilDate = $this.data('until'),
				compact = $this.data('compact'),
                dateFormat = ( !$this.data('format') ) ? 'DHMS' : $this.data('format'),
                newLabels = ( !$this.data('labels-short') ) ? 
                                ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'] :
                                ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Mins', 'Secs'],
                newLabels1 = ( !$this.data('labels-short') ) ? 
                                ['Year', 'Month', 'Week', 'Day', 'Hour', 'Minute', 'Second'] :
                                ['Year', 'Month', 'Week', 'Day', 'Hour', 'Min', 'Sec'];

            var newDate;

            // Split and created again for ie and edge 
            if ( !$this.data('relative') ) {
                var untilDateArr = untilDate.split(", "), // data-until 2019, 10, 8 - yy,mm,dd
                    newDate = new Date(untilDateArr[0], untilDateArr[1] - 1, untilDateArr[2]);
            } else {
                newDate = untilDate;
            }

			$this.countdown({
			    until: newDate,
			    format: dateFormat,
			    padZeroes: true,
			    compact: compact,
			    compactLabels: ['y', 'm', 'w', ' days,'],
			    timeSeparator: ' : ',
                labels: newLabels,
                labels1: newLabels1

			});
		});

		// Pause
		// $('.product-countdown').countdown('pause');
	}

	// Quantity Input - Cart page - Product Details pages
    function quantityInputs() {
        if ( $.fn.inputSpinner ) {
            $("input[type='number']").inputSpinner({
                decrementButton: '<i class="icon-minus"></i>',
                incrementButton: '<i class="icon-plus"></i>',
                groupClass: 'input-spinner',
                buttonsClass: 'btn-spinner',
                buttonsWidth: '26px'
            });
        }
    }

    // Sticky Content - Sidebar - Social Icons etc..
    // Wrap elements with <div class="sticky-content"></div> if you want to make it sticky
    if ( $.fn.stick_in_parent && $(window).width() >= 992 ) {
    	$('.sticky-content').stick_in_parent({
			offset_top: 80,
            inner_scrolling: false
		});
    }

    function owlCarousels($wrap, options) {
        if ( $.fn.owlCarousel ) {
            var owlSettings = {
                items: 1,
                loop: true,
                margin: 0,
                responsiveClass: true,
                nav: true,
                navText: ['<i class="icon-angle-left">', '<i class="icon-angle-right">'],
                dots: true,
                smartSpeed: 400,
                autoplay: false,
                autoplayTimeout: 15000,
                lazyLoad:true
            };
            if (typeof $wrap == 'undefined') {
                $wrap = $('body');
            }
            if (options) {
                owlSettings = $.extend({}, owlSettings, options);
            }

            // Init all carousel
            $wrap.find('[data-toggle="owl"]').each(function () {
                var $this = $(this),
                    newOwlSettings = $.extend({}, owlSettings, $this.data('owl-options'));

                $this.owlCarousel(newOwlSettings);
                
            });   
        }
    }

   
   

    

    // Dashboard Page Tab Trigger
    $('.tab-trigger-link').on('click', function (e) {
    	var targetHref = $(this).attr('href');

    	$('.nav-dashboard').find('a[href="'+targetHref+'"]').trigger('click');

    	e.preventDefault();
    });

    // Masonry / Grid layout fnction
	function layoutInit( container, selector) {
		$(container).each(function () {
            var $this = $(this);

            $this.isotope({
                itemSelector: selector,
                layoutMode: ( $this.data('layout') ? $this.data('layout'): 'masonry' )
            });
        });
	}
 
	function isotopeFilter ( filterNav, container) {
		$(filterNav).find('a').on('click', function(e) {
			var $this = $(this),
				filter = $this.attr('data-filter');

			// Remove active class
			$(filterNav).find('.active').removeClass('active');

			// Init filter
			$(container).isotope({
				filter: filter,
				transitionDuration: '0.7s'
			});
			
			// Add active class
			$this.closest('li').addClass('active');
			e.preventDefault();
		});
	}

    /* Masonry / Grid Layout & Isotope Filter for blog/portfolio etc... */
    if ( typeof imagesLoaded === 'function' && $.fn.isotope) {
        // Portfolio
        $('.portfolio-container').imagesLoaded(function () {
            // Portfolio Grid/Masonry
            layoutInit( '.portfolio-container', '.portfolio-item' ); // container - selector
            // Portfolio Filter
            isotopeFilter( '.portfolio-filter',  '.portfolio-container'); //filterNav - .container
        });

        // Blog
        $('.entry-container').imagesLoaded(function () {
            // Blog Grid/Masonry
            layoutInit( '.entry-container', '.entry-item' ); // container - selector
            // Blog Filter
            isotopeFilter( '.entry-filter',  '.entry-container'); //filterNav - .container
        });

        // Product masonry product-masonry.html
        $('.product-gallery-masonry').imagesLoaded(function () {
            // Products Grid/Masonry
            layoutInit( '.product-gallery-masonry', '.product-gallery-item' ); // container - selector
        });

        // Products - Demo 11
        $('.products-container').imagesLoaded(function () {
            // Products Grid/Masonry
            layoutInit( '.products-container', '.product-item' ); // container - selector
            // Product Filter
            isotopeFilter( '.product-filter',  '.products-container'); //filterNav - .container
        });
    }

	// Count
    var $countItem = $('.count');
	if ( $.fn.countTo ) {
        if ($.fn.waypoint) {
            $countItem.waypoint( function () {
                $(this.element).countTo();
            }, {
                offset: '90%',
                triggerOnce: true 
            });
        } else {
            $countItem.countTo();
        }    
    } else { 
        // fallback
        // Get the data-to value and add it to element
        $countItem.each(function () {
            var $this = $(this),
                countValue = $this.data('to');
            $this.text(countValue);
        });
    }

    // Scroll To button
    var $scrollTo = $('.scroll-to');
    // If button scroll elements exists
    if ( $scrollTo.length ) {
        // Scroll to - Animate scroll
        $scrollTo.on('click', function(e) {
            var target = $(this).attr('href'),
                $target = $(target);
            if ($target.length) {
                // Add offset for sticky menu
                var scrolloffset = ( $(window).width() >= 992 ) ? ($target.offset().top - 52) : $target.offset().top
                $('html, body').animate({
                    'scrollTop': scrolloffset
                }, 600);
                e.preventDefault();
            }
        });
    }

    // Review tab/collapse show + scroll to tab
    $('#review-link').on('click', function (e) {
        var target = $(this).attr('href'),
            $target = $(target);

        if ( $('#product-accordion-review').length ) {
            $('#product-accordion-review').collapse('show');
        }

        if ($target.length) {
            // Add offset for sticky menu
            var scrolloffset = ( $(window).width() >= 992 ) ? ($target.offset().top - 72) : ( $target.offset().top - 10 )
            $('html, body').animate({
                'scrollTop': scrolloffset
            }, 600);

            $target.tab('show');
        }

    	e.preventDefault();
    });

	// Scroll Top Button - Show
    var $scrollTop = $('#scroll-top');

    $(window).on('load scroll', function() {
        if ( $(window).scrollTop() >= 400 ) {
            $scrollTop.addClass('show');
        } else {
            $scrollTop.removeClass('show');
        }
    });

    // On click animate to top
    $scrollTop.on('click', function (e) {
        $('html, body').animate({
            'scrollTop': 0
        }, 800);
        e.preventDefault();
    });

    // Google Map api v3 - Map for contact pages
    if ( document.getElementById("map") && typeof google === "object" ) {

        var content =   '<address>' +
                            '88 Pine St,<br>' +
                            'New York, NY 10005, USA<br>'+
                            '<a href="#" class="direction-link" target="_blank">Get Directions <i class="icon-angle-right"></i></a>'+
                        '</address>';

        var latLong = new google.maps.LatLng(40.8127911,-73.9624553);

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: latLong, // Map Center coordinates
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP

        });

        var infowindow = new google.maps.InfoWindow({
            content: content,
            maxWidth: 360
        });

        var marker;
        marker = new google.maps.Marker({
            position: latLong,
            map: map,
            animation: google.maps.Animation.DROP
        });

        google.maps.event.addListener(marker, 'click', (function (marker) {
            return function() {
              infowindow.open(map, marker);
            }
        })(marker));
    }

    var $viewAll = $('.view-all-demos');
    $viewAll.on('click', function (e) {
        e.preventDefault();
        $('.demo-item.hidden').addClass('show');
        $(this).addClass('disabled-hidden');
    })

    var $megamenu = $('.megamenu-container .sf-with-ul');
    $megamenu.hover(function() {
        $('.demo-item.show').addClass('hidden');
        $('.demo-item.show').removeClass('show');
        $viewAll.removeClass('disabled-hidden');
        //alert('Here');
        $(".intro-slider-container").slideDown(2000);
    });

   
    $('body').on('click', '.carousel-dot', function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });

    /*Cookies GDPR*/
    checkCookie_eu();

    $("#cookie_accept").click(function(){
        setCookie_eu("cookies_consent", 1, 30);
    });
    $("#cookie_dec").click(function(){
        $('#cookie_directive_container').hide('slow');
    });
});

function quoteopen(pid){
    jQuery('#prdModal').modal('hide');
    jQuery('#qstitle').val('Quick View of '+pid);
    jQuery('#quickquote-modal').modal('show');
}

function checkCookie_eu()
				    {

				        var consent = getCookie_eu("cookies_consent");

				        if (consent == null || consent == "" || consent == undefined)
				        {
				            // show notification bar
				            $('#cookie_directive_container').show();
				        }

				    }

				    function setCookie_eu(c_name,value,exdays)
				    {

				        var exdate = new Date();
				        exdate.setDate(exdate.getDate() + exdays);
				        var c_value = escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
				        document.cookie = c_name + "=" + c_value+"; path=/";

				        $('#cookie_directive_container').hide('slow');
				    }


				    function getCookie_eu(c_name)
				    {
				        var i,x,y,ARRcookies=document.cookie.split(";");
				        for (i=0;i<ARRcookies.length;i++)
				        {
				            x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
				            y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
				            x=x.replace(/^\s+|\s+$/g,"");
				            if (x==c_name)
				            {
				                return unescape(y);
				            }
				        }
				    }

/*myfootscr = function (a) {
    console.log(a);
    if(a=='IN') {
        jQuery('#wpcf7-f286-o1').html('<img src="<?php echo home_url(); ?>/wp-content/uploads/2021/10/Head-Office.jpg" style="width:100%;">');
    }
}*/