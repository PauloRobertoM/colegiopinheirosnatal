<?php get_header() ?>
<style>
	.lg-sub-html {
	    display: none;
	}
</style>
<h1 class="titulo"><?php the_title() ?></h1>
<div class="row">
	<div class="col-sm-8">
		<ol class="breadcrumb">
		  <li><a href="<?php echo site_url('albuns') ?>">Álbuns</a></li>
		  <li class="active"><?php the_title() ?></li>
		</ol>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php $imagens = get_attached_media( 'image' ); ?>

			<?php if (count($imagens)) : ?>
				<section id="galerias">
					<div class="row">
						<div id="aniimated-thumbnials">
							<?php foreach ($imagens as $key => $imagem) : ?>
								<a href="<?php echo $imagem->guid ?>" class="galeria-item col-sm-3" title="<?php echo $imagem->post_title ?>" style="height: 135px;">
									<figure>
										<div id="images">
											<img class="item" src="<?php echo wp_get_attachment_thumb_url($imagem->ID) ?>" alt="<?php echo $imagem->post_title ?>" width="100%">
										</div>
									</figure>
								</a><!--galeria-item-->		
							<?php endforeach; ?>
						</div>
					</div><!--row-->
				</section><!--galerias-->
			<?php else : ?>
				<p>Nenhuma imagem cadastrada.</p>
			<?php endif; ?>
			
		<?php endwhile; endif; ?>
	</div><!--col-sm-8-->
	<div class="col-sm-4"><?php get_sidebar() ?></div><!--col-sm-4-->
</div><!--row-->

<script type="text/javascript">
	$(document).ready(function() {
        $("#lightgallery").lightGallery(); 
    });
	
	$(function () {

	    var $container = $('#container').masonry({
	        itemSelector: '.item',
	        columnWidth: 200
	    });

	    // reveal initial images
	    $container.masonryImagesReveal($('#images').find('.item'));
	});

$.fn.masonryImagesReveal = function ($items) {
    var msnry = this.data('masonry');
    var itemSelector = msnry.options.itemSelector;
    // hide by default
    $items.hide();
    // append to container
    this.append($items);
    $items.imagesLoaded().progress(function (imgLoad, image) {
        // get item
        // image is imagesLoaded class, not <img>, <img> is image.img
        var $item = $(image.img).parents(itemSelector);
        // un-hide item
        $item.show();
        // masonry does its thing
        msnry.appended($item);
    });

    return this;
};
</script>

<?php get_footer() ?>