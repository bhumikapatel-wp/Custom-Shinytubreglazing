<?php
/*
Template Name: Home
*/

get_header();

$hero_image = get_field('hero_image');

if ($hero_image) {

    if (is_array($hero_image)) {
        $hero_image_url = $hero_image['url'];
        $hero_image_alt = $hero_image['alt'];
    } else {
        $hero_image_url = $hero_image;
        $hero_image_alt = get_field('hero_title');
    }

} else {

    $hero_image_url = '';
    $hero_image_alt = '';

}
?>

<main class="home-page">

    <!-- HERO SECTION -->
    <section
        class="hero-section"
        <?php if ($hero_image_url) : ?>
            style="background-image: url('<?php echo esc_url($hero_image_url); ?>');"
        <?php endif; ?>
    >

        <div class="hero-overlay"></div>

        <div class="hero-inner">

            <div class="hero-content">

                <?php if (get_field('hero_title')) : ?>

                    <h1>
                        <?php echo wp_kses_post(get_field('hero_title')); ?>
                    </h1>

                <?php endif; ?>


                <?php if (get_field('hero_description')) : ?>

                    <p>
                        <?php echo esc_html(get_field('hero_description')); ?>
                    </p>

                <?php endif; ?>


                <?php
                $button_text = get_field('button_text');
                $button_url  = get_field('button_link');

                if ($button_text && $button_url) :
                ?>

                    <div class="hero-button-wrap">

                        <a
                            href="<?php echo esc_url($button_link); ?>"
                            class="hero-button"
                        >
                            <?php echo esc_html($button_text); ?>
                        </a>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </section>

  


    <!-- SERVICES WILL COME HERE LATER -->
<section class="">
<?php fetch_our_services(); ?>
</section>

<section class="before-after-section">

    <div class="theme-container">

        <div class="before-after-content">

            <div class="before-after-text">

                <h2>
                    <span>Restore</span> Your Surfaces To Like-New Condition
                </h2>

                <p>
                    Get a big impact without spending a lot. If you've got worn bathroom or kitchen fixtures, we have solutions.
                </p>

                <p>
                    Reglazing is the smart alternative to replacing. Get a factory-finish look in just a few hours.
                </p>

                <p>
                    Our experienced refinishers apply premium glazing compounds for a tough, long-lasting topcoat. Choose from a wide range of colors to get the look you want. Reglazing solves many common problems in older spaces.
                </p>

                <p>
                    In one day, you could have the bathroom or kitchen of your dreams. It's fast, affordable, and eco-friendly.
                </p>

                <a href="#" class="before-after-button">
                    Contact Us
                </a>

            </div>

            <div class="before-after-right">

                <?php before_after_fun(); ?>

            </div>

        </div>

    </div>

</section>

<section class="google-reviews-section">

    <div class="theme-container">

        <h2 class="custom-main-text">
            See Why Our Customers <span>Love Us</span>
        </h2>

        <?php
        echo do_shortcode('[trustindex no-registration=google]');
        ?>

    </div>

</section>

<section class="bathroom-solutions-section">

    <div class="theme-container">

        <div class="bathroom-solutions-content">

            <!-- LEFT IMAGES -->
            <div class="bathroom-solutions-images">

                <div class="bathroom-image image-one">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/reglazing-solution.webp"
                        alt="Bathroom Reglazing"
                    >
                </div>

                <!-- <div class="bathroom-image image-two">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/bathroom-2.webp"
                        alt="Bathroom Refinishing"
                    >
                </div> -->

            </div>


            <!-- RIGHT CONTENT -->
            <div class="bathroom-solutions-text">

                <h2>
                    <span>Reglazing</span> Solutions For Your Entire Bathroom
                </h2>

                <p>
                    The perfect solution when you have a couple of things that need resurfacing. How will the rest of your bathroom look next to your beautifully refinished shower + tub combo?
                </p>

                <p>
                    Worn surfaces look a little dirty, no matter how hard you scrub. Refinishing gives you a spotless finish that's easier to clean. Reglaze old sinks, bathroom wall tiles, and cabinets in one easy process. If you're already thinking about resurfacing more than just a tub, it doesn't cost a lot to refresh your entire bathroom.
                </p>

                <p>
                    We have 20+ years of experience in reglazing for residential and commercial customers in New York and surrounding areas. This includes the <strong>Bronx, Brooklyn,</strong> Manhattan, Queens, Staten Island, New Jersey, and <strong>Connecticut.</strong> We have got a reputation for delivering high-quality results with a fast turnaround time.
                </p>

                <p>
                    When you're ready to get a new look for your bathroom, contact us for a free, no-pressure quote.
                </p>

                <a href="#" class="bathroom-solutions-button">
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>
<section><?php before_after_services_fun(); ?></section>
<section class="reglazing-process-section">

    <div class="theme-container">

        <h2 class="custom-main-text">
            The Shiny Reglazing <span>Process</span>
        </h2>

        <p class="process-description">
            Over the years, we've perfected our process, giving you a no-hassle experience and great results.
        </p>

        <div class="process-video">

            <video
                autoplay
    muted
    loop
    playsinline
    controls
    preload="auto"
                preload="metadata"
                poster="<?php echo get_template_directory_uri(); ?>/images/process-video-poster.webp"
            >
                <source
                    src="<?php echo get_template_directory_uri(); ?>/videos/Shiny-Tub-Reglazing-Done-1.mp4"
                    type="video/mp4"
                >

                Your browser does not support the video tag.

            </video>

        </div>

    </div>

