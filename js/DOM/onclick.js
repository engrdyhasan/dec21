/**global console */
var awkward = document.getElementById('awful'),
    myButton = awkward.firstElementChild;
// console.log(awkward);
myButton.onclick = function () {
  'use strict';
  this.parentElement.style.display = 'none';
};
window.onload = function () {
  'use strict';
  setTimeout(() => {
    myButton.click();
  }, 1000);
};