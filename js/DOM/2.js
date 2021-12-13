/*global console */
var myp = document.createElement('p'),
    myptext = document.createTextNode('this paragraph created with js dom');
myp.appendChild(myptext);
document.body.appendChild(myp);

var myDiv = document.createElement('div'),
    mydivtext = document.createTextNode('this paragraph created with js dom');
myDiv.appendChild(myptext);
document.body.appendChild(myDiv);
/**
 * [1]-document.getElementById() 
 [2]var myparagraph = document.getElementsByTagName('p');
 [3]document.getElementsByClassName()-> not compatible with IE 8
 //[4] document.querySelectorAll('.rdy');-> not compatible with IE 8
  */
 var myDiv = document.getElementById('rdy');
 myDiv.innerHTML = 'changed by javascript';
 
 //  [2]var myparagraph = document.getElementsByTagName('p');
 var myparagraph = document.getElementsByTagName('p');
 var myDiv = document.getElementsByTagName('div');
 console.log(myparagraph.length);
 console.log(myDiv.length);
 
 myparagraph[0].innerHTML = 'changed text container of p1';
 myparagraph[1].innerHTML = 'changed text container of p2';
 myparagraph[2].innerHTML = 'changed text container of p3';
 myparagraph[3].innerHTML = 'changed text container of p4';
 
 myDiv[0].innerHTML = 'changed text container of div1';
 myDiv[1].innerHTML = 'changed text container of div2';
 myDiv[2].innerHTML = 'changed text container of div3';
 myDiv[3].innerHTML = 'changed text container of div4';
 // ***********************
//  [3]document.getElementsByClassName()
var myItem = document.getElementsByClassName('rdy');
myItem[2].innerHTML = "document.getElementsByClassName('rdy')";
// *******************************
//[4] document.querySelectorAll('.rdy');
var myselect = document.querySelectorAll('.rdy');
myselect[1].innerHTML = "[4] document.querySelectorAll('.rdy');";
var myselect = document.querySelectorAll('#rdy');
myselect[0].innerHTML = "[4] document.querySelectorAll('#rdy');";
var myselect = document.querySelectorAll('p.rdy');
myselect[0].innerHTML = "[4] document.querySelectorAll('p.rdy');";
var myselect = document.querySelectorAll('div.rdy');
myselect[1].innerHTML = "[4] document.querySelectorAll('div.rdy');";