</section>
<section class="refinishing-process-section">

    <div class="theme-container">

        <div class="process-steps">

            <!-- STEP 1 -->
            <div class="process-step step-1">

                <div class="process-card">

                    <div class="process-icon">
                        <svg class="process-connectors" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6 2h9l3 3v17H6V2z"></path>
                            <path d="M15 2v4h4"></path>
                            <path d="M9 10h6"></path>
                            <path d="M9 14h6"></path>
                            <path d="M9 18h4"></path>
                        </svg>
                    </div>

                    <h3>
                        Call Or Submit A Form
                    </h3>

                    <p>
                        Call you and make sure we have all the information needed to give you an accurate quote. Our...
                    </p>

                  <a href="javascript:void(0);"
   class="process-read-more"
   data-title="Your Refinishing Crew Arrives"
   data-content="Before our refinishers show up, we need you to remove all loose items from the bathroom or kitchen area where we'll be working.<br><br>The reglazing technicians will introduce themselves and take a look at what's going to be resurfaced. They'll plan out the most efficient way to get the job done.">

    Read More

</a>

                </div>

            </div>


            <!-- STEP 2 -->
            <div class="process-step step-2">

                <div class="process-card">

                    <div class="process-icon">
                        <svg class="process-connectors" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M3 6h13v11H3z"></path>
                            <path d="M16 9h3l2 3v5h-5z"></path>
                            <circle cx="7" cy="18" r="2"></circle>
                            <circle cx="18" cy="18" r="2"></circle>
                        </svg>
                    </div>

                    <h3>
                        Your Refinishing Crew Arrives
                    </h3>

                    <p>
                        Before our refinishers show up, we need you to remove all loose items from the bathroom or kitchen are...
                    </p>

                   <a href="javascript:void(0);"
   class="process-read-more"
   data-title="Your Refinishing Crew Arrives"
   data-content="Before our refinishers show up, we need you to remove all loose items from the bathroom or kitchen area where we'll be working.<br><br>The reglazing technicians will introduce themselves and take a look at what's going to be resurfaced. They'll plan out the most efficient way to get the job done.">

    Read More

</a>

                </div>

            </div>


            <!-- STEP 3 -->
            <div class="process-step step-3">

                <div class="process-card">

                    <div class="process-icon">
                        <svg class="process-connectors" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M3 11h18"></path>
                            <path d="M5 11V8h14v3"></path>
                            <path d="M4 11v7"></path>
                            <path d="M20 11v7"></path>
                            <path d="M7 18v2"></path>
                            <path d="M17 18v2"></path>
                            <path d="M7 8V5"></path>
                            <path d="M17 8V5"></path>
                        </svg>
                    </div>

                    <h3>
                        Refinishing Your Bathroom Or Kitchen
                    </h3>

                    <p>
                        We roll up our sleeves and get to work. For small jobs, like a bathtub or sink, we're usually done in 4...
                    </p>

                    <a href="javascript:void(0);"
   class="process-read-more"
   data-title="Your Refinishing Crew Arrives"
   data-content="Before our refinishers show up, we need you to remove all loose items from the bathroom or kitchen area where we'll be working.<br><br>The reglazing technicians will introduce themselves and take a look at what's going to be resurfaced. They'll plan out the most efficient way to get the job done.">

    Read More

