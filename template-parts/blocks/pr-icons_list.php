<?php
$icons_list = get_field('icons_list')
?>

<section class="icons_list">
    <div class="block-container">
        <?php if($icons_list['title']): ?>
            <h2 class="heading heading-h2-d heading-h2-m section-title">
                <?= $icons_list['title'] ?>
            </h2>
        <?php endif; ?>
        <div class="icons_list__wrap">
            <?php foreach ($icons_list['list'] as $item) : ?>
                <div class="icons_list__wrap__item">
                    <?php if(!empty($item['icon'])): ?>
                        <img src="<?= esc_url($item['icon']['url']) ?>" alt="<?= esc_attr($item['icon']['alt']) ?>">
                    <?php endif; ?>
                    <div class="block-text body-20">
                        <span class="accent">
                            <?= $item['title'] ?>
                        </span>
                        <?= $item['text'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>