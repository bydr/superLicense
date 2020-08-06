<?php require_once('head.php'); ?>
<?php require_once('header-auth-user.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-8.svg"; ?>


<section class="section section-cabinet">
    <div class="container">
        <div class="section-cabiner__inner">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-4 col-sm-12">
                    <div class="section-sidebar sidebar">
                        <div class="sidebar-inner">
                            <div class="data-user align-items-start justify-content-start">
                                <span class="icon"><span class="ic-user"></span></span>
                                <div class="data-user__inner">
                                    <span class="data-user__title headers-h3"><b>Username</b></span>
                                </div>
                            </div>
                            <nav class="sidebar-navbar">
                                <ul class="sidebar-nav">
                                    <li class="sidebar-nav__item">
                                        <a href="cabinet-page.php" class="dr-text__nav">Мои заказы</a>
                                    </li>
                                    <li class="sidebar-nav__item is-active">
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
                <div class="col-12 col-lg-9 col-md-8 col-sm-12 section-content__cabinet-wrapper bg-accent__lightest">
                    <div class="section-content__cabinet ">
                        <h2 class="headers-h3 c-accent__darken mb-30">Личные данные</h2>
                        <ul class="cabinet-info">
                            <li class="cabinet-info__row">
                                <p class="cabinet-info__lbl dr-text__small c-accent__darken">Имя</p>
                                <p class="cabinet-info__val dr-text__normal fw-bold c-accent__darker">Иванов Иван Иванович</p>
                            </li>
                            <li class="cabinet-info__row">
                                <p class="cabinet-info__lbl dr-text__small c-accent__darken">Телефон</p>
                                <p class="cabinet-info__val dr-text__normal fw-bold c-accent__darker">+7 999 111 22 33</p>
                            </li>
                            <li class="cabinet-info__row">
                                <p class="cabinet-info__lbl dr-text__small c-accent__darken">Почта</p>
                                <p class="cabinet-info__val dr-text__normal fw-bold c-accent__darker">ivanov@mail.ru</p>
                            </li>
                            <li class="cabinet-info__row">
                                <p class="cabinet-info__lbl dr-text__small c-accent__darken">Название</p>
                                <p class="cabinet-info__val dr-text__normal fw-bold c-accent__darker">ООО «Ромашка»</p>
                            </li>
                        </ul>
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
