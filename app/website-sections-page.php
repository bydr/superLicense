<?php require_once('head.php'); ?>
<?php require_once('header-auth-user.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-7.svg"; ?>

<script>
    document.body.classList.add('bg-accent-gradient__lighten');
</script>

<section class="section section-website-sections">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="headers-h1 text-center page-title">Разделы сайта</h1>
                <div class="website-sections">
                    <div class="row">
                        <?php foreach($data['sections'] as $item) : ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="panel panel-column panel-wicon panel-wicon__bigger panel-wicon__center website-sections__item justify-content-between">
                                <div class="panel-inner">
                                    <div class="panel-icon__wrapper">
                                        <div class="panel-icon">
                                            <div class="<?=$item['icon']; ?>"></div>
                                        </div>
                                    </div>
                                    <div class="website-sections__item-content">
                                        <p class="headers-h2 c-accent website-sections__title">
                                            <?=$item['title']; ?>
                                        </p>
                                        <p class="headers-h1 c-accent__darken website-sections__price"><?=$item['price']; ?></p>
                                        <p class="dr-text__normal c-dark website-sections__shortDescr">
                                            <?=$item['shortDescr']; ?>
                                        </p>
                                        <p class="dr-text__normal c-dark website-sections__fullDescr">
                                            <?=$item['fullDescr']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="w-100 mt-30">
                                    <a href="#" class="dr-btn dr-btn__orange-gradient">Перейти</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>
<?php require_once('foot.php'); ?>
