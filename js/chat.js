
get();

setInterval(get, 2000);

function send() {
    var message = document.getElementById('message').value;

    (async () => {
            var response = await fetch('chat.php',
                {
                    method: 'post',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `message=${message}`
                }
            );
            var answer = await response.json();
            if (answer.status === "ok") document.getElementById('message').value = "";
            if (answer.status === "error") document.getElementById('message').value = answer.error;
        }
    )();
}


function get() {

    (async () => {
            var response = await fetch('chat.php');
            var answer = await response.json();
            let str = '';
            for(i in answer.messages) {
                str = str + `<div class='message'>${answer.messages[i].message}</div>`;
            }

            document.getElementById('chat').innerHTML = str;
        }
    )();


}