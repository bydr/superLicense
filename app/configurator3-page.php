<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>


<div class="section section-configurator section-configurator__3 bg-overlay bg-accent-gradient__darken">
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
        <div class="education_higher list-content__wrapper list-selection list-selection-js">
            <div class="col-12 col-sm-6 col-lg-4">
                <?php
                $arrayLength = count($data['education']['higher']);
                $countInColumn = round($arrayLength / 3, 0);
                $i = 0;
                foreach($data['education']['higher'] as $item) : ?>
                <?php if ($i / $countInColumn != 1) { ?>
                    <div class="list-selection__item" data-year="5">
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
        <h3 class="headers-h3 mt-30">Среднее образование</h3>
        <div class="education_secondary list-content__wrapper list-selection list-selection-js">
            <div class="col-12 col-sm-6 col-lg-4">
            <?php
            $arrayLength = count($data['education']['middle']);
            $countInColumn = round($arrayLength / 3, 0);
            $i = 0;
            foreach($data['education']['middle'] as $item) : ?>
                <?php if ($i / $countInColumn != 1) { ?>
                    <div class="list-selection__item" data-year="3">
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
        <div class="text-center mt-100 pb-90">
            <a href="#" class="btn-next dr-btn dr-btn__disabled dr-btn__accent-lightest w-100 max-w-400">Специальности выбраны</a>
        </div>
        <div class="list-selection__templates" style="display: none;">
            <div class="list-selection__item-selected bg-accent__darker">
                <span class="list-selection__item__close"></span>
                <p class="list-selection__selected-title dr-text__normal mb-0"><b>@value@</b></p>
                <div class="dr-btn-group">
                    <label class="checkbox checkbox-btn">
                        <input type="checkbox" class="check-certificate">
                        <span class="checkbox-inner">
                        <span class="checkbox-box">

                        <svg class="checkbox-svg__active" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 11L12 14L22 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 12V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg class="checkbox-svg__disabled" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="18" height="18" rx="3" stroke="#17343E" stroke-width="2"/>
                        </svg>


                        </span>
                        <span class="checkbox-text dr-text__small">Сертификат</span>
                    </span>
                    </label>
                    <label class="checkbox checkbox-btn">
                        <input type="checkbox" class="check-experience">
                        <span class="checkbox-inner">
                        <span class="checkbox-box">

                        <svg class="checkbox-svg__active" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 11L12 14L22 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 12V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg class="checkbox-svg__disabled" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="18" height="18" rx="3" stroke="#17343E" stroke-width="2"/>
                        </svg>


                        </span>
                        <span class="checkbox-text dr-text__small">
                        Стаж @experience_val@
                        </span>
                    </span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('foot.php'); ?>
