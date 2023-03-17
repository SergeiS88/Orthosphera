<header>
    <div class="header center flex b__xerox jc-sb ai-c">
        <img class="header__before" src="./img/corner.svg" alt="плющ">
        <img class="header__after" src="./img/corner.svg" alt="плющ">
        <div class="header__left flex ai-b gap__30">
            <a class="name dblue" href="./">Orthosphera</a><span class="name2">Территория <strong>культуры</strong></span>
        </div>
        <div class="header__right flex gap__30 ai-s">

            <!-- пиктограмма поиска -->
            <svg class="search" width="55px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fcfdce">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier"> 
                    <path d="M15 15L21 21" stroke="#fcfdce" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> 
                    <path d="M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#fcfdce" stroke-width="2"></path> 
                </g>
            </svg>

            <!-- пиктограмма чата -->
            <svg class="chat__toggle" fill="#fcfdce" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" stroke="#1e90ff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier"> 
                    <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path> 
                <g> 
                    <path d="M384,207.828C384,163.75,341.016,128,288,128c-53,0-96,35.75-96,79.828c0,44.094,43,79.828,96,79.828 c17.484,0,38.406-7.766,38.406-7.766l52.812,24.062l-11.234-51.281C367.984,252.672,384,227.344,384,207.828z M327.062,262.594 l-6.219,2.281c-5.094,1.875-20.953,6.766-32.844,6.766c-44.109,0-80-28.625-80-63.812s35.891-63.812,80-63.812 s79.984,28.625,79.984,63.812c0,10.734-8.266,27.953-13.516,36.297l-3.5,5.547l5.781,26.453L327.062,262.594z"></path> 
                    <path d="M224,351.688c-11.891,0-27.75-4.891-32.859-6.766l-6.172-2.281l-29.719,13.531l5.781-26.453l-3.5-5.547 C152.297,315.844,144,298.609,144,287.875c0-22.375,14.578-42.016,36.5-53.406c-1.75-5.188-3.062-10.531-3.781-16.016 C147.656,232.156,128,258.094,128,287.875c0,19.5,16,44.844,16,44.844L132.781,384l52.812-24.062c0,0,20.922,7.766,38.406,7.766 c48.422,0,88.375-30.266,94.938-68.734c-5,1.344-10.953,2.641-17.266,3.547C293.312,330.641,261.781,351.688,224,351.688z"></path> 
                </g> 
            </svg>

            <!-- вход/выход -->
            <?php  if($_COOKIE['user'] == 'true'): ?>
            <a class="auth" href="auth.php">
                <svg width="60px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#fcfdce">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier"> 
                        <g clip-path="url(#fcfdceclip0_429_11067)"> 
                            <path d="M15 4.00098H5V18.001C5 19.1055 5.89543 20.001 7 20.001H15" stroke="#fcfdce" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> 
                            <path d="M16 15.001L19 12.001M19 12.001L16 9.00098M19 12.001H9" stroke="#fcfdce" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">   </path> 
                        </g> 
                        <defs> 
                            <clipPath id="clip0_429_11067"> 
                                <rect width="24" height="24" fill="white" transform="translate(0 0.000976562)"></rect> 
                            </clipPath> 
                        </defs> 
                    </g>
                </svg>
            </a>
            <?php else: ?>
            <a class="auth" href="auth.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="53"  viewBox="0 0 11 11" fill="#fcfdce">
                    <path d="M4.793,7.263A.5.5,0,0,0,5.5,7.97L7.743,5.677a.25.25,0,0,0,0-.354h0L5.489,3.042a.5.5,0,0,0-.707.707L6,5H1.5a.5.5,0,0,0,0,1H6ZM9,1H4.5a.5.5,0,0,0,0,1h4a.5.5,0,0,1,.5.5v6a.5.5,0,0,1-.5.5h-4a.5.5,0,0,0,0,1H9a1,1,0,0,0,1-1V2A1,1,0,0,0,9,1Z" />
                </svg>
            </a>
            <?php endif; ?>

            <!-- пиктограмма мобильного меню -->
            <svg class="mobile__menu__svg disp__none"  width="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 396.667 396.667"  xml:space="preserve" fill="#fcfdce" stroke="#333">
                <path  d="M17,87.833h362.667c9.35,0,17-7.65,17-17s-7.65-17-17-17H17c-9.35,0-17,7.65-17,17C0,80.183,7.65,87.833,17,87.833z"/>
                <path  d="M17,215.333h362.667c9.35,0,17-7.65,17-17s-7.65-17-17-17H17c-9.35,0-17,7.65-17,17S7.65,215.333,17,215.333z"/>
                <path  d="M17,342.833h362.667c9.35,0,17-7.65,17-17s-7.65-17-17-17H17c-9.35,0-17,7.65-17,17S7.65,342.833,17,342.833z"/>
            </svg>
	
        </div>
    </div>
    <!-- мобильное меню -->
    <nav class="mobile__menu disp__none vis__hidden flex column ai-e">
        <p class="mobile__menu__ancor" >Кабинет</p>
        <a class="mobile__menu__ancor" href="#">Читальный Зал</a>
        <a class="mobile__menu__ancor" href="#">Книжный Ряд</a>
        <a class="mobile__menu__ancor" href="#">Музыка</a>
        <a class="mobile__menu__ancor" href="#">Гостевой Альбом</a>
    </nav>
    <!-- навигация -->
    <nav class="menu center flex  jc-e">
        <a class="menu__ancor" href="#">Читальный Зал</a>
        <a class="menu__ancor" href="#">Книжный Ряд</a>
        <a class="menu__ancor" href="#">Музыка</a>
        <a class="menu__ancor" href="#">Гостевой Альбом</a>
        <p class="menu__ancor" >Кабинет</p>
    </nav>
    <!-- чат -->
    <div class="chat__box center flex column jc-c ai-c gap__30 vis__hidden">
        <input type="button" value="выход">
        <h2 class="chat__header">Беседка</h2>
        <div class="chat__inputs">
            <input class="chat__message" type="text" id="message" placeholder="Ваше слово" required>
            <button class="chat__button">Отправить</button>
        </div>
        <div class="chat__area">fuga voluptates odit rem? Quod eum nostrum modi commodi dolores. Officiis, amet? Lorem ipsum dolor sit amet consectetur adipisicing elit. M sint perferendis nesciunt laudantium, quas voluptatem reiciendis quia omnis facere saepe, reprehenderit libero tenetur ad. Eum, omnis! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus ipsum asperiores, autem et praesentium excepturi ex voluptatibus, assumenda cumque reiciendis mollitia quod error dolore velit aut voluptatum culpa veniam placeat.</div>
    </div>

</header>