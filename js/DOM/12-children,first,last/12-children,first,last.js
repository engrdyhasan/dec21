var assume = document.getElementById('applaud');
document.writeln(assume.childElementCount+"<br />");
document.writeln(assume.children.length+"<br />");
document.writeln(assume.childNodes[0]+"<br />");
document.writeln(assume.firstChild+"<br />");
document.writeln(assume.lastChild+"<br />");
document.writeln(assume.firstElementChild+"<br />");
console.log(assume.children.length);
console.log(assume.firstChild);
document.writeln("*".repeat(22)+"<br />");
// for (let i = 0; i < assume.children.length; i=i+1) {
// 	document.writeln(assume.children[i]+"<br />");
// 	document.writeln(assume.children[i].className+"<br />");
// 	document.writeln(assume.children[i].textContent+"<br />");
// }
// assume.removeChild(assume.Children);
// assume.removeChild(assume.firstChild);
// assume.removeChild(assume.firstElementChild);
document.writeln("*".repeat(22)+"<br />");
// ***************************************************************
// ***************************************************************
// document.writeln(assume.children.length+"<br />");
// document.writeln(assume.childNodes.length+"<br />");
// for (let i = 0; i < assume.childNodes.length; i=i+1) {
//   document.writeln(assume.childNodes[i]+"<br />");
  // document.writeln(assume.childNodes[i].childNodes[0]);
	// document.writeln(`childNodes: ${assume.childNodes[i].childNodes[0]}`);
  // document.writeln(`childNodes: ${assume.childNodes[i].childNodes[0].nodeValue}`);
  // document.writeln(`nodeValue: ${assume.childNodes[i].firstChild.nodeValue}`);
  // document.writeln(`nodeType: ${assume.childNodes[i].childNodes[0].nodeType}`);
  // document.writeln(`tagName: ${assume.childNodes[i].childNodes[0].tagName}`);
// }
// document.writeln("#".repeat(22)+"<br />");
// document.writeln(`className: ${assume.childNodes[3].childNodes[0].className}`);
// document.writeln(assume.childNodes[5].childNodes[0].className);
// document.createComment('Hello');
// // document.createComment;
// for (let i = 0; i < assume.childNodes.length; i++) {
//   document.writeln(`tagName: ${assume.childNodes[i].tagName}`);
//   document.writeln(`nodeName: ${assume.childNodes[i].nodeName}`);
//   document.writeln(`nodeValue: ${assume.childNodes[i].nodeValue}`);
// }

// for (let i = 0; i < assume.childNodes.length; i++) {
//   document.writeln(assume.childNodes);
//   assume.removeChild(assume.childNodes[i]);
// }

// document.writeln(assume.childNodes);