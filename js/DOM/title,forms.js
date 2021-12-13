/*global console*/
/**
 * document.title
 * document.images
 * document.forms
 */
var myform = document.getElementById('form');
myform.innerText = document.forms.length;
myform.innerText = document.forms[0].x2.type;
myform.innerText = document.forms[0].x2.value;

var mytitle = document.getElementById('showTitle');
mytitle.innerHTML = document.title;
var number = document.getElementById('number');
number.innerHTML = document.images.length;
// **********
// myimages.innerHTML = document.images[0];

var myimages = document.getElementById('images'), i;

for ( i = 0; i < document.images.length; i =i+1) {
  document.write(document.images[i].title+'<br>');
  document.write(document.images[i].src+'<br>');
}

/*
var abandon = document.getElementById('abandon');
abandon.innerHTML = document.images[0].title;
// abandon.innerHTML = document.images[0].src;
var abolish = document.getElementById('abolish');
abolish.innerHTML = document.images[1].title;
var absorb = document.getElementById('absorb');
absorb.innerHTML = document.images[2].title;
var accept = document.getElementById('accept');
accept.innerHTML = document.images[3].title;
var accommodate = document.getElementById('accommodate');
accommodate.innerHTML = document.images[4].title;
var myimages = document.getElementById('images');
  myimages.innerHTML = document.images[5].title;
  */