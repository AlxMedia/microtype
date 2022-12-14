<?php get_header(); ?>

<div class="content">
	
	<?php if ( get_theme_mod('heading-enable','on') == 'on' ) : ?>
		<?php get_template_part('inc/page-title'); ?>
	<?php endif; ?>
	
	<?php if ( get_theme_mod( 'featured-position', 'below' ) == 'above' ) { get_template_part('inc/featured'); } ?>
	
	<?php get_template_part('inc/front-widgets-top'); ?>
	
	<?php if ( have_posts() ) : ?>
		
		<?php while ( have_posts() ): the_post(); ?>
			<?php get_template_part('content'); ?>
		<?php endwhile; ?>
		
		<?php get_template_part('inc/front-widgets-bottom'); ?>
		
		<?php get_template_part('inc/pagination'); ?>
		
		<?php if ( get_theme_mod( 'featured-position', 'below' ) == 'below' ) { get_template_part('inc/featured'); } ?>
		
	<?php endif; ?>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>