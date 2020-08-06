<?php require_once('head.php'); ?>
<?php require_once('header-auth-user.php'); ?>
<?php require_once('params.php'); ?>

<script>
    document.querySelector('.header').classList.add('bg-transparent');
    document.querySelector('#main').classList.add('bg-accent-gradient__darken');
</script>

<div class="section section-configurator section-configurator__end">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 configurator-box__wrapper">
                <div class="configurator-box max-w-820">
                    <div class="modal-content bg-accent__darker">
                        <div class="configurator-box__header text-center">
                            <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор</p>
                            <p class="headers-h2">Готово</p>
                        </div>
                        <div class="configurator-box__body">
                            <p class="dr-text__small">
                                <b class="c-light">Ваш лицензирующий орган -- Роспотребназдор Ростовской области.</b>
                                <br>
                                <br>
                                <span class="c-light">Особенности получения лицензии в Ростовской области такие-то и такие-то.</span>
                                <br>
                                <br>
                                <span class="c-orange__lighten">Пожалуйста, оставьте отзыв в разделе нашего сайта. Напишите как помогли наши инструкции или с какими трудностями вы столкнулись в процессе. </span>
                                <br>
                                <br>
                                <span class="c-orange__lighten">Мы гарантируем актуальность информации на данный момент и обязуемся в течение 30 дней предоставить вам обновленные данные в случае их изменения.</span>
                            </p>
                            <h2 class="headers-h3 text-center c-accent__lightest">Системой сформирован <br> zip-архив документов, включая исчерпывающую инструкцию по получению медицинской лицензии самостоятельно</h2>
                            <div class="text-center">
                                <a href="#" class="dr-btn dr-btn__big dr-btn__orange-gradient w-100 max-w-250">Скачать</a>
                            </div>
                        </div>
                        <div class="configurator-box__footer">
                            <p class="dr-text__normal c-accent__lightest text-center">Вы можете скачать файлы в <a href="#" class="dr-text__underline">личном кабинете</a> в течении месяца</p>
                            <br><br>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once('foot.php'); ?>
