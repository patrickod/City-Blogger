<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if ( is_single() ) { ?> - <?= bloginfo('name') ?> Archive<?php } else { echo get_option('blogtitle'); } ?></title>
<meta name="verify-v1" content="oF5nDM5V6bmVBKLBkq0veSMVKR/4+rNVqJ43xelOcjI=">
<meta name="robots" content="noarchive">
<meta name="keywords" content="<?= get_option('metakwds') ?>">

<?php

function meta_desc() {
  global $post;
  if(is_single()) {
    $strings = preg_split('/(\.|!|\?)\s/', strip_tags($post->post_content), 2, PREG_SPLIT_DELIM_CAPTURE);
    return single_post_title('', true) . ". " . $strings[0] .  $strings[1] . " [...]";
  } else {
    return get_option('metadesc');
  }
}

?>

<meta name="description" content="<?= meta_desc() ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" >
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<style type="text/css" media="screen">
<?php 
// Checks to see whether it needs a sidebar or not
if ( !$withcomments && !is_single() ) { 
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; } 
<?php } ?>
</style>

<?php wp_head(); ?>
</head>
<body>
<div id="page">

<div id="header" onclick="location.href='<?= get_settings('home') ?>';" style="cursor: pointer;">
	<div id="headerimg" <?php global $lnHeaderHideText; if($lnHeaderHideText) { echo "style=\"display:none;\"" ; }?> >
<?php $hnum = is_single() ? "2" : "1"; ?>
		<h<?= $hnum ?>><a href="<?php echo get_settings('home'); ?>/"><?= get_option('blogtitle') ?></a></h<?= $hnum ?>>
		<div class="description"><?= get_option('description'); ?></div>
	</div>
</div>
<hr>
