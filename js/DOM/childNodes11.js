var assume = document.getElementById('applaud');
document.writeln(assume.childElementCount);
assume.removeChild(assume.Children);
// assume.removeChild(assume.firstChild);
// assume.removeChild(assume.firstElementChild);

for (let i = 1; i < assume.childNodes.length; i=i+2) {
  console.log(`childNodes: ${assume.childNodes[i].childNodes[0]}`);
  console.log(assume.childNodes[i].childNodes[0]);
  console.log(`childNodes: ${assume.childNodes[i].childNodes[0].nodeValue}`);
  console.log(`nodeValue: ${assume.childNodes[i].firstChild.nodeValue}`);
  console.log(`nodeType: ${assume.childNodes[i].childNodes[0].nodeType}`);
  console.log(`tagName: ${assume.childNodes[i].childNodes[0].tagName}`);
}
console.log(`className: ${assume.childNodes[3].childNodes[0].className}`);
console.log(assume.childNodes[5].childNodes[0].className);
document.createComment('Hello');
// document.createComment;
for (let i = 0; i < assume.childNodes.length; i++) {
  console.log(`tagName: ${assume.childNodes[i].tagName}`);
  console.log(`nodeName: ${assume.childNodes[i].nodeName}`);
  console.log(`nodeValue: ${assume.childNodes[i].nodeValue}`);
}

for (let i = 0; i < assume.childNodes.length; i++) {
  console.log(assume.childNodes);
  assume.removeChild(assume.childNodes[i]);
}

console.log(assume.childNodes);