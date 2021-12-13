/**global console */

//Create the main element
var myElement = document.createElement('div');
var myAttr1 = document.createAttribute('class');
var myAttr2 = document.createAttribute('title');
myAttr1.value = 'myclass';
myAttr2.value = 'accomplish';
myElement.setAttributeNode(myAttr1);
myElement.setAttributeNode(myAttr2);
//append the div to body
document.body.appendChild(myElement);

//Create text node
var myStartComment = document.createComment('accept: to take or receive something that is overed to you');
var myText = document.createTextNode('account: to give the reason for something');
var myEndComment = document.createComment('accept: will you accept my offer?');
myElement.appendChild(myStartComment);
myElement.appendChild(myText);
myElement.appendChild(myEndComment);

// document.createElement('div').setAttributeNode(document.createAttribute('class'));
var myElement = document.createElement('div');
var myAttr1 = document.createAttribute('class');
myAttr1.value = 'clockrdy';
myElement.setAttributeNode(myAttr1);
document.body.appendChild(myElement);