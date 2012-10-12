
<?php get_header(); ?>

	<div class="posts" role="main">

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	
		<article class="post">

			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

			<div class="meta">
				Posted on <?php the_time('F jS, Y') ?> under <?php the_category(', ') ?>.
				<?php the_tags('Tags: ', ', ', ''); ?>
				<a href="<?php comments_link(); ?>"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a>
			</div>
			
			<?php the_post_thumbnail('thumbnail'); ?>
			
			<?php the_content(); ?>

		</article>
			
		<?php endwhile; endif; ?>

		<?php comments_template(); ?>
				
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
