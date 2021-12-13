/** global console*/
// clientHieght, clientWidth #24
/**
 * viewable area
 * include padding
 * no border
 * no margin
 * no scroll

 

 // scroll Hieght,scrollWidth #25
/**
 * all area including area
 * include padding
 * no border
 * no margin
 * no scroll
 */
var accept = document.getElementById('academic');
console.log('clientHeight= '+ accept.clientHeight + 'px');
console.log('clientWidth= ' + accept.clientWidth + 'px');
console.log('scrollHeight= '+ accept.scrollHeight + 'px');
console.log('scrollWidth= ' + accept.scrollWidth + 'px');
// OffsetHieght, offsetWidth #26
/**
 * viewable area
 * include padding
 * include border
 * include margin
 * no scroll
 * */
var accomplished = document.getElementById('academic');
console.log('OffsetHieght= '+ accomplished.offsetHeight + 'px');
console.log('offsetWidth= ' + accomplished.offsetWidth + 'px');
// console.log('scrollHeight= '+ accomplished.scrollHeight + 'px');
// console.log('scrollWidth= ' + accomplished.scrollWidth + 'px');