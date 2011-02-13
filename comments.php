	<?php if( have_comments() ) : ?>
		<div id='comments'>
			<hr class='comments-sep'>
			<ul>
				<?php wp_list_comments(); ?>
			</ul>
			<hr class='comments-sep'>
		
			<?php comment_form(); ?>
		</div>
	<?php else : ?>
		<div id='comments'>
			<hr class='comments-sep'>
			<?php comment_form(); ?>
		</div>
	<?php endif; ?>
	