(function($) {
    'use strict';

    /*==============================================
	PRELOADER
	===============================================*/
	function id(v){ return document.getElementById(v); }
	function loadbar() {
		var ovrl = id("overlay"),
		prog = id("progress"),
		stat = id("progstat"),
		img = document.images,
		c = 0,
		tot = img.length;
		if(tot == 0) return doneLoading();

		function imgLoaded(){
			c += 1;
			var perc = ((100/tot*c) << 0) +"%";
			prog.style.width = perc;
			stat.innerHTML = "Loading "+ perc;
			if(c===tot) return doneLoading();
		}
		function doneLoading(){
			ovrl.style.opacity = 0;
			setTimeout(function(){ 
				ovrl.style.display = "none";
			}, 1200);
		}
		for(var i=0; i<tot; i++) {
			var tImg     = new Image();
			tImg.onload  = imgLoaded;
			tImg.onerror = imgLoaded;
			tImg.src     = img[i].src;
		}    
	}
	document.addEventListener('DOMContentLoaded', loadbar, false);

    /*==============================================
	NAVIGATION
	===============================================*/
	$('a.page-scroll').on('click', function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top - 50
		}, 1500);
		e.preventDefault();
	});		

	$(window).on('scroll', function() {
		var menuTop = $('.menu-top');
		if ($(this).scrollTop() > 100) {
			menuTop.addClass('menu-shrink');
		} else {
			menuTop.removeClass('menu-shrink');
		}
	});			
	
	$(document).on('click','.navbar-collapse.in',function(e) {
		if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
			$(this).collapse('hide');
		}
	});

	/*==============================================
	MIXITUP
	===============================================*/
	jQuery('.grid').mixitup({
			targetSelector: '.mix',
		});
		$('.image-popup').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-img-mobile',
			image: {
				verticalFit: true
			}
		});


	/*==============================================
	SLIDER ANIMATION
	===============================================*/
	//Function to animate slider captions 
    function doAnimations( elems ) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';
        
        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }
    
    //Variables on page load 
    var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        
    //Initialize carousel 
    $myCarousel.carousel();
    
    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);
    
    //Pause carousel  
    $myCarousel.carousel('pause');
    
    
    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });  


	/*==============================================
	SKILL BAR
	===============================================*/
    $('.skillbar').each(function(){
		$(this).find('.skillbar-bar').animate({
			width:$(this).attr('data-percent')
		},6000);
	});

    /*==============================================
	COUNTER UP
	===============================================*/
	$('.counter').counterUp({
		delay: 2,
		time: 1000
	});

	/*==============================================
	SCROLL PERCENTAGE
	===============================================*/
	var scrollTimer = null;
	var scroll = '#scroll';
    $(window).scroll(function() {
        var viewportHeight = $(this).height(),
            scrollbarHeight = viewportHeight / $(document).height() * viewportHeight,
            progress = $(this).scrollTop() / ($(document).height() - viewportHeight),
            distance = progress * (viewportHeight - scrollbarHeight) + scrollbarHeight / 2 - $(scroll).height() / 2;
        $(scroll)
            .css("top", distance)
            .text(" (" + Math.round(progress * 100) + "%)")
            .fadeIn(100);

        if (scrollTimer !== null) {
            clearTimeout(scrollTimer);
        }
        scrollTimer = setTimeout(function() {
            $(scroll).fadeOut();
        }, 800);
    });

    /*==============================================
	BACK TO TOP
	===============================================*/
	var backToTp = '#back-to-top';
    if ($(backToTp).length) {
	    var scrollTrigger = 100, // px
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                $(backToTp).addClass('show');
	            } else {
	                $(backToTp).removeClass('show');
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $(backToTp).on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });
	}

	/*==============================================
	SECTION SMOOTH SCROLL
	===============================================*/
	$('a[href*="#"]:not([href="#"])').on(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});


	
})(jQuery);