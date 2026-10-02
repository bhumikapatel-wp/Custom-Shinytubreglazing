<?php

function my_custom_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
        )
    );

}

add_action('after_setup_theme', 'my_custom_theme_setup');


function my_custom_theme_assets() {

    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
     wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0',
        true
    );

}

add_action(
    'wp_enqueue_scripts',
    'my_custom_theme_assets'
);


function register_services_post_type() {

    $labels = array(
        'name'                  => 'Our Services',
        'singular_name'         => 'Our Service',
        'menu_name'             => 'Our Services',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Service',
        'edit_item'             => 'Edit Service',
        'new_item'              => 'New Service',
        'view_item'             => 'View Service',
        'search_items'          => 'Search Services',
        'not_found'             => 'No Services Found',
        'not_found_in_trash'    => 'No Services Found in Trash',
        'all_items'             => 'All Services',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-admin-tools',
        'supports'              => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
        ),
         'has_archive'           => false,
         'rewrite'               => array(
            'slug' => 'services',
            'with_front' => false,
        ),
        'show_in_rest'          => true,
    );

    register_post_type('service_item', $args);
}

add_action('init', 'register_services_post_type');


function fetch_our_services() {

    $services = new WP_Query(
        array(
            'post_type'      => 'service_item',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
        )
    );

    if (!$services->have_posts()) {
        return;
    }
    ?>

    <section class="our-services">

        <div class="theme-container">

            <h2 class="custom-main-text">
                Our Refinishing <span>Services</span>
            </h2>

            <div class="services-list">

                <?php while ($services->have_posts()) : $services->the_post(); ?>

                    <div class="service-item">

                        <?php if (has_post_thumbnail()) : ?>

                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>

                        <?php endif; ?>

                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                    </div>

                <?php endwhile; ?>

            </div>

        </div>

    </section>

    <?php

    wp_reset_postdata();
}





function before_after_fun() {
    ?>

    <section class="before-after-section">              


                <div class="before-after-wrapper">

                    <div class="before-after-image">

                        <!-- AFTER IMAGE -->
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/images/service-slider1-after.webp"
                            alt="After"
                        >

                        <span class="before-after-label after-label">
                            After
                        </span>

                    </div>


                    <div class="before-image">

                        <!-- BEFORE IMAGE -->
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/images/service-slider1-before.webp"
                            alt="Before"
                        >

                        <span class="before-after-label before-label">
                            Before
                        </span>

                    </div>


                    <div class="before-after-divider">

                        <div class="before-after-handle">
                            <span>‹</span>
                            <span>›</span>
                        </div>

                    </div>

                    <input
                        type="range"
                        class="before-after-range"
                        min="0"
                        max="100"
                        value="50"
                        aria-label="Before and after comparison"
                    >

                </div>

            </section>

    <?php
}

function before_after_services_fun() {
    ?>

    <section class="before-after-services-section">

        <div class="theme-container">

            <h2 class="custom-main-text">
                Before & After Reglazing <span>Services</span>
            </h2>

            <div class="before-after-services-grid">

                <!-- CARD 1 -->
                <div class="before-after-card">

                    <div class="ba-slider">

                        <div class="ba-after">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/service-slider1-after.webp"
                                alt="After Reglazing"
                            >
                            <span class="ba-label ba-after-label">After</span>
                        </div>

                        <div class="ba-before">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/service-slider1-before.webp"
                                alt="Before Reglazing"
                            >
                            <span class="ba-label ba-before-label">Before</span>
                        </div>

                        <div class="ba-divider">
                            <div class="ba-handle">‹ ›</div>
                        </div>

                        <input
                            type="range"
                            class="ba-range"
                            min="0"
                            max="100"
                            value="50"
                        >

                    </div>

                </div>


                <!-- CARD 2 -->
                <div class="before-after-card">

                    <div class="ba-slider">

                        <div class="ba-after">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/service-slider1-after.webp"
                                alt="After Reglazing"
                            >
                            <span class="ba-label ba-after-label">After</span>
                        </div>

                        <div class="ba-before">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/service-slider1-before.webp"
                                alt="Before Reglazing"
                            >
                            <span class="ba-label ba-before-label">Before</span>
                        </div>

                        <div class="ba-divider">
                            <div class="ba-handle">‹ ›</div>
                        </div>

                        <input
                            type="range"
                            class="ba-range"
                            min="0"
                            max="100"
                            value="50"
                        >

                    </div>

                </div>


                <!-- CARD 3 -->
                <div class="before-after-card">

                    <div class="ba-slider">

                        <div class="ba-after">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/service-slider1-after.webp"
                                alt="After Reglazing"
                            >
                            <span class="ba-label ba-after-label">After</span>
                        </div>

                        <div class="ba-before">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/service-slider1-before.webp"
                                alt="Before Reglazing"
                            >
                            <span class="ba-label ba-before-label">Before</span>
                        </div>

                        <div class="ba-divider">
                            <div class="ba-handle">‹ ›</div>
                        </div>

                        <input
                            type="range"
                            class="ba-range"
                            min="0"
                            max="100"
                            value="50"
                        >

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php
}

function register_locations_post_type() {

    $labels = array(
        'name'                  => 'Our Locations',
        'singular_name'         => 'Our Location',
        'menu_name'             => 'Our Locations',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Location',
        'edit_item'             => 'Edit Location',
        'new_item'              => 'New Location',
        'view_item'             => 'View Location',
        'search_items'          => 'Search Locations',
        'not_found'             => 'No Locations Found',
        'not_found_in_trash'    => 'No Locations Found in Trash',
        'all_items'             => 'All Locations',
    );

    $args = array(
        'labels' => $labels,

        'public' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'menu_icon' => 'dashicons-location',

        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),

        'has_archive' => false,

        'rewrite' => array(
            'slug' => 'locations',
            'with_front' => false,
        ),

        'show_in_rest' => true,
    );

    register_post_type(
        'location_item',
        $args
    );
}

add_action(
    'init',
    'register_locations_post_type'
);


function fetch_our_locations() {

    $locations = new WP_Query(
        array(
            'post_type'      => 'location_item',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        )
    );

    if (!$locations->have_posts()) {
        return;
    }

    ?>

   

                <?php while ($locations->have_posts()) : $locations->the_post(); ?>

                    <div class="location-card">

                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()) : ?>

                                <?php
                                the_post_thumbnail(
                                    'large',
                                    array(
                                        'alt' => get_the_title(),
                                    )
                                );
                                ?>

                            <?php endif; ?>


                            <div class="location-title">

                                <?php the_title(); ?>

                            </div>

                        </a>

                    </div>

                <?php endwhile; ?>

           

       

    <?php

    wp_reset_postdata();
}