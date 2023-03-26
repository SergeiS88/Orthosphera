




// адаптив
const resizeElement = new ResizeObserver( entries => {
    for (let entry of entries) {
        const cr = entry.contentRect;
        if (cr.width < 992) {
            document.querySelector('.auth').classList.add('disp__none');
            document.querySelector('.menu').classList.add('disp__none');
            document.querySelector('.menu').classList.remove('flex');
            document.querySelector('.mobile__menu__svg').classList.remove('disp__none');
            document.querySelector('.mobile__menu').classList.remove('disp__none');
        }
        else{
            document.querySelector('.auth').classList.remove('disp__none');
            document.querySelector('.menu').classList.remove('disp__none');
            document.querySelector('.menu').classList.add('flex');
            document.querySelector('.mobile__menu__svg').classList.add('disp__none');
            document.querySelector('.mobile__menu').classList.add('disp__none');
        }
        // console.log('Element:', entry.target);
        // console.log(`Element size: ${cr.width}px x ${cr.height}px`);
        // console.log(`Element padding: ${cr.top}px ; ${cr.left}px`);
    }
});

// принимает один или массив элементов
resizeElement.observe(document.querySelector('body'));




