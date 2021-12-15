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


let addButton = document.querySelector('.addButton');
let removeButton = document.querySelector('.removeButton');
let ingredientBox = document.querySelector('.ingredient-box');


removeButton.addEventListener('click', function (e) {
    remove(e);
});
addButton.addEventListener('click', function () {
    console.log('tıklanıldı');
    let clone = ingredientBox.cloneNode(true);
    document.getElementById('ingredientList').appendChild(clone);
    clone.querySelector('input').value = '';

    let cloneButton = clone.querySelector('.removeButton');
    cloneButton.addEventListener('click', function (e) {
        remove(e);
    });
});

function remove(e) {
    let ingredientBoxes = document.querySelectorAll('.ingredient-box');
    if (ingredientBoxes.length > 1) {
        e.target.parentElement.remove();
    }

}




