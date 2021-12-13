/* global $, jQuery, alert*/

$(document).ready(function () {
	"use strict"; //for js lint errors
	$('.carousel').carousel({
		interval: 6000
	});
$(function () {
	"use strict"; //for js lint errors
	$(window).scroll(function () {
	var navbar = $('.navbar');
	if ($(window).scrollTop() >= navbar.height()) {
		navbar.addClass('scrolled');
	} else {
		navbar.removeClass('scrolled');
	}	
	});
});
	//Show color option div when click on the gear
	$(".gear-check").click(function () {
		$('.color-option').fadeToggle();
	});
//Change them color on click
    var colorLi = $(".color-option ul li");
    colorLi
        .eq(0).css("backgroundColor", "#009AFF").end()
        .eq(1).css("backgroundColor", "#00F").end()
        .eq(2).css("backgroundColor", "#0f0").end()
        .eq(3).css("backgroundColor", "#f0f").end()
        .eq(4).css("backgroundColor", "#E41B17").end()
        .eq(5).css("backgroundColor", "#FFD500").end()
        .eq(6).css("backgroundColor", "#FF0").end()
        .eq(7).css("backgroundColor", "#FFF");
	colorLi.click(function () {
		$("link[href*='theme']").attr("href", $(this).attr("data-value"));
	});

	//Cashing the scroll top element
	var scrollButton = $("#scroll-top");
	$(window).scroll(function () {
		if ($(this).scrollTop() > 700) {
			scrollButton.show();
		} else {
			scrollButton.hide();
		}
	});

		//Click on Button to scroll top
	scrollButton.click(function () {
        $("html,body").animate({scrollTop: 0}, 600);
	});
});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//loadingOverlay
	$(window).ready(function () {
		"use strict"; //for js lint errors
	// loading elements
		$(".loading").fadeOut(2000, function () {
	    // $("body").css("overflow", "auto");	
			$(this).parent().fadeOut(2000, function () {
						// show the scroll 
	        $(this).remove();
	    });
	});
});
	
	$(function() {
    "use strict"; //for js lint errors
    $("html").mousemove(function(e) {
      $("aside").text("x-Axis: "+ e.pageX + "	Y-Axis: "+ e.pageY );
		});
		});

