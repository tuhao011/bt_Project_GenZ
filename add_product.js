const open = document.querySelector('.name-page');
const leftside = document.querySelector('.left-side');
const add_product = document.querySelector('.add_product');

function myFunction() {
    if (leftside.classList.contains('left-side') && add_product.classList.contains('add_product')) {
        leftside.classList.remove('left-side');
        leftside.classList.add('left-side-short');
        add_product.classList.remove('add_product');
        add_product.classList.add('add_product_max');
    } else {
        leftside.classList.remove('left-side-short');
        leftside.classList.add('left-side');
        add_product.classList.remove('add_product_max');
        add_product.classList.add('add_product');
    }
}