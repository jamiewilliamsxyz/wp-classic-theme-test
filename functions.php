<?php

add_action("wp_enqueue_scripts", "jct_register_styles");

function jct_register_styles()
{
  wp_enqueue_style("jct-bootstrap", get_template_directory_uri() . "/style.css");
}
