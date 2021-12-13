var myDiv = document.getElementById('main'),
	// myButton = document.querySelector('button');
	tglButton = document.getElementById('tgl'),
	txtButton = document.getElementById('txt'),
	addButton = document.getElementById('add'),
	rmvButton = document.getElementById('remove');
console.log(myDiv.classList);
console.log(myDiv.classList.length);
txtButton.onclick = function(){
	'use strict';
	myDiv.classList.toggle('hidden');
};
tglButton.onclick = function(){
	'use strict';
	myDiv.classList.toggle('txt');
};
addButton.onclick = function(){
	'use strict';
	myDiv.classList.add('nour');
};

rmvButton.onclick = function(){
	'use strict';
	myDiv.classList.remove('malak');
};
console.log(myDiv.classList);
console.log(myDiv.classList.length);
/*
if (myDiv.classList.contains('zero')) {
      console.log('yes')
}else{
      console.log('No')
}
for (let i = 0; i <myDiv.classList.length; i=i+1) {
      console.log(myDiv.classList.item(i));
      
}
*/