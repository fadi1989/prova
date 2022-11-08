<?php get_header(); ?>


<div id="page">
	<div class="container">
		<div class="main">
			<div class="main-inner group">

				<div class="content">
					<div class="pad group">
					
						<?php while ( have_posts() ): the_post(); ?>
							<article <?php post_class(); ?>>	
								
								<div class="post-category"><?php the_category(' / '); ?></div>
								<h1 class="post-title"><?php the_title(); ?></h1>
								<p class="post-byline"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?><?php esc_html_e('by','writeup'); ?> <?php the_author_posts_link(); ?> <i class="far fa-clock"></i> <?php the_time( get_option('date_format') ); ?></p>
								<div class="clear"></div>
								<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
								
								<?php do_action( 'alx_ext_sharrre' ); ?>
								
								<div class="clear"></div>
								
								<div class="entry themeform">	
									<div class="entry-inner">
										<?php the_content(); ?>
										<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','writeup'),'after'=>'</div>')); ?>
									</div>
									<div class="clear"></div>
									<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','writeup').'</span> ','','</p>'); ?>

								</div><!--/.entry-->

							</article><!--/.post-->				
						<?php endwhile; ?>
						
						<div class="clear"></div>

						<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
							<div class="grad-line"></div>
							<div class="author-bio">
								<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
								<p class="bio-name"><?php the_author_posts_link(); ?></p>
								<p class="bio-desc"><?php the_author_meta('description'); ?></p>
								<div class="clear"></div>
							</div>
						<?php endif; ?>
						
						<?php if ( get_theme_mod( 'post-nav', 's1' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
		
						<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
		
						<?php if ( get_theme_mod( 'post-comments', 'on' ) == 'on' ) { comments_template('/comments.php',true); } ?>
						
					</div><!--/.pad-->	
				</div><!--/.content-->

				<?php get_sidebar(); ?>

			</div><!--/.main-inner-->
		</div><!--/.main-->			
	</div><!--/.container-->
</div><!--/#page-->

<?php get_footer(); ?>