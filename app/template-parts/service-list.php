
<div class="service-list">
    <?php foreach($data['services'] as $item) : ?>
        <div class="service-item_wrapper">
            <div class="service-item panel panel-column panel-wicon panel-wicon__left">
                <div class="panel-icon__wrapper">
                    <div class="panel-icon"><span class="<?=$item['icon']; ?>"></span></div>
                </div>
                <div class="service-item__content">
                    <div class="headers-h2 c-accent text-center service-item__title"><?=$item['title']; ?></div>
                    <p class="dr-text__normal service-item__hide_active service-item__descr_short">
                        <?php $MAX_LENGTH_DESCR = 250; ?>
                        <?php if (strlen($item['description']) > $MAX_LENGTH_DESCR) : ?>
                            <?=substr(strip_tags($item['description']), 0, $MAX_LENGTH_DESCR); ?>...
                        <?php else : ?>
                            <?=strip_tags($item['description']); ?>
                        <?php endif ?>
                    </p>
                    <div class="service-item__show_active">
                        <p class="dr-text__normal service-item__descr_full">
                            <?=$item['description']; ?>

                        </p>
                        <div class="d-flex w-100 text-center justify-content-center">
                            <a href="#" class="service-item_btn_cta dr-btn dr-btn__outline c-orange max-w-250">
                                <span class="headers-h3"><?=$item['cta']; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="service-item__toggle text-center">
                    <a href="#" class="dr-btn dr-btn-h40 dr-btn__orange-gradient" btnTextAlternate="<?=$item['btnTxtAlternate']; ?>"><?=$item['btnTxt']; ?></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
