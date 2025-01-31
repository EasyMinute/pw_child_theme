<?php
$whats_next = get_field('whats_next');
?>

<section class="whats_next">
    <div class="block-container">
        <?php if($whats_next['title']): ?>
            <h2 class="heading heading-h2-d heading-h2-m">
                <?= $whats_next['title'] ?>
            </h2>
        <?php endif; ?>
        <div class="whats_next__wrap">
            <?php foreach ($whats_next['list'] as $item) : ?>
                <div class="whats_next__wrap__card">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36.3337 16.6666C37.0949 20.4021 36.5524 24.2857 34.7968 27.6696C33.0412 31.0536 30.1785 33.7334 26.6862 35.2622C23.1939 36.791 19.2831 37.0763 15.6059 36.0706C11.9287 35.0649 8.70735 32.829 6.47916 29.7357C4.25097 26.6424 3.15057 22.8787 3.36147 19.0723C3.57238 15.2659 5.08183 11.6468 7.63812 8.8186C10.1944 5.9904 13.643 4.12403 17.4088 3.53074C21.1746 2.93744 25.03 3.65308 28.332 5.55832" stroke="#222222" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 18.3332L20 23.3332L36.6667 6.6665" stroke="#222222" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="body body-20 block-text">
                        <?= $item['text'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if(!empty($whats_next['caption'])): ?>
            <div class="whats_next__caption purple-caption">
                <div class="body body-20 block-text">
                    <?= $whats_next['caption'] ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
