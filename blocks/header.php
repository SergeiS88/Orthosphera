<header class="header center flex b__xerox jc-sb ai-c">
    <div class="header__left">
        <a href="#">
            <svg fill="#fcfdce" viewBox="-2.5 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"  stroke="#fcfdce" width="50px">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M11.902 14.114V4.337l1.108 1.108v9.777H2.652A1.664 1.664 0 0 1 .99 13.559V4.9a1.665 1.665 0 0 1 1.662-1.663h.664V7.25l.874-.645.875.645V3.236h5.729v9.77h-7.85a.978.978 0 0 0-.626.111.56.56 0 0 0-.006.88.613.613 0 0 0 .39.117h9.2z" fill="#1e90ff"></path>
                </g>
            </svg>
        </a>
    </div>
    <span class="name birusa">Orthosphera</span>
    <div class="header__right flex gap__30">
        <?php  if($_COOKIE['user'] == 'true'): ?>

            <a href="auth.php">
                <svg fill="#fcfdce" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve" stroke="#fcfdce" width="30px">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M50,43v2.2c0,2.6-2.2,4.8-4.8,4.8H6.8C4.2,50,2,47.8,2,45.2V43c0-5.8,6.8-9.4,13.2-12.2 c0.2-0.1,0.4-0.2,0.6-0.3c0.5-0.2,1-0.2,1.5,0.1c2.6,1.7,5.5,2.6,8.6,2.6s6.1-1,8.6-2.6c0.5-0.3,1-0.3,1.5-0.1 c0.2,0.1,0.4,0.2,0.6,0.3C43.2,33.6,50,37.1,50,43z M26,2c6.6,0,11.9,5.9,11.9,13.2S32.6,28.4,26,28.4s-11.9-5.9-11.9-13.2 S19.4,2,26,2z"></path> 
                </g>
                </svg>
            </a>

        <?php else: ?>

            <a href="auth.php">
            <svg  width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#fcfdce" stroke="#129a9a">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier"> 
                    <polygon style="fill:#129a9a129a9aF4A026;" points="491.176,256 323.723,128.652 336.851,217.928 140.291,217.928 140.291,296.697 336.851,296.697 323.723,383.348 "></polygon> 
                    <path style="fill:#129a9a129a9a;" d="M391.039,65.641H73.337v380.718h317.703v52.513H46.718c-14.501,0-25.894-11.755-25.894-26.256V39.385 c0-14.501,11.393-26.256,25.894-26.256h344.321V65.641z"></path> 
                    <path d="M499.124,245.551L331.671,118.202c-4.248-3.231-10.027-3.568-14.622-0.856s-7.091,7.936-6.315,13.215l10.917,74.239H139.928 c-7.249,0-12.766,5.878-12.766,13.128v78.769c0,7.251,5.516,13.128,12.766,13.128h181.656l-10.841,71.555 c-0.801,5.285,1.683,10.53,6.281,13.257c2.073,1.23,4.389,1.838,6.698,1.838c2.812,0,5.611-0.902,7.949-2.679l167.453-127.348 c3.264-2.483,5.18-6.348,5.18-10.449C504.304,251.899,502.388,248.034,499.124,245.551z M341.555,353.293l8.276-54.629 c0.574-3.782-0.532-7.626-3.026-10.526c-2.493-2.9-6.128-4.569-9.954-4.569H153.419v-52.513h183.433 c3.815,0,7.441-1.659,9.935-4.546c2.493-2.887,3.608-6.716,3.052-10.492l-8.447-57.435L469.488,256L341.555,353.293z"></path> 
                    <path d="M390.677,433.231H86.465V78.769h304.212c7.249,0,13.491-5.878,13.491-13.128V13.128c0-7.251-6.24-13.128-13.491-13.128 H46.718C25.001,0,7.696,17.668,7.696,39.385v433.231C7.696,494.332,25.001,512,46.718,512h343.959 c7.249,0,13.491-5.877,13.491-13.128v-52.513C404.168,439.108,397.928,433.231,390.677,433.231z M377.911,485.744H46.718 c-7.239,0-12.766-5.889-12.766-13.128V39.385c0-7.239,5.527-13.128,12.766-13.128h331.193v26.256H72.974 c-7.249,0-12.766,5.877-12.766,13.128v380.718c0,7.251,5.516,13.128,12.766,13.128h304.937V485.744z"></path> 
                </g>
            </svg>
            </a>

        <?php endif; ?>

        <!-- <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" width="30px" fill="#fcfdce" stroke="#fcfdce" transform="matrix(1, 0, 0, 1, 0, 0)">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <style type="text/css"></style>
                <g>
                    <rect class="st0" width="112" height="112"></rect>
                    <rect x="200.008" class="st0" width="111.984" height="112"></rect> 
                    <rect x="400" class="st0" width="112" height="112"></rect> 
                    <rect y="200.008" class="st0" width="112" height="111.984"></rect> 
                    <rect x="200.008" y="200.008" class="st0" width="111.984" height="111.984"></rect> 
                    <rect x="400" y="200.008" class="st0" width="112" height="111.984"></rect> 
                    <rect y="400" class="st0" width="112" height="112"></rect> 
                    <rect x="200.008" y="400" class="st0" width="111.984" height="112"></rect> 
                    <rect x="400" y="400" class="st0" width="112" height="112"></rect> 
                </g>  -->
            </g>
        </svg>
    </div>
</header>