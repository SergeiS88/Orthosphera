import {bestMusic} from "./data.js";
import {Templater} from "./library.js";
import { AddEvent } from "./library.js";

// музыка шаблонизатор дорожек
const templateMusic = `
    <article class="music__item">
        <audio class="audio__{{ musicId }}" src="{{ musicTreck }}"></audio>
        <img class="mus__img" src="/img/grammo.svg" alt="пластинка">
        <div class="music__label">
            <p class="artist">{{ musicArtist }}</p>
            <p>{{ musicLabel }}</p>
        </div>
        <form class="rating__form rating__form__{{ musicId }}" action="#">
            <div class="rating">
                <div class="rating__sign">
                    <label class="rating__sign__label" for="{{ musicId }}1" ><img class="rating__img__yes" src="./img/star.svg" alt="звезда"><img class="rating__img__no disp__none" src="./img/nostar.svg" alt="незвезда"></label>
                    <input class="rating__sign__input" type="radio" name="rating" id="{{ musicId }}1" value="1">
                </div>
            </div>
            <div class="rating">
                <div class="rating__sign">
                    <label class="rating__sign__label" for="{{ musicId }}2" ><img class="rating__img__yes" src="./img/star.svg" alt="звезда"><img class="rating__img__no disp__none" src="./img/nostar.svg" alt="незвезда"></label>
                    <input class="rating__sign__input" type="radio" name="rating" id="{{ musicId }}2" value="2">
                </div>
            </div>
            <div class="rating">
                <div class="rating__sign">
                    <label class="rating__sign__label" for="{{ musicId }}3" ><img class="rating__img__yes" src="./img/star.svg" alt="звезда"><img class="rating__img__no disp__none" src="./img/nostar.svg" alt="незвезда"></label>
                    <input class="rating__sign__input" type="radio" name="rating" id="{{ musicId }}3" value="3">
                </div>
            </div>
            <div class="rating">
                <div class="rating__sign">
                    <label class="rating__sign__label" for="{{ musicId }}4" ><img class="rating__img__yes" src="./img/star.svg" alt="звезда"><img class="rating__img__no disp__none" src="./img/nostar.svg" alt="незвезда"></label>
                    <input class="rating__sign__input" type="radio" name="rating" id="{{ musicId }}4" value="4">
                </div>
            </div>
            <div class="rating">
                <div class="rating__sign">
                    <label class="rating__sign__label" for="{{ musicId }}5" ><img class="rating__img__yes" src="./img/star.svg" alt="звезда"><img class="rating__img__no disp__none" src="./img/nostar.svg" alt="незвезда"></label>
                    <input class="rating__sign__input" type="radio" name="rating" id="{{ musicId }}5" value="5">
                </div>
            </div>
        </form>
    </article>
`;
const musicData = JSON.parse(bestMusic);

musicData.forEach(elem => {
    document.querySelector('.best__media').insertAdjacentHTML('beforeend', (new Templater(templateMusic)).compile({
        musicId: elem.id,
        musicTreck: elem.treck,
        musicArtist: elem.artist,
        musicLabel: elem.label,
    }));
});



// делаем рейтинг из БД
function AudioRating (musicData) {
    musicData.forEach( (item) => {
        document.querySelectorAll(`.rating__form__${item.id} input`).forEach((elem) => {
            const currentLabel = elem.previousElementSibling;
            if(elem.value <= item.rating) {
                currentLabel.firstElementChild.classList.remove('disp__none');
                currentLabel.lastElementChild.classList.add('disp__none');
            }
            else{
                currentLabel.firstElementChild.classList.add('disp__none');
                currentLabel.lastElementChild.classList.remove('disp__none');
               
            }
        })
    })
}
AddEvent(
    'load',
    window,
    AudioRating(musicData)
)



// медиаплеер
class Player {
    /**
     * @param {HTMLElement} treckEl // медиаэлемент
     */
    constructor(treckEl) {
        this.treckEl = treckEl;
        this.isPlay = !treckEl.paused;
    }

    PlayPause(){
        if(!this.isPlay) this.treckEl.play();
        else this.treckEl.pause();
        this.isPlay = !this.treckEl.paused;
    }

    #TimePrettier(time){ // время в человеческий вид
        let stringTime = '';
        for (let i = time.length; i > 0 ; i--) {
            if (i < 3) stringTime += time[i-1] = String(time[i-1]).padStart(2, '0');
            else stringTime += '0';
            if(i > 1) stringTime += ':'
        }; 
        return stringTime;
    }
    
    Duration(){ // продолжительность трека  
        return this.#TimePrettier([
            Math.floor(this.treckEl.duration%60),
            Math.floor(this.treckEl.duration/60),
            Math.floor(Math.floor(this.treckEl.duration/60)/60),
        ]);
    }

    CurrentTime () { // текущее время трека
           return this.#TimePrettier([
            Math.floor(this.treckEl.currentTime%60),
            Math.floor((this.treckEl.currentTime)/60),
            Math.floor(Math.floor((this.treckEl.currentTime)/60)/60),
        ]);
    }

    ClassToggle (el, cl) {el.classList.toggle(cl)}; // переключатель классов

    IfPlayClassToggle(el, cl){
        if(this.isPlay) // если играет
        this.ClassToggle(el, cl);
    };
}

