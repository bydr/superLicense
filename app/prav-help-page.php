<?php require_once('head.php'); ?>
<?php require_once('header-auth-user.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = ""; ?>

<script>
    document.body.classList.add('bg-accent-gradient__lighten');
</script>

<section class="section section-prav-help">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="headers-h1 page-title text-center w-100">Правовая помощь</h1>
                <div class="modal">
                    <div class="modal-content bg-accent__lighter max-w-1000 pb-90">
                        <button class="modal-close dr-btn dr-btn__icon">
                            <span class="ic-x"></span>
                        </button>
                        <form action="/"
                              class="dr-form modal-content__wrapper max-w-650 mt-30">
                            <div class="form-group">
                                <input type="text"
                                       name="name"
                                       class="dr-form-control form-control"
                                        placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       name="email-phone"
                                       class="dr-form-control form-control"
                                        placeholder="Почта или телефон" required>
                            </div>
                            <div class="form-group">
                                <textarea class="dr-form-control form-control min-h-190"
                                          placeholder="Ваше сообщение"  required></textarea>
                            </div>
                            <p class="dr-text__small c-light text-center">
                                Отправляя сообщение, вы соглашаетесь с <a href="#" class="dr-text__small dr-text__underline">Условиями обслуживания</a> и <a href="#" class="dr-text__small dr-text__underline">Политикой конфиденциальности.</a></p>
                            <div class="form-group text-center">
                                <button type="submit" class="dr-btn dr-btn__orange-gradient w-100 max-w-300">отправить</button>
                            </div>
                        </form>

                    </div>
                </div>
                <img src="img/_src/frame-13.svg" class="prav-help-img" alt="">
            </div>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
