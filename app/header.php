<header class="header bg-accent">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <nav class="dr-navbar  navbar navbar-expand-sm d-flex align-items-center justify-content-between w-100">
                    <!-- Brand/logo -->
                    <a class="navbar-brand d-flex align-items-center c-light" href="#">
                        <img src="images/_src/logo.png"
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

                    <div class="btn-group align-items-center btn-group__auth d-flex">
                        <a href="#" id="id-btn__signup" class="dr-btn dr-btn__orange-gradient dr-btn-h40">Вход / Регистрация</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="content-page">


