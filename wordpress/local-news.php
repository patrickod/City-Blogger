<?php
/*
Plugin Name: Local News
Plugin URI: http://collison.ie/local-news
Description: Local news support
Author: Patrick Collison
Version: 1.0
Author URI: http://collison.ie
*/

function lnBlogname() {
	global $lnSiteName;
	return $lnSiteName;
}

function lnMetaKwds() {
	global $lnMetaKwds;
	return $lnMetaKwds;
}

function lnMetaDesc() {
	global $lnMetaDesc;
	return $lnMetaDesc;
}

function lnBlogTitle() {
	global $lnTitle;
	return $lnTitle;
}

function lnBlogDesc() {
	global $lnBlogDesc;
	return $lnBlogDesc;
}

add_filter('pre_option_blogname', 'lnBlogname');
add_filter('pre_option_metakwds', 'lnMetaKwds');
add_filter('pre_option_metadesc', 'lnMetaDesc');
add_filter('pre_option_blogtitle', 'lnBlogTitle');
add_filter('pre_option_description', 'lnBlogDesc');
?>