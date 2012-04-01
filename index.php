
<?php get_header(); ?>

	<article class="posts" role="main">
	
		<?php if( have_posts() ) : ?><?php while( have_posts() ) : the_post(); ?>
	
		<div class="post">

			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

			<div class="meta">
				Posted on <?php the_time('F jS, Y') ?> under <?php the_category(', ') ?>.
				<?php the_tags('Tags: ', ', ', ''); ?>
				<a href="<?php comments_link(); ?>"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a>
			</div>
			
			<?php the_post_thumbnail('thumbnail'); ?>
			
			<?php the_content(); ?>

		</div>
			
		<?php endwhile; ?>
			
			<?php the_pagination(); ?>
				
		<?php else : ?>

			<div class="post">
				<h2>Not found!</h2>
				<p>Could not find the requested page. Use the navigation menu to find your target, or use the search box below:</p>
				<?php get_search_form(); ?>
			</div>
			
		<?php endif; ?>
		
	</article>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
