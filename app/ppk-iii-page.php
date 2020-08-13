<?php require_once('head.php'); ?>
<?php require_once('header-auth-user.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-6.svg"; ?>
<script>
    document.querySelector('#main').classList.add('bg-accent-gradient__lighten');
</script>

<div class="section section-configurator bg-overlay section-configurator__6">
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
                                <label for="id-city" class="label form-group__label">
                                    Город
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="city" id="id-city" required="" placeholder="Ростов-на-Дону">
                            </div>
                            <div class="form-group">
                                <label for="id-year" class="label form-group__label">
                                    Год
                                </label>
                                <input type="number" min="1990" class="dr-form-control form-control"
                                       name="year" id="id-year" required="" placeholder="XXXX">
                            </div>
                            <p class="dr-text__normal fw-bold c-accent__lightest mt-60">Приказ о назначении ответственного за радиационную безопасность</p>
                            <div class="form-group">
                                <label for="id-number" class="label form-group__label">
                                    Номер
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="number" id="id-number" required="">
                            </div>
                            <div class="form-group">
                                <label for="id-date" class="label form-group__label">
                                    Дата
                                </label>
                                <input type="text" class="dr-form-control form-control mask-date"
                                       name="date" id="id-date" required="">
                            </div>
                            <p class="dr-text__normal fw-bold c-accent__lightest mt-60">Производные переменные</p>
                            <div class="form-group">
                                <label for="id-fio-short" class="label form-group__label">
                                    ФИО руководителя кратко
                                </label>
                                <input type="text" class="dr-form-control form-control"
                                       name="fio-short" id="id-fio-short" required=""
                                       pattern="^([а-яА-ЯёЁa-zA-Z]+) ([а-яА-ЯёЁa-zA-Z]{1})\. ([а-яА-ЯёЁa-zA-Z]{1})\.$" placeholder="Иванов И. И.">
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
