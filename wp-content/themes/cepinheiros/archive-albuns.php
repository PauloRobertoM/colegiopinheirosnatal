<?php get_header() ?>
	<h1 class="titulo">Álbuns</h1>
	<div class="row">
		<div class="col-sm-8">
			<?php if ( have_posts() ) : ?>
				<section id="galerias">
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
						
							<?php $imagens = get_attached_media( 'image', $post->ID ); ?>
							<?php $imagem = current($imagens); ?>

							<div class="col-sm-6 teste">
								<a href="<?php the_permalink() ?>" class="galeria-item">
									<figure>
										<?php if (count($imagens)) : ?>
											<img src="<?php echo wp_get_attachment_thumb_url($imagem->ID) ?>" alt="<?php the_title() ?>" width="100%">
										<?php else : ?>
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-300x300.png" alt="<?php the_title() ?>" width="100%">
										<?php endif; ?>
									</figure>
									<h1 class="galeria-title"><?php the_title() ?></h1>
								</a><!--galeria-item-->
							</div><!--col-sm-6-->

						<?php endwhile; ?>
					</div><!--row-->

					<div class="paginacao">
						<?php wpbeginner_numeric_posts_nav();?>
					</div>
				</section><!--galerias-->
			<?php else: ?>
				<p><?php _e('Nenhuma galeria cadastrada.'); ?></p>
			<?php endif; ?>
		</div><!--col-sm-8-->
		<div class="col-sm-4"><?php get_sidebar() ?></div><!--col-sm-4-->
	</div><!--row-->
<?php get_footer() ?>