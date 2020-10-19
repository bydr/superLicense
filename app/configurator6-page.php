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
        <div class="list-content__wrapper list-content__numeric list-selection list-regions list-selection-js-custom">
            <div class="col-12 col-sm-6 col-lg-4">
                <?php
                $arrayLength = count($data['regions']);
                $countInColumn = round($arrayLength / 3, 0);
                $i = 0;
                foreach($data['regions'] as $item) : ?>
                <?php if ($i / $countInColumn != 1) { ?>
                    <div class="list-selection__item">
                        <span class="list-selection__item-inner">
                            <?=$item; ?>&nbsp;→
                        </span>
                    </div>
                <?php } else {  ?>
                <?php $i = 0; ?>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <?php }
                $i++;
                ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="text-center mt-100">
            <a href="#" class="btn-next dr-btn dr-btn__disabled dr-btn__accent-lightest w-100 max-w-400 mb-100">Дальше</a>
        </div>
    </div>
</div>

<?php require_once('foot.php'); ?>