// видеоплеер
class VideoPlayer extends Player {
    // имена классов элементов
    static #WRAPPER = 'video__wrapper'; // контейнер видео
    static #FULL_SCREEN = 'full__screen'; // элемент "полноэкранно"
    static #PLAY = 'play'; //элементы play
    static #PAUSE = 'pause'; //элементы pause
    static #CONTROLS = 'controls'; // панель управления
    static #BUTTONS = 'buttons';  // центральная кнопка
    static #VOLUME = 'volume__input'; // бегунок громкости
    static #TIME = 'time__input'; // бегунок громкости
    static #DURATION = 'duration'; // строка длительности
    static #TIMER = 'timer'; // строка времени
    static #TITLE = 'video__title'; // название видео


    #elems; // объект элементов
    /**
     * @param {HTMLElement} treckEl видеоэлемент
     */
    constructor(treckEl){
        super(treckEl);
        this.#elems = { 
            vWrapperEl: document.querySelector(`.${this.constructor.#WRAPPER}`),
            fullScreenBtn: document.querySelector(`.${this.constructor.#FULL_SCREEN}`), 
            pauseEls: document.querySelectorAll(`.${this.constructor.#PAUSE}`),
            playEls: document.querySelectorAll(`.${this.constructor.#PLAY}`), 
            controls: document.querySelector(`.${this.constructor.#CONTROLS}`), 
            buttons: document.querySelector(`.${this.constructor.#BUTTONS}`),
            volume: document.querySelector(`.${this.constructor.#VOLUME}`),
            time: document.querySelector(`.${this.constructor.#TIME}`),
            duration: document.querySelector(`.${this.constructor.#DURATION}`),
            timer: document.querySelector(`.${this.constructor.#TIMER}`),
            title: document.querySelector(`.${this.constructor.#TITLE}`),
        };
        
    };

    Init() {
        this.#AttachEvents();
    }
    
    #OnClick(e) {
        // кнопка весь экран
        if(e.target.classList == this.constructor.#FULL_SCREEN)
            this.treckEl.requestFullscreen();
        // пуск-останов
        if(e.target.className === 'video' || e.target.className === 'buttons' || e.target.tagName === 'IMG'){
            super.PlayPause();
            // смена кнопок
            this.#elems.playEls.forEach(el => super.ClassToggle(el, 'disp__none'));
            this.#elems.pauseEls.forEach(el => super.ClassToggle(el, 'disp__none'));
        }
    }

    #MouseEnter(e) {
        super.IfPlayClassToggle(this.#elems.controls, 'hide__hud');
        super.IfPlayClassToggle(this.#elems.buttons, 'vis__hidden');
        super.IfPlayClassToggle(this.#elems.title, 'vis__hidden'); 
    }

    #MouseLeave(e) {
        this.#MouseEnter(e);
    }

    #Input(e) {
        if(e.target.classList == this.constructor.#VOLUME)
            this.treckEl.volume = this.#elems.volume.value;
        if(e.target.classList == this.constructor.#TIME){
            this.treckEl.currentTime = this.#elems.time.value / 100 * this.treckEl.duration;
        }
    }

    #LoadedMetaData(){
        this.#elems.duration.textContent = super.Duration();
    }

    #TimeUpdate(){
        this.#elems.timer.textContent = super.CurrentTime();
        this.#elems.time.value = this.treckEl.currentTime / this.treckEl.duration * 100;
    }

    #AttachEvents() {// вешаем прослушки
        this.#elems.events = {
          'click': [this.#elems.vWrapperEl, this.#OnClick.bind(this)],
          'mouseenter': [this.#elems.vWrapperEl, this.#MouseEnter.bind(this)],
          'mouseleave': [this.#elems.vWrapperEl, this.#MouseLeave.bind(this)],
          'input': [this.#elems.controls, this.#Input.bind(this)],
          'loadedmetadata': [this.treckEl, this.#LoadedMetaData.bind(this)],
          'timeupdate': [this.treckEl, this.#TimeUpdate.bind(this)],
        };
        Object.keys(this.#elems.events).forEach((type) => {
            const el = this.#elems.events[type][0];
            const fn = this.#elems.events[type][1];
            AddEvent(type, el, fn);
        });
    }

}
AddEvent('load', window, () => new VideoPlayer(document.querySelector('.video')).Init());

class AudioPlayer extends Player {
    constructor(treckData, treckEl){
        super(treckEl);
        this.treck = treckData.treck;
        this.id = treckData.id;
        this.artist = treckData.artist;
        this.label = treckData.label;
        this.rating = treckData.rating;
    };   
    
}
// слушаем клик по пластинке
document.querySelector('.best__media').addEventListener('click', (ev) => {
    if(ev.target.tagName == 'IMG') {
        const playAudio = new AudioPlayer(
            musicData[ev.target.previousElementSibling.className.match(/\d/g)-1], 
            ev.target.previousElementSibling);
        playAudio.PlayPause();
        playAudio.ClassToggle(ev.target, 'round');
    }                
});














