<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "images/_src/frame-14.svg"; ?>

<script>
    document.body.classList.add('bg-accent__lightest');
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector('.footer-img').classList.add('review-form-img');
    });
</script>

<section class="section section-review-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title headers-h1 text-center c-accent__darken">Оставить отзыв</h1>
                <div class="max-w-650">
                    <form action="/"
                          class="dr-form">
                        <div class="form-group">
                                <textarea class="dr-form-control form-control min-h-190"
                                          name="message"
                                          required
                                          placeholder="Ваш отзыв" ></textarea>
                        </div>
                        <p class="dr-text__small c-accent text-center">
                            Отправляя сообщение, вы соглашаетесь с <a href="#" class="c-accent dr-text__small dr-text__underline">Условиями обслуживания</a> и <a href="#" class="c-accent dr-text__small dr-text__underline">Политикой конфиденциальности</a>.
                        </p>
                        <div class="form-group text-center w-100 d-flex align-items-center">
                            <button type="submit" class="dr-btn dr-btn__orange-gradient w-100 max-w-300">отправить</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
