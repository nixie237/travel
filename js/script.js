let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar'); // Corrected the class name from 'nabar'

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active'); // Fixed method call
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active'); // Fixed method call
};

var swiper = new Swiper(".home-slider", { // Capitalized 'Swiper' and corrected the selector
    navigation: {
        nextEl: ".swiper-button-next", // Ensure this matches your HTML
        prevEl: ".swiper-button-prev", // Ensure this matches your HTML
    },
    loop: true, // Add loop option here for better organization
});