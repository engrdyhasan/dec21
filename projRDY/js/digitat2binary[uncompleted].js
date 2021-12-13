// *************[23-Numbers]*******************
console.log(1000000);
console.log(1000000.0);
console.log(1000_000);
console.log(1e6);
console.log(10**6);
console.log(10*10*10*10*10*10);
// *************[]*******************
console.log(typeof(Number));
document.writeln(typeof(Number));
console.log(Number.MAX_SAFE_INTEGER);
document.writeln("MAX_Value= "+ Number.MAX_VALUE);
document.writeln("MAX_SAFE_INTEGER= "+ Number.MAX_SAFE_INTEGER);
// ****************[24]****************************
document.writeln((100).toString()+"<br>");
console.log((100).toString());
document.writeln(100..toString()+"<br>");
document.writeln(100.01.toString()+"<br>");
document.writeln(100.012345.toFixed(3)+"<br>");
document.write("<br>"+"R".repeat(11)+"<br>");
document.writeln(Number("100")+"<br>");//100
document.writeln(Number("100 rady")+"<br>");//NaN
document.writeln(+"100"+"<br>");
document.writeln(+"100 rady"+"<br>");//NaN
document.writeln(parseInt("100 rady")+"<br>");//100
document.writeln(parseFloat("100.147 rady")+"<br>");//100.147
document.writeln(parseInt("100.147 rady")+"<br>");//100
document.writeln("<br>"+"*".repeat(22)+"<br>");
document.writeln(Number.isInteger("100")+"<br>");
document.writeln(Number.isInteger(100.147)+"<br>");
document.writeln(Number.isInteger(100)+"<br>");
document.writeln(Number.isNaN("rdy"/5)+"<br>");
document.writeln("<br>"+"*".repeat(22)+"<br>");
// ****************[25]****************************
document.write(Math.round(99.2)+"<br>");
document.write(Math.round(99.5)+"<br>");
document.write(Math.trunc(99.5)+"<br>");
document.write(Math.ceil(99.5)+"<br>");
document.write(Math.floor(99.5)+"<br>");
document.write(Math.random()*100+"<br>");
document.write(Math.round(Math.random(0,100)*100)+"<br>");
document.write(Math.trunc(Math.random(0,100)*100)+"<br>");
document.writeln("<br>"+"*".repeat(22)+"<br>");
document.write(Math.max(99.5, 99, 111, 888, 88)+"<br>");
document.write(Math.min(99.5, 99, 111, 888, 88)+"<br>");
for (let n = 0; n < 9; n++) {	
	document.write("n= "+n+"		value= "+Math.pow(2, n)+"<br>");
}
success : function(data, status){
	// console.log(data);
	// document.writeln(data+"<br />");
	// console.log(status);
	// document.writeln(status+"<br />");
	var content = "";
for (const x in data) {
	content +="<div>" + data[x].username +"</div>";
}
console.log(content);
$("#show").html(content);
}