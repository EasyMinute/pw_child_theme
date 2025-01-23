<?php
$footer = get_field('footer', 'options');
?>

<footer class="pw_footer">
    <div class="block-container">
        <div class="pw_footer__wrap">
            <div class="pw_footer__col main">
                <?php if (!is_front_page()): ?>
                    <a href="<?php echo get_home_url()?>" class="pw_footer-logo">
                        <img src="<?php echo esc_url($footer['logo']['url']) ?>" alt="<?php echo esc_attr($footer['logo']['alt']) ?>">
                    </a>
                <?php else: ?>
                    <div class="pw_footer-logo">
                        <img src="<?php echo esc_url($footer['logo']['url']) ?>" alt="<?php echo esc_attr($footer['logo']['alt']) ?>">
                    </div>
                <?php endif; ?>
                <?php if (!empty($footer['about_us_text'])): ?>
                    <h3 class="footer_title body body-big-d">
                        <?php echo __('About Us', 'profit_whales'); ?>
                    </h3>
                    <p class="body body-small-d">
                        <?php echo $footer['about_us_text'] ?>
                    </p>
                <?php endif; ?>

                <?php if (!empty($footer['sponsored_url']) && !empty($footer['sponsored_logo'])): ?>
                    <h3 class="footer_title body body-big-d">
                        <?php echo __('Our Software', 'profit_whales'); ?>
                    </h3>
                    <a href="<?php echo $footer['sponsored_url']?>" class="pw_footer-sponsored">
                        <img src="<?php echo esc_url($footer['sponsored_logo']['url']) ?>" alt="<?php echo esc_attr($footer['sponsored_logo']['alt']) ?>">
                    </a>
                <?php endif; ?>
            </div>
            <div class="pw_footer__col">
                <h3 class="footer_title body body-big-d">
                    <?php echo __('Our Services', 'profit_whales'); ?>
                </h3>
                <?php wp_nav_menu(array(
                        'theme_location' => 'footer_col_1',
                        'container' => 'nav',
                    )
                ) ?>
            </div>
            <div class="pw_footer__col">
                <h3 class="footer_title body body-big-d">
                    <?php echo __('Blog', 'profit_whales'); ?>
                </h3>
                <?php wp_nav_menu(array(
                        'theme_location' => 'footer_col_2',
                        'container' => 'nav',
                    )
                ) ?>
            </div>
            <div class="pw_footer__col contact">
                <h3 class="footer_title body body-big-d">
                    <?php echo __('Contact us', 'profit_whales'); ?>
                </h3>
                <?php if (!empty($footer['email'])): ?>
                    <a href="mailto:<?php echo $footer['email'] ?>" class="footer_email">
                        <?php echo $footer['email'] ?>
                    </a>
                <?php endif; ?>
                <?php if (!empty($footer['contacts'])): ?>
                    <div class="footer_contacts">
                        <?php echo $footer['contacts'] ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($footer['socials'])): ?>
                    <div class="footer_socials">
                        <?php foreach ($footer['socials'] as $social): ?>
                            <a href="<?php echo $social['link'] ?>">
                                <img src="<?php echo esc_url($social['icon']['url']) ?>"
                                     alt="<?php echo esc_attr($social['icon']['alt']) ?>">
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="pw_footer__legal">
            <p>
                <?= sprintf(__('Profit Whales © %d All Right Reserved', 'profit_whales'), date('Y')) ?>
            </p>
            <?php wp_nav_menu(array(
                    'theme_location' => 'footer_legal',
                    'container' => 'nav',
                )
            ) ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


</body>
</html>