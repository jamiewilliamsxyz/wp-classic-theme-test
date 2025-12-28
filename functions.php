<?php

// Constants
$THEME_URI = get_template_directory_uri();

// Register CSS/JS
add_action("wp_enqueue_scripts", "jct_register_styles");
add_action("wp_enqueue_scripts", "jct_register_scripts");

$version = wp_get_theme()->get("Version");

function jct_register_styles()
{
  global $version;
  wp_enqueue_style("jct-css", get_template_directory_uri() . "/style.css", array("jct-bootstrap"), $version);
  wp_enqueue_style("jct-bootstrap-css", "https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css", [], "4.4.1");
  wp_enqueue_style("jct-fontawesome", "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/fontawesome.min.css", [], "5.13.0");
}

function jct_register_scripts()
{
  global $version;
  wp_enqueue_script("jct-jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", [], "3.4.1", true);
  wp_enqueue_script("jct-popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", [], "1.16.0", true);
  wp_enqueue_script("jct-bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js", [], "3.4.1", true);
  wp_enqueue_style("jct-js", get_template_directory_uri() . "/assets/js/main.js", [], $version, true);
}
