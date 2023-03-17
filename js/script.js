const resizeElement = new ResizeObserver( entries => {
    for (let entry of entries) {
        const cr = entry.contentRect;
        if (cr.width < 992) {
            document.querySelector('.auth').classList.add('disp__none');
            document.querySelector('.menu').classList.add('disp__none');
            document.querySelector('.menu').classList.remove('flex');
            document.querySelector('.mobile__menu__svg').classList.remove('disp__none');
            document.querySelector('.mobile__menu').classList.remove('disp__none');
            document.querySelector('.search').classList.add('disp__none');

        }
        else{
            document.querySelector('.auth').classList.remove('disp__none');
            document.querySelector('.menu').classList.remove('disp__none');
            document.querySelector('.menu').classList.add('flex');
            document.querySelector('.mobile__menu__svg').classList.add('disp__none');
            document.querySelector('.mobile__menu').classList.add('disp__none');
            document.querySelector('.search').classList.remove('disp__none');

        }
        // console.log('Element:', entry.target);
        // console.log(`Element size: ${cr.width}px x ${cr.height}px`);
        // console.log(`Element padding: ${cr.top}px ; ${cr.left}px`);
    }
});

// принимает один или массив элементов
resizeElement.observe(document.querySelector('body'));



/*
function addEvent(type, obj, callback, eventReturn){ - слушалка принимает один элемент или нодлист
    @param: obj         (Object)(Required)
    -   объект для прослушивания в виде nodelist
    @param: type        (String)(Required)
    -   событие
    @param: callback    (Function)(Required)
    -   действия по событию
    @param: eventReturn (Boolean)(Optional)
    -   в случае нужды возврата объекта event методу обратного вызова.
}*/

const addEvent = function(type, obj, callback, eventReturn){
        if(obj == null || typeof obj === 'undefined') return;

        for(let i = 0; i < obj.length; i++){       
            if(obj[i].addEventListener)
                obj[i].addEventListener(type, callback, eventReturn ? true : false);
            else
                obj[i]["on" + type] = callback;
        }
    };
    // для старых браузерорв
    const watch = function(evt){
       const dimensions = {
           height: (evt.srcElement || evt.currentTarget).innerHeight,
           width: (evt.srcElement || evt.currentTarget).innerWidth
        };
};

addEvent('click',
        document.querySelectorAll('.mobile__menu__svg'), 
        function(){
            document.querySelector('.mobile__menu').classList.toggle('vis__hidden');
        },
        false
);
addEvent('click',
        document.querySelectorAll('.chat__toggle'), 
        function(){
            document.querySelector('.chat__box').classList.toggle('vis__hidden');
        },
        true
);




// задержки
// const debounce = (func, wait, immediate) => {
// var timeout;
// return () => {
//     const context = this, args = arguments;
//     const later = function() {
//         timeout = null;
//         if (!immediate) func.apply(context, args);
//     };
//     const callNow = immediate && !timeout;
//     clearTimeout(timeout);
//     timeout = setTimeout(later, wait);
//     if (callNow) func.apply(context, args);
// };
// };
// window.addEventListener('resize', debounce(() => console.log('hello'),
// 200, false), false);