<?php
include('forum/config.php');

$lnSiteName = "The -City- Blogger";
// No trailing slash
$lnSiteUrl = "http://google.com";
$lnMetaKwds = " Your Keywords";
$lnMetaDesc = "Your description";
$lnTitle = "Your Title";
$lnBlogDesc = $lnMetaDesc;
$lnCity = " Your City";


// wordpress:
define('DB_NAME', '');    // The name of the database
define('DB_USER', '');     // Your MySQL username
define('DB_PASSWORD', ''); // ...and password
define('DB_HOST', '127.0.0.1');    // 99% chance you won't need to change this value
define('WP_CACHE', true);
define ('WPLANG', '');
$table_prefix  = 'wp_';   // Only numbers, letters, and underscores please!
 


// Set to false to disable twitter;
$lnTwitterUsername = ' Your twitter username';

// Contact Email Address for sidebar
$lnContactEmail = " Contact Email ";

//Sidebar Links
$lnSidebarLinks = array(
  array('http://www.google.com', 'Google Inc'),
  array('http://www.yahoo.com', 'Yahoo Inc')
);

//Sidebar Extensions (Top and Bottom) Set false to turn off. Files are in theme directory 
$lnSidebarIncludeTop = 'sidebartop.php';
$lnSidebarIncludeBottom = 'sidebarbottom.php';

//Header Images (array corresponding to hour of day). Images should be in the "images/headers" directory in the default theme
$lnHeaderImages = array(
  0 => "kubriciheader-default"
);
  

////forum connection settings
define('FORUM_DB_NAME', $db_name);
define('FORUM_DB_HOST', $db_host);
define('FORUM_DB_USER', $db_username);
define('FORUM_DB_PASSWORD', $db_password);


