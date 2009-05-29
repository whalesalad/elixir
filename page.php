<?php get_header(); ?>
<div id="content" class="page">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <h2><?php the_title(); ?></h2><br />
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>