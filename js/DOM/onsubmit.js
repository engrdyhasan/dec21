/**global console */
var myElement = document.getElementById('main'),
    myNote = document.getElementById('notice'),
    myInput = document.getElementById('input');

myInput.onfocus = function () {
    'use strict';
    myNote.textContent = 'Don\'t forget to write a strong password ';
};
myInput.onblur = function () {
    'use strict';
    myNote.textContent = ' ';
    console.log(myInput.value.length);
    console.log(myInput.value);
    console.log(myInput);
    if (myInput.value.length < 8) {
        myNote.textContent = 'sorry ,your password must be at least 8 characters ';
    }
};
myElement.onsubmit = function (e) {
    e.preventDefault();
}