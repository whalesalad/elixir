<div id="sidebar">
	<div id="upperBox">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<hr />
		<p><?php bloginfo('description'); ?></p>
		<hr />
		<form name="searchForm" method="get" id="searchForm" action="<?php bloginfo('home'); ?>/"><input type="text" name="s" value="Type and press enter" onClick="document.searchForm.s.value=''"; /></form>
	</div>
		
	<ul id="nav">
		<li><a <?php if (is_home()) { echo 'class="active" '; } elseif (is_single()) { echo 'class="active" '; } ?>href="/">Blog</a></li>
		<li><a <?php if (is_page('about')) { echo 'class="active" '; } ?>href="/about/">About</a></li>
		<?php if (is_page('archives')) { ?>
		<li><a <?php if (is_page('archives')) { echo 'class="active" '; } ?>href="/archives/">Archives</a></li>
		<?php } ?>
		<li><a <?php if (is_page('contact')) { echo 'class="active" '; } ?>href="/contact/">Contact</a></li>
	</ul>
	
	<?php if (is_page('about')) { ?>
	<h2>Feeds</h2>
		<ul class="feeds">
			<li><a href="/feed">Main Feed</a></li>
			<li><a href="/comments/feed">Comments Feed</a></li>
			<li><a href="http://del.icio.us/rss/uscfan">Del.icio.us Links</a></li>
			<li><a href="http://www.flickr.com/services/feeds/photos_public.gne?id=24642662@N00&format=rss_200">Flickr Photos</a></li>
			<li><a href="http://www.digg.com/rss/uscfan/index2.xml">Dugg Stories</a></li>
		</ul>
	<?php } ?>
	
	<h2>Latest Entries</h2>
	<ul>
		<?php rewind_posts(); ?>
		<?php query_posts("cat=-36&showposts=6"); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; endif; ?>
	</ul>
	
	<?php if (is_single()) { ?>
	<h2>Related Entries</h2>
	<ul>
		<?php UTW_ShowRelatedPostsForCurrentPost("posthtmllist") ?>
	</ul>               
	<?php } ?>
	
	<h2>My Homeboys (And Girls)</h2>
	<ul>
		<?php get_links('-1', '<li>', '</span></li>', '<span>', FALSE, 'id', TRUE, FALSE, 10, FALSE, TRUE); ?>
	</ul>
	
	<div id="footer">
		<p>Powered by <a href="http://wordpress.org/">Wordpress <?php bloginfo('version'); ?></a></p>
		<p>Designed by <a href="http://whalesalad.com/">Michael Whalen</a></p>	
	</div>
		
</div>