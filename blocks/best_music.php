<?php 
    $music = [
    [ 'treck' => '/music/CHajjkovskijj.mp3', 
        'label' => 'Чайсковский - Русский танец'], 
    [ 'treck' => '/music/Jamshik.mp3',
        'label' => 'Погудин - Ямщик не гони лошадей'],
    [ 'treck' => '/music/not_for_me.mp3', 
        'label' => 'Кубанский Казачий Хор - Не для меня'],
    [ 'treck' => '/music/orthodox.mp3',
        'label' => 'Хор Александра Свирского Монастыря - Достойно есть'],
    [ 'treck' => '/music/fire.mp3',
        'label' => 'Марк Бернес - Вьётся в тесной печурке огонь'],
    [ 'treck' => '/music/tired_sun.mp3',
        'label' => 'Ежи Петерсбурский - Утомлённое солнце'],
    ] 
?>
<!-- музыка -->
<div class="best__music center">
    <?php $i = 0;?>
    <?php foreach($music as $key => $musitem): ?>
        <div class="music__item" onclick="AudioPlay(<?=$i?>)">
            <img class="mus__img" src="/img/grammo.svg" alt="пластинка">
            <audio id="audio<?=$i?>" src="<?=$musitem['treck'];?>"></audio>
            <p class="music__label"><?=$musitem['label']?></p>
        </div>
    <?php $i++;?>
    <?php endforeach; ?>
    <script src="/js/audiopleer.js"></script>
</div>