<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-6.svg"; ?>
<script>
    document.querySelector('#main').classList.add('bg-accent-gradient__lighten');
</script>

<div class="section section-configurator_ppk bg-overlay">
    <div class="container">
        <h1 class="headers-h1 c-light text-center mb-50">Договор аренды</h1>
        <div class="configurator-box mb-50">
            <form action="/" class="dr-form modal-content modal-content__horizontal bg-accent__darker">

                <div class="configurator-box__header text-center">
                    <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор «Договоры»</p>
                    <p class="dr-text__normal">Шаг 2</p>
                </div>
                <div class="configurator-box__body">
                    <h2 class="headers-h2 text-center">Заполните необходимые графы документа</h2>
                    <div class="row mt-80">
                        <div class="w-100 max-w-820">
                            <div class="form-group">
                                <label for="id-city" class="label form-group__label">
                                    Населенный пункт договора
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="city" id="id-city" required="" placeholder="Ростов-на-Дону">
                            </div>
                            <div class="form-group">
                                <label for="id-date-contract-begin" class="label form-group__label">
                                    Дата подписания договора
                                </label>
                                <input type="text" class="dr-form-control form-control mask-date"
                                       name="date-contract-begin" id="id-date-contract-begin" required="" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <p class="headers-h3 c-accent__lighten mt-20">Арендодатель 1</p>
                                <label for="id-name-landlor1" class="label form-group__label">
                                    <span>ФИО, действующий/щая на основании паспорта</span>
                                    <span class="dr-text__small">(серия, номер, кем и когда выдан)</span>
                                </label>
                                <textarea type="text" class="dr-form-control form-control"
                                          name="name-landlor1" id="id-name-landlor1" required="" placeholder="Иванов Иван Иванович, действующий на основании паспорта серия 0000 №000000 выданный 00.00.2000 отделом таким-таким-то"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="id-address-registration-landlor1" class="label form-group__label">
                                    Адрес регистрации (прописка)
                                </label>
                                <textarea type="text" class="dr-form-control form-control"
                                          name="address-registration-landlor1" id="id-address-registration-landlor1" required="" placeholder="Адрес регистрации: Ростов-на-Дону, ул. Большая Садовая, 3"></textarea>
                            </div>
                            <div class="form-group">
                                <p class="headers-h3 c-accent__lighten mt-20">Арендодатель 2</p>
                                <label for="id-name-landlor2" class="label form-group__label">
                                    <span>ФИО, действующий/щая на основании паспорта</span>
                                    <span class="dr-text__small">(серия, номер, кем и когда выдан)</span>
                                </label>
                                <textarea type="text" class="dr-form-control form-control"
                                          name="name-landlor2" id="id-name-landlor2" required="" placeholder="Иванов Иван Иванович, действующий на основании паспорта серия 0000 №000000 выданный 00.00.2000 отделом таким-таким-то"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="id-address-registration-landlor2" class="label form-group__label">
                                    Адрес регистрации (прописка)
                                </label>
                                <textarea type="text" class="dr-form-control form-control"
                                          name="address-registration-landlor2" id="id-address-registration-landlor2" required="" placeholder="Адрес регистрации: Ростов-на-Дону, ул. Большая Садовая, 3"></textarea>
                            </div>
                            <div class="form-group">
                                <p class="headers-h3 c-accent__lighten mt-20">Арендатор</p>
                                <label for="id-name-company" class="label form-group__label">
                                    Название организации или ИП
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="name-company" id="id-name-company" required="" placeholder="ООО Ромашка">
                            </div>
                            <div class="form-group">
                                <label for="id-position" class="label form-group__label">
                                    <span>В лице должность, ФИО, действующиего на основании Устава (Свидетельства или другое)</span>
                                    <span class="tooltip-btn tooltip-btn__circle"
                                          data-toggle="popover"
                                          data-html="true"
                                          data-placement="top"
                                          data-content="Укажите должность и ФИО руководителя в родительном падеже">
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
                                <input type="text" class="dr-form-control form-control"
                                       name="position" id="id-position" required="" placeholder="директора Иванова Ивана Ивановича, действующего на основании Устава">
                            </div>
                            <div class="form-group">
                                <label for="id-requisites" class="label form-group__label">
                                    Реквизиты - банковские, юр. адрес, ИНН
                                </label>
                                <textarea type="text" class="dr-form-control form-control"
                                          name="requisites" id="id-requisites" required="" placeholder="ИНН 12312312 р/с 34234234234234 в банке БАНК, БИК 12312322. Юр.адрес: Ростов-на-Дону, ул. Большая Садовая, 123" ></textarea>
                            </div>
                            <div class="form-group">
                                <p class="headers-h3 c-accent__lighten mt-20">Предмет договора</p>
                                <label for="id-address" class="label form-group__label">
                                    Адрес помещения (строго из документа на право собственности)
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="address" id="id-address" required="" placeholder="Ростов-на-Дону, ул. Большая Садовая, 3">
                            </div>
                            <div class="form-group">
                                <label for="id-num-doc" class="label form-group__label">
                                    Номер документа / регистрации/ кадастровый номер или условный номер здания, строения, сооружения и (или) помещения. Дата выдачи
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="num-doc" id="id-num-doc" required="" placeholder="Выписка из ЕГРН №323434, кад.номер 234234234234. Выдано 20.09.2020">
                            </div>
                            <div class="form-group">
                                <label for="id-room-area" class="label form-group__label">
                                    Площадь помещения
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="room-area" id="id-room-area" required="" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="id-rent" class="label form-group__label">
                                    Арендная плата
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="rent" id="id-rent" required="" placeholder=" ">
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
