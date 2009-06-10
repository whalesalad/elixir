<?php
/**
 * @package WordPress
 * @subpackage Elixir
 */

get_header(); ?>
<div id="content" class="page">
    <div class="post" id="post-<?php the_ID(); ?>">
        <h2>Sorry!</h2>
        <h3>We can't seem to find what you're looking for!</h3>
        <p>Either the link you just followed was broken, or aliens are attacking the servers and stealing all of my bytez! <a href="/">Head back home.</a></p>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>