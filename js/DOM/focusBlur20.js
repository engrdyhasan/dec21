/**global console */
var awkward = document.getElementById('main');
window.onload = function () {
  'use strict';
  document.getElementById('input').focus();
};
document.querySelector('button').onclick = function () {
  'use strict';
  document.getElementById('input').blur();
};
document.getElementById('input').onclick = function () {
  'use strict';
  this.blur();
};