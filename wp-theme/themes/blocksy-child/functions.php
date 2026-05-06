<?php

add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'blocksy-parent',
        get_template_directory_uri() . '/style.css'
    );

});