/* global $, jQuery, alert*/
	
	//loadingOverlay
	$(window).ready(function () {
		"use strict"; //for js lint errors
	loading elements
		$(".loading").fadeOut(2000, function () {
	    // $("body").css("overflow", "auto");	
			$(this).parent().fadeOut(2000, function () {
						// show the scroll 
	        $(this).remove();
	    });
	});
});
	
// 	$(function() {
//     "use strict"; //for js lint errors
//     $("html").mousemove(function(e) {
//       $("aside").text("x-Axis: "+ e.pageX + "	Y-Axis: "+ e.pageY );
// 		});
// 		});

$(function () {
	$.getJSON("users.json", function(data){
		console.log(data);
		var content = '';
		for (const x in data) {
			content +="<div>" + data[x].username "</div>";
		}
		console.log(content);
		$("#show").html(content);
	});
});

