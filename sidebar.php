	</div> <!--content-->
	
<div id="sidebar">

	<?php if ( !dynamic_sidebar() ) : ?>

	<ul>
		<li><h3>Categories</h3></li>
		<ul><?php wp_list_categories('title_li=&exclude=20'); ?></ul>
		<li><h3>Social Media</h3></li>
<li><p style='background-color:#fff;padding:0;width:280px'><fb:like-box href="http://www.facebook.com/MathOrientation2011" width="280" show_faces="true" stream="false" header="true" footer="false"></fb:like-box></p></li>
		<li class='twitter'>
		<script type="text/javascript">
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  rpp: 4,
			  interval: 6000,
			  width: 'auto',
			  height: 350,
			  theme: {
				shell: {
				  background: '#ffffff',
				  color: '#6e6e6e'
				},
				tweets: {
				  background: '#ffffff',
				  color: '#8c8c8c',
				  links: '#DF6099'
				}
			  },
			  features: {
				scrollbar: false,
				loop: false,
				live: false,
				hashtags: false,
				timestamp: true,
				avatars: false,
				behavior: 'all'
			  }
			}).render().setUser('mathorientation').start();
		</script>
		</li>
		
		<li><h3>Recent Comments</h3></li>
		<?php $comments = get_comments('number=5&order_by=comment_date_gmt'); ?>
		<ul class='recentcomments'>
		<?php
		if ($comments) {
			foreach($comments as $c) {
				echo "<li><a href='".get_permalink($c->comment_post_ID)."'><strong>".$c->comment_author." said:</strong></a>".$c->comment_content."</li>";
			}
		}
		?>
		</ul>
		
		<li><h3>Misc</h3></li>
		<li><a href='<?php bloginfo('rss_url'); ?>'>RSS</a></li>
		<li><a href='<?php bloginfo('rss2_url'); ?>'>RSS 2.0</a></li>
		<li><a href='<?php bloginfo('comments_rss2_url'); ?>'>Comments RSS</a></li>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
	</ul>
	
	<?php endif; ?>

</div>
