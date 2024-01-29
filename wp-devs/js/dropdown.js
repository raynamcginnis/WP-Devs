let dropdown = document.querySelector('.menu'), //ul
submenu = document.querySelector('.sub-menu'), //ul li ul
buttonClick = document.querySelector('.check-button'), // button
hamburger = document.querySelector( '.menu-icon');


// listen for button click, and when clicked, call back function
buttonClick.addEventListener( 'click', () => {
    dropdown.classList.toggle('show-dropdown' );
    if (submenu) {
        submenu.classList.toggle( 'show-dropdown' );
    }
    hamburger.classList.toggle( 'animate-button' );

})