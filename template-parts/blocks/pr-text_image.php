<?php
$text_image = get_field('text_image');
$title = $text_image['title'] ?? get_the_title();
$text = $text_image['text'];
$image_url = !empty($text_image['image']) ? esc_url($text_image['image']['url']) : '';
$image_alt = !empty($text_image['image']) ? esc_attr($text_image['image']['alt']) : '';
?>

<section class="text_image">
    <div class="block-container">
        <div class="text_image__wrap">
            <div class="text_image__wrap__texts">
                <h2 class="heading heading-h2-d heading-h2-m section-title">
                    <?= $title ?>
                </h2>
                <div class="body-20 section-text">
                    <?= $text ?>
                </div>
            </div>
            <img src="<?= $image_url ?>" alt="<?= $image_alt ?>" class="text_image__wrap__image">
        </div>
    </div>
</section>
