// var mdiv = document.createElement('div'),
// 		myText = document.createTextNode('this paragraph is created with JS Dom');
// 		mydives.appendChild(myText);
function showTime() {
  "use strict";
  var now = new Date(),
  hours = now.getHours(),
  minutes = now.getMinutes(),
  seconds = now.getSeconds();
  
  if (hours >= 12) {
    if (seconds < 10) {
      seconds ='0'+ seconds + ' p.m.';
    }else{
      seconds =seconds+ ' p.m.';}
  }else{
    if (seconds < 10) {
      seconds ='0'+ seconds + ' a.m.';
    }else{
      seconds =seconds+ ' a.m.';}
  }
  if (minutes < 10) {minutes ='0'+ minutes;}
  if (hours < 10) {hours ='0'+ hours;}
  
  if (hours == 0) {hours = 12;}
  if (hours > 12) {hours = hours - 12;}
  
  document.getElementById('clockrdy').textContent = hours+':'+minutes+':'+seconds;
};

window.onload = function(){
  "use strict";
  // setInterval(function, millseconds);
  setInterval(showTime, 500);
};