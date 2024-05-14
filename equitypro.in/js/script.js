$(document).ready(function(){

	"use strict";
	
	/* =================================
	LOADER 
	=================================== */

	
	/* =================================
	NAVBAR 
	=================================== */
	var top = jQuery(document).scrollTop();
	var batas = 200;
	var navbar = jQuery('.navbar-main');
	
	jQuery(window).scroll(function () {
		top = jQuery(document).scrollTop();
		if ( top > batas ) {
			navbar.addClass('stiky');
		}else {
			navbar.removeClass('stiky'); 
		}
	});
	
	/* =================================
	BANNER ROTATOR IMAGE 
	=================================== */
	$('#slides').superslides({
		//animation: "fade",
		play: 5000,
		slide_speed: 800,
		pagination: true,
		hashchange: false,
		scrollable: true,
		
	});

	/* =================================
	BACK TO TOP 
	=================================== */
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
	

	/* =================================
	OWL
	=================================== */
	
	var caro = $("#caro");
	caro.owlCarousel({
		items: 1,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		loop: true,
	});	

	var caro2 = $("#caro-2");
	caro2.owlCarousel({
		autoplay: true,
		margin: 30,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		dots: true,
		loop: true,
		nav: true,
		navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
		items : 2,
	});

	var caro3 = $("#caro-3");
	caro3.owlCarousel({
		autoplay: true,
		margin: 30,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		items : 3,
		dots: true,
		loop: true,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});

	var caro4 = $("#caro-4");
	caro4.owlCarousel({
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		items : 4,
		dots: true,
		loop: true,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});

	var testimony = $("#owl-testimony");
	testimony.owlCarousel({
		items: 1,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		loop: true,
		nav: true,
		navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
		dots: false,
	});
	

	/* =================================
	ISOTOP
	=================================== */	
	var $grid = $('.grid').isotope({
		itemSelector: '.grid-item',
		isFitWidth: true,
		masonry: {
			columnWidth: '.grid-sizer'
		}
	});

	$grid.imagesLoaded().progress( function() {
		$grid.isotope('layout');
	});



	/* =================================
	FAQ
	=================================== */	
	$(".panel").on("show.bs.collapse hide.bs.collapse", function(e) {
	    if (e.type=='show'){
	      $(this).addClass('active');
	    }else{
	      $(this).removeClass('active');
	    }
  	}); 
	
	/* =================================
	MAGNIFIC POPUP
	=================================== */
	
	
	/* =================================
	GOOGLE MAPS
	=================================== */

	
});




  
  