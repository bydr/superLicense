<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-6.svg"; ?>


<div class="section section-configurator_ppk bg-overlay bg-accent-gradient__lighten">
    <div class="container">
        <h1 class="headers-h1 c-light text-center mb-50">Программа производственного контроля</h1>
        <div class="configurator-box mb-50">
            <form action="/" class="dr-form modal-content modal-content__horizontal bg-accent__darker">

                <div class="configurator-box__header text-center">
                    <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор</p>
                    <p class="dr-text__normal">Шаг 3</p>
                </div>
                <div class="configurator-box__body">
                    <div class="modal">
                        <div class="modal-content modal-box_notpadding modal-content__components w-100 max-w-820 bg-light">
                            <div class="modal-header bg-orange-gradient">
                                <p class="headers-h1 w-100 text-center">Программа производственного контроля</p>
                            </div>
                            <div class="modal-body w-100 text-center ">
                                <p class="headers-h2 c-accent__darken">Подготовлен документ ППК</p>
                                <p class="dr-text__normal c-accent__darker mb-0">Стоимость:</p>
                                <p class="headers-h1 c-accent__darker">750 ₽</p>
                                <div class="d-flex justify-content-center w-100">
                                    <a href="#" class="dr-btn dr-btn__orange-gradient dr-btn__big w-100 max-w-400 mb-30">скачать и оплатить</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <img src="img/_src/payments.png" class="max-w-400 w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="configurator-box__footer">
                </div>
            </form>
        </div>

    </div>
</div>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
