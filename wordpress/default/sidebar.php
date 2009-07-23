	<div id="sidebar">
  <?php 

  global $lnSidebarIncludeTop;
  if($lnSidebarIncludeTop) 
  {
    include($lnSidebarIncludeTop); 
  }
?>  
    <ul>
<li id="sidebar-main-links">
<?php 
  global $lnSidebarLinks;
  foreach($lnSidebarLinks as $link)
  {
    echo '<a href="'.$link[0].'">'.$link[1]."</a>";  
  }
?>
</li>




	<div id="saleposts">
	<h3>Active comment threads</h3>
	
	<?php

	$conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, 1);
	mysql_select_db(DB_NAME, $conn);
	$res = mysql_query("select wp_comments.comment_post_ID as pid, count(*) as c, wp_posts.post_title as t from wp_comments inner join wp_posts on wp_posts.ID=wp_comments.comment_post_ID where wp_comments.comment_date > date_add(now(), interval -7 day) group by wp_comments.comment_post_ID order by c desc limit 5");
	$first = 1;
	while($row = mysql_fetch_array($res)) {
	  if(!$first) echo ", "; else $first = 0;
	  echo '<a href="' . get_permalink($row[0]) . '">' . htmlspecialchars($row[2]) . "</a>";
	}
	mysql_close($conn);
	

	?>

	</div>



	<div id="saleposts">
	<h3><a href="/forum/viewforum.php?id=3">Recently in Buy & Sell forum:</a></h3>
	<?php

	$conn = mysql_connect(FORUM_DB_HOST, FORUM_DB_USER, FORUM_DB_PASSWORD, 1);
  mysql_select_db(FORUM_DB_NAME, $conn);
  $res = mysql_query("select id, subject from p_topics where hidden=0 and forum_id=3 order by last_post desc limit 3", $conn);
	$first = 1;
	while($row = mysql_fetch_array($res)) {
	  if(!$first) echo ", "; else $first = 0;
	  echo "<a href=\"/forum/viewtopic.php?id=" . $row[0] . "\">" . htmlspecialchars($row[1]) . "</a>";
	}
	mysql_close($conn);

	?>

	</div>

<?php 
  global $lnTwitterUsername;
  if($lnTwitterUsername)
  {
?> 
<font color="red"><div id="twitter_div">
<h2 class="twitter-title">Latest SMS alert</h2>
<ul id="twitter_update_list"></ul></div>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
  <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php global $lnTwitterUsername; echo $lnTwitterUsername; ?>.json?callback=twitterCallback2&count=1"></script>
</font></br><br>
<?php } 
global $lnContactEmail;
$email = split("@", $lnContactEmail);

?>
<li>Mail us! News, tips, anything: <?=$email[0]?><script>document.write("@<?=$email[1];?>");</script></li>

<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>

<p align="center"><div style="width: 170px; margin-left: 5px; border: 2px solid #4c9f4c; padding: 5px; background-color: #5caf5c; color: white; font-size: 1.2em;">Need to upskill?<br> 
Over 100 training courses at <a href="http://www.sqt.ie">SQT.ie</a>.<br>
Contact us at 061 339040 or info@sqt.ie</div></p>

<p align="center"><a href="http://www.trinityrooms.ie/" target="_blank"><img src="/blog/wp-content/themes/default/images/trinity.gif" width=180 border="0" alt="Click here to buy Jesse Malin's new CD online"></a><br>
<p align="center"><img width=180 src="http://i122.photobucket.com/albums/o259/limerickblogger/limerickblogger-2/irishblogawardwinner.jpg" </img>

			<li>
			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <?php the_time('F, Y'); ?>.</p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the year <?php the_time('Y'); ?>.</p>

		 <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <strong>'<?php echo wp_specialchars($s); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives.</p>

			<?php } ?>
			</li>

			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<li><h2>Categories</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>
			</li>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php get_links_list(); ?>

				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>
</ul>
<br>

<?php 
  global $lnSidebarIncludeBottom;
  if($lnSidebarIncludeBottom) 
  {
    include($lnSidebarIncludeBottom);
  }
?>
