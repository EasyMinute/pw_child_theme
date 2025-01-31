<?php
$process_block = get_field('process_block');
?>

<section class="process_block">
    <div class="block-container">
        <?php if($process_block['title']): ?>
            <h2 class="heading heading-h2-d heading-h2-m section-title">
                <?= $process_block['title'] ?>
            </h2>
        <?php endif; ?>

        <?php foreach ($process_block['process'] as $item): ?>
            <div class="process_block__item">
                <?php if(!empty($item['title'])): ?>
                    <h3 class="heading heading-h4-d heading-h3-m block-title">
                        <?= $item['title'] ?>
                    </h3>
                <?php endif; ?>

                <?php if(!empty($item['text'])): ?>
                <div class="body body-20 process_block__item__description">
                    <?= $item['text'] ?>
                </div>
                <?php endif; ?>

                <?php if(!empty($item['image'])): ?>
                    <img src="<?= esc_url($item['image']['url']) ?>" alt="<?= esc_attr($item['image']['alt']) ?>">
                <?php endif; ?>

                <?php if(!empty($item['caption'])): ?>
                    <div class="process_block__item__caption purple-caption">
                        <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.4974 28C4.9974 30.1 4.16406 36.3334 4.16406 36.3334C4.16406 36.3334 10.3974 35.5 12.4974 33C13.6807 31.6 13.6641 29.45 12.3474 28.15C11.6996 27.5317 10.8462 27.1744 9.95111 27.1468C9.05599 27.1191 8.18219 27.4229 7.4974 28Z" stroke="#6D6DF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20 25.5001L15 20.5001C15.8869 18.1991 17.0037 15.9935 18.3333 13.9168C20.2753 10.8117 22.9794 8.25517 26.1883 6.49024C29.3973 4.72531 33.0044 3.81071 36.6667 3.83342C36.6667 8.36675 35.3667 16.3334 26.6667 22.1668C24.5615 23.498 22.3281 24.6147 20 25.5001Z" stroke="#6D6DF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.9974 20.5001H6.66406C6.66406 20.5001 7.58073 15.4501 9.9974 13.8334C12.6974 12.0334 18.3307 13.8334 18.3307 13.8334" stroke="#6D6DF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20 25.5001V33.8334C20 33.8334 25.05 32.9167 26.6667 30.5001C28.4667 27.8001 26.6667 22.1667 26.6667 22.1667" stroke="#6D6DF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div class="body body-20">
                            <?= $item['caption'] ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
