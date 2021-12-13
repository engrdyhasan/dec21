var abound = document.getElementById('applaud'),
  abridge =document.createElement('div'),
  argue =document.createElement('p'),
	txt = document.createTextNode('We applauded not to close the hospital');
	txt2 = document.createTextNode('We applauded not to close the hospital');
	argue.appendChild(txt);
	abridge.appendChild(txt2);
	abound.appendChild(argue);
	abound.appendChild(abridge);