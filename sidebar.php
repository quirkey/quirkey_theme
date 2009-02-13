<div id="sidebar">

		<h3><a href="http://feeds.feedburner.com/quirkey"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/qblog-feed-icon20.png" alt="RSS" /> Subscribe via RSS</a>
			<?php $offset = is_home() ? 1 : 0; ?>
			<?php $shownum = is_home() ? 4 : 8; ?>
			<?php query_posts("showposts=$shownum&offset=$offset")?>
			<?php if (have_posts()) : ?>
				<h3>Also Recent</h3>
				<ul>
				<?php while (have_posts()) : the_post(); ?>
					<li>⚡ <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br /><?php the_time('F jS, Y') ?></li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		
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
		
				
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
	  <p><a href="http://scotlandonrails.com" title="Scotland on Rails: speaker"><img src="http://scotlandonrails.com/images/badges/speaking_s.png" alt="Scotland on Rails: speaker"/></a></p>
</div>

