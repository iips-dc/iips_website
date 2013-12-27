    <!--Javascript Library -->
	<script src="jsLibrary/jquery-1.7.2.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
	<script src="jsLibrary/jquery.quote_rotator.js"></script>
	<script>
		$(document).ready(function() {
			//Test - Finding active side-tab & hiding it
			var hash = window.location.hash;
			if(hash.length > 0){
				 var active_tab_selector = $('.side-tabs > li.active > a').attr('href');
				 var actived_nav = $('.side-tabs > li.active');
				 actived_nav.removeClass('active');
				 $(active_tab_selector).removeClass('active');
				$(active_tab_selector).addClass('hide');
				 

				 $('ul.side-tabs li a[href="' + hash + '"]').parents('li').addClass('active');
				 $(hash).removeClass('hide');
				 $(hash).addClass('active');
				 
				 
			}
			 
			$('.side-tabs > li > a').click(function(event){
			
			
			
			
			//event.preventDefault();//stop browser to take action for clicked anchor

			//get displaying tab content jQuery selector
			var active_tab_selector = $('.side-tabs > li.active > a').attr('href');					
	 
			//find actived navigation and remove 'active' css
			var actived_nav = $('.side-tabs > li.active');
			actived_nav.removeClass('active');
	 
			//add 'active' css into clicked navigation
			$(this).parents('li').addClass('active');
	 
			//hide displaying tab content
			$(active_tab_selector).removeClass('active');
			$(active_tab_selector).addClass('hide');
	 
			//show target tab content
			var target_tab_selector = $(this).attr('href');
			$(target_tab_selector).removeClass('hide');
			$(target_tab_selector).addClass('active');
		     });
		  });
	
		
			
	</script>