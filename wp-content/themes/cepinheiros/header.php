<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' ); bloginfo('title') ?> <?php bloginfo('description') ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>assets/js/lightgallery/css/lightgallery.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugins/lightgallery.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugins/lg-transitions.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugins/lg-fb-comment-box.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugins/loading.gif">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugins/lg.woff">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugins/lg.ttf">

	<?php wp_head() ?>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>

<?php if (is_home() and date("Y-m-d H:i:s", $_SERVER["REQUEST_TIME"]) <= "2014-12-12 12:10:25") : ?>
<!-- Modal -->
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
     	<img src="<?php echo get_template_directory_uri() ?>/assets/img/popups/popup-cep.png" width="100%">
      </div>

    </div>
  </div>
</div>
<?php endif; ?>


	<div class="container">
        <form name="form1" action="https://app2.activesoft.com.br/sistema/LoginDireto.asp" method="post" style="
            background: #083586;
            color: #fff;
            display: flex;
            height: 23px;
            float: right;
            padding: 0px;
            ">
            <input name="P" type="hidden" id="P" value="PINHEIROS"> 
            <span>Login:</span>
            <input name="Login" type="text" id="Login"> 
            <span>Senha:</span>
            <input name="Senha" type="password" id="Senha"> <br>
            <input type="submit" name="Submit" value="Acessar">
		</form>
		
		<header id="topo">
			<a href="<?php echo site_url() ?>">
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="<?php echo bloginfo('title') ?>">
			</a>
		</header><!--topo-->

		<nav id="menu">
			<ul>
				<li>
                <a href="<?php echo site_url('escola') ?>">Escola</a>
					<ul class="submenu">
						<li><a href="<?php echo site_url('infraestrutura') ?>">Infraestrutura</a></li>
					</ul><!--submenu-->
				</li>
                <li>
				<li><a href="<?php echo site_url('pedagogico') ?>">Pedagógico</a></li>
				<li>
					<a href="">Informativo</a>
					<ul class="submenu">
						<li><a href="<?php echo site_url('normas') ?>">Normas</a></li>
				    	<li><a href="<?php echo site_url('palavra-do-diretor') ?>">Palavra do diretor</a></li>
				    	<li><a href="<?php echo site_url('regimento-escolar-2024') ?>">Regimento escolar 2024</a></li>
					</ul><!--submenu-->
				</li>
				<li>
					<a href="">Serviços</a>
					<ul class="submenu">
						<li><a href="<?php echo site_url('esportes') ?>">Esportes</a></li>
				    	<li><a href="<?php echo site_url('diferenciais') ?>">Diferenciais</a></li>
					</ul><!--submenu-->
				<li>
					<a href="">Níveis de Ensino</a>
					<ul class="submenu">
						<li><a href="<?php echo site_url("ensino-infantil") ?>">Ensino Infantil</a></li>
						<li><a href="<?php echo site_url("ensino-fundamental-um-dois") ?>">Ensino Fundamental I e II</a></li>
						<li><a href="<?php echo site_url("ensino-medio") ?>">Ensino Médio</a></li>
						<li><a href="<?php echo site_url("ensino-pre-vestibular") ?>">Pré-Vestibular</a></li>
					</ul>
				</li>
				<li><a href="<?php echo site_url('noticias') ?>">Notícias</a></li>
				<li><a href="<?php echo site_url('contato') ?>">Contato</a></li>
			</ul>			
		</nav><!--menu-->
	</div><!--container-->


		<section id="conteudo">
			<?php if (!is_home()) : ?><div class="container"><?php endif; ?>