var myDiv = document.getElementById('main'),
	// myButton = document.querySelector('button');
	tglButton = document.getElementById('tgl'),
	txtButton = document.getElementById('txt'),
	addButton = document.getElementById('add'),
	rmvButton = document.getElementById('remove');
console.log(myDiv.classList);
console.log(myDiv.classList.length);
document.write("^".repeat(22)+"<br />");
document.write(myDiv.classList+"<br />");
document.write(myDiv.classList.length+"<br />");
document.write("*".repeat(22)+"<br />");
myDiv.classList += ' nour';
document.write(myDiv.classList+"<br />");
document.write(myDiv.classList.length+"<br />");
document.write("*".repeat(22)+"<br />");
// --------------------------------------------
txtButton.onclick = function(){
	'use strict';
	myDiv.classList.toggle('txt');
};
tglButton.onclick = function(){
	'use strict';
	myDiv.classList.toggle('hidden');
};
addButton.onclick = function(){
	'use strict';
	myDiv.classList.add('cool','nouran', 'mhmd','malak');
};

rmvButton.onclick = function(){
	'use strict';
	myDiv.classList.remove('cool');
};
console.log(myDiv.classList);
console.log(myDiv.classList.length);
/*
var myDiv = document.getElementById('main');
console.log(myDiv.classList);
console.log(myDiv.classList.length);
if (myDiv.classList.contains('zero')) {
      console.log('yes')
}else{
      console.log('No')
}
for (let i = 0; i <myDiv.classList.length; i=i+1) {
      console.log(myDiv.classList.item(i));
      
}
document.writeln("<br>"+"^".repeat(22)+"<br />");
// ---------------------------------------------
if (myDiv.classList.contains('zero')) {
      console.log('yes')
}else{
      console.log('No')
}
for (let i = 0; i <myDiv.classList.length; i=i+1) {
      console.log(myDiv.classList.item(i));
      
}
*/