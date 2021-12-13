var assume = document.getElementById('applaud'),
	newDiv = document.createElement('div'),
	newPra = document.createElement('p'),
	txt1 = document.createTextNode('Iam the best maneger engineer in world DIV');
	txt2 = document.createTextNode('Iam the best maneger engineer in world PAR');
document.writeln(assume.childElementCount);
for(var i=0;i<assume.childElementCount; i++ ){
document.writeln(assume.childNodes[i]);
console.log(assume.childNodes[i]);
}
for(var i=0;i<assume.childElementCount; i++ ){
document.writeln(assume.childNodes[i].childNodes[i]);
document.writeln(assume.childNodes[i].nodeName);
document.writeln(assume.childNodes[i].nodeValue);
console.log(assume.childNodes[i]);
}
console.log(assume.childNodes);
newDiv.appendChild(txt1);
newPra.appendChild(txt2);
assume.appendChild(newPra);
assume.appendChild(newDiv);
assume.insertBefore(newDiv, assume.firstElementChild);
assume.insertBefore(newPra, assume.childNodes[3]);
// assume.insertBefore(newPra, assume.firstChild);
assume.removeChild(assume.firstChild);
assume.removeChild(assume.firstElementChild);
assume.removeChild(assume.lastElementChild);
assume.removeChild(assume.lastChild);