<?php require_once('head.php'); ?>
<?php require_once('header-cabinet.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "images/_src/frame-8.svg"; ?>


<section class="section section-cabinet bg-accent__lightest">
    <div class="container-fluid">
        <div class="section-cabiner__inner">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-3 col-sm-12 bg-light">
                    <div class="section-sidebar sidebar d-flex justify-content-center">
                        <div class="sidebar-inner">
                            <div class="data-user align-items-start justify-content-start">
                                <span class="icon"><span class="ic-user"></span></span>
                                <div class="data-user__inner">
                                    <span class="data-user__title headers-h3"><b>Username</b></span>
                                </div>
                            </div>
                            <nav class="sidebar-navbar">
                                <ul class="sidebar-nav">
                                    <li class="sidebar-nav__item is-active">
                                        <a href="cabinet-page.php" class="dr-text__nav">Мои заказы</a>
                                    </li>
                                    <li class="sidebar-nav__item">
                                        <a href="cabinet-data-page.php" class="dr-text__nav">Личные данные</a>
                                    </li>
                                    <li class="sidebar-nav__item">
                                        <a href="#"
                                           class="dr-text__nav"
                                           data-modal="modal_delete-account">Удалить профиль</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9 col-md-9 col-sm-12 section-content__cabinet-wrapper bg-accent__lightest">
                    <div class="section-content__cabinet ">
                        <div class="list-orders list-panels">
                            <h2 class="headers-h3 c-accent__darken mb-30">Мои заказы</h2>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="list-panel__item panel panel-column align-items-start">
                                        <p class="panel-header dr-text__normal"><b>Пакет файлов 1</b></p>
                                        <div class="panel-body">
                                            <ul class="custom-list">
                                                <li>
                                                    <p>
                                                        <span class="dr-text__small c-accent">специальность:</span>
                                                        <span class="dr-text__normal c-accent__darker">вирусология</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="dr-text__small c-accent">регион:</span>
                                                        <span class="dr-text__normal c-accent__darker">Ростовская область</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="dr-text__small c-accent">форма:</span>
                                                        <span class="dr-text__normal c-accent__darker">ИП</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="dr-text__small c-accent">дата:</span>
                                                        <span class="dr-text__normal c-accent__darker">20.02.2020</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-footer mt-20">
                                            <a href="#" class="dr-btn dr-btn-h40 dr-btn__orange-gradient mb-0">скачать</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="list-panel__item panel panel-column align-items-start">
                                        <p class="panel-header dr-text__normal"><b>Черновик</b></p>
                                        <div class="panel-body">
                                            <ul class="custom-list">
                                                <li>
                                                    <p>
                                                        <span class="dr-text__small c-accent">специальность:</span>
                                                        <span class="dr-text__normal c-accent__darker">гастроэнетерология</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="dr-text__small c-accent">регион:</span>
                                                        <span class="dr-text__normal c-accent__darker">-</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="dr-text__small c-accent">форма:</span>
                                                        <span class="dr-text__normal c-accent__darker">-</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-footer mt-20">
                                            <a href="#" class="dr-btn dr-btn-h40 dr-btn__orange-gradient mb-0">продолжить</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="list-panel__item panel panel-column align-items-start">
                                        <p class="panel-header dr-text__normal"><b>Конфигуратор</b></p>
                                        <div class="panel-body">
                                            <ul class="custom-list">
                                                <li>
                                                    <p>
                                                        <span class="dr-text__small c-accent">Вы можете пройти 1 раз,</span>
                                                        <span class="dr-text__normal c-accent__darker"></span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-footer mt-20">
                                            <a href="#" class="dr-btn dr-btn-h40 dr-btn__orange-gradient mb-0">пройти</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once "template-parts/modal_delete-account.php"; ?>
<?php include_once "template-parts/modal_delete-account_confirm.php"; ?>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
