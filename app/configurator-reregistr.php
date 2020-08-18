<?php require_once('head.php'); ?>
<?php require_once('header-cabinet.php'); ?>
<?php require_once('params.php'); ?>
<script>
    document.querySelector('#main').classList.add('bg-accent-gradient__darken');
</script>

<div class="section section-configurator section-configurator_reregistr bg-overlay">
    <div class="container">
        <div class="configurator-box mb-50">
            <div class="modal-content modal-content__horizontal bg-accent__darker">
                <div class="configurator-box__header text-center">
                    <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор</p>
                    <p class="dr-text__normal">Шаг 1</p>
                </div>
                <div class="configurator-box__body">
                    <h2 class="headers-h2 text-center">Выберите причину переоформления лицензии</h2>
                </div>
                <div class="configurator-box__footer">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="checkbox-list__column">
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" checked="">
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Добавление нового адреса деятельности к существующему</span>
                        </span>
                    </label>
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" >
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Добавление новых видов работ на прежний адрес</span>
                        </span>
                    </label>
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" >
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Реорганизация юридического лица в форме преобразования</span>
                        </span>
                    </label>
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" >
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Реорганизация юридических лиц в форме слияния<span class="dr-text__small">При условии наличия у каждого участвующего в слиянии юридического лица на дату государственной регистрации правопреемника реорганизованных юридических лиц лицензии на один и тот же вид деятельности</span></span>
                        </span>
                    </label>
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" >
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Изменение адреса места осуществления лицензиатом лицензируемого вида деятельности при фактически неизменном месте осуществления деятельности
                                <span class="dr-text__small">Бывает в случае замены номеров, литеров домов, переименовании улиц и населенных пунктов, и также некоторых других</span>
                            </span>
                        </span>
                    </label>
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" >
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Изменение наименования юридического лица или фамилии, имени<span class="dr-text__small">и (в случае, если имеется) отчества индивидуального предпринимателя</span>
                        </span>
                    </label>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="checkbox-list__column">
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" checked="">
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Изменение юридического адреса юридического лица или места жительства индивидуального предпринимателя</span>
                        </span>
                    </label>
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" >
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Изменение реквизитов документа, удостоверяющего личность индивидуального предпринимателя (замена паспорта)</span>
                        </span>
                    </label>
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" >
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Прекращение деятельности по адресу(ам)</span>
                        </span>
                    </label>
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" >
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Прекращение выполнения работ, оказываемых услуг, составляющих лицензируемый вид деятельности</span>
                        </span>
                    </label>
                    <label class="checkbox checkbox-default">
                        <input type="checkbox" >
                        <span class="checkbox-inner">
                            <span class="checkbox-box">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.5L8.5 17.5L18.5 2.5" stroke="#E1FEFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span class="checkbox-text dr-text__normal fw-bold">Изменение наименования лицензируемого вида деятельности
                                <span class="dr-text__small">(по истечении срока действия лицензии). С 2012 года лицензии выданные ранее считаются бессрочные, но виды работ, заявленные не соответствуют тем, что указаны в Приказе МЗ от 11 марта 2013 года №121н. Данные лицензии необходимо переоформить по новой номенклатуре работ (услуг).</span>
                            </span>
                        </span>
                    </label>
                </div>
            </div>
        </div>
        <div class="mt-100 max-w-400 mb-50">
            <a href="#" class="dr-btn dr-btn__accent-lightest w-100 m-0 mt-100">Дальше</a>
            <p class="dr-text__small text-left mt-30">
                <b class="c-light">
                    <span class="c-orange">Важно!</span> Делайте каждый шаг в конфигураторе осознанно, строго следуя нашим инструкциям. После подтверждения выбора шага, вы будете переходить к следующему. Изменить данные в пройденном шаге будет невозможно.
                </b>
            </p>
        </div>
        <div class="text-center max-w-600">
            <img src="img/_src/frame-10.svg" alt="">
        </div>
    </div>
</div>

<?php require_once('foot.php'); ?>
