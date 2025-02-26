<?php get_header() ?>
<h1 class="titulo"><?php the_title() ?></h1>
<div class="row">
	<div class="col-sm-8">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content() ?>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div><!--col-sm-8-->
	<div class="col-sm-4"><?php get_sidebar() ?></div><!--col-sm-4-->
</div><!--row-->
<?php get_footer() ?>