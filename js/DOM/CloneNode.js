/**Element | CloneNode */
var myMainDiv = document.getElementById('avoid'),
    myNewDiv = document.getElementById('await'),
    //clone the node and save in variable
    myCopy1 = myMainDiv.firstElementChild;
    myCopy2 = myMainDiv.firstElementChild.cloneNode();
    myCopy3 = myMainDiv.firstElementChild.cloneNode(true);

myNewDiv.appendChild(myCopy2);
myNewDiv.appendChild(myCopy3);

console.log(myCopy1);
console.log(myCopy2);
console.log(myCopy3);