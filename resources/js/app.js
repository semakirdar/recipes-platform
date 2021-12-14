require('./bootstrap');
require('@popperjs/core');
require('bootstrap');
window.toastr = require('toastr');

let navLinks = document.querySelectorAll('.header-nav a');
let path = location.pathname;
navLinks.forEach(function (item, i) {
    if (item.getAttribute('href').indexOf(path) > -1) {
        item.classList.add('active');
    }
});
