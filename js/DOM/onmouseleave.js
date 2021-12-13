/**global console */
var myElement = document.getElementById('main'),
    myviewer = document.getElementById('rdy'),
    myNote = document.getElementById('notice'),
    myhover = document.getElementById('hover'),
    myaway = document.getElementById('away'),
    rady = document.getElementById('rady'),
    myInput = document.getElementById('input');

    myInput.onkeyup = function () {
        'use strict';
        myviewer.textContent = this.value;
    };



    /*
    rady.onclick = function () {
    'use strict';
    myviewer.textContent = 'Don\'t forget to write a strong password ';
};
     myElement.ondblclick = function () {
        'use strict';
        myviewer.textContent = 'you double clicked on the element ';
    };
    myhover.onmouseenter = function () {
        'use strict';
        myviewer.textContent = 'you hovered on the element ';
    };
    /*
    window.oncontextmenu = function (e) {
        'use strict';
        e.preventDefault();
        myNote.textContent = 'you cannot right click on this window ';
    };
    myNote.oncontextmenu = function (e) {
        'use strict';
        e.preventDefault();
        myNote.textContent = 'you cannot right click here ';
    };
    myNote.oncontextmenu = function () {
        'use strict';
        myviewer.textContent = 'you right clicked the mouse ';
    };
    myaway.onmouseleave = function () {
        'use strict';
        myviewer.textContent = 'you just go away ';
    };
     */
    
