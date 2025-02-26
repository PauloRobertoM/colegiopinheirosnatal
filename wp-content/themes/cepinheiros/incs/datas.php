<h1 class="titulo-in">Calendário de atividades</h1>
<div id="calendario-atividades">
	<ul>

<?php
$args = array (
	'post_type'      => 'calendario',
	'posts_per_page' => 3,
	'orderby' => 'data',
	'order' => 'ASC',
	'meta_query' => array(
		array(
			'key'     => 'data',
			'value'   => date('Ymd'),
			'compare' => '>=',
		),
	),
);

$calendario = new WP_Query( $args );

$meses = array(
    '01' => 'jan',
    '02' => 'fev',
    '03' => 'mar',
    '04' => 'abr',
    '05' => 'mai',
    '06' => 'jun',
    '07' => 'jul',
    '08' => 'ago',
    '09' => 'set',
    '10' => 'out',
    '11' => 'nov',
    '12' => 'dez'
);
?>

<?php if ( $calendario->have_posts() ) : ?>
	<?php while ( $calendario->have_posts() ) : $calendario->the_post(); ?>

		<li>
			<div class="row">
				<div class="col-sm-2">
					<div class="data <?php echo (date('Ymd') == get_field('data')) ? 'ativo' : ''; ?>">
						<span class="dia"><?php echo substr(get_field('data'), 6, 2)  ?></span>
						<span class="mes"><?php echo $meses[substr(get_field('data'), 4, 2)]  ?></span>
					</div><!--data-->
				</div><!--col-sm-4-->
				<div class="col-sm-10"><h2 class="titulo"><?php the_title() ?></h2></div>
			</div><!--row-->
		</li>
	<?php endwhile; ?>
<?php else : ?>
	<p>Estamos sem atividades cadastradas.</p>
<?php endif; wp_reset_postdata(); ?>

	</ul>
	<div class="text-align-right"><a href="<?php echo site_url('calendario') ?>" class="mais">veja mais</a></div>
</div><!--calendario-atividades-->