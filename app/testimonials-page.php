<?php require_once('head.php'); ?>
<?php require_once('header.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "images/_src/frame-5.svg"; ?>

<section class="section section-reviews bg-overlay">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <p class="headers-h1 page-title text-center">Отзывы наших клиентов</p>
                <div class="review-carousel__wrapper">
                    <div class="review-carousel owl-carousel">
                        <?php foreach ($data['review'] as $item) : ?>
                            <div class="review-item panel bg-light">
                                <div class="review-item__author user-data">
                                    <div class="user-data__header">
                                        <div class="user-data__avatar"
                                             style="background-image: url(<?= $item["avatar"]; ?>)"></div>
                                        <div class="user-data__info">
                                            <p class="headers-h3 c-accent__darken"><?= $item["author"]; ?></p>
                                            <p class="dr-text__small c-accent__darken"><?= $item["company"]; ?></p>
                                            <p class="dr-text__normal c-accent__darker"><?= $item["date"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="quotes c-accent">“</p>
                                <p class="review-item__text c-accent__darker">
                                    <?= $item["text"]; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <p class="c-accent__lightest dr-text__normal review-carousel__pages">1 из 50</p>
                    <div class="text-center mb-100">
                        <a href="#" class="dr-btn dr-btn__orange-gradient w-100 max-w-200">Оставить отзыв</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="readmore">
            <div class="readmore-content">
                <div class="clients-list">
                    <p class="text-center w-100 headers-h1 page-title c-accent__darken">Наши клиенты</p>
                    <div class="row">
                        <?php foreach ($data['clients'] as $item) : ?>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="client-item">
                                    <div class="client-item__header">
                                        <p class="client-item__number c-orange"></p>
                                        <p class="c-accent__darker headers-h4"><?=$item['title']; ?></p>
                                    </div>
                                    <div class="client-item__body">
                                        <p class="c-accent__darker dr-text__normal">
                                            <?=$item['description']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="readmore-overlay"></div>
            </div>
            <div class="readmore-btn__wrapper">
                <a href="#" class="readmore-btn headers-h3 d-flex flex-column align-items-center c-accent__darken">
                    Показать ещё
                    <span class="ic-arrow-down mt-10"></span>
                </a>
            </div>
        </div>

    </div>
</section>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
