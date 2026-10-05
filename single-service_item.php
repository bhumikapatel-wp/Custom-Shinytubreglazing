<?php
get_header();
?>

<!-- SERVICE HERO -->
<section class="service-detail-hero">

    <div class="theme-container">

        <div class="service-detail-hero-content">

            <h1>
                <?php the_title(); ?>
            </h1>

        </div>

    </div>

</section>


<section class="service-intro-section">

    <div class="theme-container">

        <div class="service-intro-grid">
<?php if (!empty(get_field('service_intro_image'))) : ?>
            <!-- IMAGE -->
            <div class="service-intro-image">

                <?php
                $service_image = get_field('service_intro_image');

                if ($service_image) :
                ?>

                    <img
                        src="<?php echo esc_url($service_image); ?>"
                        alt="<?php echo esc_attr(get_the_title()); ?>"
                    >

                <?php endif; ?>

            </div>

<?php endif; ?>
            <!-- CONTENT -->
            <div class="service-intro-content">

                <?php
                $heading = get_field('service_intro_heading');
                $description = get_field('service_intro_description');
                $button_text = get_field('service_intro_button_text');
                $button_url = get_field('service_intro_button_url');
                ?>


                <?php if ($heading) : ?>

                    <h2>
                        <?php echo esc_html($heading); ?>
                    </h2>

                <?php endif; ?>


                <?php if ($description) : ?>

                    <div class="service-description">

                        <?php echo wp_kses_post($description); ?>

                    </div>

                <?php endif; ?>


                <?php if ($button_text && $button_url) : ?>

                    <a
                        href="<?php echo esc_url($button_url); ?>"
                        class="service-detail-btn"
                    >
                        <?php echo esc_html($button_text); ?>
                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>
<?php
$before_after_section = get_field('before_after_section');

if ($before_after_section) {
    echo do_shortcode($before_after_section);
}
?>

<!-- BENEFITS SECTION -->
 <?php if (!empty(get_field('benefits_heading'))) : ?>
<section class="benefits-section">

    <div class="theme-container">

        <?php
        $benefits_heading = get_field('benefits_heading');
        ?>

        <?php if (!empty($benefits_heading)) { ?>

            <h2 class="custom-main-text">
                <?php echo esc_html($benefits_heading); ?>
            </h2>

        <?php } ?>


        <div class="benefits-grid">

            <?php for ($i = 1; $i <= 5; $i++) : ?>

                <?php
                $icon  = get_field('benefit_' . $i . '_icon');
                $title = get_field('benefit_' . $i . '_title');
                ?>

                <?php if ($icon || $title) : ?>

                    <div class="benefit-item">

                        <?php if ($icon) : ?>

                            <div class="benefit-icon">

                                <img
                                    src="<?php echo esc_url($icon); ?>"
                                    alt="<?php echo esc_attr($title); ?>"
                                >

                            </div>

                        <?php endif; ?>


                        <?php if ($title) : ?>

                            <div class="benefit-title">

                                <?php echo esc_html($title); ?>

                            </div>

                        <?php endif; ?>

                    </div>

                <?php endif; ?>

            <?php endfor; ?>

        </div>


        <?php
        $button_text = get_field('benefits_button_text');
        $button_url  = get_field('benefits_button_url');
        ?>

        <?php if ($button_text && $button_url) : ?>

            <div class="benefits-button-wrap">

                <a
                    href="<?php echo esc_url($button_url); ?>"
                    class="service-detail-btn"
                >
                    <?php echo esc_html($button_text); ?>
                </a>

            </div>

        <?php endif; ?>

    </div>

</section>
<?php endif; ?>

