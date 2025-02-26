	<?php if (!is_home()) : ?></div><!--container--><?php endif; ?>
</section><!--conteudo-->

	<footer id="rodape">

		<section id="rodape-um">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="menu-rodape">
							<h1><a href="<?php echo site_url("escola") ?>">Escola</a></h1>
							<ul>
								<!--
								<li><a href="">link 1</a></li>
			    				<li><a href="">link 1</a></li>
			    				<li><a href="">link 1</a></li>
			    				<li><a href="">link 1</a></li>
			    				-->
							</ul>
						</div><!--menu-rodape-->
					</div><!--col-sm-2-->
					<div class="col-sm-2">
						<div class="menu-rodape">
							<h1><a href="<?php echo site_url("pedagogico") ?>">Pedagógico</a></h1>
							<ul>
								<!--
								<li><a href="">link 1</a></li>
			    				<li><a href="">link 1</a></li>
			    				<li><a href="">link 1</a></li>
			    				<li><a href="">link 1</a></li>
			    				-->
							</ul>
						</div><!--menu-rodape-->
					</div><!--col-sm-2-->
					<div class="col-sm-2">
						<div class="menu-rodape">
							<h1>Informativos</h1>
							<ul>
								<li><a href="<?php echo site_url("normas") ?>">Normas</a></li>
			    				<li><a href="<?php echo site_url("palavra-do-diretor") ?>">Palavra do diretor</a></li>
							</ul>
						</div><!--menu-rodape-->
					</div><!--col-sm-2-->
					<div class="col-sm-2">
						<div class="menu-rodape">
							<h1>Serviços</h1>
							<ul>
								<li><a href="<?php echo site_url("esporte") ?>">Esportes</a></li>
			    				<li><a href="<?php echo site_url("cursos") ?>">Cursos</a></li>
							</ul>
						</div><!--menu-rodape-->
					</div><!--col-sm-2-->
					<div class="col-sm-2">
						<div class="menu-rodape">
							<h1>Níveis de Ensino</h1>
							<ul>
								<li><a href="<?php echo site_url("ensino-infantil") ?>">Ensino Infantil</a></li>
								<li><a href="<?php echo site_url("ensino-fundamental-um-dois") ?>">Ensino Fundamental I e II</a></li>
								<li><a href="<?php echo site_url("ensino-medio") ?>">Ensino Médio</a></li>
								<li><a href="<?php echo site_url("ensino-pre-vestibular") ?>">Pré-Vestibular</a></li>
							</ul>
						</div><!--menu-rodape-->
					</div><!--col-sm-2-->
                    
					<div class="col-sm-2">
						<div class="menu-rodape">
							<h1><a href="<?php echo site_url("contato") ?>">Contato</a></h1>
						</div><!--menu-rodape-->
					</div><!--col-sm-2-->
				</div><!--row-->
			</div><!--container-->
		</section><!--rodape-um-->

		<section id="rodape-dois">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div id="rodape-copyright">Colégio Pinheiros Natal - Rua dos Pajeús, 1746 - Natal/RN | (84) 2030-6121</div>
					</div><!--col-sm-2-->
					<div class="col-sm-4 text-right">
						<div class="conectcm">
							<a href="http://www.conectecm.com/" target="_blank">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/conecte.png">
							</a>
						</div>
					</div><!--col-sm-2-->
				</div><!--row-->
			</div><!--container-->
		</section><!--rodape-dois-->

	</footer><!--rodape-->
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
	
	<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>assets/js/lightgallery/js/lightgallery-all.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>assets/js/lightgallery/js/lg-thumbnail.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>assets/js/lightgallery/js/lg-fullscreen.min.js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>assets/js/lightgallery/js/lg-video.min.js"></script> -->

	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/plugins/lightgallery.min.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/scripts.js"></script>

	<?php wp_footer() ?>

	<script type="text/javascript">
	// Can also be used with $(document).ready()
	$(document).ready(function() {

        $("#aniversariantes").mCustomScrollbar({
        	axis:"y",
        	theme:"dark"
        });

	});


	  
	</script>
</body>
</html>
