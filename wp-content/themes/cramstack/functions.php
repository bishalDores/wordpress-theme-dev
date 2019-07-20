<?php

require_once(get_template_directory().'/inc/enqueue.php');
require_once(get_template_directory().'/inc/theme-setup.php');

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link  white-color pl-xl-5 pl-lg-4"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');