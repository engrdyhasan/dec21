/**global console */
var myElement = document.getElementById('main');
var myButton = document.querySelector('button');
 function changeMe() {
  'use strict';
  myElement.style.backgroundColor = 'aqua';
  myElement.style.color = 'beige';
};
myButton.onclick = changeMe;
/*
 myButton.onclick = function () {
  'use strict';
  myElement.style.backgroundColor = 'brown';
  myElement.style.color = 'yellow';
};
*/
/*
function changeMe() {
  'use strict';
  myElement.style.backgroundColor = 'blue';
  myElement.style.color = 'red';
}
*/