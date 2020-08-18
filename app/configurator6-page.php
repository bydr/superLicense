<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>


<div class="section section-configurator bg-overlay section-configurator__6 bg-accent-gradient__darken">
    <div class="container">
        <div class="configurator-box">
            <div class="modal-content modal-content__horizontal bg-accent__darker">
                <div class="configurator-box__header text-center">
                    <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор</p>
                    <p class="dr-text__normal">Шаг 6 из 7</p>
                </div>
                <div class="configurator-box__body">
                    <h2 class="headers-h2 text-center">Выбор региона</h2>
                </div>
                <div class="configurator-box__footer">
                </div>
            </div>
        </div>
        <ol class="list-content__wrapper list-content__numeric list-selection list-regions list-selection-js-custom">
            <?php foreach ($data['regions'] as $item) : ?>
                <li class="list-selection__item"><span class="list-selection__item-inner"><?= $item; ?></span></li>
            <?php endforeach; ?>
        </ol>
        <div class="text-center mt-100">
            <a href="#" class="dr-btn dr-btn__accent-lightest w-100 max-w-400 mb-100">Дальше</a>
        </div>
    </div>
</div>

<?php require_once('foot.php'); ?>
