/*
var myDiv = document.getElementById('main');
console.log(myDiv.classList.length);
if (myDiv.classList.contains('zero')) {
      console.log('yes')
}
for (let i = 0; i <myDiv.classList.length; i=i+1) {
      console.log(myDiv.classList.item(i));
      
}
// from console:-
/*
myDiv = document.getElementById('main')
<div id=​"main" class=​"zero show cool main-div">​our main div​</div>​
myDiv.className += 'engRdy';
"zero show cool main-divengRdy"
*/
var myAdd = document.getElementById('add'),
    myRemove = document.getElementById('remove'),
    myDiv = document.getElementById('main'),
    showhideDiv = document.getElementById('ourtext'),
    showhide = document.getElementById('Toggle');
myAdd.onclick = function () {
      'use strict';
      // myDiv.classList.add('admire,admit,opsite,deny');
      myDiv.classList.add('admire','admit','opsite','deny');
};
 myRemove.onclick = function () {
      'use strict';
      myDiv.classList.remove('admire');
};
showhide.onclick = function () {
      'use strict';
      showhideDiv.classList.toggle('hidden');
};
