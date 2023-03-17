<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media.css">
    <script type="template" class="template__music">
        <article class="music__item">
            <audio id="audio{{ musicId }}" src="{{ musicTreck }}"></audio>
            <img class="mus__img" src="/img/grammo.svg" alt="пластинка">
            <div class="music__label">
                <p class="artist">{{ musicArtist }}</p>
                <p>{{ musicLabel }}</p>
            </div>
        </article>
    </script>
    <script src="./js/data.js"></script>
    <script defer src="./js/player.js"></script>
    <title>Orthosphera</title>
</head>
<body>
    <?php require "header.php"; ?>
    <?php require "main.php"; ?>
    <?php require "best_read.html"; ?>
    <?php require "best__media.php"; ?>
    <?php require "articles.php"; ?>
    <?php require "myMail.php"; ?>
    <?php require "footer.php"; ?>
    <script src="./js/script.js"></script>
    <script src="./js/templater.js"></script>
    <!-- <script src="./js/chat.js"></script> -->
</body>
</html>