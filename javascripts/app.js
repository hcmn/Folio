;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  
  $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
  $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
  $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
  $('input, textarea').placeholder();
  
  
  $.fn.foundationButtons          ? $doc.foundationButtons() : null;
  
  
  $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
  
  
  $.fn.foundationTopBar           ? $doc.foundationTopBar({breakPoint: 940}) : null;
  
  
  $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
  
    
    $.fn.foundationTabs             ? $doc.foundationTabs() : null;
    
  
  
    $("#featured").orbit();
  

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices
  if (Modernizr.touch) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }

	$("#buttonForAModal").click(function() {
		$("#thanks").css("display", "block");
	});
	
	$("#menu-slide-up").click(function() {
		$(".top-bar").slideUp();
	});
	$("#menu-slide-down").click(function() {
		$(".top-bar").slideDown();
	});
	
	$("#menu-fadeout").click(function() {
		$(".top-bar").fadeOut();
	});
	$("#menu-fadein").click(function() {
		$(".top-bar").fadeIn();
	});
	
	$("#reduce-opacity").click(function() {
		$(".top-bar").animate( { opacity: "-=0.1" });
	});
	$("#increase-opacity").click(function() {
		$(".top-bar").animate( { opacity: "+=0.1" });
	});
	
	$("#move-down").click(function() {
		$(".top-bar").css("position", "absolute");
		$(".top-bar").animate( { "top": "+=10px" });
	});
	$("#move-up").click(function() {
		$(".top-bar").css("position", "absolute");
		$(".top-bar").animate( { "top": "-=10px" });
	});

	
	
})(jQuery, this);
