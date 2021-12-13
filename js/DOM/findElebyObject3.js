/**global console */
// document.childNodes[0];
// document.childNodes[1];
/*
for (let i = 0; i < document.body.childNodes.length; i++) {
    document.body.childNodes[i];
}
var myDiv = document.getElementById('showTitle');
myDiv.innerHTML = document.title;
//***************
var rady = document.getElementById('showimage');
rady.innerHTML = 'images.length = ' + document.images.length;
//***************
var nour = document.getElementById('showform');
nour.innerHTML = 'form.length = ' + document.forms.length;
//***************
var ali = document.getElementById('showsrc');
ali.innerHTML = document.images[0].src;
//***************
var a = document.getElementById('showsrc'), i;
for (i=0; i<document.images.length; i=i+1){
// document.writeln(document.images[i].src)
document.write(document.images[i].src + '<br>')
}

var b = document.getElementById('show0');
var d = document.getElementById('show2');
var e = document.getElementById('show3');
var c = document.getElementById('show1');
b.innerHTML=document.forms[0].x0.value;
d.innerHTML=document.forms[0].x1.value;
e.innerHTML=document.forms[1].x0.value;
c.innerHTML=document.forms[1].x1.type;

i;
for (i=0; i<document.forms.length; i=i+1){
document.write('x0.value '+ document.forms[i].x0.value +'x0.type	'+ document.forms[i].x0.type + '<br>');
document.write('x1.value '+ document.forms[i].x1.value +'x0.type	'+ document.forms[i].x1.type + '<br>');
}
*/
///////////////////////////
var hasan = document.getElementById('rdy');
// hasan.innerHTML = document.body.innerHTML;
hasan.innerHTML = document.body.innerText;
//************************
if (document.body.innerText.indexOf('Rdy')> -1) {
	document.write('yes, this string is exist');
}else{
	document.write('No, this string is not exist');
}
//////////////////////
var showAncors = document.getElementById('showAncors');
showAncors.innerText = document.anchors.length;
//////////////////////
var showLinks = document.getElementById('showLinks');
showLinks.innerText = document.links.length;