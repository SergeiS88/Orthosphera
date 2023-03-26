import { AddEvent } from "./library.js";

// вызов мобильного меню
AddEvent('click',
        document.querySelectorAll('.mobile__menu__svg'), 
        function(){
            document.querySelector('.mobile__menu').classList.toggle('vis__hidden');
        },
        false
);
// вызов чата
AddEvent('click',
        document.querySelectorAll('.chat__toggle'), 
        function(){
            document.querySelector('.chat__box').classList.toggle('vis__hidden');
        },
        false
);


// чат
get();
setInterval(get, 2000);
// по клику на "отправить" запуск send()
AddEvent('click',
        document.querySelectorAll('.chat__button'),
        Send(),
        false
);
// отправка сообщения
function Send() {
    const chatMessage = document.querySelector('.chat__message').value;
    //const chatUser = user ?? "Гость"; // (a !== null && a !== undefined) ? a : b;

    (async () => {
        const response = await fetch('chat.php',
            {
                method: 'post',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `message=${chatMessage}`
            }
        );
        const answer = await response.json();
        if (answer.status === "da") document.querySelector('.chat__message').value = "";
        if (answer.status === "error") document.querySelector('.chat__message').value = answer.error;
    }
    )();
}
// запрос и вставка соббщений
function get() {
    (async () => {
            const response = await fetch('chat.php');
            const answer = await response.json();
            const str = '';
            for(key in answer.messages) {
                str = str + `<p class='message'>${answer.messages[key].message}</p>`;
            }
            document.querySelector('.chat__area').insertAdjacentHTML('beforeend', str);
        }
    )();
}