<?php get_header() ?>

<div id="home">
  <div class="container">
<?php get_template_part( 'incs/vitrine' ); ?> 

<div align="center" id="popup" style="width: 100%; position:absolute; z-index:99999; margin-top: -400px; width:65%;">
    <div style="margin: 0 auto; width: 700px;" class="show">
        <div style="margin-left: 656px; position: absolute; z-index: 9999; margin-top: -3px">
            <a class="fechar" href="javascript: fechar();" style="cursor: pointer;" ><img style="max-width:40px;margin-left:-45px;margin-top:-10px;"src="<?php echo get_template_directory_uri() ?>/assets/img/close-icon.png" oncontextmenu="return false"/></a>
        </div>      


        <iframe width="560" height="315" src="https://www.youtube.com/embed/JNVokPY4ORE?si=jTiSnEQdbIley-_o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


    </div>
</div>

<div class="row">
	<div class="col-sm-4">
		<h1 class="titulo-in">Última notícias</h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="noticia">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'noticia-size' ); ?>
      <?php endif; ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			<?php echo crop_excerpt(get_the_content(), 100); ?>
			<div class="text-align-right"><a href="<?php echo site_url('noticias') ?>" class="mais">veja mais</a></div>
		</article><!--noticia-->
		<?php break; endwhile; endif; ?>
	</div><!--col-sm-4-->

	<div class="col-sm-4">
		<h1 class="titulo-in">Álbuns de fotos</h1>
		
<?php
$args = array (
  'post_type'              => 'albuns',
  'posts_per_page'         => '1',
);

$albuns = new WP_Query( $args );
?>

<?php if ( $albuns->have_posts() ) : ?>

  <?php while ( $albuns->have_posts() ) : $albuns->the_post(); ?>

      <article class="noticia">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'noticia-size' ); ?>
        <?php endif; ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php echo crop_excerpt(get_the_excerpt(), 100); ?>
        <div class="text-align-right"><a href="<?php echo site_url('albuns') ?>" class="mais">veja mais</a></div>
      </article><!--noticia-->

  <?php endwhile; ?>

<?php else : ?>
  <p>Nenhuma galeria cadastrada.</p>
<?php endif; wp_reset_postdata(); ?>
	</div><!--col-sm-4-->

	<div class="col-sm-4"><?php get_template_part( 'incs/datas' ); ?></div><!--col-sm-4-->
</div><!--row-->
  </div><!--container-->
</div><!--home-->

<div class="container">
<h1 class="titulo-home">Níveis de ensino</h1>
<div class="row">
  <div class="col-sm-3">
    <a href="<?php echo site_url("ensino-infantil") ?>">
      <h1 class="titulo-in">Infantil</h1>
      <img width="100%" src="<?php echo get_template_directory_uri() ?>/assets/img/ensino-infantil.png">
    </a>
  </div><!--col-sm-3-->
  <div class="col-sm-3">
    <a href="<?php echo site_url("ensino-fundamental-um-dois") ?>">
      <h1 class="titulo-in">Fundamental I e II</h1>
      <img width="100%" src="<?php echo get_template_directory_uri() ?>/assets/img/fundamental-1-e-2.png">
    </a>
  </div><!--col-sm-3-->
  <div class="col-sm-3">
    <a href="<?php echo site_url("ensino-medio") ?>">
      <h1 class="titulo-in">Médio</h1>
      <img width="100%" src="<?php echo get_template_directory_uri() ?>/assets/img/ensino-medio.png">
    </a>
  </div><!--col-sm-3-->
  <div class="col-sm-3">
    <a href="<?php echo site_url("ensino-pre-vestibular") ?>">
      <h1 class="titulo-in">Pré Vestibular</h1>
      <img width="100%" src="<?php echo get_template_directory_uri() ?>/assets/img/pre-vestibular.png">
    </a>
  </div><!--col-sm-3-->
</div><!--row-->

<div class="row">
  <div class="col-sm-4">
    <h1 class="titulo-home">Biossegurança</h1>
    <a href="http://colegiopinheirosnatal.com.br/wp-content/uploads/protocolo_seguranca/protocolo_de_biosseguranca_para_retorno_das_atividades_do_colegio_pinheiros_natal_setembro_2020.pdf" target="_blank"><img width="100%" src="<?php echo get_template_directory_uri() ?>/assets/img/banner-news.png"></a>
  </div><!--col-sm-4-->
  <div class="col-sm-4">
    <h1 class="titulo-home">Aniversariantes</h1>
    <ul id="aniversariantes">


<?php
// WP_Query arguments
$args = array (
  'post_type'              => 'aniversariantes',
  'tag_name'               => 'categorias_aniversariantes',
  'posts_per_page'         => '100',
);
// The Query
$q_aniversariantes = new WP_Query( $args );

$aniversariantes = array();

if ( $q_aniversariantes->have_posts() ) {
  while ( $q_aniversariantes->have_posts() ) {
    $q_aniversariantes->the_post();
    
    $aniversariantes[$post->ID] = array(
      "post" => $post,
      "data_aniversario" => array(
        "dia" => substr(get_field("aniversario"), 6, 2),
        "mes" => substr(get_field("aniversario"), 4, 2),
        "ano" => substr(get_field("aniversario"), 0, 4)
        )
      );
  }
} else {
  // no posts found
}
// Restore original Post Data
wp_reset_postdata();

function hasAniversariantes() {
  global $aniversariantes;

  foreach ($aniversariantes as $value) {
    if ($value["data_aniversario"]["mes"] == date("m")) {
      return true;
      break;
    }
    return false;
  }

}
?>
    <?php if (hasAniversariantes()) : ?>
      <?php foreach ($aniversariantes as $chave => $value) : ?>
        <li class="aniversariante">
          <span class="nome"><?php echo $value["post"]->post_title ?></span>
          <span class="data"><?php echo $value["data_aniversario"]["dia"] ?>/<?php echo $value["data_aniversario"]["mes"] ?>/<?php echo $value["data_aniversario"]["ano"] ?></span>
          <span class="funcao">
            <?php 
            $funcoes = get_the_terms($value["post"]->ID,"categorias_aniversariantes");
            foreach ($funcoes as $funcao) : ?>
            <span class="funcao-term"><?php echo $funcao->name; ?></span><br>
            <?php endforeach; ?>
          </span>
        </li><!--aniversariante-->
      <?php endforeach; ?>
    <?php else : ?>
      <p>Nenhum aniversariante nesse mês.</p>
    <?php endif; ?>

    </ul><!--aniversariantes-->
  </div><!--col-sm-4-->
  <div class="col-sm-4">
    <h1 class="titulo-home">Facebook</h1>
   <div class="sidebar-facebook">
  <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcentroeducacionalpinheirosnatal&amp;width=300&amp;height=230&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:230px;" allowTransparency="true"></iframe>
  </div><!--sidebar-facebook-->
  </div><!--col-sm-4-->
</div><!--row-->
</div><!--container-->

<?php get_footer() ?>