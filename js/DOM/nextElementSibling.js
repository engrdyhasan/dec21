/**global console */
/**nextSibling nextElementSibling */

var award = document.getElementById('aware');
console.log(award.childNodes);
console.log(award.childNodes[1].nextSibling);
console.log(award.childNodes[1].nextElementSibling);
console.log(award.childNodes[1].nextElementSibling.textContent);
for (let i = 0; i < award.childNodes.length; i++) {
  console.log(award.childNodes[i].nextSibling);
  console.log(award.childNodes[i].nextElementSibling);
}
award.childNodes[4].nextElementSibling.textContent = 'awful88';
// ******************
console.log(award.childNodes[4].previousSibling);
console.log(award.childNodes[4].previousElementSibling);
console.log(award.childNodes[4].previousElementSibling.textContent);
for (let i = 0; i < award.childNodes.length; i++) {
  console.log(award.childNodes[i].previousSibling);
  console.log(award.childNodes[i].previousElementSibling);
}
award.childNodes[4].previousElementSibling.textContent = 'awful99';