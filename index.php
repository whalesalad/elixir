<?php
/**
 * @package WordPress
 * @subpackage Elixir
 */

get_header(); ?>
<div id="content">
    
    <h1><?php $themecolor = $elixir->option['color']; echo $themecolor; ?></h1>
    
    <?php /* If this is a category archive */  if (is_category()) { ?>
    <div class="notice"><p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p></div>

    <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
    <div class="notice"><p>You are currently browsing the archives for the day <?php the_time('l, F jS, Y'); ?>.</p></div>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <div class="notice"><p>You are currently browsing thearchives for <?php the_time('F, Y'); ?>.</p></div>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <div class="notice"><p>You are currently browsing the archives for the year <?php the_time('Y'); ?>.</p></div>

    <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
    <div class="notice"><p>You searched for <strong><?php the_search_query(); ?></strong>, here are your results: </p></div>

    <?php } ?> 
    
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <h3>Posted <?php $elixir->timesince() ?> ago at <?php the_time() ?>. <a href="<?php the_permalink() ?>#comments"><?php comments_number('0 comments','1 comment','% comments'); ?></a></h3>
            <p><?php the_content('Continue Reading...'); ?>
            </p>
        </div>
    <?php endwhile; ?>
    <?php else : ?>
    <div class="post" id="post-<?php the_ID(); ?>">
        <h2>Nothing to see here</h2>
        <p>You seemed to have found a mislinked file, page, or search query with zero results. If you feel that you've reached this page in error, double check the URL and or search string and try again.</p>
        <p>Alternatively, a more personalized method of tracking down and searching for content can be found <a href="#bottom_box">below</a>.</p>
    </div>
    <?php endif; ?>

    <div class="nextprevious">
        <div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
        <div class="right"><?php previous_posts_link('Recent Entries &raquo;') ?></div>
    </div>
    <div class="clear"></div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>