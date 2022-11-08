<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group post-standard'); ?>>	
	<div class="post-inner post-hover <?php if ( !has_post_thumbnail() ) { ?>no-thumbnail<?php } ?>">
		
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('writeup-large'); ?>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
				<?php else: ?>
				
				<?php endif; ?>
			</a>	
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count','on' ) == 'on' ) ): ?>
				<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fas fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php endif; ?>	
			<div class="post-date"><i class="far fa-clock"></i><?php the_time( get_option('date_format') ); ?><div class="date-divider"></div></div>
			<?php if ( is_sticky() ) echo'<div class="sticky-icon"><i class="fas fa-star"></i></div>'; ?>
		</div><!--/.post-thumbnail-->
		
		<div class="post-content">
				
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2><!--/.post-title-->
			
			<div class="post-category"><?php the_category(' / '); ?></div>
			
			<?php if (get_theme_mod('excerpt-length','24') != '0'): ?>
			<div class="entry excerpt">				
				<?php the_excerpt(); ?>
			</div><!--/.entry-->
			<?php endif; ?>
		
		</div><!--/.post-content-->
		
	</div><!--/.post-inner-->	
</article><!--/.post-->	