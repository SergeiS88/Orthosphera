let i__s = Math.floor(Math.random() * (3 - 0)) + 0;
Slider();
setInterval(Slider, 10000);

function Slider() {
    i__s > 2 ? i__s = 1: ++i__s;
    document.querySelector(`.slider__wrapper>:nth-child(${i__s})`).classList.add('arise');
    document.querySelectorAll('.slide').forEach(el => el.classList.toggle('arise'));
}

document.querySelector('.slider__next').addEventListener('click', function(){Slider();})

document.querySelector('.slider__previous').addEventListener('click', function(){
    Slider();
    Slider();
})


// let oldI__s;
// i__s > 1 ? oldI__s = i__s-1: oldI__s = 3;