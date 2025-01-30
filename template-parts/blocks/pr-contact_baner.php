<?php
$contact_baner = get_field('contact_baner');

?>

<section class="contact_baner">
    <div class="block-container">
        <div class="contact_baner__wrap">
            <div class="contact_baner__wrap__texts">
                <h1 class="heading heading-h3-d heading-h1-m section_title">
                    <?php echo $contact_baner['title'] ?>
                </h1>
                <p class="body body-big-d body-normal-m section_text">
                    <?php echo $contact_baner['text'] ?>
                </p>
                <?php if(!empty($contact_baner['image'])): ?>
                    <img src="<?php echo esc_url($contact_baner['image']['url']) ?>" alt="<?php echo esc_attr($contact_baner['image']['alt']) ?>">
                <?php endif; ?>
            </div>
            <div class="contact_baner__wrap__contact pw-form">
                <h3 class="heading heading-h4-d block_title">
                    <?= get_the_title() ?>
                </h3>
				<!-- Start of Meetings Embed Script -->
					<div class="meetings-iframe-container" data-src="https://meetings.hubspot.com/olexiy-denysenko?embed=true"></div>
					<script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
				  <!-- End of Meetings Embed Script -->
                <?php  //do_shortcode('[contact-form-7 id="2e4a10b" title="Contact form 1"]') ?>
            </div>
        </div>
        <?php if(!empty($contact_baner['redirect_link']) && false): ?>
            <input type="hidden" value="<?php echo $contact_baner['redirect_link'] ?>" id="contact_redirect_url">
        <?php endif; ?>
    </div>
</section>
