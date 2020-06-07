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
                            <p class="headers-h2">Ваши файлы</p>
                        </div>
                        <div class="configurator-box__body">
                            <h2 class="headers-h3 text-center c-accent__lightest">Системой сформировано <br> <span>17 файлов</span></h2>
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
