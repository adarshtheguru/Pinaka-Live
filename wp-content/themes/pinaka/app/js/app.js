$(document).ready(function () {
	// //smooth scroll
	// const lenis = new Lenis()
	// lenis.on('scroll', (e) => {
	// })
	// function raf(time) {
	// 	lenis.raf(time)
	// 	requestAnimationFrame(raf)
	// }
	// requestAnimationFrame(raf)
	// //smooth scroll

	
	var d = new Date();
	$('.copyrightYear').html(d.getFullYear());

	var winHT = $(window).height();
	var winWD = $(window).width();
	var navHt = $("header").outerHeight();
	// var bannerHt = winHT - navHt;
	var bannerHt = winHT;
	isFloorplan = 0;
	isBrochure = 0;

	$('.banner_ht').css('height', bannerHt);
	// $('.section-first').css('margin-top', navHt)

	//dynamic margin code
	var containerWidth = $(".container").width(); // Get container width
	var windowWidth = $(window).width(); // Get full window width
	var sideMargin = (windowWidth - containerWidth) / 2; // Calculate side margin

	$(".dynamicMarLeft").css("margin-left", sideMargin + "px"); // Apply left margin
	$(".dynamicPadLeft").css("padding-left", sideMargin + "px"); // Apply left padding

	$(".goto-home").on("click", function () {
		$("html,body").animate({
			scrollTop: 0
		}, 1000);
	});

	$(".scroll-next").click(function () {
		var cls = $(this).closest("section").next().offset().top - 50;
		$("html, body").animate({ scrollTop: cls }, 1000);
	});


	$(".mobile-service").click(function () {
		$(".addressBox").addClass("active");
	});
	$(".close-menu").click(function () {
		$(".addressBox").removeClass("active");
	});

    $('#caseStudyFilter').on('change', function() {
        var selected = $(this).val();

        if (selected === 'all') {
            $('.caseGridBox .box').fadeIn(300);
        } else {
            $('.caseGridBox .box').hide();
            $('.caseGridBox .box#' + selected).fadeIn(300);
        }
    });



	if (winWD < 992) {
		// $(".enq_click, .frmclose").click(function() {
		// 	if ($(".form-container").is(':visible')) {
		// 		$(".form-container").slideUp();
		// 	} else {
		// 		$(".form-container").slideToggle();
		// 	}
		// 	$(".form-container, .frmclose").toggleClass("show");
		// });
		$('.pinaka-service-list .cols').slick({
			slidesToShow: 1,      // 3 slides per row
			slidesToScroll: 1,    // scroll 3 at a time
			rows: 1,
			arrows: true,
			dots: false,
			autoplay: false,
			autoplaySpeed: 3000,
			infinite: true,
			prevArrow: '#serviceLeft',
		  nextArrow: '#serviceRight',
		});
		$('.testimonial-grid').slick({
			slidesToShow: 1,      // 3 slides per row
			slidesToScroll: 1,    // scroll 3 at a time
			rows: 1,
			arrows: true,
			dots: false,
			autoplay: false,
			autoplaySpeed: 3000,
			infinite: true,
			prevArrow: '#testLeft',
		nextArrow: '#testRight',
		});

		$('.insights .partB').slick({
			slidesToShow: 1,      // 3 slides per row
			slidesToScroll: 1,    // scroll 3 at a time
			rows: 1,
			arrows: true,
			dots: false,
			autoplay: false,
			autoplaySpeed: 3000,
			infinite: true,
			prevArrow: '#blogLeft',
		nextArrow: '#blogRight',
		});
			
	}

	$(".menu-icon-mobile").on("click", function () {
		$(".nav-links").slideToggle();
		$(".menu-icon-mobile").toggleClass("active");
	});

	if (winWD <= 992) {
		$(".nav-links a").on("click", function () {
			$(".menu-icon-mobile").trigger("click");
		})

		// $(".mob_enq_click, .frmclose").on("click" , function(){
		// 	isBrochure = 0;
		// 	isFloorplan = 0;
		// 	$(".form-container").toggleClass("show");
		// });
	}


	var childrenSelector = $(".nav-links a");
	var aChildren = $(".nav-links a"); // find the a children of the list items
	if (winWD <= 700)
		var gap = 55;// $(".header-wrapper").outerHeight(); //Navigation height
	else
		var gap = 100;
	var aArray = []; // create the empty aArray
	for (var i = 0; i < childrenSelector.length; i++) {
		var aChild = aChildren[i];
		if (!$(aChild).hasClass('extLink')) {
			if ($(aChild).attr('rel')) {
				var ahref = $(aChild).attr('rel');
				aArray.push(ahref);
			}
		}
	}

	//On Scroll - Add class active to active tab
	// $(window).scroll(function(){
	// 	var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
	// 	var windowHeight = $(window).height(); // get the height of the window
	// 	var docHeight = $(document).height();
	// 	for(i=0;i<aArray.length;i++){
	// 		var theID = aArray[i];
	// 		var divPos = $("#"+theID).offset().top; // get the offset of the div from the top of page
	// 		var divHeight = $("#"+theID).outerHeight(); // get the height of the div in question
	// 		if (windowPos >= (divPos - gap) && windowPos < ((divPos - gap) + divHeight)) {
	// 			if (!$("a[rel='" + theID + "']").hasClass("active"))
	// 			{
	//    	// ga('set', 'page', '/'+theID);
	//    	// ga('send', 'pageview');
	//    	$("a[rel='" + theID + "']").addClass("active"); 
	//   }
	//   } 
	//   else 
	//   {
	//    	$("a[rel='" + theID + "']").removeClass("active");
	//   }
	// }	

	// 	//If document has scrolled to the end. Add active class to the last navigation menu
	// 	if(windowPos + windowHeight == docHeight) {
	// 		if (!$(".nav-links a:not(.extLink):last-child").hasClass("active")) {
	// 			var navActiveCurrent = $(".active").attr("rel");
	// 			$("a[rel='" + navActiveCurrent + "']").removeClass("active");
	// 			$(".nav-links a:not(.extLink):last-child").addClass("active");
	// 		}
	// 	}
	// });

	//On Click
	$('.nav-links a').on("click", function () {
		if (!$(this).hasClass('extLink')) {
			var href = $(this).attr("rel");
			if (winWD <= 700)
				var gap = 45; // $(".header-wrapper").outerHeight(); //Navigation height
			else
				var gap = 96;

			$('html,body').animate({
				scrollTop: $("#" + href).offset().top - gap
			}, 1000);
		}
	});
	//tab code
	// ✅ TAB SWITCH CODE — Update to re-run handler:
	$('.tab-title').on('click', function () {
		var targetTab = $(this).data('tab');

		$('.tab-title').removeClass('active');
		$(this).addClass('active');

		$('.tab-content').removeClass('active');
		$('#' + targetTab).addClass('active');

		// 🔁 Re-apply load more on new active tab
		setTimeout(() => {
			const $activeGrid = $('#' + targetTab).find('.blogGridBox');
			const $activeBtn = $('#' + targetTab).find('.blogLoadBtn');

			if ($activeGrid.length && $activeBtn.length) {
				loadMoreHandler($activeGrid, $activeBtn, 6, 4);
			}
		}, 10); // small delay to ensure tab content is visible
	});

	//sliders
	$('.data-stats').slick({
		slidesToShow: 1,
		arrows: false,
		dots: false,
		autoplay: true,
		fade: true,
		cssEase: 'linear'
	});

$('.clientSlider').slick({
    // vertical: true,          // Vertical scroll
    slidesToShow: 3,        // Show all logos in one column first
    slidesToScroll: 1,
    rows: 4,
    autoplay: true,
    // autoplaySpeed: 0,        // Continuous
    speed: 3000,             // Smooth animation
    // cssEase: 'linear',       // Linear effect
    infinite: true,
    arrows: false,
    dots: false,
    pauseOnHover: false
  });

// $('.clientSlider2').slick({
//     vertical: true,          // Vertical scroll
//     slidesToShow: 4,        // Show all logos in one column first
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 0,        // Continuous
//     speed: 4000,             // Smooth animation
//     cssEase: 'linear',       // Linear effect
//     infinite: true,
//     arrows: false,
//     dots: false,
//     pauseOnHover: false
//   });

// $('.clientSlider3').slick({
//     vertical: true,          // Vertical scroll
//     slidesToShow: 4,        // Show all logos in one column first
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 0,        // Continuous
//     speed: 3000,             // Smooth animation
//     cssEase: 'linear',       // Linear effect
//     infinite: true,
//     arrows: false,
//     dots: false,
//     pauseOnHover: false
//   });
$('.clientSlider4').slick({
    slidesToShow: 4,      // 3 slides per row
	slidesToScroll: 1,    // scroll 3 at a time
	rows: 4,
    autoplay: true,
    // autoplaySpeed: 0,        // Continuous
    speed: 3000,             // Smooth animation
    // cssEase: 'linear',       // Linear effect
    infinite: true,
    arrows: false,
    dots: false,
    pauseOnHover: false
  });

// $('.clientSlider5').slick({
//     vertical: true,          // Vertical scroll
//     slidesToShow: 2,        // Show all logos in one column first
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 0,        // Continuous
//     speed: 4000,             // Smooth animation
//     cssEase: 'linear',       // Linear effect
//     infinite: true,
//     arrows: false,
//     dots: false,
//     pauseOnHover: false
//   });

// $('.clientSlider6').slick({
//     vertical: true,          // Vertical scroll
//     slidesToShow: 2,        // Show all logos in one column first
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 0,        // Continuous
//     speed: 3000,             // Smooth animation
//     cssEase: 'linear',       // Linear effect
//     infinite: true,
//     arrows: false,
//     dots: false,
//     pauseOnHover: false
//   });

	$('.testSlider').slick({
		slidesToShow: 3,
		arrows: true,
		dots: true,
		appendDots: '.testDotWrap',
		prevArrow: '#testLeft',
		nextArrow: '#testRight',
		autoplay: true,
		responsive: [
			{
				breakpoint: 1441,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 1
				}
			},
		]
	});
	$('.awardSlider').slick({
		slidesToShow: 4,
		arrows: false,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	$('.openingSlider').slick({
		slidesToShow: 2,
		centerMode: true,
		centerPadding: '250px',
		arrows: false,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 2,
					centerMode: false
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					centerMode: false
				}
			}
		]
	});
	$('.blogSlider').slick({
		slidesToShow: 3,
		arrows: false,
		dots: true,
		appendDots: '.blogDots',
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	$('.shapingFutureCont').slick({
		slidesToShow: 1,
		arrows: false,
		dots: true,
		infinite: true,
		speed: 1,
		fade: true,
		cssEase: 'linear',
		touchThreshold: 100,
		autoplay: true,
		autoplaySpeed: 1,
	});
	// $('.specialize_slider').slick({
	// 	slidesToShow:1,
	// 	arrows:true,
	// 	dots:false,  
	// 	infinite: true,
	// 	speed: 1000, 
	// 	prevArrow:'#specialize_sliderLeft',
	// 	nextArrow:'#specialize_sliderRight',
	// });
	$('.blueCardSlider-1').slick({
		centerMode: false,
		centerPadding: '20px', // controls half slide visibility
		slidesToShow: 3,
		infinite: true,
		arrows: true,
		prevArrow: '#bc-l-arrow1',
		nextArrow: '#bc-r-arrow1',
		dots: false,
		autoplay: true,
		responsive: [
			{
				breakpoint: 1441,
				settings: {
					centerPadding: '360px'
				}
			},
			{
				breakpoint: 480,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1
				}
			}
		]
	});
	$('.blueCardSlider-2').slick({
		centerMode: true,
		centerPadding: '420px', // controls half slide visibility
		slidesToShow: 2,
		infinite: true,
		arrows: true,
		prevArrow: '#bc-l-arrow2',
		nextArrow: '#bc-r-arrow2',
		dots: false,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1441,
				settings: {
					centerPadding: '360px'
				}
			},
			{
				breakpoint: 480,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1
				}
			}
		]
	});
	$('.blueCardSlider-3').slick({
		centerMode: false,
		centerPadding: '20px', // controls half slide visibility
		slidesToShow: 3,
		infinite: true,
		arrows: true,
		prevArrow: '#bc-l-arrow3',
		nextArrow: '#bc-r-arrow3',
		dots: false,
		autoplay: true,
		responsive: [
			{
				breakpoint: 1441,
				settings: {
					centerPadding: '360px'
				}
			},
			{
				breakpoint: 480,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1
				}
			}
		]
	});
	$('.case-study-slider').slick({
		centerMode: true,
		slidesToShow: 2,
		centerPadding: '10%', // ~10% visibility of left & right slides
		infinite: true,
		arrows: true,
		autoplay: true,
		dots: false,
		nextArrow: "#csRight",
    	prevArrow: "#csLeft",
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					centerPadding: '15%' // adjust for smaller screens
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					centerPadding: '10%'
				}
			}
		]
	});

	//Light Gallery
    $('.campaign-slider-1').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      infinite: true,
      prevArrow: $('.prev-1'),
      nextArrow: $('.next-1'),
      responsive: [
          {
              breakpoint: 1024,
              settings: { slidesToShow: 2 }
          },
          {
              breakpoint: 768,
              settings: { slidesToShow: 1 }
          }
      ]
    });

    $('.campaign-slider-2').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      infinite: true,
      prevArrow: $('.prev-2'),
      nextArrow: $('.next-2'),
      responsive: [
          {
              breakpoint: 1024,
              settings: { slidesToShow: 2 }
          },
          {
              breakpoint: 768,
              settings: { slidesToShow: 1 }
          }
      ]
    });

	// init lightgallery on slick slides
    lightGallery(document.querySelector('.campaign-slider-1'), {
        selector: 'img',
        plugins: [lgZoom],
        speed: 500,
    });
    lightGallery(document.querySelector('.campaign-slider-2'), {
        selector: 'img',
        plugins: [lgZoom],
        speed: 500,
    });

    lightGallery(document.querySelector('.blueCardSlider-1'), {
        selector: 'img',
        plugins: [lgZoom],
        speed: 500,
    });
    lightGallery(document.querySelector('.blueCardSlider-3'), {
        selector: 'img',
        plugins: [lgZoom],
        speed: 500,
    });

	//gsap
	gsap.registerPlugin(ScrollTrigger);

	// slides logic
	const slides = gsap.utils.toArray(".specialize_cont");
	if (slides.length) {
		// capture original background colors
		slides.forEach((s) => {
			s.dataset.origBg = window.getComputedStyle(s).backgroundColor;
		});
		const firstBg = slides[0].dataset.origBg;

		// initial positioning (stacked)
		gsap.set(slides, {
			position: "absolute",
			top: 0,
			left: 0,
			width: "100%",
			height: "100%"
		});

		// stack order
		gsap.set(slides, { zIndex: i => slides.length - i });

		// start positions
		gsap.set(slides[0], { x: "0%" });
		slides.slice(1).forEach(s => gsap.set(s, { x: "70%" }));

		// force bg color
		slides.slice(1).forEach(s => gsap.set(s, { backgroundColor: firstBg }));

		// build timeline
		const tl = gsap.timeline({
			scrollTrigger: {
			trigger: ".specialize-slide",
			start: "top top",
			end: "+=" + (slides.length * 100) + "%",
			pin: true,
			scrub: 0.6,
			anticipatePin: 1,
			// remove onLeave/onEnterBack, handled inside timeline now
			}
					});

			// slide transitions
			slides.forEach((slide, i) => {
			if (i === 0) return;

			// slide out previous
			tl.to(slides[i - 1], { x: "-100%", duration: 1, ease: "power1.inOut" }, "+=0")
			.to(slide, { x: "0%", duration: 1, ease: "power1.inOut" }, "<");

			// if this is specialise_2, fade in gradient a bit slower & after slide has started
			if (slide.classList.contains("specialise_2")) {
				tl.to(slide, {
					"--gradOpacity": 1,
					duration: 2,            // slower fade
					ease: "power2.out"
				}, "<0.4");               // start 40% *after* slide transition begins
			}
			});
		}

	// service section bg effect
	if (document.querySelector("#DeliverResult")) {
		gsap.to("#DeliverResult", {
			backgroundColor: "#003E63", // final color
			color: "#ffffff", // final text color
			ease: "none",
			scrollTrigger: {
				trigger: "#DeliverResult",
				start: "top top",
				end: "+=100%",
				scrub: true,
				pin: true
			}
		});
	}

	// path animation
	function animateThread(selector, triggerClass, minOffset = 0) {
		const path = document.querySelector(`${selector} path`);
		if (path) {
			const pathLength = path.getTotalLength();

			// Setup stroke
			path.style.strokeDasharray = pathLength;
			path.style.strokeDashoffset = pathLength;
			path.style.fill = "none";

			gsap.to(path, {
				strokeDashoffset: 0, // full scroll range
				ease: "none",
				scrollTrigger: {
					trigger: triggerClass,
					start: "top top",
					end: "bottom top",
					scrub: true,
					onUpdate: () => {
						const current = parseFloat(path.style.strokeDashoffset);
						// clamp if needed
						if (current < minOffset) {
							path.style.strokeDashoffset = minOffset;
						}
					}
				}
			});
		}
	}

	// animate each thread
	animateThread(".customThread", ".scroll_section__wrapper", 3607);   // stops at 3607

	function animateThreadSmall(selector, triggerClass, minOffset = 0, scrollRange = "+=500", offset = 0) {
  const path = document.querySelector(`${selector} path`);
  if (path) {
    const pathLength = path.getTotalLength();

    path.style.strokeDasharray = pathLength;
    path.style.strokeDashoffset = pathLength;
    path.style.fill = "none";

    gsap.to(path, {
      strokeDashoffset: 0,
      ease: "none",
      scrollTrigger: {
        trigger: triggerClass,
        start: `top+=${offset} center`,   // 👈 apply offset
        end: scrollRange,
        scrub: true,
        onUpdate: () => {
          const current = parseFloat(path.style.strokeDashoffset);
          if (current < minOffset) {
            path.style.strokeDashoffset = minOffset;
          }
        }
      }
    });
  }
}

	// start a bit earlier (before section hits center)
	animateThreadSmall(".topThread", ".topThreadList", 0, "+=500", -150);

	// start later (after section is already past)
	animateThreadSmall(".bottomThread", ".bottomThreadList", 0, "+=500", -150);

	// default (no offset)
	animateThreadSmall(".topCenterThread", ".threadSection", 0, "+=500");

	// another example
	animateThreadSmall(".animatedThread", ".strategy", 0, "+=500", +100);

	//aboutUs bg video
	$('.play-button, .video-thumbnail').click(function () {
		$('.video-thumbnail, .play-button').fadeOut();
		$('.video-content')[0].requestFullscreen();
		$('.video-content')[0].play();
	});

	//smooth mover
	$('.smoothMover').on('click', function () {
		const relValue = $(this).attr('data-cont');
		const target = $('div[class="' + relValue + '"]');
		if (target.length) {
			$('html, body').animate({
				scrollTop: target.offset().top - navHt - 10
			}, 800); // Smooth scroll
		}
	});
	$('.scrollDownWrapper').on('click', function () {

		// Traverse DOM upwards to a common parent, then find next visible sibling
		const nextSection = $(this).closest('*').parent().nextAll(':visible').first();

		if (nextSection.length) {
			$('html, body').animate({
				scrollTop: nextSection.offset().top - navHt + 10
			}, 800);
		} else {
			console.log('No next section found');
		}
	});

	//load more
	function loadMoreHandler(containerSelector, btnSelector, desktopCount, mobileCount) {
		const $container = $(containerSelector);
		const $boxes = $container.find('.box');
		const $btn = $(btnSelector);

		function getCount() {
			return $(window).width() < 992 ? mobileCount : desktopCount;
		}

		function showInitial() {
			const count = getCount();
			$boxes.hide().slice(0, count).show();
			$btn.text('LOAD MORE').data('expanded', false);
		}

		showInitial();

		$(window).on('resize', function () {
			if (!$btn.data('expanded')) {
				showInitial();
			}
		});

		$btn.off('click').on('click', function () {
			const isExpanded = $btn.data('expanded');
			const count = getCount();
			const visible = $boxes.filter(':visible').length;

			if (!isExpanded) {
				$boxes.slice(visible, visible + count).slideDown();
				if (visible + count >= $boxes.length) {
					$btn.text('LOAD LESS').data('expanded', true);
				}
			} else {
				showInitial();
			}
		});
	}

	// loadMoreHandler('.gridBox', '.gridLoadBtn', 8, 6);
	loadMoreHandler('.caseGridBox', '.caseLoadBtn', 10, 4);
	loadMoreHandler('.blogGridBox', '.blogLoadBtn', 6, 4);

	//hamburger
	$('.hamburger').click(function () {
		$(this).toggleClass('active');

		if ($(this).hasClass('active')) {
			$("header").addClass('headerBg');
			$('.hamburgerMenu').slideDown(300);
		} else {
			$("header").removeClass('headerBg');
			$('.hamburgerMenu').slideUp(300);
		}
	});
	document.querySelector('.hamburger').addEventListener('click', function() {
  document.body.classList.toggle('menu-open');
});

	//hamburger sub menus
	$(".hasSubMenu > a").click(function (e) {
		e.preventDefault(); // prevent default anchor behavior
		var parentLi = $(this).parent();

		// Toggle active class
		parentLi.toggleClass("active");

		// Show submenu only if active
		if (parentLi.hasClass("active")) {
			parentLi.find(".hamMenuB").slideDown(); // or use `.show()` if no animation needed
		} else {
			parentLi.find(".hamMenuB").slideUp(); // or use `.hide()`
		}
	});

	/*------------------- animation js----------------------------------------*/

	var $window = $(window),
		win_height_padded = $window.height() * 2;

	$window.on('scroll', revealOnScroll);

	function revealOnScroll() {
		var scrolled = $window.scrollTop(),
			win_height_padded = $window.height() * 1.02;

		// Showed...
		$(".revealOnScroll:not(.animated)").each(function () {
			var $this = $(this),
				offsetTop = $this.offset().top;
			if (scrolled + win_height_padded > offsetTop) {

				if ($this.data('timeout')) {

					window.setTimeout(function () {
						if ($this.hasClass("path")) {
							$this.addClass($this.data('animation'));
						} else {
							$this.addClass('animated ' + $this.data('animation'));
						}
						function stopTimer() {
							timer.stop;
						}
						$this.animate("", "slow");
					}, parseInt($this.data('timeout'), 10));
				} else {
					$this.addClass('animated ' + $this.data('animation'));
				}
			}
		});
	}
	// --------------------------------------
	//form handle
	$("#formA, #subscribeMailForm, #contactUsForm, #popUpForm").each(function () {
		$(this).validate({
			submitHandler: function (form) {
				$(form).find('button[type="submit"]').val('Please wait....').attr('disabled', "true");
				$.ajax({
					type: "POST",
					url: wpData.siteUrl + '/leadFormSubmit.php',
					data: $(form).serialize(), // Serialize the correct form data
					success: function (resp, status, xhr) {
						// Handle success response
						if (resp == 'success') {
							$(form).hide();
							$(form).next('.success-msg').show();
						}
					},
					error: function (resp, status, xhr) {
						// Handle error response
					}
				});
			}
		});
	});

	//popup form
	$('.enq_click').on('click', function () {
		$('#popupOverlay').fadeIn();
		// checkHamburgerActive();
	});

	$('#closePopupBtn').on('click', function () {
		$('#popupOverlay').fadeOut();
	});
	$('.career_click').on('click', function () {
		$('#popupOverlayCareer').fadeIn();
		// checkHamburgerActive();
	});

	$('#closePopupBtn').on('click', function () {
		$('#popupOverlayCareer').fadeOut();
	});

	// Optional: Hide popup on outside click
	$('#popupOverlay').on('click', function (e) {
		if ($(e.target).is('#popupOverlay')) {
			$(this).fadeOut();
		}
	});

});

