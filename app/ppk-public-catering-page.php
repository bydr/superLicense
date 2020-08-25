<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "images/_src/frame-6.svg"; ?>
<script>
    document.querySelector('#main').classList.add('bg-accent-gradient__lighten');
</script>

<div class="section section-configurator_ppk bg-overlay">
    <div class="container">
        <h1 class="headers-h1 c-light text-center mb-50">Программа производственного контроля</h1>
        <div class="configurator-box mb-50">
            <form action="/" class="dr-form modal-content modal-content__horizontal bg-accent__darker">

                <div class="configurator-box__header text-center">
                    <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор</p>
                    <p class="dr-text__normal">Шаг 2</p>
                </div>
                <div class="configurator-box__body">
                    <h2 class="headers-h2 text-center">Заполните необходимые графы документа</h2>
                    <div class="row mt-80">
                        <div class="w-100 max-w-820">
                            <div class="form-group">
                                <label for="id-company" class="label form-group__label">
                                    Наименование юридического лица, индивидуального предпринимателя
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="company" id="id-company" required="" placeholder="ООО «Ромашка»">
                            </div>
                            <div class="form-group">
                                <label for="id-firm-title" class="label form-group__label">
                                    Фирменное наименовании (при наличии)
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="firm-titl" id="id-firm-title" placeholder="Кафе «Роза»">
                            </div>
                            <div class="form-group">
                                <label for="id-position" class="label form-group__label">
                                    Должность
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="position" id="id-position" required="" placeholder="директор">
                            </div>
                            <div class="form-group">
                                <label for="id-fio" class="label form-group__label">
                                    ФИО руководителя
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="fio" id="id-fio" required="" placeholder="Иванов Иван Иванович">
                            </div>
                            <div class="form-group">
                                <label for="id-tel-lead" class="label form-group__label">
                                    Телефон руководителя
                                </label>
                                <input type="tel" class="dr-form-control form-control mask-tel"
                                       name="tel-lead" id="id-tel-lead" required="" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="id-ur-addr" class="label form-group__label">
                                    Юридический адрес
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="ur-addr" id="id-ur-addr" required=""
                                       placeholder="344000, Ростов-на-Дону, ул. Большая Садовая, 2">
                            </div>
                            <div class="form-group">
                                <label for="id-fact-addr" class="label form-group__label">
                                    Фактический адрес
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="fact-addr" id="id-fact-addr" required=""
                                       placeholder="Ростов-на-Дону, ул. Большая Садовая, 3">
                            </div>
                            <div class="form-group">
                                <label for="id-inn" class="label form-group__label">
                                    ИНН
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="inn" id="id-inn" required="" placeholder=" " pattern="[0-9]+">
                                <div class="form-group__message error">Проверьте правильность введеных данных</div>
                            </div>
                            <div class="form-group form-group_row ml-0" style="max-width: 420px;">
                                <label for="id-number-people" class="label form-group__label">
                                    <span>Кол-во работающих</span><span class="dr-text__small">на данном предприятии</span>
                                </label>
                                <div class="input-wrapper">
                                    <input type="number" min="0" class="dr-form-control form-control input-number-people"
                                           name="number-people" id="id-number-people" required="" placeholder=" ">
                                    <span class="dr-text__normal">чел.</span>
                                </div>
                            </div>
                            <div class="form-group form-group_row ml-0">
                                <label for="id-number-people2" class="label form-group__label">
                                    <span>Из них относящихся к «декретированному контингенту»</span>
                                    <span class="tooltip-btn tooltip-btn__circle"
                                          data-toggle="popover"
                                          data-placement="top"
                                          data-html="true"
                                          data-content="Должностные лица и работники организаций, деятельность которых связана с производством, хранением, транспортировкой и реализацией пищевых продуктов и питьевой воды, коммунальным и бытовым обслуживанием населения)">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.09009 9.00002C9.32519 8.33169 9.78924 7.76813 10.4 7.40915C11.0108 7.05018 11.729 6.91896 12.4273 7.03873C13.1255 7.15851 13.7589 7.52154 14.2152 8.06355C14.6714 8.60555 14.9211 9.29154 14.9201 10C14.9201 12 11.9201 13 11.9201 13" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12 17H12.01" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </span>
                                </label>
                                <div class="input-wrapper">
                                    <input type="number" min="0" class="dr-form-control form-control input-number-people"
                                           name="number-people2" id="id-number-people2" required="" placeholder=" ">
                                    <span class="dr-text__normal">чел.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label form-group__label">
                                    Свидетельство о государственной регистрации
                                </label>
                                <div class="form-group form-group_row mb-0">
                                    <div class="col-12 col-sm-9 p-0">
                                        <div class="form-group form-group_row">
                                            <label for="id-reg-num" class="label form-group__label">
                                                №
                                            </label>
                                            <input type="text" class="dr-form-control form-control"
                                                   name="reg-num" id="id-reg-num" required="" placeholder=" " pattern="[0-9]+">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3 p-0">
                                        <div class="form-group form-group_row">
                                            <label for="id-reg-date" class="label form-group__label">
                                                от
                                            </label>
                                            <input type="text" class="dr-form-control form-control mask-date"
                                                   name="reg-date" id="id-reg-date" required="" placeholder=" ">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap w-100 mt-20">
                                    <div class="form-group form-group_row">
                                        <label for="id-issued-by" class="label form-group__label">
                                            кем выдано
                                        </label>
                                        <input type="text" class="dr-form-control form-control"
                                               name="issued-by" id="id-issued-by" required="" placeholder=" ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id-ogrn" class="label form-group__label">
                                    ОГРН (ОГРНИП)
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="ogrn" id="id-ogrn" required=""
                                       placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="id-ogrn-date" class="label form-group__label">
                                    Дата внесения записи ОГРН (ОГРНИП)
                                </label>
                                <input type="text" class="dr-form-control form-control mask-date"
                                       name="ogrn-date" id="id-ogrn-date" required=""
                                       placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="id-gov-peop" class="label form-group__label">
                                    Перечень должностных лиц (работников), на которых возложены функции по осуществлению производственного контроля (ФИО, должность, телефон)
                                </label>
                                <div class="controls-added">
                                    <div class="controls-added__row controls-added__row_original">
                                        <div class="controls-added__element">
                                            <input type="text" class="dr-form-control form-control"
                                                   required=""
                                                   id="id-gov-peop"
                                                   placeholder="Иванов Иван Иванович, директор, 8-999-777-0000">
                                        </div>
                                        <div class="controls-added__btn">
                                            <p class="dr-text__small">добавить</p>
                                            <button type="button" class="dr-btn bg-orange-lighter dr-btn__square"><span class="headers-h2">+</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="configurator-box__footer">
                    <div class="w-100 d-flex justify-content-center text-center mt-60 mb-50">
                        <button type="submit" class="dr-btn dr-btn__orange-gradient max-w-300 w-100">Отправить</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
