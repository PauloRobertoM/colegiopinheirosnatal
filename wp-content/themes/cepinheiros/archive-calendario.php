<?php get_header() ?>
<h1 class="titulo">Calendário</h1>
<div class="row">
   <div class="col-sm-8">
<?php
if (!$_GET['mes']) { $_GET['mes'] = date('m'); }

$args = array (
   'post_type'      => 'calendario',
   'posts_per_page' => 1000,
   'order'      => 'ASC',
   'meta_query' => array(
      array(
         'key'     => 'data',
         'value'   => array(date('Y').$_GET['mes'].'01', date('Y').$_GET['mes'].'31'),
         'compare' => 'BETWEEN',
      ),
   ),
);

$datas = new WP_Query( $args );

$meses = array(
    '01' => 'Janeiro',
    '02' => 'Fevereiro',
    '03' => 'Março',
    '04' => 'Abril',
    '05' => 'Maio',
    '06' => 'Junho',
    '07' => 'Julho',
    '08' => 'Agosto',
    '09' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro'
);
?>

      <section id="calendario-completo">
         <div class="row">

            <div class="col-sm-4">
               <h1 id="calendario-completo-ano"><?php echo date('Y') ?></h1>
               <ul id="calendario-completo-meses">
                  <?php foreach ($meses as $key => $mes) : ?>
                     <li><a href="<?php echo site_url('calendario?mes='.($key)) ?>" class="<?php echo ($_GET['mes'] == $key) ? 'ativo' : ''; ?>"><?php echo $mes ?></a></li>
                  <?php endforeach; ?>
               </ul>
            </div><!--col-sm-4-->

            <div class="col-sm-8">
               <h1 id="calendario-completo-mes"><?php echo $meses[date('m')] ?></h1>

                  <?php if ( $datas->have_posts() ) : ?>

                  <ul id="calendario-completo-atividades">
                     <?php while ( $datas->have_posts() ) : $datas->the_post(); ?>
                        <li class="<?php echo (get_field('data') == date('Ymd')) ? 'hoje' : ''; ?>">
                           <span class="dia"><?php echo substr(get_field('data'), 6, 2) ?></span>
                           <span class="atividade"><?php the_title(); ?></span>
                        </li>
                     <?php endwhile; ?>
                  </ul><!--calendario-completo-atividades-->

                  <?php else : ?>
                     <p id="nenhuma-atividade">Nenhuma atividade cadastrada.</p>
                  <?php endif; wp_reset_postdata(); ?>
            </div><!--col-sm-8-->

         </div><!--row-->
      </section><!--calendario-completo-->
   </div><!--col-sm-8-->
   <div class="col-sm-4"><?php get_sidebar() ?></div><!--col-sm-4-->
</div><!--row-->
<?php get_footer() ?>