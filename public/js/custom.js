(function ($) {

	function animateCSS(element, animationName, callback) {
		const node = document.querySelector(element)
		node.classList.add('animated', animationName)
	
		function handleAnimationEnd() {
			node.classList.remove('animated', animationName)
			node.removeEventListener('animationend', handleAnimationEnd)
	
			if (typeof callback === 'function') callback()
		}
	
		node.addEventListener('animationend', handleAnimationEnd)
	}

	new ClipboardJS('#jouer');

	$('#jouer').click(() => {
		iziToast.show({
			title: 'IP Copiée!',
			titleSize: 20,
			titleColor: '#f6861a',
			position: 'topCenter',
			timeout: 1500
		});
	})

	// document.getElementById('video').playbackRate = -1;
	
	"use strict";

	$(function() {
        $("#tabs").tabs();
    });

	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
	  var box = $('.header-text').height();
	  var header = $('header').height();

	  if (scroll >= box - header) {
	    $("header").addClass("background-header");
	  } else {
	    $("header").removeClass("background-header");
	  }
	});
	

	$('.schedule-filter li').on('click', function() {
        var tsfilter = $(this).data('tsfilter');
        $('.schedule-filter li').removeClass('active');
        $(this).addClass('active');
        if (tsfilter == 'all') {
            $('.schedule-table').removeClass('filtering');
            $('.ts-item').removeClass('show');
        } else {
            $('.schedule-table').addClass('filtering');
        }
        $('.ts-item').each(function() {
            $(this).removeClass('show');
            if ($(this).data('tsmeta') == tsfilter) {
                $(this).addClass('show');
            }
        });
    });


	// Window Resize Mobile Menu Fix
	mobileNav();


	// Scroll animation init
	window.sr = new scrollReveal();
	

	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	$(document).ready(function () {
	    $(document).on("scroll", onScroll);
	    
	    //smoothscroll
	    $('.scroll-to-section a[href^="#"]').on('click', function (e) {
	        e.preventDefault();
	        $(document).off("scroll");
	        
	        $('a').each(function () {
	            $(this).removeClass('active');
	        })
	        $(this).addClass('active');
	      
	        var target = this.hash,
	        menu = target;
	       	var target = $(this.hash);
	        $('html, body').stop().animate({
	            scrollTop: (target.offset().top) + 1
	        }, 500, 'swing', function () {
	            window.location.hash = target;
	            $(document).on("scroll", onScroll);
	        });
	    });
	});

	function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    $('.menu-scroll').each(function () {
	        var currLink = $(this);
			var refElement = $(currLink.attr("href"));
			if(refElement == "")return
	        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
	            $('.nav ul li a').removeClass("active");
	            currLink.addClass("active");
	        }
	        else{
	            currLink.removeClass("active");
	        }
	    });
	}


	// Page loading animation
	 $(window).on('load', function() {
		
		$('#app').show();

		$('#js-preloader').addClass('loaded');

		var width = $(window).width();

		if(width >= 767){
			animateCSS('.header-animate', 'jackInTheBox', function(){
				animateCSS('.play-animate', 'tada');
			});
			animateCSS('.nav-animate', 'bounceInDown');
			animateCSS('.logo-animate', 'bounceInLeft');
		}
		
    });


	// Window Resize Mobile Menu Fix
	$(window).on('resize', function() {
		mobileNav();
	});


	// Window Resize Mobile Menu Fix
	function mobileNav() {
		var width = $(window).width();
		$('.submenu').on('click', function() {
			if(width < 767) {
				$('.submenu ul').removeClass('active');
				$(this).find('ul').toggleClass('active');
			}
		});
	}


})(window.jQuery);