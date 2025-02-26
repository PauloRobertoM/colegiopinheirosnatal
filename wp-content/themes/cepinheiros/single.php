<?php get_header() ?>
<div class="row">
	<div class="col-sm-8">
		<article id="noticia-content">
		<h1 class="titulo"><?php the_title() ?></h1>

		<ol class="breadcrumb">
		  <li><a href="<?php echo site_url('noticias') ?>">Notícias</a></li>
		  <li class="active"><?php the_title() ?></li>
		</ol>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if ( has_post_thumbnail() ) : ?>
		       <?php the_post_thumbnail( 'full' , array('class' => 'noticia-full') ); ?>
		     <?php endif; ?>
			<?php the_content() ?>

			<div class="fb-comments" data-href="https://www.facebook.com/centroeducacionalpinheirosnatal" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
		<?php endwhile; endif; ?>
		</article><!--noticia-content-->
	</div><!--col-sm-8-->
	<div class="col-sm-4"><?php get_sidebar() ?></div><!--col-sm-4-->
</div><!--row-->
<?php get_footer() ?>