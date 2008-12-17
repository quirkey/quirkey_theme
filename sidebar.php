	<div id="sidebar">
	
		
		<ul>
			
			<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>

			

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

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
			
			<li><a href="feed:http://feeds.feedburner.com/quirkey"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/feed-icon-long-blue.png" alt="Subscribe via RSS" /></a></li>
			
			<li><h2>Quirkey</h2>
				<ul>
				<li>Software</li>
				<li><a href="http://www.quirkey.com/about.html">About Quirkey</a></li>
				</ul>
			</li>
			
			
			
			<!-- <li><h2>Feed Me <img src="<?php bloginfo('stylesheet_directory'); ?>/images/qblog-feed-icon16.png" alt="feed icon" align="bottom" /></h2>
				<ul>
					<li><a href="feed:http://feeds.feedburner.com/quirkey">All Entries (RSS2)</a></li>
					<li><a href="feed:http://feeds.feedburner.com/quirkeyblog-geek">foRGeeKsOnLy (RSS2)</a></li>
					<li><a href="feed:http://feeds.feedburner.com/quirkeyblog-life">The Quirkey Life (RSS2)</a></li>
					<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS2)</a></li>
					<li><br /></li>
					<li><a href="http://www.quirkey.com/blog/2006/04/17/now-with-more-or-less-geek/">Why so many choices?</a></li>
				</ul>
			</li>	 -->
			
			<?php
			//hide this temporarily
			//<!-- <li><h2>Listening</h2>
			//	<?php get_scrobbler();
			//</li> -->
			?>
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
				
			
			<?php } ?>
			
		</ul>
	</div>

