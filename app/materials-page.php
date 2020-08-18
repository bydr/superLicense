<?php require_once('head.php'); ?>
<?php require_once('header-auth.php'); ?>
<?php require_once('params.php'); ?>
<?php $dataImgFooter = "img/_src/frame-5.svg"; ?>

<script>
    document.body.classList.add('bg-accent__super-lightest');
</script>

<section class="section section-materials">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h1 class="headers-h1 page-title text-center c-accent__darken">Лицензионное дело</h1>
                <div class="material-list">
                    <div class="row">
                        <?php foreach($data['materials'] as $item) : ?>
                        <div class="col-12 col-md-6 col-lg-<?=$item['block-size']*4; ?>">
                            <div
                                    class="panel
                                    panel-column
                                    justify-content-between
                                    material-item
                                    material-item__<?=$item['status'] != "" ? $item['status'] : 'normal'; ?>">

                                <span class="data-user__status bage
                                <?=$item['status'] == "pro" ? 'bg-orange-darken' : 'bg-accent-gradient__lighten'; ?>"><?=$item['status'] ?></span>

                                <div class="panel-inner">
                                    <p class="headers-h3 material-item__title">
                                        <?=$item['title'] ?>
                                    </p>

                                    <p class="dr-text__small material-item__description">
                                        <?=$item['description'] ?>
                                    </p>
                                </div>
                                <div class="w-100">
                                    <a href="#" class="dr-btn dr-btn__orange-gradient ml-0"><?=$item['cta-text'] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
</section>

<?php require_once('foot.php'); ?>
<?php require_once('footer.php'); ?>
