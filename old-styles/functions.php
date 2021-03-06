<?php

add_theme_support('post-thumbnails');

function youthline_theme_assets() {
  wp_enqueue_style('youthline-style', get_stylesheet_uri());
}

// change headline text
function headline_options($wp_customize) {

  $wp_customize->add_section("headline_section", array(
    "title" => "Headline Text", "custom_setting",
    "priority" => 251
  ));

  $wp_customize->add_setting("headline_setting", array(
    "default" => "Impact Text"
  ));

  $wp_customize->add_control("headline_control", array(
    "label" => "Enter a custom title",
    "section" => "headline_section",
    "settings" => "headline_setting",
    "type" => "text"
  ));
}

add_action("customize_register", "headline_options");



?>
