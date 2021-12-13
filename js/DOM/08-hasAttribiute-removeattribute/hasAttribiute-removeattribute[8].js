/**global console */
// *************
/* 
var myImg = document.querySelector('img');
if (myImg.hasAttribute('alt')) {
	document.writeln('Yes this element has attribute alt');
  console.log('Yes this element has attribute alt');
} else {
	document.writeln('nO this element has NOT attribute alt');
	console.log('No this element has not attribute alt');
} 
*/
/*
if (myImg.hasAttribute('alt')) {
	// console.log('No this element has not attribute alt');
	if (myImg.alt === '') {
		document.writeln('nO this element has NOT attribute alt');
		myImg.setAttribute('alt', 'engRdy');
	}
} else {
	document.writeln('Yes this element has attribute alt');
      console.log('Yes this element has attribute alt');
      
}
*/
if (myImg.hasAttribute('alt')) {
	console.log('No this element has not attribute alt');
	if (myImg.alt === '') {
		myImg.setAttribute('alt', 'engRdy');
		myImg.removeAttribute('alt');
	}
} else {
	console.log('Yes this element has attribute alt');
}
/*

myImg = document.querySelector('img');
console.log(myImg.alt);
document.writeln(myImg.getAttribute('alt'));
*/
// **********************************************
/*
from console:-
mydiv = document.querySelector('div');
      <div id=​"adjust" class>​…​</div>​
mydiv.id = 'id.from.js';
      "id.from.js"
mydiv.className = 'class.from.js';
      "class.from.js"
      myImage.src = 'G:/JS_HTML_Dom/files/images/r.jpg';
"G:/JS_HTML_Dom/files/images/r.jpg"
myImage.alt = 'rady';
"rady"
myImage.title = 'Ali Hassan';
"Ali Hassan"
myImage.className;
""
myImage.className = 'classrdy';
"classrdy"
myImage.className ;
"classrdy"
mydiv = document.querySelector('div');
      <div id=​"adjust" class>​…​</div>​
mydiv.id = 'id.from.js';
      "id.from.js"
mydiv.className = 'class.from.js';
      "class.from.js"
myImage.src = 'G:/JS_HTML_Dom/files/images/r.jpg';
"G:/JS_HTML_Dom/files/images/r.jpg"
myImage.alt = 'rady';
"rady"
myImage.title = 'Ali Hassan';
"Ali Hassan"
myImage.className;
""
myImage.className = 'classrdy';
"classrdy"
myImage.className ;
"classrdy"
myImg = document.querySelector('img');
console.log(myImg.src);
console.log(myImg.src);
document.writeln(myImg.getAttribute('alt'));
// document.writeln(myImg.alt);
myImg.src = 'G:/JS_HTML_Dom/files/images/r.jpg';
"G:/JS_HTML_Dom/files/images/r.jpg"
myImg.alt = 'rady';
"rady"
myImg.title = 'Ali Hassan';
"Ali Hassan"
myImg.className;
""
myImg.className = 'classrdy';
"classrdy"
myImg.className ;
"classrdy"
/*
mydiv = document.querySelector('div');
      <div id=​"adjust" class>​…​</div>​
mydiv.id = 'id.from.js';
      "id.from.js"
mydiv.className = 'class.from.js';
      "class.from.js"
*/