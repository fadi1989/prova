<?php $format = get_post_format(); ?>

<div class="featured-small">
	<div class="featured-o-thumb">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail('writeup-medium'); ?>
			<?php else: ?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-medium-dark.png" alt="<?php the_title_attribute(); ?>" />
			<?php endif; ?>	
		</a>
		<?php if ( comments_open() && ( get_theme_mod( 'comment-count','on' ) == 'on' ) ): ?>
			<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fas fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
		<?php endif; ?>
		<?php if ( is_sticky() ) echo'<div class="sticky-icon"><i class="fas fa-star"></i></div>'; ?>
	</div>
	<div class="featured-o">
		<div class="featured-o-title"><?php the_title(); ?></div>
		<div class="featured-o-date"><?php the_time( get_option('date_format') ); ?></div>
	</div>
</div>