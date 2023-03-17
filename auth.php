<?php
    if($_COOKIE['user'] == 'true')
        setcookie('user', 'true', time() - 36000, '/');
    else 
        setcookie('user', 'true', time() + 36000, '/');
        header('Location: /');
?>