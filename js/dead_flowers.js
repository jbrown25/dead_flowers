(function($){
	'use_strict';

	$(function(){
		/** wow.js init **/
		new WOW().init();

		/** parallax effect **/
		$window = $(window);
     
      $('section[data-type="background"]').each(function(){
        // declare the variable to affect the defined data-type
        var $scroll = $(this);
                         
        $(window).scroll(function(){                           
          var yPos = -($window.scrollTop() / $scroll.data('speed')); 
            
          // background position
          var coords = '50% '+ yPos + 'px';
     
          // move the background
          $scroll.css({ backgroundPosition: coords });    
        }); // end window scroll
      });  // end section function

    //hide and display search form
    var searchButton = $('#search-button');
    var searchForm = $('.search-form');

    searchButton.click(function(e){
      e.preventDefault();
      searchForm.fadeToggle();
    });


	});
})(jQuery)