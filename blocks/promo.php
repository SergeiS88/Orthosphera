<?php
    $slider = [
        [
            'image' => 'img/slider/promo_1.jpg',
            'alt' => 'двое читают',
            'quote' => '"И сказал: посему оставит человек отца и мать и прилепится к жене своей, и будут два одною плотью, так что они уже не двое, но одна плоть. Итак, что Бог сочетал, того человек да не разлучает."',
            'whose' => 'Мa.19:5-6',
        ],
        [
            'image' => 'img/slider/promo_2.jpg',
            'alt' => 'ребёнок читает',
            'quote' => '"...пустите детей приходить ко Мне и не препятствуйте им, ибо таковых есть Царствие Божие. Истинно говорю вам: кто не примет Царствия Божия, как дитя, тот не войдёт в него."',
            'whose' => 'Мк. 10:13-15',
        ],
        [
            'image' => 'img/slider/promo_3.jpg',
            'alt' => 'книги',
            'quote' => '"Вот, Я посылаю вас, как овец среди волков: итак будьте мудры, как змии, и просты, как голуби. Остерегайтесь же людей, ибо они передадут вас в суды и будут бичевать вас в собраниях"',
            'whose' => 'Мф. 10:16-18',
        ],
    ];
?>
<main class="main">
        <div class="slider">
            <div class="slider__wrapper">
                <?php $i = 0;?>
                <?php foreach($slider as $key => $slide): ?>
                <?php $i++;?> 
                <div class="slide slide__<?=$i?>">
                    <img class="slider__img" src="<?=$slide['image']?>" alt="<?=$slide['alt']?>">
                    <div class="slider__txt">
                        <h2><?=$slide['quote']?></h2>
                        <p><?=$slide['whose']?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
            <div class="slider__nav">
                <button type="button" class="slider__previous"></button>
                <button type="button" class="slider__next"></button>
	        </div>
</main>

