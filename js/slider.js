let index__s = Math.floor(Math.random() * (3 - 0)) + 0;
Slider();
setInterval(Slider, 10000);


function Slider() {
    if(index__s > 2) index__s = 1;
    else index__s++;
    let oldIndexS;
    if(index__s > 1) oldIndexS = index__s-1;
    else oldIndexS = 3;

    let sliderElements = `.slider__wrapper>:nth-child(${index__s})`;
    let oldSliderElements = `.slider__wrapper>:nth-child(${oldIndexS})`;
    let element = document.querySelector(sliderElements);
    let oldElement = document.querySelector(oldSliderElements);
    oldElement.classList.remove("araise");
    element.className += " araise";
}

{/* <script>
function klikaj(i) {
    document.getElementById(i).style.visibility='visible';
}
</script> */}