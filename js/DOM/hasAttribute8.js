
var myImg = document.querySelector('img');
/* if (myImg.hasAttribute('alt')) {
    console.log('Yes this element has attribute alt');
} else {
    console.log('No this element has not attribute alt');
      
} */
/* 
if (myImg.hasAttribute('alt')) {
      // console.log('No this element has not attribute alt');
      if (myImg.alt === '') {
            myImg.setAttribute('alt', 'engRdy');
      }
} else {
      console.log('Yes this element has attribute alt');
      
}
 */
if (myImg.hasAttribute('alt')) {
      console.log('No this element has not attribute alt');
      if (myImg.alt === '') {
            myImg.setAttribute('alt', 'engRdy');
            myImg.removeAttribute('alt');
      }
} else {
      console.log('Yes this element has attribute alt');
      
}