</a>

                </div>

            </div>


            <!-- STEP 4 -->
            <div class="process-step step-4">

                <div class="process-card">

                    <div class="process-icon">
                        <svg class="process-connectors" viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3" y="6" width="18" height="13" rx="2"></rect>
                            <path d="M7 6V4h6"></path>
                            <path d="M16 10l2-2"></path>
                            <path d="M18 8l-2-2"></path>
                        </svg>
                    </div>

                    <h3>
                        We Make Payment Easy
                    </h3>

                    <p>
                        We'll invoice you via email. We make it easy to pay via check or credit card. You can pay online or...
                    </p>

                    <a href="javascript:void(0);"
   class="process-read-more"
   data-title="Your Refinishing Crew Arrives"
   data-content="Before our refinishers show up, we need you to remove all loose items from the bathroom or kitchen area where we'll be working.<br><br>The reglazing technicians will introduce themselves and take a look at what's going to be resurfaced. They'll plan out the most efficient way to get the job done.">

    Read More

</a>

                </div>

            </div>

        </div>

    </div>

</section>
<section class="smarter-upgrade-section">

    <div class="theme-container">

        <div class="smarter-upgrade-content">

            <!-- LEFT CONTENT -->

            <div class="smarter-upgrade-text">

                <h2>
                    Reglaze For A <span>Smarter Upgrade</span>
                </h2>

                <p>
                    Don't waste money! Most of the time, your old fixtures are still in good shape. They just look dull and ugly. Reglaze for a fraction of what it costs to replace them. It's faster than a remodel. You save money. And, because you're not making needless waste, it's sustainable. For once, you don't have to choose between saving money and saving the planet. You can do both.
                </p>

                <a href="#" class="smarter-upgrade-button">
                    Contact Us
                </a>

            </div>


            <!-- RIGHT CARDS -->

            <div class="upgrade-cards">

                <!-- TOP LEFT -->

                <div class="upgrade-card upgrade-card-1">

                    <div class="upgrade-icon">
                        💰
                    </div>

                    <h3>
                        More Affordable
                    </h3>

                    <p>
                        Reglazing is the most cost-effective alternative to replacement.
                    </p>

                </div>


                <!-- TOP RIGHT -->

                <div class="upgrade-card upgrade-card-2">

                    <div class="upgrade-icon">
                        ⏱
                    </div>

                    <h3>
                        Faster Results
                    </h3>

                    <p>
                        Refinishing takes hours, not days or weeks. Quicker than remodeling.
                    </p>

                </div>


                <!-- CENTER -->

                <div class="upgrade-card upgrade-card-center">

                    <div class="upgrade-icon">
                        🛡
                    </div>

                    <h3>
                        Solid Warranty
                    </h3>

                    <p>
                        Get peace of mind with a warranty on residential and commercial work performed.
                    </p>

                </div>


                <!-- BOTTOM LEFT -->

                <div class="upgrade-card upgrade-card-3">

                    <div class="upgrade-icon">
                        ⚙
                    </div>

                    <h3>
                        Easy Process
                    </h3>

                    <p>
                        Our streamlined refinishing process is hassle-free and easier than replacement or remodeling.
                    </p>

                </div>


                <!-- BOTTOM RIGHT -->

                <div class="upgrade-card upgrade-card-4">

                    <div class="upgrade-icon">
                        🌱
                    </div>

                    <h3>
                        Eco-Friendly & Safe
                    </h3>

                    <p>
                        Reglazing is a safe, green way to upgrade worn surfaces without sacrificing sustainability.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
 <section class="locations-section">

        <div class="theme-container">

            <h2 class="custom-main-text">
                <span>Locations We Serve</span>
            </h2>

            <p class="locations-description">
                Discover our convenient locations for professional bathtub repair.
                Quality service near you. Visit us for expert refinishing solutions today.
            </p>


            <div class="locations-grid">
                <?php fetch_our_locations(); ?>
                 </div>
        </div>
    </section>

    <section class="refinishing-types-section">

    <div class="refinishing-types-heading">

        <h2>
            We Offer <span>Residential And Commercial</span> Refinishing Services
        </h2>

    </div>


    <div class="refinishing-types-grid">


        <!-- HOUSES -->

        <div class="refinishing-type-image">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/houses.webp"
                alt="Houses Refinishing Services"
            >
        </div>

        <div class="refinishing-type-content">

            <h3>
                Houses
            </h3>

            <p>
                Breathe new life into your home with our expert refinishing services.
                Elevate your bathroom and turn your kitchen into a showstopper.
                Enjoy upgraded spaces and boost resale value affordably.
            </p>

        </div>


        <!-- MULTI FAMILY -->

        <div class="refinishing-type-image">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/houses.webp"
                alt="Multi Family Refinishing Services"
            >
        </div>

        <div class="refinishing-type-content">

            <h3>
                Multi Family
            </h3>

            <p>
                Take multi-family living to the next level. Get professional
                refinishing for bathrooms, kitchens, and front doors. From
                apartments to condos, we specialize in bringing fresh energy
                to shared spaces. Get lasting, cost-effective solutions for
                bathrooms, kitchens, and common areas.
            </p>

        </div>


        <!-- HOSPITALITY -->

        <div class="refinishing-type-content">

            <h3>
                Hospitality
            </h3>

            <p>
                Improve guest experience in the hospitality industry with our
                targeted reglazing services. Create a luxurious, welcoming look
                for patrons. Upgraded bathrooms are beautifully spotless and
                easier to clean.
            </p>

        </div>

        <div class="refinishing-type-image">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/houses.webp"
                alt="Hospitality Refinishing Services"
            >
        </div>


        <!-- COMMERCIAL -->

        <div class="refinishing-type-content">

            <h3>
                Commercial
            </h3>

            <p>
                Get more out of commercial spaces with reglazing services
                designed to meet your specific needs. We offer the most
                effective, budget-friendly way to refresh and modernize
                commercial areas. This includes office buildings,
                restaurants, and retail establishments.
            </p>

        </div>

        <div class="refinishing-type-image">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/houses.webp"
                alt="Commercial Refinishing Services"
            >
        </div>


    </div>

