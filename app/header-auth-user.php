<header class="header bg-accent">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="dr-navbar  navbar navbar-expand-sm d-flex align-items-center justify-content-between w-100">
                    <!-- Brand/logo -->
                    <a class="navbar-brand d-flex align-items-center c-light" href="#">
                        <img src="img/_src/logo.png"
                             alt="super license"
                             title="super license"
                             class="img-responsive">
                        <span class="dr-text__logo">Супермаркет <br> медлицензий</span>
                    </a>

                    <?php echo file_get_contents('template-parts/navbar-menu.php'); ?>

                    <div class="mobile-menu d-none">
                        <button class="dr-btn dr-btn__icon mobile-menu__btn">
                            <span class="mobile-menu__icon ic-white ic-align-left"></span>
                        </button>
                        <div class="mobile-menu__drop ">
                            <div class="mobile-menu__wrapper">
                                <div class="btn-group align-items-center d-flex justify-content-center">
                                    <a href="authorization-page.php" id="id-btn__signin" class="dr-btn dr-text__menu c-accent__lighter">Вход</a>
                                    <a href="registration-page.php" id="id-btn__signup" class="dr-btn dr-btn__orange-gradient">Регистрация</a>
                                </div>

                                <?php echo file_get_contents('template-parts/navbar-menu.php'); ?>

                                <div class="btn d-flex align-items-center text-center w-100">
                                    <a href="#" class="dr-btn dr-btn__accent-gradient max-w-250 w-100">форма обратной связи</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- User data (if logged user) -->
                    <!-- Данные пользвателя - единственное отличие от header.php
                    - скрывается блок .btn-group и показывается header-user  -->

<!--                    <div class="btn-group align-items-center btn-group__auth d-flex">-->
<!--                        <a href="#" id="id-btn__signin" class="dr-btn dr-text__menu c-accent__lighter">Вход</a>-->
<!--                        <a href="#" id="id-btn__signup" class="dr-btn dr-btn__orange-gradient">Регистрация</a>-->
<!--                    </div>-->

                    <div class="d-flex align-items-center">
                        <a href="#" class="data-user">
                            <span class="icon"><span class="ic-user ic-white"></span></span>
                            <span class="data-user__title dr-text__small c-light"><b>Username</b></span>

                            <span class="data-user__status bage bg-accent-gradient__lighten">Base</span>
                            <!--                        <span class="data-user__status bage bg-orange-darken">pro</span>-->

                            <!-- изменение статуса:
                                для Base    - класс bg-accent-gradient__lighten
                                для pro     - класс bg-orange-darken
                            -->
                        </a>
<!--                        <a href="#" class="dr-text__normal fw-bold ml-20">Выйти</a>-->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="content-page">

