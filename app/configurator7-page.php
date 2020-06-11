<?php require_once('head.php'); ?>
<?php require_once('header-auth-user.php'); ?>
<?php require_once('params.php'); ?>

<script>
    document.querySelector('.header').classList.add('bg-transparent');
    document.querySelector('#main').classList.add('bg-accent-gradient__darken');
</script>

<div class="section section-configurator section-configurator__7 bg-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 configurator-box__wrapper">
                <div class="configurator-box">
                    <div class="modal-content bg-accent__darker">
                        <div class="configurator-box__header text-center">
                            <p class="dr-text__normal c-accent__lighter mb-0">Конфигуратор</p>
                            <p class="dr-text__normal">Шаг 7 из 7</p>
                        </div>
                        <div class="configurator-box__body">
                            <h2 class="headers-h2 text-center">Требования к помещениям</h2>
                        </div>
                        <div class="configurator-box__footer">
                            <p class="dr-text__small">Здесь без выбора, просто информация. Внезапно</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-5 offset-lg-1">
                <div class="configurator-btns__wrapper">
                    <div class="configurator-btns">
                        <p class="dr-text__normal">Text</p>
                        <a href="#" class="dr-btn dr-btn__accent-lightest">Дальше</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once('foot.php'); ?>
