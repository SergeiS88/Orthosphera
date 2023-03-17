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
 * Функция создает html товара.
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


// шаблонизатор
class Templator {
    constructor(template) {
        this._template = template;
    }

    compile(compObj) {
        const templateVariableRe = /\{\{(.*?)\}\}/g;
        let match;
        let result = this._template;
        
        while (match = templateVariableRe.exec(this._template)) {
            const variableName = match[1].trim();
            if (!variableName) {  // Вдруг там просто пустые скобки
                continue;
            }
            const data = compObj[variableName];

            if (typeof data === 'function') {
                window[variableName] = data; // Сохранили функцию в window
                result = result.replace(new RegExp(match[0], 'gi'), `window.${variableName}()`); // Использовали
                continue // Потому что мы уже обработали функцию — идём дальше
            }

            result = result.replace(new RegExp(match[0], 'gi'), data);
        }
    
        return result;
    }
};

// 
const templateMusic = document.querySelector('.template__music').innerHTML;
const musicData = JSON.parse(bestMusic);

// 
musicData.forEach(elem => {
    document.querySelector('.best__media').insertAdjacentHTML('beforeend', (new Templator(templateMusic)).compile({
        musicId: elem.id,
        musicTreck: elem.treck,
        musicArtist: elem.artist,
        musicLabel: elem.label,
    }));
});

