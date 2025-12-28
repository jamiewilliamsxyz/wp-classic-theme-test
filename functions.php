<?php

add_action("wp_enqueue_scripts", "jct_register_styles");

function jct_register_styles()
{
  $version = wp_get_theme()->get("Version");

  wp_enqueue_style("jct-style", get_template_directory_uri() . "/style.css", array("jct-bootstrap"), $version);
  wp_enqueue_style("jct-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css", [], "4.4.1");
  wp_enqueue_style("jct-fontawesome", "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/fontawesome.min.css", [], "5.13.0");
}
