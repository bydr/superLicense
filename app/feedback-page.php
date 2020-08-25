<?php require_once('head.php'); ?>
<?php require_once('header-empty.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "images/_src/frame-6.svg"; ?>

<script>
    document.body.classList.add('bg-accent-gradient__lighten');
</script>

<section class="section section-auth">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="modal modal-wpadding">
                    <div class="modal-content bg-accent__lighter">
                        <p class="modal-title headers-h2 mt-30">Форма обратной связи</p>
                        <form action="/"
                              class="dr-form modal-content__wrapper">
                            <div class="form-group">
                                <input type="text"
                                       class="dr-form-control form-control"
                                       name="name"
                                       required
                                        placeholder="Ваше имя">
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       class="dr-form-control form-control"
                                       name="phone-or-email"
                                       required
                                        placeholder="Почта или телефон">
                            </div>
                            <div class="form-group">
                                <textarea class="dr-form-control form-control min-h-190"
                                          name="message"
                                          required
                                          placeholder="Ваше сообщение" ></textarea>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-center text-center">
                                <button type="submit" class="dr-btn dr-btn__orange-gradient">отправить</button>
                            </div>
                            <p class="dr-text__small c-light text-center">
                                Регистрируясь, вы соглашаетесь с <a href="#" class="c-light dr-text__small dr-text__underline">Условиями обслуживания</a> и <a href="#" class="c-light dr-text__small dr-text__underline">Политикой конфиденциальности</a>.
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
