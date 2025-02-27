<?php
$results_block = get_field('results_block');
?>

<section class="results_block">
    <div class="block-container">
        <h2 class="heading heading-h2-d heading-h2-m section-title ">
            <?= $results_block['title']  ?>
        </h2>

        <?php if(!empty($results_block['cards'])): ?>
            <div class="results_block__wrap <?php echo $results_block['cards_style'] ?>">
                <?php foreach ($results_block['cards']  as $key => $card) :
                    $card_text = $card['text'];
                    $color = $card['color'] ?? '#6D6DF6';
                    $icon_url = !empty($card['icon']) ? esc_url($card['icon']['url']) : '';
                    $icon_attr = !empty($card['icon']) ? esc_attr($card['icon']['alt']) : '';
                    ?>
                    <div class="stat_card" style="border-color: <?= $color; ?>"  id="stat_card-<?= $key ?>">
                        <img src="<?= $icon_url ?>" alt="<?= $icon_attr ?>">

                        <div class=" heading heading-h3-d heading-h3-m">
                            <?php echo $card_text ?>
                        </div>
                        <style>
                            #stat_card-<?= $key ?>  strong{
                                color: <?= $color; ?>;
                            }
                        </style>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if(!empty($results_block['caption'])): ?>
            <div class="results_block__caption purple-caption">
                <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.4974 28C4.9974 30.1 4.16406 36.3334 4.16406 36.3334C4.16406 36.3334 10.3974 35.5 12.4974 33C13.6807 31.6 13.6641 29.45 12.3474 28.15C11.6996 27.5317 10.8462 27.1744 9.95111 27.1468C9.05599 27.1191 8.18219 27.4229 7.4974 28Z" stroke="#6D6DF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20 25.5001L15 20.5001C15.8869 18.1991 17.0037 15.9935 18.3333 13.9168C20.2753 10.8117 22.9794 8.25517 26.1883 6.49024C29.3973 4.72531 33.0044 3.81071 36.6667 3.83342C36.6667 8.36675 35.3667 16.3334 26.6667 22.1668C24.5615 23.498 22.3281 24.6147 20 25.5001Z" stroke="#6D6DF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M14.9974 20.5001H6.66406C6.66406 20.5001 7.58073 15.4501 9.9974 13.8334C12.6974 12.0334 18.3307 13.8334 18.3307 13.8334" stroke="#6D6DF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20 25.5001V33.8334C20 33.8334 25.05 32.9167 26.6667 30.5001C28.4667 27.8001 26.6667 22.1667 26.6667 22.1667" stroke="#6D6DF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <div class="body body-20">
                    <?= $results_block['caption'] ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!empty($results_block['firecaption'])): ?>
            <div class="results_block__caption fire-caption">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.1693 24.1667C15.2743 24.1667 16.3341 23.7277 17.1155 22.9463C17.897 22.1649 18.3359 21.1051 18.3359 20C18.3359 17.7 17.5026 16.6667 16.6693 15C14.8826 11.4283 16.2959 8.24333 20.0026 5C20.8359 9.16667 23.3359 13.1667 26.6693 15.8333C30.0026 18.5 31.6693 21.6667 31.6693 25C31.6693 26.5321 31.3675 28.0492 30.7812 29.4646C30.1949 30.8801 29.3355 32.1662 28.2522 33.2496C27.1688 34.3329 25.8827 35.1923 24.4672 35.7786C23.0518 36.3649 21.5347 36.6667 20.0026 36.6667C18.4705 36.6667 16.9534 36.3649 15.538 35.7786C14.1225 35.1923 12.8364 34.3329 11.753 33.2496C10.6697 32.1662 9.81031 30.8801 9.22401 29.4646C8.6377 28.0492 8.33594 26.5321 8.33594 25C8.33594 23.0783 9.0576 21.1767 10.0026 20C10.0026 21.1051 10.4416 22.1649 11.223 22.9463C12.0044 23.7277 13.0642 24.1667 14.1693 24.1667Z" stroke="#FEA800" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <div class="heading heading-h3-d">
                    <?= $results_block['firecaption'] ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!empty($results_block['image'])): ?>
            <img src="<?= esc_url($results_block['image']['url']) ?>"
                  alt="<?= esc_attr($results_block['image']['alt']) ?>" class="results_block__image">
        <?php endif; ?>
    </div>
</section>