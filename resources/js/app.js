import './bootstrap';

// Untuk membuat Navbar Fixed
window.onscroll = function () {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed')
    } else {
        header.classList.remove('navbar-fixed')
    }
}


// Hamburger Navbar ketika mode mobile 
const hamburger = document.querySelector('#hamburger')
// Variable untuk memunculkan menu beranda dll
const navMenu = document.querySelector('#nav-menu')

hamburger.addEventListener('click', function() {
    // untuk toggle ketika mau memunculkan menu beranda dll
    hamburger.classList.toggle('hamburger-active')
    // ketika burger nya sudah di klik
    navMenu.classList.toggle('hidden')
    
});