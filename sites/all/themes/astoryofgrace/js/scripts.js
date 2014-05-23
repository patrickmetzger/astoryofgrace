	(function ($) {
	Drupal.behaviors.scripts= {
  	attach: function (context) {
			
			$(document).ready(function() {
				$(".tour-dates").mouseenter(function(e){
					$(this).addClass("hover");
				})
				$(".tour-dates").mouseleave(function(e) {
					$(this).removeClass("hover");
				});
				
				// lets show the video if clicked
				$( "nav li.video" ).click(function() {
					// lets show the video section
					 $("#vid").toggle( "fold", 1000 );
					
				});
				
			});
	
			
		}
	}; 
})(jQuery);		
