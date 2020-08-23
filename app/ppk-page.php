<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-6.svg"; ?>
<script>
    document.querySelector('#main').classList.add('bg-accent-gradient__lighten');
</script>

<div class="section section-configurator_ppk bg-overlay">
    <div class="container">
        <h1 class="headers-h1 c-light text-center mb-50">Программа производственного контроля</h1>
        <div class="configurator-box mb-50">
            <div class="modal-content modal-content__horizontal bg-accent__darker">

                <div class="configurator-box__header text-center">
                    <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор</p>
                    <p class="dr-text__normal">Шаг 1</p>
                </div>
                <div class="configurator-box__body">
                    <h2 class="headers-h2 text-center">Выберите область деятельности <br>для которой
                        требуется составить ППК
                        <br>(программу производственного контроля)</h2>
                    <div class="row mt-80">
                        <div class="radio-group__wrapper radio-group__masonry d-flex flex-wrap w-100">
                            <div class="radio-group__item col-12 col-sm-6 col-md-6">
                                <div class="radio-group">
                                    <p class="radio-group__title c-accent__lightest">ИИИ (источник ионизирующего
                                        излучения)</p>
                                    <ul class="radio-group__list">
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1" checked>
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">ИИИ общий</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">ИИИ Стоматология</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">ИИИ Ветклиника</span>
                        </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="radio-group__item col-12 col-sm-6 col-md-6">
                                <div class="radio-group">
                                    <p class="radio-group__title c-accent__lightest">Общепит</p>
                                    <ul class="radio-group__list">
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для организаций общественного питания (бар)</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для временных организаций общественного питания быстрого обслуживания - шаурма, гамбургеры, чизбургеры, пицца, блины с начинками и т.п.</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для временных организаций общественного питания быстрого обслуживания - птица-гриль</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для организаций общественного питания «закусочная с приготовлением блюд из полуфабрикатов высокой степени готовности»</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для организаций общественного питания «закусочная, работающая на сырье»</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для организаций общественного питания «кафе»</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для организаций общественного питания «ресторан»</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для организаций общественного питания «Столовая»</span>
                        </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="radio-group__item col-12 col-sm-6 col-md-6">
                                <div class="radio-group">
                                    <p class="radio-group__title c-accent__lightest">Медицина</p>
                                    <ul class="radio-group__list">
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для кабинета предрейсовых и послерейсовых осмотров</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для косметологии (с использованием лазеров)</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для медицинского массажа</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для медицинского центра</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для медицинского центра и КЛД</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для медицинского центра со стационаром</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для офтальмологии</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для стоматологии</span>
                        </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="radio-group__item col-12 col-sm-6 col-md-6">
                                <div class="radio-group">
                                    <p class="radio-group__title c-accent__lightest">Фармация</p>
                                    <ul class="radio-group__list">
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для аптек</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для аптек производственных</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для ветеринарных аптек (аптечных магазинов, аптечных киосков)</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для оптики (продажа очков, оправ, линз)</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для фармацевтического склада</span>
                        </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="radio-group__item col-12 col-sm-6 col-md-6">
                                <div class="radio-group">
                                    <p class="radio-group__title c-accent__lightest">Прочее</p>
                                    <ul class="radio-group__list">
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для парикмахерских и салонов красоты</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">бассейн</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">пищеблок, бассейн в детском саду/школе</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">пищеблок детский сад/школа
для продовольственных магазинов</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">для продовольственных складов</span>
                        </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="configurator-box__footer">
                    <div class="w-100 d-flex justify-content-center text-center mb-50">
                        <a href="#" class="dr-btn dr-btn__orange-gradient max-w-300 w-100">дальше</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
