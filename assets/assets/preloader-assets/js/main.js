/*-------------------

Template Name: <
Author:  pixel-drop
Author URI: https://themeforest.net/user/pixel-drop/portfolio
Developer: Gramentheme Team
Version: 1.0.0
Description: 

--------------------
CSS TABLE OF CONTENTS
--------------------

01. preloader
02. header
03. swiper slider
04. Custom text Animation
05. Aos Animation
06. Tilt Js
07. magnificPopup
08. Odometer
09. Booststrap Customization
10. nice select
11. wow animation
12.Custom Search 

-------------------*/

(function ($) {
	"use strict";

	$(document).ready(function () {
		

		//--- Aos Animation --- //
		$(".title").attr({
			"data-aos": "zoom-in",
			"data-aos-duration": "2000",
		});

		AOS.init({
			once: true,
		});
		//--- Aos Animation --- //

		
	}); // End Document Ready Function

	function loader() {
        $(window).on('load', function() {
            // Animate loader off screen
            $(".preloader").addClass('loaded');                    
            $(".preloader").delay(600).fadeOut();                       
        });
    }

    loader();
})(jQuery);
