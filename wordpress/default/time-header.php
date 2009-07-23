<?php
require('../conf.php');
function header_image_for_now() {
  global $lnHeaderImages;

$now = (int) date("G");
$pic = "";

foreach($lnHeaderImages as $hr => $p) {
  if($now >= $hr) {
    $pic = $p;
    break;
  }
}

#$pic = "track-at-ul";

#$path = bloginfo('stylesheet_directory') . "/images/headers/" . $pic . ".jpg";
return "/blog/wp-content/themes/default/images/headers/$pic.jpg";
}
?>