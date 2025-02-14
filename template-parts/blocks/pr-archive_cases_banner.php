<?php
$ca_banner = get_field('cases_archive_banner');
?>

<section class="ca_banner">
    <div class="container">
        <div class="ca_banner__wrap">
            <h1 class="heading heading-h1-d heading-h2-m section-title">
                <?php echo $ca_banner['title'] ?? get_the_title(); ?>
            </h1>
            <?php if($ca_banner['text']): ?>
                <div class="body body-big-d section-text">
                    <?php echo $ca_banner['text'] ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($ca_banner['logos'])): ?>
                <div class="ca_banner__wrap__logos">
                    <?php foreach($ca_banner['logos'] as $image): ?>
                        <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($ca_banner['cards'])): ?>
                <div class="ca_banner_cards">
                    <?php foreach($ca_banner['cards'] as $key => $image): ?>
                        <img class="ca_banner_card card-<?= $key ?>" src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
