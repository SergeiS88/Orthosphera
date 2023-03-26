
// шаблонизатор
export class Templater {
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



/**  function AddEvent(type, obj, callback, eventReturn){ - слушалка принимает один элемент или нодлист
   * @param {String} (Required) событие
   * @param {Object} (Required) объект для прослушивания
   * @param {Function} (Required) действия по событию
   * @param {Boolean} (Optional) по нужде возврата объекта event методу обратного вызова.}
*/
export const AddEvent = function(type, obj, callback, eventReturn){
    if(obj == null || typeof obj === 'undefined') return;
    // if(NodeList.prototype.isPrototypeOf(obj)) console.log('da');
    // else console.log('net');
    // if(HTMLCollection.prototype.isPrototypeOf(obj)) console.log('da');
    // else console.log('net');
    if(NodeList.prototype.isPrototypeOf(obj) || HTMLCollection.prototype.isPrototypeOf(obj)) {
        for(let i = 0; i < obj.length; i++){       
            if(obj[i].addEventListener)
                obj[i].addEventListener(type, callback, eventReturn ? true : false);
            else
                obj[i]["on" + type] = callback;
        }
    } else {
        if(obj.addEventListener)
            obj.addEventListener(type, callback, eventReturn ? true : false);
        else
            obj["on" + type] = callback;
    }
};





// делаем рейтинг
// const raitingFormElement = document.querySelectorAll('.rating__form'); 
// const raitingButtonElements = document.querySelectorAll('.rating__sign__input');
// const raitingComment = document.querySelector('.rating__comment');

// raitingButtonElements.forEach((radio) => {
//     radio.addEventListener('change', () => {
//         const checkNumber = document.querySelector('.rating__sign__input:checked').value || undefined;

//         raitingButtonElements.forEach((item) => {
//             const currentLabel = item.previousElementSibling;
//             if(item.value <= checkNumber) {
//                 currentLabel.firstElementChild.classList.remove('disp__none');
//                 currentLabel.lastElementChild.classList.add('disp__none');
//             }
//             else{
//                 currentLabel.firstElementChild.classList.add('disp__none');
//                 currentLabel.lastElementChild.classList.remove('disp__none');
               
//             }
//         })
//     })
// });


// const Pleer = (e) => {
//     let audioEl = e.target.closest('.music__item').firstElementChild;
//     audioEl.paused? audioEl.play(): audioEl.pause();
//     e.target.closest('.music__item').classList.toggle('round');
// }
// document.querySelector('.best__media').addEventListener('click', Pleer);

// const pleer = {
//     0: {
//         count: 0,
//         condition: false,
//     },
//     1: {
//         count: 0,
//         condition: false,
//     },
//     2: {
//         count: 0,
//         condition: false,
//     },
//     3: {
//         count: 0,
//         condition: false,
//     },
//     4: {
//         count: 0,
//         condition: false,
//     },
//     5: {
//         count: 0,
//         condition: false,
//     },
//     Play: function (i) {
//         this[i].count++;
//         this[i].condition = true;
//         document.getElementById(`audio${i}`).play();
//         document.querySelector(`.best__music>:nth-child(${i+1})`).classList.add('round');
//     },
//     Pause: function (i) {
//         this[i].count++;
//         this[i].condition = false;
//         document.getElementById(`audio${i}`).pause();
//         document.querySelector(`.best__music>:nth-child(${i+1})`).classList.remove('round');
//     },
// }

// function AudioPlay(i) {
//     (pleer[i].condition === true) ? pleer.Pause(i) : pleer.Play(i);
// }