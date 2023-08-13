<?php

function enqueue_custom_styles_and_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap');
    wp_enqueue_style('google-fonts-noto-serif', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap');

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');

    // Your custom stylesheet
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/styles.css');

    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array('jquery'), null, true);

    // Your custom script
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'swiper-js'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');
