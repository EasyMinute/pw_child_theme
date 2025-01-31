<?php
$cs_hero = get_field('cs_hero');
?>

<section class="cs_hero">
    <div class="block-container">
        <div class="cs_hero__wrap">
            <h1 class="heading heading-h1-d heading-h1-m section-title">
                <?php echo $cs_hero['title'] ?? get_the_title() ?>
            </h1>
            <?php if(!empty($cs_hero['text'])): ?>
                <p class="body-20 section-text">
                    <?php echo $cs_hero['text'] ?>
                </p>
            <?php endif; ?>
            <?php if (!empty($cs_hero['image'])): ?>
                <img src="<?php echo esc_url($cs_hero['image']['url']) ?>"
                     alt="<?php echo esc_attr($cs_hero['image']['alt']) ?>" class="section-image">

            <?php endif; ?>
        </div>
    </div>
</section>
