<?php
    if($_COOKIE['user'] == 'true')
        setcookie('user', 'true', time() - 360, '/');
    else 
        setcookie('user', 'true', time() + 360, '/');
        header('Location: /');
?>