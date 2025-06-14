﻿(function($) {
	"use strict";
	jQuery(document).on('ready', function() {
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > 120) {
				$('.navbar-area').addClass("is-sticky");
			} else {
				$('.navbar-area').removeClass("is-sticky");
			}
		});
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > 120) {
				$('.navbar-area-three').addClass("is-sticky");
			} else {
				$('.navbar-area-three').removeClass("is-sticky");
			}
		});
		jQuery('.mean-menu').meanmenu({
			meanScreenWidth: "991"
		});
		$(function() {
			$('.default-btn').on('mouseenter', function(e) {
				var parentOffset = $(this).offset(),
					relX = e.pageX - parentOffset.left,
					relY = e.pageY - parentOffset.top;
				$(this).find('span').css({
					top: relY,
					left: relX
				})
			}).on('mouseout', function(e) {
				var parentOffset = $(this).offset(),
					relX = e.pageX - parentOffset.left,
					relY = e.pageY - parentOffset.top;
				$(this).find('span').css({
					top: relY,
					left: relX
				})
			});
		});
		$(".burger-menu").on('click', function() {
			$('.sidebar-modal').toggleClass('active');
		});
		$(".sidebar-modal-close-btn").on('click', function() {
			$('.sidebar-modal').removeClass('active');
		});
		$('.close-btn').on('click', function() {
			$('.search-overlay').fadeOut();
			$('.search-btn').show();
			$('.close-btn').removeClass('active');
		});
		$('.search-btn').on('click', function() {
			$(this).hide();
			$('.search-overlay').fadeIn();
			$('.close-btn').addClass('active');
		});
		$('.home-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			rtl: true,
			autoplayHoverPause: true,
			autoplay: false,
			smartSpeed: 1000,
			animateOut: "slideOutDown",
			animateIn: "slideInDown",
			items: 1,
			navText: ["<i class='flaticon-left-chevron'></i>", "<i class='flaticon-right-chevron'></i>"]
		});
		$(".home-slides").on("translate.owl.carousel", function() {
			$(".main-banner-content p").removeClass("animated fadeInUp").css("opacity", "0");
			$(".main-banner-content h1").removeClass("animated fadeInUp").css("opacity", "0");
			$(".main-banner-content .banner-btn").removeClass("animated fadeInUp").css("opacity", "0");
			$(".main-banner-content .banner-list").removeClass("animated fadeInUp").css("opacity", "0");
		});
		$(".home-slides").on("translated.owl.carousel", function() {
			$(".main-banner-content p").addClass("animated fadeInUp").css("opacity", "1");
			$(".main-banner-content h1").addClass("animated fadeInUp").css("opacity", "1");
			$(".main-banner-content .banner-btn").addClass("animated fadeInUp").css("opacity", "1");
			$(".main-banner-content .banner-list").addClass("animated fadeInUp").css("opacity", "1");
		});
		$('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
		(function($) {
			$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
			$('.tab ul.tabs li a').on('click', function(g) {
				var tab = $(this).closest('.tab'),
					index = $(this).closest('li').index();
				tab.find('ul.tabs > li').removeClass('current');
				$(this).closest('li').addClass('current');
				tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
				tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
				g.preventDefault();
			});
		})(jQuery);
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
		$('.about-slider').owlCarousel({
			loop: true,
			nav: true,
			rtl: true,
			dots: false,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			items: 2,
			margin: 30,
			navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 2
				}
			}
		});
		$('.services-slider').owlCarousel({
			loop: true,
			nav: true,
			rtl: true,
			dots: false,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			items: 4,
			margin: 30,
			navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2
				},
				768: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		});
		$('.testimonials-slider').owlCarousel({
			loop: true,
			nav: true,
			rtl: true,
			dots: false,
			autoplayHoverPause: true,
			autoplay: false,
			smartSpeed: 1000,
			items: 4,
			center: true,
			margin: 30,
			navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 4
				}
			}
		});
		$('.partner-slider').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
			rtl: true,
			autoplayHoverPause: true,
			autoplay: true,
			navText: ["<i class='flaticon-left-1'></i>", "<i class='flaticon-right-1'></i>"],
			responsive: {
				0: {
					items: 2,
				},
				576: {
					items: 3,
				},
				768: {
					items: 4,
				},
				1200: {
					items: 5,
				}
			}
		});
		$('.client-slider').owlCarousel({
			loop: true,
			nav: true,
			rtl: true,
			dots: false,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			margin: 20,
			navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"],
			responsive: {
				0: {
					items: 1,
				},
				768: {
					items: 2,
				},
				1200: {
					items: 1,
				}
			}
		});
		$('.feedback-slider').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			rtl: true,
			margin: 30,
			center: true,
			autoplayHoverPause: true,
			autoplay: true,
			navText: ["<i class='flaticon-left-chevron'></i>", "<i class='flaticon-right-chevron'></i>"],
			responsive: {
				0: {
					items: 1,
				},
				768: {
					items: 2,
				},
				1200: {
					items: 3,
				},
				1550: {
					items: 4,
				}
			}
		});
		$('a[data-imagelightbox="popup-btn"]').imageLightbox({
			activity: true,
			overlay: true,
			button: true,
			arrows: true
		});
		$(function() {
			$('.accordion').find('.accordion-title').on('click', function() {
				$(this).toggleClass('active');
				$(this).next().slideToggle('fast');
				$('.accordion-content').not($(this).next()).slideUp('fast');
				$('.accordion-title').not($(this)).removeClass('active');
			});
		});
		$(".newsletter-form").validator().on("submit", function(event) {
			if (event.isDefaultPrevented()) {
				formErrorSub();
				submitMSGSub(false, "لطفا ایمیل خود را به درستی وارد کنید.");
			} else {
				event.preventDefault();
			}
		});

		function callbackFunction(resp) {
			if (resp.result === "success") {
				formSuccessSub();
			} else {
				formErrorSub();
			}
		}

		function formSuccessSub() {
			$(".newsletter-form")[0].reset();
			submitMSGSub(true, "از اشتراک شما متشکرم!");
			setTimeout(function() {
				$("#validator-newsletter").addClass('hide');
			}, 4000)
		}

		function formErrorSub() {
			$(".newsletter-form").addClass("animated shake");
			setTimeout(function() {
				$(".newsletter-form").removeClass("animated shake");
			}, 1000)
		}

		function submitMSGSub(valid, msg) {
			if (valid) {
				var msgClasses = "validation-success";
			} else {
				var msgClasses = "validation-danger";
			}
			$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
		}
		$(".newsletter-form").ajaxChimp({
			url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9",
			callback: callbackFunction
		});
		$('select').niceSelect();
		$('.input-counter').each(function() {
			var spinner = jQuery(this),
				input = spinner.find('input[type="text"]'),
				btnUp = spinner.find('.plus-btn'),
				btnDown = spinner.find('.minus-btn'),
				min = input.attr('min'),
				max = input.attr('max');
			btnUp.on('click', function() {
				var oldValue = parseFloat(input.val());
				if (oldValue >= max) {
					var newVal = oldValue;
				} else {
					var newVal = oldValue + 1;
				}
				spinner.find("input").val(newVal);
				spinner.find("input").trigger("change");
			});
			btnDown.on('click', function() {
				var oldValue = parseFloat(input.val());
				if (oldValue <= min) {
					var newVal = oldValue;
				} else {
					var newVal = oldValue - 1;
				}
				spinner.find("input").val(newVal);
				spinner.find("input").trigger("change");
			});
		});
		$(function() {
			$(window).on('scroll', function() {
				var scrolled = $(window).scrollTop();
				if (scrolled > 600) $('.go-top').addClass('active');
				if (scrolled < 600) $('.go-top').removeClass('active');
			});
			$('.go-top').on('click', function() {
				$("html, body").animate({
					scrollTop: "0"
				}, 500);
			});
		});
		jQuery(window).on('load', function() {
			$('.preloader').fadeOut();
		});
	});
}(jQuery));