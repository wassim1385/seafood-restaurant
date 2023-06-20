<?php
//Link the database from inc folder
require get_template_directory() . '/inc/database.php';
require get_template_directory() . '/inc/reservations.php';
require get_template_directory() . '/inc/options.php';

require_once('lib/enqueue-assets.php');
require_once('lib/theme-support.php');
require_once('lib/sidebars.php');
require_once('lib/customize.php');
