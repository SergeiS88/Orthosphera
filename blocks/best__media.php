<!-- музыка -->
<section class="best__media center">
    <h2 class="best__media__heading">Лучшее послушать</h2>
    <div class="video__wrapper">
        <span class="video__title">петь великий мастерище.</span>
        <video class="video" src="video/nightingale.mp4" preload="metadata"></video>
        <div class="controls ">
            <div class="side"></div>
            <div class="buttons__box">
                <img class="play" src="./img/videoplayer/play2.svg" alt="иконка воспроизведения">
                <img class="pause disp__none" src="./img/videoplayer/pause2.svg" alt="иконка паузы">
            </div>
            <div class="duration__box">
                <span class="timer">0:00:00</span>
                <span>|</span>
                <span class="timer duration">0:00:00</span>
            </div>
            <input class="time__input" type="range" value="0" step="0.001" id="time">
            <input class="volume__input" type="range" min="0" max="1" step="0.01" value="1" id="vol">
            <input type="image" class="full__screen" src="./img/videoplayer/fullscreen.svg" >
            <div class="side"></div>
        </div>
        <div class="buttons">
            <img class="play" src="./img/videoplayer/play.svg" width="150px" alt="play">
            <img class="pause disp__none" src="./img/videoplayer/pause.svg" width="150px" alt="pause">
        </div>
    </div>
</section>

