$(document).ready(function() {

	// ===================================================
	// SCROLL DETECTION/THROTTLING
	// ===================================================

	var scrollPos = 0;

	// Throttle Function
	function throttle(fn, wait) {
	  var time = Date.now();
	  return function() {
	    if ((time + wait - Date.now()) < 0) {
	      fn();
	      time = Date.now();
	    }
	  }
	}

	// Check for scroll position every 50ms
	window.addEventListener('scroll', throttle(scrollCheck, 20));

	// Give navbar scrolled class if scrolled
	function scrollCheck() {
		scrollPos = $(window).scrollTop();

		if (scrollPos >= 80) {
			$('#head-nav').addClass('is-scrolled');
		} else {
			$('#head-nav').removeClass('is-scrolled');
		}
	}

	scrollCheck();


	// ===================================================
	// FADE OUT PRELOADER
	// ===================================================

	setTimeout(function() {
		$('#preloader').fadeOut(750);
	}, 5000);

	$('#nav-mobile-toggler').click(function() {
		$('#nav-mobile').toggleClass('is-open');
	});


	// ===================================================
	// TYPEWRITER
	// ===================================================

	var typewriter = new Typewriter('#typewriter', {
		loop: true,
		delay: 50,
	});

	typewriter
		.start()
		.typeString('EXPERIENCE')
		.pauseFor(500)
		.deleteAll('natural')
		.typeString('CHANGE')
		.pauseFor(500)
		.deleteAll('natural')
		.typeString('CREATE')
		.pauseFor(500)
		.deleteAll('natural')
		.typeString('PARTNER')
		.pauseFor(500)
		.deleteAll('natural')
		.typeString('DREAM')
		.pauseFor(500)
		.deleteAll('natural')
		.typeString('PLAY')
		.pauseFor(500)
		.deleteAll('natural')
		.typeString('LEARN')
		.pauseFor(500)
		.deleteAll('natural')
		.typeString("LET'S DO THIS...")
		.pauseFor(1500)
		.deleteAll('natural');


	// ===================================================
	// SLICK SLIDERS
	// ===================================================

	// Intro slider
	$('#intro-slider').slick({
		arrows: false,
		autoplay: true,
		dots: true,
		fade: true,
		pauseOnFocus: false,
		pauseOnHover: false,
	});

	// Team sliders
	$('#team-slider-1').slick({
		arrows: false,
		asNavFor: '#team-slider-2',
		slidesToShow: 6,
		slidesToScroll: 2,
		responsive: [
		    {
		      breakpoint: 767,
		      settings: {
		        slidesToShow: 4
		      }
		    }
		]
	});
	$('#team-slider-2').slick({
		asNavFor: '#team-slider-1',
		slidesToShow: 6,
		slidesToScroll: 2,
		responsive: [
		    {
		      breakpoint: 767,
		      settings: {
		        slidesToShow: 4
		      }
		    }
		]
	});

	// Space sliders
	$('#space-slider').slick({
		fade: true
	});

	$('#space-slider, #team-slider-2').on('beforeChange', function() {
		if ($(this).hasClass('ring-white')) {
			$(this).removeClass('ring-white');
			$(this).addClass('ring-yellow');
		} else if ($(this).hasClass('ring-yellow')) {
			$(this).removeClass('ring-yellow');
			$(this).addClass('ring-blue');
		} else if ($(this).hasClass('ring-blue')) {
			$(this).removeClass('ring-blue');
			$(this).addClass('ring-black');
		} else if ($(this).hasClass('ring-black')) {
			$(this).removeClass('ring-black');
			$(this).addClass('ring-white');
		}
	});


	// ===================================================
	// WORK SECTION MODALS
	// ===================================================

	var portfolioItemFull;
	var portfolioItemTitle;
	var portfolioItemDescription;

	$('.work-grid-item').click(function() {

		// If video clicked on is not same as last replace content
		if (portfolioItemFull != $(this).attr('data-video-link')) {
			portfolioItemFull = $(this).attr('data-video-link');
			portfolioItemTitle = $(this).find('h3').html();
			portfolioItemDescription = $(this).find('p').html();
			$('#work-grid-item-modal .modal-body').html('<video id="work-grid-item-modal-video" class="is-loading" autoplay controls><source src="' + portfolioItemFull + '" type="video/mp4"></video>');
			$('#work-grid-item-modal .modal-footer h3').html(portfolioItemTitle);
			$('#work-grid-item-modal .modal-footer p').html(portfolioItemDescription);
		}

		// Open modal
		$('#work-grid-item-modal').modal('show');
	});

	$('#work-grid-item-modal .close').click(function() {
		$('#work-grid-item-modal').modal('hide')
	});

	$('#work-grid-item-modal').on('shown.bs.modal', function (e) {
		document.getElementById('work-grid-item-modal-video').play();
	});

	$('#work-grid-item-modal').on('hide.bs.modal', function (e) {
		document.getElementById('work-grid-item-modal-video').pause();
	});


	// ===================================================
	// GSAP SCROLLTRIGGER
	// ===================================================

	ScrollTrigger.create({
		trigger: "#intro",
		start: "top 50%",
		end: "bottom 50%",
		onEnter: () => $('#dot-nav').addClass('dot-nav-intro'),
		onLeave: () => $('#dot-nav').removeClass('dot-nav-intro'),
		onEnterBack: () => $('#dot-nav').addClass('dot-nav-intro'),
		onLeaveBack: () => $('#dot-nav').removeClass('dot-nav-intro'),
	});
	ScrollTrigger.create({
		trigger: "#work",
		start: "top 50%",
		end: "bottom 50%",
		onEnter: () => $('#dot-nav').addClass('dot-nav-work'),
		onLeave: () => $('#dot-nav').removeClass('dot-nav-work'),
		onEnterBack: () => $('#dot-nav').addClass('dot-nav-work'),
		onLeaveBack: () => $('#dot-nav').removeClass('dot-nav-work'),
	});
	ScrollTrigger.create({
		trigger: "#team",
		start: "top 50%",
		end: "bottom 50%",
		onEnter: () => $('#dot-nav').addClass('dot-nav-team'),
		onLeave: () => $('#dot-nav').removeClass('dot-nav-team'),
		onEnterBack: () => $('#dot-nav').addClass('dot-nav-team'),
		onLeaveBack: () => $('#dot-nav').removeClass('dot-nav-team'),
	});
	ScrollTrigger.create({
		trigger: "#contact",
		start: "top 50%",
		end: "bottom 50%",
		onEnter: () => $('#dot-nav').addClass('dot-nav-contact'),
		onLeave: () => $('#dot-nav').removeClass('dot-nav-contact'),
		onEnterBack: () => $('#dot-nav').addClass('dot-nav-contact'),
		onLeaveBack: () => $('#dot-nav').removeClass('dot-nav-contact'),
	});

	$('.work-grid-item').each(function() {

		gsap.from($(this), {
			duration:1, opacity:"0", y:"64px", ease:"power1.inOut",
				scrollTrigger: {
					trigger:$(this),
					start:"top 85%",
					end:"bottom 25%",

					toggleActions:"restart play play reverse"
				}
		});
	});


	// ===================================================
	// CONTACT FORM
	// ===================================================

	var contactHeight = $('#contact-form-wrapper').height();
	$('#contact-form-wrapper').height(contactHeight);

	$('#contact-send-btn').click(function(e) {
		e.preventDefault();
	    var postdata = $('.contact-form-wrapper form').serialize();
	     $.ajax({
	        type: 'POST',
	        url: 'https://formspree.io/xrqqkjrm',
	        data: postdata,
	        dataType: 'json',
	        success: function(json) {
	           $('#contact-form-wrapper').toggleClass('sent');
	        }
	    });


		setTimeout(function() {
			$('#contact-form').fadeOut(600);
		}, 750);

		setTimeout(function() {
			$('#contact-form-wrapper').animate({
			    height: "160px"
			  }, 500, function() {
			    // Animation complete.
			  });
		}, 1500);

		setTimeout(function() {
			$('#contact-form-success').addClass('is-active');
		}, 1750);
	});


	// ===================================================
	// INLINE SVG
	// ===================================================

	$('img.svg').each(function(){
	    var $img = jQuery(this);
	    var imgID = $img.attr('id');
	    var imgClass = $img.attr('class');
	    var imgURL = $img.attr('src');

	    jQuery.get(imgURL, function(data) {
	        // Get the SVG tag, ignore the rest
	        var $svg = jQuery(data).find('svg');

	        // Add replaced image's ID to the new SVG
	        if(typeof imgID !== 'undefined') {
	            $svg = $svg.attr('id', imgID);
	        }
	        // Add replaced image's classes to the new SVG
	        if(typeof imgClass !== 'undefined') {
	            $svg = $svg.attr('class', imgClass+' replaced-svg');
	        }

	        // Remove any invalid XML tags as per http://validator.w3.org
	        $svg = $svg.removeAttr('xmlns:a');

	        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
	        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
	            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
	        }

	        // Replace image with new SVG
	        $img.replaceWith($svg);

	    }, 'xml');

	});

});
