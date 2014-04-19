$(document).ready(function(){ 
		
		$('#welcomevid').attr({'autoplay':'true'});
		setTimeout(function() {
					$('#form_udvozlo').css('display','none');
					$('#welcomevid').fadeOut(1000);
					$('#form_leiras').fadeIn(1000);
					$('#form_leiras').css('display','inline');
					$('#background').attr('src','img/background_registration.jpg');	
					setTimeout(function() {
						$('#welcomevid').attr({'autoplay':'false'});
						$('#welcomevid').attr('src', "http://www.youtube.com/embed/k7I4gcQB6Ws?autoplay=0&cc_load_policy=0");
										}, 3000);
				}, 113000);
				

	});