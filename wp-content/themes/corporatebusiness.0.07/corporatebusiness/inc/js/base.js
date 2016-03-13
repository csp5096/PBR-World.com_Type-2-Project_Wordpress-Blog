(function($){
	jQuery(document).ready(function($){
		// nav
		$("#site-navigation .menu-toggle").click(function(){					   
			var term = $("#site-navigation .menu").css("display");
			if(term == "none"){$("#site-navigation .menu").css("display","block");
			}else{
				$("#site-navigation .menu").removeAttr( "style" );
			}		   
		});
		//	Back to Top
		jQuery('#back_top').click(function(){
			jQuery('html, body').animate({scrollTop:0}, 'normal');return false;
		});	
		jQuery(window).scroll(function(){
			if(jQuery(this).scrollTop() !== 0){jQuery('#back_top').fadeIn();}else{jQuery('#back_top').fadeOut();}
		});
		if(jQuery(window).scrollTop() !== 0){jQuery('#back_top').show();}else{jQuery('#back_top').hide();}
		
		// Expanded search
		jQuery( "header .search-form" ).prepend( '<i class="fa fa-search expand"></i>' );
		
		jQuery("i.expand").click(function(){
			jQuery("header form.search-form").addClass("expanded-search");
			jQuery("header .search-form input[type='text']").focus();
			//alert("x");
		});

	});
})(jQuery);