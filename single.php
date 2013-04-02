
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

		<div class="author-info">
		    <div class="author-avatar">
		        <?php echo get_avatar( get_the_author_meta( 'user_email' ), 60 ); ?>
		    </div><!-- .author-avatar -->
		    <div class="author-description">
		        <h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
		        <p><?php the_author_meta( 'description' ); ?></p>
		        <div class="profile-links">
		            <ul class="social-links">
		                <?php if ( get_the_author_meta( 'twitter' ) != '' )  { ?>
		                    <li><a class="twitter-link" href="https://twitter.com/<?php echo wp_kses( get_the_author_meta( 'twitter' ), null ); ?>"><?php printf( esc_attr__( 'Follow %s on Twitter', 'base'), get_the_author() ); ?></a></li>
		                <?php } ?>
		                <?php if ( get_the_author_meta( 'facebook' ) != '' )  { ?>
		                    <li><a class="facebook-link" href="<?php echo esc_url( get_the_author_meta( 'facebook' ) ); ?>"><?php printf( esc_attr__( 'Follow %s on Facebook', 'base'), get_the_author() ); ?></a></li>
		                <?php } ?>		 
		                <?php if ( get_the_author_meta( 'linkedin' ) != '' )  { ?>
		                    <li class="linkedin-link"><?php wptuts_linkedin( get_the_author_meta( 'ID' )); ?></li>
		                    <li><a class="linkedin-link" href="<?php echo esc_url( get_the_author_meta( 'linkedin' ) ); ?>"><?php printf( esc_attr__( 'Follow %s on LinkedIn', 'base'), get_the_author() ); ?></a></li>
		                <?php } ?>		 
		                <?php if ( get_the_author_meta( 'googleplus' ) != '' )  { ?>
		                    <li><a class="google-link" href="<?php echo esc_url( get_the_author_meta( 'googleplus' ) ); ?>"><?php printf( esc_attr__( 'Follow %s on Google+', 'base'), get_the_author() ); ?></a></li>
		                <?php } ?>
		            </ul>		 
		        </div>
		    </div><!-- .author-description -->
		</div><!-- .author-info -->
			
		<?php endwhile; endif; ?>

		<?php comments_template(); ?>
				
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
