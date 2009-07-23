<?php get_header(); ?>
	<div id="content" class="narrowcolumn">

	<div id="forumposts">
	<h3><a href="/forum/index.php">Active forum threads</a></h3>
	<?php

	$conn = mysql_connect(FORUM_DB_HOST, FORUM_DB_USER, FORUM_DB_PASSWORD, 1);
	mysql_select_db(FORUM_DB_NAME, $conn);
	$res = mysql_query("select id, subject from p_topics where hidden=0 order by last_post desc limit 3", $conn);
	while($row = mysql_fetch_array($res)) {
	  echo "<a href=\"/forum/viewtopic.php?id=" . $row[0] . "\">" . htmlspecialchars($row[1]) . "</a>";
	}
	mysql_close($conn);

	?>

	</div>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> by <?php the_author() ?> </small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