<!-- ALTERNATIVE TO REPLACEMENT SECTION -->
<section class="alternative-section">

    <div class="theme-container">

        <?php
        $alternative_heading = get_field('alternative_heading');
        $alternative_description = get_field('alternative_description');
        $alternative_image_1 = get_field('alternative_image_1');
        $alternative_image_2 = get_field('alternative_image_2');
        $alternative_button_text = get_field('alternative_button_text');
        $alternative_button_url = get_field('alternative_button_url');
        ?>

        <div class="alternative-grid">

            <!-- LEFT CONTENT -->
            <div class="alternative-content">

                <?php if ($alternative_heading) : ?>

                    <h2>
                        <?php echo esc_html($alternative_heading); ?>
                    </h2>

                <?php endif; ?>


                <?php if ($alternative_description) : ?>

                    <div class="alternative-description">

                        <?php echo wp_kses_post($alternative_description); ?>

                    </div>

                <?php endif; ?>


                <?php if ($alternative_button_text && $alternative_button_url) : ?>

                    <a
                        href="<?php echo esc_url($alternative_button_url); ?>"
                        class="service-detail-btn"
                    >
                        <?php echo esc_html($alternative_button_text); ?>
                    </a>

                <?php endif; ?>

            </div>


            <!-- RIGHT IMAGES -->
            <div class="alternative-images">

                <?php if ($alternative_image_1) : ?>

                    <div class="alternative-image">

                        <img
                            src="<?php echo esc_url($alternative_image_1); ?>"
                            alt="<?php echo esc_attr($alternative_heading); ?>"
                        >

                    </div>

                <?php endif; ?>


                <!-- <?php if ($alternative_image_2) : ?>

                    <div class="alternative-image">

                        <img
                            src="<?php echo esc_url($alternative_image_2); ?>"
                            alt="<?php echo esc_attr($alternative_heading); ?>"
                        >

                    </div>

                <?php endif; ?> -->

            </div>

        </div>

    </div>

</section>
<?php if (!empty(get_field('testimonial_title'))) : ?>
<section class="google-reviews-section">

    <div class="theme-container">
      <?php
       

$testimonial_title = get_field('testimonial_title');
$testimonial_info  = get_field('testimonial_info');

if ($testimonial_title) :
?>
    <h2 class="custom-main-text">
        <?php echo esc_html($testimonial_title); ?>
    </h2>
<?php endif; ?>

<?php if ($testimonial_info) : ?>
    <div class="testimonial-info">
        <?php echo do_shortcode($testimonial_info); ?>
    </div>
<?php endif; ?>


    </div>

</section>
<?php endif; ?>

<section class="faq-contact-section">

    <div class="theme-container">

        <div class="faq-contact-grid">

            <!-- FAQ LEFT -->
            <div class="faq-wrapper">

                <?php
                $faq_heading = get_field('faq_heading');
                ?>

                <?php if ($faq_heading) : ?>

                    <h2 class="custom-main-text">
                        <?php echo esc_html($faq_heading); ?>
                    </h2>

                <?php endif; ?>


                <div class="faq-list">

                    <?php for ($i = 1; $i <= 6; $i++) : ?>

                        <?php
                        $question = get_field('faq_question_' . $i);
                        $answer   = get_field('faq_answer_' . $i);
                        ?>

                        <?php if ($question) : ?>

                            <div class="faq-item">

                                <button
                                    class="faq-question"
                                    type="button"
                                >

                                    <span>
                                        <?php echo esc_html($question); ?>
                                    </span>

                                    <span class="faq-icon">+</span>

                                </button>


                                <?php if ($answer) : ?>

                                    <div class="faq-answer">
                                        <?php echo wp_kses_post($answer); ?>
                                    </div>

                                <?php endif; ?>

                            </div>

                        <?php endif; ?>

                    <?php endfor; ?>

                </div>

            </div>

<?php if (!empty(get_field('contact_title'))) : ?>
            <!-- CONTACT FORM RIGHT -->
            <div class="faq-contact-form">


                 <?php
    $contact_title = get_field('contact_title');
    $contact_form = get_field('contact_form');
    ?>

   <?php
$contact_form = get_field('contact_form');

if (!empty($contact_form)) :
?>

    <div class="contact-form">
        <?php echo do_shortcode($contact_form); ?>
    </div>

<?php endif; ?>
            </div>
            <?php endif; ?>

        </div>

    </div>

</section>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function (item) {

        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        if (!question || !answer) {
            return;
        }

        question.addEventListener('click', function () {

            const isOpen = item.classList.contains('active');

            // Close all other FAQs
            faqItems.forEach(function (otherItem) {

                if (otherItem !== item) {

                    otherItem.classList.remove('active');

                    const otherAnswer =
                        otherItem.querySelector('.faq-answer');

                    if (otherAnswer) {
                        otherAnswer.style.maxHeight = '0px';
                    }
                }
            });

            // Open current FAQ
            if (!isOpen) {

                item.classList.add('active');

                // Give browser a moment to calculate full height
                requestAnimationFrame(function () {
                    answer.style.maxHeight =
                        answer.scrollHeight + 'px';
                });

            } else {

                item.classList.remove('active');
                answer.style.maxHeight = '0px';

            }

        });

    });

});
</script>

<?php
get_footer();
?>