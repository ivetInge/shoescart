const wish = document.querySelector('.whis-list');
const cart = document.querySelector('.cart');
const modal = document.querySelector('.modal');

wish.addEventListener('mouseenter', () => {
    modal.style.visibility = "visible";
    console.log("Andmaos encima del wish");
});

wish.addEventListener('mouseout', () => {
    modal.style.visibility = "hidden";
    console.log("Andmaos encima del wish");
});

cart.addEventListener('mouseenter', () => {
    modal.style.visibility = "visible";
    console.log("Andmaos encima del wish");
});

cart.addEventListener('mouseout', () => {
    modal.style.visibility = "hidden";
    console.log("Andmaos encima del wish");
});