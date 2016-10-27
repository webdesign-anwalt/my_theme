$(document).ready(function(){

	$(window).scroll(function(){
		
		var wScroll= $(this).scrollTop(); 

		$('.beschreibung').css({
			'transform':'translate(0px,'+ wScroll/2 +'px)'	
		}); // css function .beschreibung
		$('.logo-img').css({
			'transform':'translate('+ wScroll/2 +'px,'+ wScroll/3 +'px) rotate('+wScroll/40 +'deg)'	
		}); // css function .logo-img
		// Classe ändern
		
		if(wScroll > $('.main-nav').offset().top - ($(window).height() / 1.2)){

			$('.main-nav').each(function(){

				$('.main-nav').addClass('sticky');
			});
			
		}; // Ende if
	}); // scroll function
}); //ready function