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
// var myelement = document.getElementById("test");
// myelement.innerHTML = 'changed by javascript';
// // *********************************
// var mydiv = document.getElementsByTagName("div"),
// myp = document.getElementsByTagName("p");
// console.log(myelement.length);
// document.write("no of dives: " + mydiv.length +"<br>");
// document.write("no of p: " + myp.length +"<br>");
// for (let i = 0; i < mydiv.length; i++) {
	
// 	mydiv[i].innerHTML = 'changed by javascript myelement['+i+']';
// }
// for (let i = 0; i < myp.length; i++) {
// 	myp[i].innerHTML = 'changed by javascript myelement['+i+']';
// }
// // *************************
// var ourdiv = document.getElementsByClassName("test");
// for (let i = 0; i < ourdiv.length; i++) {
// ourdiv[i].innerHTML = 'changed by javascript ';
// }
// // ********************************************
// // var myquery = document.querySelectorAll(".nour");
// var myquery = document.querySelectorAll("div.nour");
// for (let i = 0; i < myquery.length; i++) {
// 	myquery[i].innerHTML = 'changed by querySelectorAll ';
// }
// **********************[03]**********************
// **********************[title]**********************
// let mydiv = document.getElementById('rdy');
// mydiv.innerHTML = document.title;
// // ***************************[images]****************
// let mdiv = document.getElementById('test');
// mdiv.innerHTML = document.images.length;
// for (let i = 0; i < document.images.length; i++) {
// 	document.write(document.images[i].width+"<br>");
// 	document.write(document.images[i].src+"<br>");
// }
// // **********************[forms]****************
// let rdy = document.getElementById('nour');
// rdy.innerText = document.forms.length;
// // *********************
// for (let i = 0; i < document.forms.length; i++) {
// 	document.write(document.forms[i].x2.value+"<br>");
// }
// // **********************[body]****************
// var hasan = document.getElementById('show');
// hasan.innerText = document.body.innerHTML;
// // hasan.innerText = document.body.innerText;
// if (document.body.innerText.indexOf('xzerox') > -1) {
// 	document.write('yes it is exist');
// 	console.log('yes');
// }
var ali = document.getElementById('fatma');
ali.innerText = document.anchors.length;
ali.innerText = document.links.length;