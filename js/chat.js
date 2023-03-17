get();
setInterval(get, 2000);

addEvent('click',
        document.querySelectorAll('.chat__button'),
        Send(),
        false
);

function Send() {
    const chatMessage = document.querySelector('.chat__message').value;

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