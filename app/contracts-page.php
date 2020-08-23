<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-6.svg"; ?>
<script>
    document.querySelector('#main').classList.add('bg-accent-gradient__lighten');
</script>

<div class="section section-configurator_ppk bg-overlay">
    <div class="container">
        <h1 class="headers-h1 c-light text-center mb-50">Договоры</h1>
        <div class="configurator-box mb-50">
            <div class="modal-content modal-content__horizontal bg-accent__darker">

                <div class="configurator-box__header text-center">
                    <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор «Договоры»</p>
                    <p class="dr-text__normal">Шаг 1</p>
                </div>
                <div class="configurator-box__body">
                    <h2 class="headers-h2 text-center">Выберите тип договора</h2>
                    <div class="row mt-80">
                        <div class="radio-group__wrapper radio-group__masonry d-flex flex-wrap w-100">
                            <div class="radio-group__item col-12 col-sm-6 col-md-6">
                                <div class="radio-group">
                                    <p class="radio-group__title c-accent__lightest">Договоры аренды</p>
                                    <ul class="radio-group__list">
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1" checked>
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">Договор аренды помещения для аптеки</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">Договор аренды помещения для медицинского учреждения</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">Договор аренды помещения для аптеки. Арендодатели — два физлица</span>
                        </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">Договор аренды помещения для медицинского учреждения. Арендодатели — два физлица</span>
                        </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="radio-group__item col-12 col-sm-6 col-md-6">
                                <div class="radio-group">
                                    <p class="radio-group__title c-accent__lightest">Договор трудовой</p>
                                    <ul class="radio-group__list">
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">Трудовой договор стандартный</span>
                        </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="radio-group__item col-12 col-sm-6 col-md-6">
                                <div class="radio-group">
                                    <p class="radio-group__title c-accent__lightest">Договор услуг</p>
                                    <ul class="radio-group__list">
                                        <li>
                                            <label class="radio radio-default">
                                                <input type="radio" name="rgroup1">
                                                <span class="radio-inner">
                            <span class="radio-box">

                            </span>
                            <span class="radio-text dr-text__normal">Договор на оказание платных медицинских услуг</span>
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
