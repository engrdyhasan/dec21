/**global console */
var awkward = document.getElementById('main'),
    myButton = awkward.firstElementChild;

// console.log(awkward);
myButton.onclick = function () {
  'use strict';
  // this.parentElement.style.display = 'none';
  this.parentElement.style.background = 'blue';
};


window.onload = function () {
  'use strict';
  // setTimeout(function() {
  setInterval(function() {
    myButton.click();
  }, 2000);
}; 