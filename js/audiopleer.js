let pleer = {
    0: {
        count: 0,
        condition: false,
    },
    1: {
        count: 0,
        condition: false,
    },
    2: {
        count: 0,
        condition: false,
    },
    3: {
        count: 0,
        condition: false,
    },
    4: {
        count: 0,
        condition: false,
    },
    5: {
        count: 0,
        condition: false,
    },
    Play: function (i) {
        this[i].count++;
        this[i].condition = true;
        document.getElementById(`audio${i}`).play();
        document.querySelector(`.best__music>:nth-child(${i+1})`).classList.add('round');
    },
    Pause: function (i) {
        this[i].count++;
        this[i].condition = false;
        document.getElementById(`audio${i}`).pause();
        document.querySelector(`.best__music>:nth-child(${i+1})`).classList.remove('round');
    },
    IsPlay: function () {
        for(let i = 0; i < 6; i++) {
            if (this[i].condition === true) return true;
        }
        return false;
    },
}

function AudioPlay(i) {
    // if(pleer.IsPlay() === true) {
    //     for (let i = 0; i < 6; i++) {
    //         pleer.Pause(i);
    //     }
    // }
    (pleer[i].count%2 != 0) ? pleer.Pause(i) : pleer.Play(i);
}


// const musicObj = {
//     audio1: 0,
//     audio2: 0,
//     audio3: 0,
//     audio4: 0,
//     audio5: 0,
//     audio6: 0,
// }
// function AudioPlay(i) {
//     if (musicObj[`audio${i}`] == false)  musicObj[`audio${i}`] = true;
//     else musicObj[`audio${i}`] = false; 
//     if(musicObj[`audio${i}`] == true){ 
//         document.getElementById(`audio${i}`).play();
//         document.querySelector(`.best__music>:nth-child(${i})`).classList.add('round');
//     }
//     else {
//         document.getElementById(`audio${i}`).pause();
//         document.querySelector(`.best__music>:nth-child(${i})`).classList.remove('round');
//     }
// }
