<?php
$args = array (
  'post_type'              => 'vitrine',
  'posts_per_page'         => '10',
);

// The Query
$vitrine = new WP_Query( $args );
?>

<?php if ( $vitrine->have_posts() ) : ?>

<div id="vitrine" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $key = 0 ?>
    <?php while ( $vitrine->have_posts() ) : $vitrine->the_post(); ?>
        <li data-target="#vitrine" data-slide-to="<?php echo $key ?>" class="<?php echo (!$key) ? 'active' : ''; ?>"></li>
      <?php $key++; ?>
    <?php endwhile; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $key = 0 ?>
    <?php while ( $vitrine->have_posts() ) : $vitrine->the_post(); ?>
      <div class="item <?php echo (!$key) ? 'active' : ''; ?>">
        <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
          <?php if (get_field("link")) : ?>
            <a href="<?php echo get_field("link") ?>" target="<?php echo get_field("target") ?>"><img src="<?php echo $img[0] ?>" alt="<?php the_title() ?>" width="100%"></a>
          <?php else : ?>
            <img src="<?php echo $img[0] ?>" alt="<?php the_title() ?>" width="100%">
          <?php endif; ?>
      </div><!--item-->
      <?php $key++; ?>
    <?php endwhile; ?>
  </div><!--carousel-inner-->

  <!-- Controls -->
  <a class="left carousel-control" href="#vitrine" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#vitrine" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!--vitrine-->




  



<?php else : ?>
  <p>Nenhuma vitrine cadastrada.</p>
<?php endif; wp_reset_postdata(); ?>