(function ($) {
    "use strict";


    // Initiate the wowjs
    new WOW().init();


    //navbar
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
	    // document.getElementById("navbar").style.background = "black";

	    var element = document.getElementById("navbar");
   		element.classList.add("scroll");
	  } else {
	  	var element = document.getElementById("navbar");
   		element.classList.remove("scroll");
	    // document.getElementById("navbar").style.background = "transparent";
	  }
	}


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Back to top button




})(jQuery);

