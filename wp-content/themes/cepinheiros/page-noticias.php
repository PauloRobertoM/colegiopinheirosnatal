<?php get_header() ?>
<h1 class="titulo">Notícias</h1>
<div class="row">
	<div class="col-sm-8">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$num_paged = 10;
$args = array (
	'paged'			 => $paged,
	'post_type'      => 'post',
	'posts_per_page' => $num_paged,
);

$noticias = new WP_Query( $args );

$count = wp_count_posts("post")->publish;

//echo $paged;
?>
		<section id="noticias">
			<?php if ( $noticias->have_posts() ) : ?>
				<?php while ( $noticias->have_posts() ) : $noticias->the_post(); ?>
					<article class="single-noticia">
						<div class="row">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="col-md-4">
									<?php the_post_thumbnail( 'noticia-size', array('class' => 'single-noticia-image') ); ?>
								</div><!--col-md-4-->

								<div class="col-md-8">
									<div class="single-noticia-date"><?php the_date('d/m/Y') ?></div>
									<h1 class="single-noticia-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
									<div class="single-noticia-content"><?php echo  crop_excerpt(get_the_content(),200) ?></div><!--single-noticia-content-->
								</div><!--col-md-8-->
							<?php else : ?>
								<div class="col-md-12">
									<div class="single-noticia-date"><?php the_date('d/m/Y') ?></div>
									<h1 class="single-noticia-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
									<div class="single-noticia-content"><?php echo  crop_excerpt(get_the_content(),100) ?></div><!--single-noticia-content-->
								</div><!--col-md-8-->
							<?php endif; ?>
						</div><!--row-->
					</article><!--single-noticia-->
				<?php endwhile; ?>

				<div class="paginacao">
					<div class="row">
						<?php if ($paged > 1) : ?>
							<div class="col-sm-6"><a class="link-paginacao" href="<?php echo site_url('noticias/page/') . ($paged-1) ?>">Anterior</a></div><!--col-sm-6-->
						<?php endif; ?>
						<?php if ($paged < round($count/$num_paged)) : ?>
							<div class="col-sm-6"><a class="link-paginacao" href="<?php echo site_url('noticias/page/') . ($paged+1) ?>">Próximo</a></div><!--col-sm-6-->
						<?php endif; ?>
					</div><!--row-->
				</div><!--paginacao-->

			<?php else : ?>
				<p>Nenhuma notícia cadastrada</p>
			<?php endif; wp_reset_postdata(); ?>
		</section><!--noticias-->
	</div><!--col-sm-8-->
	<div class="col-sm-4"><?php get_sidebar() ?></div><!--col-sm-4-->
</div><!--row-->
<?php get_footer() ?>