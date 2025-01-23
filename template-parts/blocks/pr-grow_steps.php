<?php
$grow_steps = get_field('grow_steps');
?>

<section class="grow_steps">
    <div class="block-container">
        <h2 class="heading heading-h2-d heading-h2-m section_title">
            <?php echo $grow_steps['title'] ?? __('Title', 'profit_whales'); ?>
        </h2>
        <p class="body-big-d section_text">
            <?php echo $grow_steps['text'] ?? __('text', 'profit_whales'); ?>
        </p>
        <?php if ($grow_steps['steps']): ?>
            <div class="grow_steps__wrap">
                <?php foreach ($grow_steps['steps'] as $key => $step): ?>
                    <div class="grow_step">
                        <div class="grow_step__point">
                            <?php echo sprintf("%02d", $key+1) ?>
                        </div>
                        <div class="grow_step__card">
                            <div class="grow_step__card__texts block_title">
                                <h3 class="heading heading-h4-d">
                                    <?php echo $step['title'] ?>
                                </h3>
                                <p class="body body-normal-d block_text">
                                    <?php echo $step['text'] ?>
                                </p>
                            </div>
                            <div class="grow_step__card__image">
                                <img src="<?php echo esc_url($step['image']['url']) ?>"
                                     alt="<?php echo esc_attr($step['image']['alt']) ?>">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
