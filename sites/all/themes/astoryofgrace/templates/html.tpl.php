<!DOCTYPE html class="no-js">
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 9]>    <html class="ie9 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if !IE]> --> <html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!-- <![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php print $head_title; ?></title>
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans|Roboto|Poiret+One' rel='stylesheet' type='text/css'>
  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if IE 7]>
  <link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'open_framework') . '/fontawesome/css/font-awesome-ie7.min.css'; ?>">
  <![endif]-->
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="<?php print base_path() . drupal_get_path('theme', 'open_framework') . '/js/html5shiv.js'; ?>"></script>
  <![endif]-->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="/sites/all/themes/astoryofgrace/js/jquery.scrollTo.js"></script>
  
  <!--<link href="//vjs.zencdn.net/4.5/video-js.css" rel="stylesheet">
	<script src="//vjs.zencdn.net/4.5/video.js"></script>-->
  
  
  <script type="text/javascript">
	(function ($) {
	Drupal.behaviors.scrolling= {
  	attach: function (context) {
			
			$(document).ready(function() {
								
				$(window).scroll(function(){
        	var window_top = $(window).scrollTop();
					var $window = $(window);
					
					if ( $window.width() > 580 ){ // were not on mobile
						if (window_top > 500) {
							$('#triangle').css('display','block');
							$('#main-menu').addClass('m-nav');
						}else{
							$('#main-menu').removeClass('m-nav');
							$('#triangle').css('display','none');	
						}
					}else{
						if (window_top < 300) {
							$('#main-menu').removeClass('m-nav');
						}else{
							$('#main-menu').addClass('m-nav');
						}
					}
				});
		
				
				/**
				 * This part causes smooth scrolling using scrollto.js
				 * We target all a tags inside the nav, and apply the scrollto.js to it.
				 */
				$("nav#main-nav a").click(function(evn){
						evn.preventDefault();
						$('html,body').scrollTo(this.hash, this.hash); 
				});
				
				var aChildren = $("nav#main-nav li").children(); // find the a children of the list items
				var aArray = []; // create the empty aArray
				for (var i=0; i < aChildren.length; i++) {    
						var aChild = aChildren[i];
						var ahref = $(aChild).attr('href');
						aArray.push(ahref);
				} // this for loop fills the aArray with attribute href values
		 
				$(window).scroll(function(){
						var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
						var windowHeight = $(window).height(); // get the height of the window
						var docHeight = $(document).height();
		 
						for (var i=0; i < aArray.length; i++) {
								var theID = aArray[i];
								var divPos = $(theID).offset().top; // get the offset of the div from the top of page
								var divHeight = $(theID).height(); // get the height of the div in question
								if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
										if(theID != '#vid'){
											$("a[href='" + theID + "']").addClass("nav-active");
											
											
										}
								} else {
										if(theID != '#vid'){
											$("a[href='" + theID + "']").removeClass("nav-active");
											
										}
								}
						}
		 
						if(windowPos + windowHeight == docHeight) {
								if (!$("nav li:last-child a").hasClass("nav-active")) {
										var navActiveCurrent = $(".nav-active").attr("href");
										$("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
										$("nav li:last-child a").addClass("nav-active");
								}
						}
				});
				
			});
						
			// lets show the video if clicked
			$( "nav li.video" ).click(function() {
				// lets show the video section
				//$( "#vid" ).toggle("slow");
			});

			
		}
	}; 
})(jQuery);		
/*! Smooth Scroll - v1.4.5 - 2012-07-22
* Copyright (c) 2012 Karl Swedberg; Licensed MIT, GPL */
</script>
  
 
</head>

<body class="<?php print $classes; ?> <?php print $body_bg_type; ?> <?php print $body_bg_classes; ?> <?php print $content_order_classes; ?> <?php print $front_heading_classes; ?> <?php print $breadcrumb_classes; ?> <?php print $border_classes; ?> <?php print $corner_classes; ?>" <?php print $attributes;?> <?php if ($body_bg_classes): ?>style="background: url('<?php print file_create_url(theme_get_setting('body_bg_path')); ?>') repeat top left;" <?php endif; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>

</html>
