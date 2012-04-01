<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">
<?php if (have_posts()) : ?>
<h2>Search results</h2>
<?php while (have_posts()) : the_post(); ?>

<div class="post">
<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<div class="contenttext">
<?php the_excerpt() ?>
</div>
<p class="postinfo"><strong>Posted:</strong> <?php the_time('F jS, Y') ?> under <?php the_category(', ') ?>.<br />
<?php the_tags('Tags: ', ', ', '<br />'); ?>
<a href="<?php comments_link(); ?>"><strong>Comments:</strong> <?php comments_number('none','1','%'); ?></a>
<?php edit_post_link('[edit]',' | ',''); ?></p>
</div>

<?php endwhile; ?>

<div class="navigation">
<p><span class="prevlink"><?php next_posts_link('&laquo; Previous entries') ?></span>
<span class="nextlink"><?php previous_posts_link('Next entries &raquo;') ?></span></p>
</div>

<?php else : ?>
<h2>Search results</h2>
<p>No matches. Please try again, or use the navigation menus to find what you search for.</p>
<?php endif; ?>

</div>
<?php get_footer(); ?>