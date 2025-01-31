<?php
$cta = get_field('cta');
?>

<section class="cta">
    <div class="block-container">
        <div class="cta__wrap">
            <?php if (!empty($cta['background'])): ?>
                <img src="<?php echo esc_url($cta['background']['url']) ?>"
                     alt="<?php echo esc_attr($cta['background']['alt']) ?>">
            <?php endif; ?>
            <h2 class="heading heading-h2-d heading-h2-m section_title">
                <?php echo $cta['title'] ?? __('Title', 'profit_whales'); ?>
            </h2>
            <?php if(!empty($cta['file']) && !$cta['use_link_instead_of_file_']): ?>
                <a href="<?php echo esc_url($cta['file']['url']) ?>" class="button primary" download>
                    <?php echo __('Download for free', 'profit_whales') ?>
                </a>
            <?php endif; ?>

            <?php if(!empty($cta['url']) && $cta['use_link_instead_of_file_']): ?>
                <a href="<?php echo esc_url($cta['url']) ?>" class="button primary">
                    <?php echo $cta['link_text'] ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
