<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'cases',
    'posts_per_page' => 9,
    'paged'          => $paged,
);

$cases_query = new WP_Query($args);
?>


<section class="cases_list">
    <div class="container">
        <?php if ($cases_query->have_posts()) : ?>

            <div class="cases_list__wrap">
                <?php while ($cases_query->have_posts()) : $cases_query->the_post(); ?>
                    <?php $options = get_field('cases_options', get_the_ID()) ?>

                    <article id="post-<?php the_ID(); ?>" class="case_card">
                        <div class="case_card__texts">
                            <h3 class="heading heading-h3-d heading-h3-m block-title">
                                <a href="<?= get_the_permalink() ?>">
                                    <?php echo get_the_title() ?>
                                </a>
                            </h3>
                            <div class="case_card__stats">
                                <?php if ($options['net_profit']): ?>
                                    <div class="stat">
                                        <p class="heading heading-h4-d">
                                            <?= $options['net_profit'] ?>
                                        </p>
                                        <p class="body">
                                            <?= __('Net Profit', 'profit_whales') ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($options['organic_sales']): ?>
                                    <div class="stat">
                                        <p class="heading heading-h4-d">
                                            <?= $options['organic_sales'] ?>
                                        </p>
                                        <p class="body">
                                            <?= __('Organic Sales', 'profit_whales') ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <a href="<?= get_the_permalink() ?>" class="case_card__link">
                                <?= __('Read the case study', 'profit_whales') ?>
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#6D6DF6"/>
                                    <path d="M17.8412 14.4083C17.7631 14.4858 17.7011 14.578 17.6588 14.6795C17.6165 14.7811 17.5947 14.89 17.5947 15C17.5947 15.11 17.6165 15.2189 17.6588 15.3205C17.7011 15.422 17.7631 15.5142 17.8412 15.5917L21.6579 19.4083C21.736 19.4858 21.798 19.578 21.8403 19.6795C21.8826 19.7811 21.9044 19.89 21.9044 20C21.9044 20.11 21.8826 20.2189 21.8403 20.3205C21.798 20.422 21.736 20.5142 21.6579 20.5917L17.8412 24.4083C17.7631 24.4858 17.7011 24.578 17.6588 24.6795C17.6165 24.7811 17.5947 24.89 17.5947 25C17.5947 25.11 17.6165 25.2189 17.6588 25.3205C17.7011 25.422 17.7631 25.5142 17.8412 25.5917C17.9974 25.7469 18.2086 25.834 18.4287 25.834C18.6489 25.834 18.8601 25.7469 19.0162 25.5917L22.8412 21.7667C23.3094 21.2979 23.5724 20.6625 23.5724 20C23.5724 19.3375 23.3094 18.7021 22.8412 18.2333L19.0162 14.4083C18.8601 14.2531 18.6489 14.166 18.4287 14.166C18.2086 14.166 17.9974 14.2531 17.8412 14.4083Z" fill="#222222"/>
                                </svg>
                            </a>
                        </div>
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?= get_the_permalink() ?>" class="case_card__image">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>"
                                     alt="<?php echo esc_attr(get_the_post_thumbnail_caption()) ?>">
                            </a>
                        <?php else:
                            $blocks = parse_blocks(get_the_content());
                            $banner_image = null;
                            foreach ($blocks as $block) {
                                if ($block['blockName'] === 'acf/banner') {
                                    // Try getting 'image' field directly from ACF
                                    $banner_image = get_field('cs_hero', get_the_ID())['image'];

                                    break; // Exit loop once banner block is found
                                }
                            }
                            if (!empty($banner_image)) : ?>
                                <a href="<?= get_the_permalink() ?>" class="case_card__image">
                                    <img src="<?php echo esc_url($banner_image['url']) ?>"
                                         alt="<?php echo esc_attr($banner_image['alt']) ?>">
                                </a>
                            <?php endif;
                        ?>
                        <?php endif; ?>
                    </article>
                <?php endwhile; ?>

                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'total'   => $cases_query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                    ));
                    ?>
                </div>
            </div>

        <?php else : ?>
            <p>No cases found.</p>
        <?php endif; ?>
    </div>
</section>




    <?php wp_reset_postdata(); ?>

