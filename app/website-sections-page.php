<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-7.svg"; ?>


<section class="section section-website-sections bg-accent-gradient__lighten">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="headers-h1 text-center page-title c-accent__darker">Разделы сайта</h1>

                <?php include 'template-parts/service-list.php'; ?>

                <div class="modal-content modal-content__components w-100 bg-light mt-100">
                    <div class="modal-header bg-orange-gradient">
                        <p class="headers-h2 w-100 text-center c-light">Что дает премиум-аккаунт?</p>
                    </div>
                    <div class="modal-body w-100 ">
                        <p class="dr-text__normal c-accent__darker text-center">
                            <b>
                                Многие разделы сайта являются платными и доступны только для премиум-аккаунта:
                            </b>
                        </p>
                        <div class="text-center d-flex justify-content-center">
                            <ul class="list-content list-content__initial c-accent__darker mb-0">
                                <li class="list-selection__item">конфигуратор</li>
                                <li class="list-selection__item">что-то еще</li>
                                <li class="list-selection__item">в общем тут</li>
                                <li class="list-selection__item">все позиции списком</li>
                                <li class="list-selection__item">можно перечислить</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="dr-btn dr-btn__outline dr-btn__big dr-btn__wicon mb-30">
                                <span class="ic-init ic-crown ic-big"></span>
                                <span class="c-orange">Перейти на премиум-аккаунт</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
