<?php
/*
 * Plugin Name: WP Manager - One click Max File Upload Size Fixer
 * Plugin URI:  https://wordpress.org/plugins/the-wp-manager/
 * Description: Manage & Increase maximum upload file size from media in wordpress
 * Version: 1.0.1
 * Author: innovs 
 * Author URI: https://theinnovs.com
 * Text Domain: wp-manager
 */

function wpManagerMaxUploadFileSize() {
	$media_upload_size = 7850 * 10000;
	return $media_upload_size;
}
add_filter('upload_size_limit', 'wpManagerMaxUploadFileSize');
?> 