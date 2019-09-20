

(function($){
     var $grid = $('.grid').isotope({
      // options
    });
    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });

        // or outside the document ready, enter code here
})(jQuery); 




(function($){
     $("#owl-example").owlCarousel({
  	 items : 1,
     autoPlay : true,
     stopOnHover : true,
     itemsDesktop : [1199,1],
    itemsDesktopSmall : [980,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    
  });
        // or outside the document ready, enter code here
})(jQuery); 

(function($){
     $("#owl-example-p").owlCarousel({
     items : 4,
      autoPlay : true,
    stopOnHover : true,
    
  });
        // or outside the document ready, enter code here
})(jQuery); 

(function($){
     $("#owl-example-us").owlCarousel({
     items : 1,
      autoPlay : true,
    stopOnHover : true,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [980,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    
  });
        // or outside the document ready, enter code here
})(jQuery); 