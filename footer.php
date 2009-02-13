			<div class="clear"></div>
		</div>
		<div id="bottom_holder">
			<div id="bottom">
				<div class="bottom_section">
					<h3>About</h3>
					<p class="tagline">QuirkeyBlog is <strong>Aaron Quint's</strong> perspective on the ongoing adventure of <strong>Code</strong>, <strong class="a_lt">Life</strong>, <strong>Work</strong> and the <strong class="a_lt">Web</strong>.</p>
					<p>For more information check <a href="http://www.quirkey.com">Quirkey.com</a></p>
					<p>QuirkeyBlog is proudly powered by <a href="http://wordpress.org/">WordPress</a></p>
				</div>
				<div class="bottom_section">
					<h3>Archives</h3>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</div>
				<div class="bottom_section">
					<h3>Categories</h3>
					<ul>
						<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="footer">
			<p class="quirkey_links">Quirkey<span>|</span><a href="http://www.quirkey.com" class="q_com">.com</a><span>|</span><a href="http://portfolio.quirkey.com" class="q_portfolio">Portfolio</a><span>|</span><a href="http://code.quirkey.com" class="q_code">Code</a><span>|</span><a href="http://log.quirkey.com" class="q_log">Log</a><span>|</span><a href="http://www.quirkey.com/blog/" class="q_blog">Blog</a></p>
			<p id="copy">quirkey logo and identity, &copy; 2005-2008 Quirkey NYC, LLC</p>
		</div>
	</div>
  <script type="text/javascript">
	$(function () {
		Quirkey.initialize();
	});
	</script>
 	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		var pageTracker = _gat._getTracker("UA-3763169-1");
		pageTracker._initData();
		pageTracker._trackPageview();
	</script>

</body>
</html>