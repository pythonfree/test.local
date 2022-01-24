"use strict";

const products = [
        {id: 1, title: 'Notebook', price: 1000},
        {id: 2, title: 'Mouse', price: 100},
        {id: 3, title: 'Keyboard', price: 250},
        {id: 4, title: 'Gamepad', price: 150},
];

const renderProduct = (item, img = 'img/200x150') =>
    `<div class="product-item">
        <img src="${img}" alt="Some img">
        <h3>${item.title}</h3>
        <p>${item.price}</p>
        <button class="by-btn">Купить</button>
    </div> `;


const renderProducts = list => document.querySelector('.products')
    .insertAdjacentHTML('beforeend', list.map(item => renderProduct(item)).join(''));


renderProducts(products);


// var year = 2000;
//
// function getLast(year) {
//         return year;
// }
//
// console.log(year + getLast(1));
// console.log(`${year} + ${getLast(1)}`);
// console.log(`${year + getLast(1)}`);

// let i = 22;
// for (let i = 0; i < 5; i++) {
//     console.log(i);
// }
// console.log(`------> ${i}`);