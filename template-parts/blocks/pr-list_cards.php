<?php
$list_cards = get_field('list_cards');
?>

<section class="list_cards">
    <div class="block-container">
        <h2 class="heading heading-h2-d heading-h2-m section_title">
            <?php echo $list_cards['title'] ?? __('Title', 'profit_whales'); ?>
        </h2>
        <p class="body-big-d section_text">
            <?php echo $list_cards['text'] ?? __('text', 'profit_whales'); ?>
        </p>
        <?php if($list_cards['cards']): ?>
            <div class="list_cards__wrap">
                <?php foreach($list_cards['cards'] as $card): ?>
                    <div class="list_card">
                        <?php if(!empty($card['icon'])): ?>
                            <img src="<?php echo esc_url($card['icon']['url']) ?>"
                                 alt="<?php echo esc_attr($card['icon']['alt']) ?>">
                        <?php endif; ?>
                        <h3 class="heading-h4-d block_title">
                            <?php echo $card['title'] ?>
                        </h3>
                        <div class="list_card__items">
                            <?php echo $card['list'] ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
