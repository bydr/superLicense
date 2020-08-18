<?php require_once('head.php'); ?>
<?php require_once('header-empty.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-5.svg"; ?>

<script>
    document.body.classList.add('bg-accent-gradient__lighten');
</script>

<section class="section section-auth bg-accent-gradient__lighten">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="modal modal-wpadding">
                    <div class="modal-content bg-accent__darker">
                        <p class="modal-title headers-h2 mt-30">Восстановление пароля</p>
                        <form action="/"
                              class="dr-form modal-content__wrapper">
                            <div class="form-group">
                                <input type="email"
                                       name="email"
                                       class="dr-form-control form-control"
                                        placeholder="Почта">
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="dr-btn dr-btn__orange-gradient w100 max-w-200">Сбросить пароль</button>
                            </div>
                        </form>

                        <p class="dr-text__small text-center c-light">
                            Еще не зарегистрированы? <a href="registration-page.php" class="dr-text__normal c-orange"><b>Зарегистрироваться</b></a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
