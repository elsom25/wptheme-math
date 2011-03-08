<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class='entry'>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<div class='pagemeta'>
			<p>Written by <?php the_author(','); ?> on <?php the_date(); ?> @ <?php the_time(); ?></p>
		</div>
		<?php comments_template(); ?>
	</div>
<?php endwhile; ?>
	<p class='postnav'><?php next_post_link('%link','&larr; %title'); ?> <?php previous_post_link('%link','%title &rarr;'); ?></p>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
