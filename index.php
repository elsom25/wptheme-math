<?php get_header(); ?>
	<?php if ( ! have_posts() ) : ?>
		<div class='entry'>
			<h2>Not Found!</h2>
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<p><?php get_search_form(); ?></p>
		</div>
	<?php endif; ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<div class='entry'>
			<div class='comments'><?php comments_popup_link('0','1','%','X'); ?></div>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class='meta'>Written by <?php the_author(','); ?> on <?php the_date(); ?> @ <?php the_time(); ?></p>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>