<?php
$stats_cards = get_field('stats_cards');
$title = $stats_cards['title'] ?? get_the_title();
$cards = $stats_cards['cards']
?>

<section class="stats_cards">
    <div class="block-container">
        <h2 class="heading heading-h2-d heading-h2-m section-title">
            <?= $title ?>
        </h2>

        <div class="stats_cards__wrap">
            <?php foreach ($cards as $card) :
                $card_title = $card['title'];
                $card_text = $card['text'];
                $color = $card['color'] ?? '#6D6DF6';
                $icon_url = !empty($card['icon']) ? esc_url($card['icon']['url']) : '';
                $icon_attr = !empty($card['icon']) ? esc_attr($card['icon']['alt']) : '';
            ?>
                <div class="stat_card" style="border-color: <?= $color; ?>" >
                    <div class="stat_card__head">
                        <img src="<?= $icon_url ?>" alt="<?= $icon_attr ?>">
                        <h3 class="heading heading-h3-d heading-h3-m block-title" style="color: <?= $color ?>">
                            <?= $card_title ?>
                        </h3>
                    </div>
                    <p class="block-text body-20">
                        <?php echo $card_text ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>