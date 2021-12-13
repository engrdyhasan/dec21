
var myDiv = document.getElementById('afford');

console.log(myDiv.childElementCount);
console.log(myDiv.children.length);
console.log(myDiv.childNodes.length);
console.log(myDiv.children);
console.log(myDiv.childNodes);

    for (let i = 0; i < myDiv.children.length; i++) {
          console.log(myDiv.children[i]);
      }

    for (let i = 0; i < myDiv.children.length; i++) {
          console.log(myDiv.children[i].textContent);
      }

    for (let i = 0; i < myDiv.children.length; i++) {
          console.log(myDiv.children[i].className);
      }
    for (let i = 0; i < myDiv.children.length; i++) {
          console.log(myDiv.childNodes[i]);
      }