</section>
<section class="estimate-section">

    <div class="estimate-overlay"></div>

    <div class="estimate-container">

        <!-- LEFT CONTENT -->

        <div class="estimate-content">

            <h2>
                Get Your Free Price Estimate From
                <br>
                Shiny Tub Reglazing
            </h2>


            <div class="estimate-contact">

                <div class="estimate-item">

                    <strong>Email :</strong>

                    <a href="mailto:info@ShinyTubReglazing.com">
                        info@ShinyTubReglazing.com
                    </a>

                </div>


                <div class="estimate-item">

                    <strong>Toll Free Number :</strong>

                    <a href="tel:8779270598">
                        (877) 927-0598
                    </a>

                </div>

            </div>


            <div class="estimate-socials">

                <a href="#" aria-label="Yelp">
                    ✣
                </a>

                <a href="#" aria-label="Facebook">
                    f
                </a>

                <a href="#" aria-label="Location">
                    ●
                </a>

            </div>

        </div>


        <!-- RIGHT FORM -->

        <div class="estimate-form-wrapper">

            <h3>
                Contact Us
            </h3>

            <?php
            echo do_shortcode(
                '[contact-form-7 id="d2e80c0" title="Contact form"]'
            );
            ?>

        </div>

    </div>

</section>
</main>
<div id="processModal" class="process-modal">

    <div class="process-modal-overlay"></div>

    <div class="process-modal-box">

        <button type="button" id="processModalClose">
            ×
        </button>

        <div id="processModalTitle" class="process-modal-title"></div>

        <div id="processModalContent" class="process-modal-content"></div>

    </div>

</div>
<script>

document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('processModal');
    const modalTitle = document.getElementById('processModalTitle');
    const modalContent = document.getElementById('processModalContent');
    const closeButton = document.getElementById('processModalClose');

    const buttons = document.querySelectorAll('.process-read-more');


    buttons.forEach(function (button) {

        button.addEventListener('click', function (event) {

            event.preventDefault();

            modalTitle.textContent =
                button.getAttribute('data-title');

            modalContent.innerHTML =
                button.getAttribute('data-content');

            modal.classList.add('active');

            document.body.style.overflow = 'hidden';

        });

    });


    closeButton.addEventListener('click', function () {

        modal.classList.remove('active');

        document.body.style.overflow = '';

    });


    modal.addEventListener('click', function (event) {

        if (event.target === modal) {

            modal.classList.remove('active');

            document.body.style.overflow = '';

        }

    });


    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {

            modal.classList.remove('active');

            document.body.style.overflow = '';

        }

    });

});

</script>
<?php get_footer(); ?>

