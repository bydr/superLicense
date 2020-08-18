<?php require_once('head.php'); ?>
<?php require_once('header-empty.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-5.svg"; ?>

<script>
    document.body.classList.add('bg-accent-gradient__darken');
</script>

<section class="section section-auth">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="modal modal-wpadding">
                    <div class="modal-content bg-accent">
                        <p class="modal-title headers-h2 mt-30">Регистрация</p>
                        <form action="/"
                              class="dr-form modal-content__wrapper">
                            <div class="form-group">
                                <input type="text"
                                       name="fio"
                                       class="dr-form-control form-control"
                                       required
                                        placeholder="Фамилия Имя Отчество">
                            </div>
                            <div class="form-group">
                                <input type="tel"
                                       name="tel"
                                       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                       class="dr-form-control form-control"
                                       required
                                        placeholder="Телефон">
                            </div>
                            <div class="form-group">
                                <input type="email"
                                       name="email"
                                       class="dr-form-control form-control"
                                       required
                                        placeholder="Почта">
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       name="name-company"
                                       class="dr-form-control form-control"
                                       required
                                placeholder="ИП или название компании">
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       id="id-password"
                                       name="password"
                                       class="dr-form-control form-control"
                                       required
                                       pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                                        placeholder="Пароль">
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       id="id-confirm-password"
                                       name="confirm-password"
                                       class="dr-form-control form-control"
                                       required
                                       pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                                       placeholder="Повторите пароль"
                                >
                                <p class="alert msg-validate" role="alert"></p>
                            </div>
                            <div class="form-group text-center align-items-center">
                                <button type="submit" class="dr-btn dr-btn__orange-gradient">Создать аккаунт</button>
                            </div>

                        </form>
                        <p class="dr-text__small text-center c-light">
                            Уже зарегистрированы?
                            <a href="registration-page.php" class="dr-text__normal c-orange"><b>Авторизуйтесь</b></a>
                        </p>
                    </div>
                </div>
                <p class="dr-text__small c-accent__lightest text-center mt-10 max-w-400">
                    Регистрируясь, вы соглашаетесь с <a href="#" class="dr-text__small dr-text__underline">Условиями обслуживания</a> и <a href="#" class="dr-text__small dr-text__underline">Политикой конфиденциальности</a>.
                </p>
            </div>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