$(window).scroll(function () {
	$(".lazy").each(function () {
		if ($(this).attr("data-src")) {
			(this.tagName == "IMG" || this.tagName == "IFRAME") ? $(this).attr("src", $(this).data("src")) : $(this).css("background-image", "url(" + $(this).data("src") + ")");
			$(this).removeAttr("data-src");
		}
	});
	var windscroll = $(window).scrollTop();
	if (windscroll >= 50) {
		$("header").addClass("active");
	}
	else {
		$("header").removeClass("active");
	}

});
let lastScrollTop = $(window).scrollTop();

$(window).on('scroll', function () {
	let currentScrollTop = $(this).scrollTop();

	if (Math.abs(currentScrollTop - lastScrollTop) >= 50) {
		// checkHamburgerActive();

		// Update the last scroll position
		lastScrollTop = currentScrollTop;
	}
});

// function checkHamburgerActive() {
// 	// Close hamburger menu if open
// 	if ($('.hamburger').hasClass('active')) {
// 		// $('.hamburger').removeClass('active');
// 		// $('header').removeClass('headerBg');
// 		// $('.hamburgerMenu').stop(true, true).slideUp(300);
// 	}
// }

document.addEventListener("DOMContentLoaded", function () {
	const menuToggle = document.getElementById("menu-toggle");
	const mainMenu = document.getElementById("main-menu");

	if (menuToggle && mainMenu) {
		// Toggle menu on mobile
		menuToggle.addEventListener("click", () => {
			mainMenu.classList.toggle("hidden");
		});

		// Close menu on link click (only on mobile)
		const links = mainMenu.querySelectorAll("a");
		links.forEach(link => {
			link.addEventListener("click", () => {
				if (window.innerWidth < 768) {
					mainMenu.classList.add("hidden");
				}
			});
		});
	}
	//Animation
	 const animatedItems = document.querySelectorAll('.scroll-animate');

    const onScroll = () => {
        animatedItems.forEach(item => {
            const rect = item.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            if (rect.top <= windowHeight - 100) {
                item.classList.add('animate');
            }
        });
    };

    window.addEventListener('scroll', onScroll);
    window.addEventListener('load', onScroll);
});

document.addEventListener("DOMContentLoaded", function () {
    const animatedElements = document.querySelectorAll(".scroll-animate");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animate");
                entry.target.classList.remove("animate-out");
            } else {
                entry.target.classList.remove("animate");
                entry.target.classList.add("animate-out");
            }
        });
    }, {
        threshold: 0.1
    });

    animatedElements.forEach(el => observer.observe(el));
});

jQuery(document).ready(function ($) {
    $('#caseStudyFilter').on('change', function () {
        var category = $(this).val();

        $.ajax({
            url: ajaxurl, // localized from functions.php
            type: 'POST',
            data: {
                action: 'filter_case_studies',
                category: category
            },
            beforeSend: function () {
                $('#caseStudyResults').html('<p>Loading...</p>');
            },
            success: function (response) {
                $('#caseStudyResults').html(response);
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll('.logo-tab');
  const contents = document.querySelectorAll('.logo-tab-content');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.getAttribute('data-tab');

      tabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.classList.remove('active'));

      tab.classList.add('active');
      document.getElementById(target).classList.add('active');
    });
  });
});
