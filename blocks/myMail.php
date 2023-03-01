<section class="contact center grid ai-c">
    <div class="contact__left flex column jc-c ai-c">
        <img class="contact__ava" src="img/avat.png" alt="аватара" width="100">
        <cite class="contact__txt">
            "Люди перестали писать. Нет, не короткие полуграмотные сообщения, а нормальные письма. К сожалению. Ведь письменная речь - залог грамотной устной речи и развития мышления... Но люди и перестали читать хорошие книги."
        </cite>
    </div>
    <div class="contact__right flex column ai-c">
        <h3>Начните переписку</h3>
        <form class="contact__form flex column" action="sendMail.php" method="post">
            <input class="input__email" type="email" name="email" placeholder="Ваша почта" required>
            <textarea class="input__txt" rows="3" name="letter" placeholder="Текст письма"></textarea>
            <input class="input__submit b__xerox bright__lemon" type="submit" value="Отослать">
        </form>
    </div>
</section>