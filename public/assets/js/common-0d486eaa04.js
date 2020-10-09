$(function(){
	/* Inits */
	initToggle();
	initSlide();
	initScroll();
	initCarousel();
	initCheckbox();


	  
	/* Functions */

	function initCheckbox() {
		$(document).on('change', ':checkbox[name="personalDataAgree"]', function() {
			var $form = $(this).closest('form');
			var $checkbox = $form.find(':checkbox[name="personalDataAgree"]:checked');
			if ($checkbox.length) {
				$(':submit', $form).removeAttr('disabled');
				} else {
				$(':submit', $form).attr('disabled', 'disabled');
			}
		});
	}

	function initToggle() {
		if (!$('.toggle').length) return;

		$('.toggle').on('click', function(event){
			event.preventDefault();
			$($(this).toggleClass('open').attr('href')).fadeToggle('slow');
		});
	}


	function initSlide() {
		if (!$('.slide-toggle').length) return;

		$('.slide-toggle').on('click', function(event){
			event.preventDefault();
			$(this).closest('.slide-wrap').toggleClass('open');
		});
	}


	function initScroll() {
		if (!$('.scroll').length) return;

		$('.scroll').click(function(event){
			event.preventDefault();
			var hrefId = $(this).attr('href');
			var posTop = $(hrefId).offset().top;
			$('html, body').animate({scrollTop: posTop}, 1000);
		});
	}


	function initCarousel() {
		if (!$('div.owl-carousel').length) return;

		$(document).on('init', 'div.owl-carousel', function() {
			var
			$carousel = $(this),
			defaults = {
				loop: true,
				margin: 0,
				nav: true,
				navText: '',
				onTranslate: function (event) {
					$('.slide-wrap.open').removeClass('open');
				},
				responsive : {
					0: {
						autoHeight: true
					},
					992: {
						autoHeight: false
					}
				}
			},
			options = {}
			;

			if ( $carousel.data('owl-options') ) {
				options = eval('[' + $carousel.data('owl-options') + ']')[0];
				$.extend(defaults, options);
			}

			$carousel.owlCarousel(defaults);
		});

		$('div.owl-carousel').trigger('init');
	}

});


$('.menu-toggle').click(function(){
	$(".header .phone").toggleClass("mobile-nav");
	$(this).toggleClass("is-active");
 });
