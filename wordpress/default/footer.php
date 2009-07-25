<hr>
<div id="footer">
 <p style="padding: 20px;">
  <?php global $lnSiteName, $lnContactEmail, $lnCity, $lnSiteUrl; $email = split('@', $lnContactEmail);  ?>  
<?=$lnSiteName?> is a volunteer-driver news site that covers all <?=$lnCity?> news from <?=$lnCity?> city and county. <a href="<?=$lnSiteUrl?>/blog/about">About Us</a>. To get in touch, mail <script>document.write("<?=$email[0]?>@");</script><?=$email[1]?>
 <?=$lnSiteName?> RSS feeds: <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.<br>
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
</div>
</div>

		<?php wp_footer(); ?>
</body>
</html>
