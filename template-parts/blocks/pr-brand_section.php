<?php $brands_section = get_field('brands_section') ?>

<section class="pr-brands-section brands-section">
    <div class="lg-container">
        <h2 class="section-title">
            <?php echo $brands_section['title']; ?>
        </h2>




        <div class="filter-main-block">
            <div class="custom-select-item">
                <div class="select-btn">
                    <span class="current-value">All</span>
                    <div class="arrow-item"><i class="fa fa-angle-down arrow-icon" aria-hidden="true"></i></div>
                </div>
                <div class="values-content-container">
                    <div>
                        <div class="values-container">
                            <button class="category-btn active" type="button" data-category-btn="All">All</button>
                            <button class="category-btn" type="button" data-category-btn="Health and Wellness">Health and Wellness</button>
                            <button class="category-btn" type="button" data-category-btn="Beauty">Beauty</button>
                            <button class="category-btn" type="button" data-category-btn="Home and Kitchen">Home and Kitchen</button>
                            <!-- <button class="category-btn" type="button" data-category-btn="Fashion and Apparel">Fashion and Apparel</button>-->
                            <button class="category-btn" type="button" data-category-btn="Outdoor and Sports">Outdoor and Sports</button>
                            <button class="category-btn" type="button" data-category-btn="Pet Supplies">Pet Supplies</button>
                            <button class="category-btn" type="button" data-category-btn="Food and Beverage">Food and Beverage</button>
                            <button class="category-btn" type="button" data-category-btn="Supplies and Equipment">Supplies and Equipment</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desktop-filter-items-container">

            </div>
            <div class="mobile-filter-items-container">
                <div class="swiper mob-filter-swiper">

                    <div class="swiper-wrapper">

                    </div>




                </div>
                <div class="mob-filter-swiper-arrows-container">
                    <div class="mob-filter-swiper-prev-btn"><i class="fa fa-angle-left arrow-icon" aria-hidden="true"></i></div>
                    <div class="mob-filter-swiper-next-btn"><i class="fa fa-angle-right arrow-icon" aria-hidden="true"></i></div>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    const brandItems = [
        <?php foreach(  $brands_section['cards'] as $card ): ?>
        {
            category: "<?php echo $card['category'] ?>",
            imgsrc: "<?php echo esc_url($card['image']['url']) ?>",
            link: "<?php echo $card['link'] ?>",
        },
        <?php endforeach; ?>
    ];
</script>
