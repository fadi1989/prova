<?php get_header(); ?>

<?php if ( is_home() && !is_paged() ): ?>
	<div id="subheader" class="group">
		<div class="featured-posts container pad group">
			<div class="featured-wrap">
				<?php get_template_part('inc/featured'); ?>
				<div class="grad-line"></div>
			</div>
			<?php get_template_part('inc/highlight'); ?>
		</div>	
	</div><!--/#subheader-->
<?php endif; ?>

<div id="page">
	<div class="container">
		<div class="main">
			<div class="main-inner group">
			
				<div class="content">
					<div class="pad group">

						<?php get_template_part('inc/page-title'); ?>
						
						<?php get_template_part('inc/front-widgets-top'); ?>
						
						<?php if ( have_posts() ) : ?>
							
							<?php if ( get_theme_mod('blog-layout','blog-list') == 'blog-grid' ) : ?>
								
								<div class="post-grid group">
									<?php $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post(); ?>
										<?php get_template_part('content-grid'); ?>
									<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>
								</div><!--/.post-grid-->
								
							<?php elseif ( get_theme_mod('blog-layout','blog-list') == 'blog-list' ) : ?>
								
								<?php while ( have_posts() ): the_post(); ?>
									<?php get_template_part('content-list'); ?>
								<?php endwhile; ?>
								
							<?php else: ?>
							
								<?php while ( have_posts() ): the_post(); ?>
									<?php get_template_part('content'); ?>
								<?php endwhile; ?>
								
							<?php endif; ?>
							
							<?php get_template_part('inc/front-widgets-bottom'); ?>
							<?php get_template_part('inc/pagination'); ?>
							
						<?php endif; ?>
						
					</div><!--/.pad-->
				</div><!--/.content-->

				<?php get_sidebar(); ?>

			</div><!--/.main-inner-->
		</div><!--/.main-->			
	</div><!--/.container-->
</div><!--/#page-->

<?php get_footer(); ?>