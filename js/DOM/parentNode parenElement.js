/**Element | CloneNode parentNode parenElement */
var myMainDiv = document.getElementById('away'),
    myButton = myMainDiv.firstElementChild;
console.log(myButton);
console.log(myButton.parentNode);

myButton.onclick = function () {
  'use strict';
  // this.parentNode.style.display = 'None';
  this.parentElement.style.display = 'None';
};
console.log(myMainDiv.parentElement);
console.log(myMainDiv.parentElement.tagName);
console.log(myButton.parentElement);
console.log(myButton.parentElement.tagName);

if (myMainDiv.parentElement.tagName === 'BODY') {
  console.log('this element has no parent else BODY');
}else{
  console.log('this element has parent else BODY');

}
