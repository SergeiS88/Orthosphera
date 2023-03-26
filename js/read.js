import {bestBooks} from "./data.js";

function getProductsList() {
    return JSON.parse(bestBooks);
}

// function getProductsObject() {
// return JSON.parse(bestBooks).reduce((acc, product) => {
//     return { ...acc, [product.id]: product };
// }, {});
// }
// let getProductsObj = getProductsObject();
// console.log(getProductsObj);

// Находим элемент, куда надо вставить элементы.
const elementForInsert = document.querySelector(".best__read__wrapper");
// Вставляем все данные из массива, предварительно каждые данные превратив в html-разметки товаров, складывая все разметки в одну строку.
elementForInsert.innerHTML = getProductsList()
  .map((product) => renderProduct(product))
  .join("");

/**
 * Функция создает html блока.
 * @param {object} data - объект с информацией о товаре.
 * @returns разметку товара.
 */
function renderProduct(data) {
  return `
    <div class="best__read__item best__read__item${data.id}">
        <img src="${data.img}" alt="книга ${data.id}">
        <div class="best__read__item__content">
            <h3 class="best__read__item__heading">
                ${data.author}
                <strong>"${data.name}"</strong>
            </h3>
            <p class="best__read__txt">
                ${data.description}
            </p>
            <a class="best__read__ancor" href="#" >Читать</a>
        </div>
    </div>
  `;
}

