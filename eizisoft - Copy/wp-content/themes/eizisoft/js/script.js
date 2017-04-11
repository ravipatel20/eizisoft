// Custom Scripts for Proton Template //

$(window).load(function() {
	setTimeout(function() {
			$('#loading').fadeOut('slow', function() {
			});
	}, 3000);
});


/* Wow Init */
new WOW().init();




jQuery(document).ready(function($){
	var isLateralNavAnimating = false;

	//open/close lateral navigation
	$('.nav-trigger').on('click', function(event){
		event.preventDefault();
		//stop if nav animation is running
		if( !isLateralNavAnimating ) {
			if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true;

			$('body').toggleClass('menu-active');
			$('.menu-container').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				//animation is over
				isLateralNavAnimating = false;
			});
		}
	});
});


// Nav Close on Click//

$('.menu-container a').on('click', function(){
    $('.nav-trigger').click(); //bootstrap 2.x
    $('.menu').click() //bootstrap 3.x by Richard
});

$(document).ready(function(){
	$('.nav-trigger').click(function(){
		$(this).toggleClass('open');
	});
});


$('.nav-container a').on('click', function(){
    $('.nav-trigger').click(); //bootstrap 2.x
    $('.nav').click() //bootstrap 3.x by Richard
});


$('.nav-container a').on('click', function(){
    $('.c-hamburger').click(); //bootstrap 2.x
    $('.nav').click() //bootstrap 3.x by Richard
});



// Scroll To Top

$(document).ready(function(){
 $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-top').click(function () {
        $('#back-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});




// isotope
  // initialize Portfolio isotope
var $container = $('.portfolio_container');
$container.isotope({
    filter: '*',
});

$('.pta-portfolio_filter a').click(function () {
    $('.pta-portfolio_filter .active').removeClass('active');
    $(this).addClass('active');

    var selector = $(this).attr('data-filter');
    $container.isotope({
        filter: selector,
        animationOptions: {
            duration: 500,
            animationEngine: "jquery"
        }
    });
    return false;
});

//Jarallax Init//

	$('.pta-jarallax').jarallax({
		speed: 0.6
	});

// Lightcase Gallery Popup//

	jQuery(document).ready(function($) {
		$('a[data-rel^=lightcase]').lightcase();
		swipe: true
	});

// Justified gallery//

	$('#basicExample').justifiedGallery({
		rowHeight :220,
		lastRow : 'justify',
		margins : 15
	});

// Full Page Slider//

	$('#my-slider').sliderPro({
			forceSize: 'fullWindow',
			autoplay: true,
			arrows: true,
			buttons: false,
			fade: true,
			touchSwipe: true,
			imageScaleMode: 'cover',
			slideAnimationDuration: 1000
	});
