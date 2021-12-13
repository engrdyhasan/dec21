/*global console */
var myp = document.createElement('p'),
    myptext = document.createTextNode('this paragraph created with js dom');
myp.appendChild(myptext);
document.body.appendChild(myp);
