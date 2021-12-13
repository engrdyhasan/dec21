var myDiv = document.getElementById('main');
console.log(myDiv.classList);
console.log(myDiv.classList.length);
if (myDiv.classList.contains('zero')) {
      console.log('yes')
}else{
      console.log('No')
}
for (let i = 0; i <myDiv.classList.length; i=i+1) {
      console.log(myDiv.classList.item(i));
      
}
document.writeln("<br>"+"^".repeat(22)+"<br />");