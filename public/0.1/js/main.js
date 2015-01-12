$(document).ready(function() {

    //Menu Open   
    $('.menu-link').click(function() {
    	$('#site-menu').toggle();
    });

    //Hide site-nav content.    
    $('#site-menu').hide();

    function initialize() {

    	var options = {
    		types: ['(cities)']
    	};
    	if(document.getElementById('location-search')){
    		var input = document.getElementById('location-search');
    		var autocomplete = new google.maps.places.Autocomplete(input, options);
    	}
    	if(document.getElementById('start-destination')){
    		var input2 = document.getElementById('start-destination');
    		var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
    	}
    	if(document.getElementById('destination')){
    		var input3 = document.getElementById('destination');
    		var autocomplete3 = new google.maps.places.Autocomplete(input3, options);
    	}
    }

    google.maps.event.addDomListener(window, 'load', initialize);
});
// $(window).resize(function() {
//   if ($(window).width() > 480) {
//       $('.menu-link').css('display','none');
//       $('.#site-menu ul').show();
//   }
//   else {
//       $('.menu-link').css('display','block');
//       $('.#site-menu ul').hide();
//   }
// });