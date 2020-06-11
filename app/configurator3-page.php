<?php require_once('head.php'); ?>
<?php require_once('header-auth-user.php'); ?>
<?php require_once('params.php'); ?>

<script>
    document.querySelector('.header').classList.add('bg-transparent');
    document.querySelector('#main').classList.add('bg-accent-gradient__darken');
</script>

<div class="section section-configurator section-configurator__3 bg-overlay">
    <div class="container">
        <div class="configurator-box">
            <div class="modal-content modal-content__horizontal bg-accent__darker">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="configurator-box__inner">
                            <div class="configurator-box__header text-center">
                                <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор</p>
                                <p class="dr-text__normal">Шаг 3 из 7</p>
                            </div>
                            <div class="configurator-box__body">
                                <h2 class="headers-h2 text-center">Выберите специальности</h2>
                            </div>
                            <div class="configurator-box__footer">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="configurator-box__inner">
                            <ol class="list-content__numeric">
                                <li><b>Выберите специальность или специальности, по которым вы обучались.</b></li>
                                <li><b>Нажмите на «Сертификат специалиста» в появившмеся меню специальности.</b> Этим вы
                                    подтверждаете, что у вас на руках есть Диплом о среднем медицинском образовании и
                                    сертификат специалиста по выбранной специальности.
                                </li>
                                <li><b>Станет активен пункт «Стаж 3 года». Нажмите его.</b> Этим вы подтверждаете, что у
                                    вас
                                    есть стаж 3 года по выбираемой специальности и вы имеете об этом запись в вашей
                                    трудовой книжке. Теперь эта специальность выбрана.
                                </li>
                                <li><b>После выбора одной специальности вы можете выбрать другую специальность,</b> при
                                    условии, что имеете по ней сертификат специалиста и необходимый стаж. <span
                                            class="c-orange">После того,
                                    как вы перейдете в следующий раздел Конфигуратора выбрать другую специальность будет
                                    нельзя. Помните об этом!</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="headers-h3 mt-30">Высшее образование</h3>
        <div class="list-content__wrapper list-selection list-selection-js">
           <?php foreach($data['education']['higher'] as $item) : ?>
                <div class="list-selection__item"><span class="list-selection__item-inner"><?=$item; ?>&nbsp;→</span></div>
            <?php endforeach; ?>
        </div>
        <h3 class="headers-h3 mt-30">Среднее образование</h3>
        <div class="list-content__wrapper list-selection list-selection-js">
            <?php foreach($data['education']['middle'] as $item) : ?>
                <div class="list-selection__item"><span class="list-selection__item-inner"><?=$item; ?>&nbsp;→</span></div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-100">
            <a href="#" class="dr-btn dr-btn__accent-lightest w-100 max-w-400">Специальности выбраны</a>
        </div>
    </div>
</div>

<?php require_once('foot.php'); ?>
