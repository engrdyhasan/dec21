/* global console */
/**
 * [1]-document.getElementById()
 * [2]-document.getElementsByTagName()
 * [3]-document.getElementsByClassName()
 * [4]-document.querySelectorAll()
 */
// **********[01]*************************
//  var mydiv = document.createElement('div'),
//  myText = document.createTextNode('this paragraph is created with JS Dom');
//  mydiv.appendChild(myText);
//  document.body.appendChild(mydiv);
//  -------------[02]------------------
var myelement = document.getElementById("test");
myelement.innerHTML = 'changed by javascript';
// *********************************
var mydiv = document.getElementsByTagName("div"),
myp = document.getElementsByTagName("p");
console.log(myelement.length);
document.write("no of dives: " + mydiv.length +"<br>");
document.write("no of p: " + myp.length +"<br>");
for (let i = 0; i < mydiv.length; i++) {
	
	mydiv[i].innerHTML = 'changed by javascript myelement['+i+']';
}
for (let i = 0; i < myp.length; i++) {
	myp[i].innerHTML = 'changed by javascript myelement['+i+']';
}
// *************************
var ourdiv = document.getElementsByClassName("test");
for (let i = 0; i < ourdiv.length; i++) {
ourdiv[i].innerHTML = 'changed by javascript ';
}
// ********************************************
// var myquery = document.querySelectorAll(".nour");
var myquery = document.querySelectorAll("div.nour");
for (let i = 0; i < myquery.length; i++) {
	myquery[i].innerHTML = 'changed by querySelectorAll ';
}
// ********************************************