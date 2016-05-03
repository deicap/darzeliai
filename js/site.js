
$(function(){
	
	$(document).ready(function(){

		$('.site-burger-icon').click(function(){
			
			$('html').toggleClass('mobile-nav-activated');
			
		});

		
		$('.mobile-overlay').click(function(){
			
			$('html').removeClass('mobile-nav-activated');
			
		});
		
		$('.mobile-menu li > a').click(function(ev){
			
			if ($(this).parent().children('ul').length > 0) {
				
				ev.preventDefault();
				
				$(this).parent().toggleClass('activated');
				
			}
			
		});
		
	});
	
 });
