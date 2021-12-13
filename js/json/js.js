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