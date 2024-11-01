(function($){

	jQuery(document).ready(function(){
		jQuery(window).scroll(function(){

			var difHigh = jQuery(window).scrollTop();

			if(difHigh > 100 ){
				jQuery(".scroll-to-top-icon").fadeIn();
			}else{
				jQuery(".scroll-to-top-icon").fadeOut();
			}
		});

		jQuery(".scroll-to-top-icon a").on('click', function(){

			jQuery("html , body").animate({'scrollTop': 0}, 1100);

			return false;
		});

	});


}(jQuery))