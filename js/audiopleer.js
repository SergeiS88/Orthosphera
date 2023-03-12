'use strict'

const Pleer = (e) => {
    let audioEl = e.target.closest('.music__item').firstElementChild;
    audioEl.paused? audioEl.play(): audioEl.pause();
    e.target.closest('.music__item').classList.toggle('round');
}

document.querySelector('.best__music').addEventListener('click', Pleer);




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


