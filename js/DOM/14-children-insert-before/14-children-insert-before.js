var abound = document.getElementById('applaud'),
  abridge =document.createElement('div'),
  argue =document.createElement('p'),
  r =document.createElement('p'),
	txt = document.createTextNode('We applauded not to close the hospital');
	abscond = document.createTextNode(' they absconded from the bank with all the money');
	absolve = document.createTextNode(' to free someone from fulfilling a promiseor a duty, or from having to be punshed for a wrong');
	argue.appendChild(txt);
	absorb.appendChild(absolve);
	abridge.appendChild(abscond);
	abound.appendChild(argue);
	abound.appendChild(absorb);
	abound.insertBefore(abridge, abound.firstChild);
	abound.insertBefore(argue, abound.firstElementChild);
	abound.insertBefore(absorb, abound.childNodes[1]);
	document.writeln(abound.children.length+"<br />");
	document.write(abound.childNodes[1]);