/**global console */
var awkward = document.getElementById('awful');
window.onload = function () {
  'use strict';
  document.getElementById('awfully').focus();
};
document.querySelector('button').onclick = function () {
  'use strict';
  document.getElementById('awfully').blur();
};
document.getElementById('awfully').onclick = function () {
  'use strict';
  this.blur();
};