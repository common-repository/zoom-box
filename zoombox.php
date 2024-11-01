<?php
/*
Plugin Name: ZoomBox
Plugin URI: http://thesky.asia/zoom-box/
Description: Add a zoombox panel at top-right of your blog. The zoombox can be used to zoom font size.
Version: 0.1
Author: Sky
Author URI: http://thesky.asia/
*/

function zoombox_scripts()
{
	$path = "/wp-content/plugins/zoombox";
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', $path.'/jquery.pack.js', false, '1.2.3');
	wp_enqueue_script('zoombox', $path.'/zoombox.js', array('jquery'), '0.9');
	echo '<link rel="stylesheet" type="text/css" media="screen" href="'.get_option('siteurl').$path.'/zoombox-css.css" />'."\n";
}

add_action('wp_head', 'zoombox_scripts', 1);
?>