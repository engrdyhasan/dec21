var mainDiv = document.getElementById('applaud'),
  newDiv = document.createElement('div'),
  newP = document.createElement('p'),
  newTxt = document.createTextNode('i appoint her a secretary');
newDiv.appendChild(newTxt);
newP.appendChild(newTxt);
mainDiv.appendChild(newP);
// mainDiv.appendChild(newDiv);
// mainDiv.insertBefore(newDiv, mainDiv.firstElementChild);
for (let i = 0; i < mainDiv.childNodes.length; i++) {
  
  mainDiv.insertBefore(newDiv, mainDiv.childNodes[i]);
}
console.log(mainDiv.childNodes.length);
console.log(mainDiv.childNodes);