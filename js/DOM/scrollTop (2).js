/**global console */
// var myMainDiv = document.getElementById('main');
// console.log(document.body.scrollTop );
document.getElementById('main').onclick = function () {
  'use strict';
  document.body.scrollTop +=  100;
  // document.body.scrollTop = document.body.scrollTop + 100;
  window.console.log(document.body.scrollTop);
  if (document.body.scrollTop >= 1000) {
    this.classList.add('active');
  }
};
/*
var myButton = document.getElementById('scroll');
myButton.onclick = function () {
  'use strict';
  // window.scrollBy(200, 150);
  console.log('window scrolled left= ' + window.scrollX + ' px');
  console.log('window scrolled top= ' + window.scrollY + ' px');
}
/**global console */
/*
var myMainDiv = document.getElementById('main');
console.log(document.body.scrollTop );
myMainDiv.onclick = function () {
  'use strict';
  document.body.scrollTop +=  100;
  // document.body.scrollTop = document.body.scrollTop + 100;
  console.log(document.body.scrollTop);
  if (document.body.scrollTop >= 1000) {
    this.classList.add('active');
  }
};
*/