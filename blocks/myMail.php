<!-- моя почта -->
<section class="contact center">
    <div class="contact__left flex column jc-c ai-c">
        <img class="contact__ava" src="img/avat.jpg" alt="аватара" width="100">
        <cite class="contact__txt">
            "Люди перестали писать. Нет, не короткие полуграмотные сообщения, а нормальные письма. К сожалению. Ведь письмо - залог грамотной речи, развития мышления и просто умения собирать внимание..."
        </cite>
    </div>
    <div class="contact__right flex column ai-c">
        <h3 class="contact__header">Начните переписку</h3>
        <form class="contact__form flex column" action="sendMail.php" method="post">
            <input class="input__email" type="email" name="email" placeholder="Ваша почта" required>
            <textarea class="input__txt" rows="4" name="letter" placeholder="Текст письма" required></textarea>
            <input class="input__submit b__xerox bright__lemon" type="submit" value="Отослать">
        </form>
    </div>
</section>