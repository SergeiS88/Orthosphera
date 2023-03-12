<header>
    <div class="header center flex b__xerox jc-sb ai-c">
        <div class="header__left">
            <a href="#">
                <svg fill="#fcfdce" viewBox="-2.5 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"  stroke="#fcfdce" width="74px">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M11.902 14.114V4.337l1.108 1.108v9.777H2.652A1.664 1.664 0 0 1 .99 13.559V4.9a1.665 1.665 0 0 1 1.662-1.663h.664V7.25l.874-.645.875.645V3.236h5.729v9.77h-7.85a.978.978 0 0 0-.626.111.56.56 0 0 0-.006.88.613.613 0 0 0 .39.117h9.2z" fill="#1e90ff"></path>
                    </g>
                </svg>
            </a>
        </div>
        <div class="header__center flex ai-b gap__30">
            <span class="name dblue">Orthosphera</span><span class="name2">Территория <strong>правильной</strong> культуры</span>
        </div>
        <div class="header__right flex gap__30 ai-c">
            <?php  if($_COOKIE['user'] == 'true'): ?>

            <a href="auth.php">
                <svg fill="#fcfdce" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve" stroke="#fcfdce" width="60">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M50,43v2.2c0,2.6-2.2,4.8-4.8,4.8H6.8C4.2,50,2,47.8,2,45.2V43c0-5.8,6.8-9.4,13.2-12.2 c0.2-0.1,0.4-0.2,0.6-0.3c0.5-0.2,1-0.2,1.5,0.1c2.6,1.7,5.5,2.6,8.6,2.6s6.1-1,8.6-2.6c0.5-0.3,1-0.3,1.5-0.1 c0.2,0.1,0.4,0.2,0.6,0.3C43.2,33.6,50,37.1,50,43z M26,2c6.6,0,11.9,5.9,11.9,13.2S32.6,28.4,26,28.4s-11.9-5.9-11.9-13.2 S19.4,2,26,2z"></path> 
                </g>
                </svg>
            </a>

            <?php else: ?>
            <a href="auth.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="60"  viewBox="0 0 11 11" fill="#fcfdce">
                    <path d="M4.793,7.263A.5.5,0,0,0,5.5,7.97L7.743,5.677a.25.25,0,0,0,0-.354h0L5.489,3.042a.5.5,0,0,0-.707.707L6,5H1.5a.5.5,0,0,0,0,1H6ZM9,1H4.5a.5.5,0,0,0,0,1h4a.5.5,0,0,1,.5.5v6a.5.5,0,0,1-.5.5h-4a.5.5,0,0,0,0,1H9a1,1,0,0,0,1-1V2A1,1,0,0,0,9,1Z" />
                </svg>
            </a>
            <?php endif; ?>

            <svg width="70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 396.667 396.667"  xml:space="preserve" fill="#fcfdce" stroke="#333">
                <path  d="M17,87.833h362.667c9.35,0,17-7.65,17-17s-7.65-17-17-17H17c-9.35,0-17,7.65-17,17C0,80.183,7.65,87.833,17,87.833z"/>
                <path  d="M17,215.333h362.667c9.35,0,17-7.65,17-17s-7.65-17-17-17H17c-9.35,0-17,7.65-17,17S7.65,215.333,17,215.333z"/>
                <path  d="M17,342.833h362.667c9.35,0,17-7.65,17-17s-7.65-17-17-17H17c-9.35,0-17,7.65-17,17S7.65,342.833,17,342.833z"/>
            </svg>
	
        </div>
    </div>
    <nav class="menu center flex  jc-e">
        <a class="menu__ancor" href="">Читальный Зал</a>
        <a class="menu__ancor" href="">Книжный Ряд</a>
        <a class="menu__ancor" href="">Музыка</a>
        <a class="menu__ancor" href="">Гостевой Альбом</a>
        <label for="check__id"><p class="menu__ancor">Беседка</p></label>
    </nav>
</header>