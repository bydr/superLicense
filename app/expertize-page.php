<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "images/_src/frame-11.svg"; ?>

<section class="section section-expertize">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="headers-h1 page-title c-accent__darker">Экспертиза образовательных документов</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="headers-h3 c-accent">С помощью сервиса «Экспертиза документов» вы сможете получить квалифицированную экспертизу, не выходя из дома.</p>
                <br>
                <p class="c-accent__darker mb-80">
                    <span class="headers-h1">500 ₽</span> <span class="dr-text__normal"><b>за 1 файл</b></span>
                </p>

                <div class="fl_upld">
                    <label>
                        <span class="dr-btn dr-btn__big dr-btn__outline c-orange w-100 max-w-400 ml-0 mb-0">
                          <input class="fl_default" type="file" name="file" accept=".jpg, .jpeg, .png, .gif, .pdf, .doc, .docx, .odt" multiple="">
                          <span>
                            <span>Загрузить еще</span>
                          </span>
                        </span>
                    </label>
                    <div class="fl_nm"></div>
                </div>

                <a href="expertize-payment.php" class="dr-btn dr-btn__big dr-btn__orange-gradient w-100 max-w-400 ml-0 mb-30">отправить на экспертизу</a>
                <p class="dr-text__small c-accent__darker w-100 max-w-400 ml-0">Сервис доступен только зарегистрированным пользователям. Для того, чтобы воспользоваться услугой, авторизуйтесь или зарегистрируйтесь.</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="section-image">
                    <img src="images/_src/frame-12.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>

