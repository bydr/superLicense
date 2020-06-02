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
                <div class="modal">
                    <div class="modal-content bg-accent">
                        <button class="modal-close dr-btn dr-btn__icon">
                            <span class="ic-x"></span>
                        </button>
                        <p class="modal-title headers-h2">Регистрация</p>
                        <form action="/"
                              class="dr-form modal-content__wrapper">
                            <div class="form-group">
                                <input type="text"
                                       class="dr-form-control form-control"
                                        placeholder="Фамилия Имя Отчество">
                            </div>
                            <div class="form-group">
                                <input type="tel"
                                       class="dr-form-control form-control"
                                        placeholder="Телефон">
                            </div>
                            <div class="form-group">
                                <input type="email"
                                       class="dr-form-control form-control"
                                        placeholder="Почта">
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       class="dr-form-control form-control"
                                placeholder="ИП или название компании">
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       class="dr-form-control form-control"
                                        placeholder="Пароль">
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       class="dr-form-control form-control"
                                       placeholder="Повторите пароль"
                                >
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="dr-btn dr-btn__orange-gradient">Создать аккаунт</button>
                            </div>
                            <p class="dr-text__small c-light text-center">
                                Регистрируясь, вы соглашаетесь с <a href="#" class="dr-text__small dr-text__underline">Условиями обслуживания</a> и <a href="#" class="dr-text__small dr-text__underline">Политикой конфиденциальности</a>.
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
