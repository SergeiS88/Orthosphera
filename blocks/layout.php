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
    <script src="http://kit.fontawesome.com/a7ddde55e8.js" crossing="anonymoys"></script>
    <script type="template" class="template__articles">
        <div class="itc-slider__item">
            <article class="article article__{{ articleId }} center">
                <div class="article__item__img__wrapp">    
                    <img class="article__item__img" src="{{ articleImg }}" alt="статья {{ articlesId }}">
                </div>
                <h3 class="article__h3">{{ articleName }}</h3>
                <p class="article__p">{{ articlePrevious }}</p>
                <a class="article__a" href="#">Подробнее...</a>
            </article>
        </div>
    </script>
    <!-- <script type="module" src="./js/header.js"></script> -->
    <script type="module" src="./js/promo.js"></script>
    <script type="module" src="./js/articles.js"></script>
    <script type="module" src="./js/media.js"></script>
    <script type="module" src="./js/read.js"></script>
    <script type="module" src="./js/script.js"></script>
    <title>Orthosphera</title>
</head>
<body>
    <?php require "header.php"; ?>
    <?php require "promo.php"; ?>
    <?php require "articles.php"; ?>
    <?php require "best__media.php"; ?>
    <?php require "best_read.html"; ?>
    <?php require "myMail.php"; ?>
    <?php require "footer.php"; ?>
</body>
</html>