<?php get_header() ?>
<h1 class="titulo"><?php the_title() ?></h1>
<div class="row">
	<div class="col-sm-8">

		<?php $path = wp_upload_dir(); ?>

		<ul id="lista">
			<?php /* <li><a href="<?php echo $path["baseurl"] . "/listas-2024/lista_ensino_medio_2024.pdf" ?>" target="_blank">Ensino Médio - 2024</a></li> */ ?> 
		   
		    <?php /* <li><a href="<?php echo $path["baseurl"] . "/listas-2024/lista_6_9_ano_2024.pdf" ?>" target="_blank">Lista de Material 6º ao 9º Ano - 2024</a></li> */ ?>
			<?php /* <li><a href="<?php echo $path["baseurl"] . "/listas-2022/listas_6_ao_9_ano_2021.pdf" ?>" target="_blank">6ª ao 9º Ano - 2022</a></li> */ ?>
			<li><a href="<?php echo $path["baseurl"] . "/regimento-escolar-2024/regimento_escolar_2024.pdf" ?>" target="_blank">Regimento escolar 2024</a></li>
			
		</ul>

	</div><!--col-sm-8-->
	<div class="col-sm-4"><?php get_sidebar() ?></div><!--col-sm-4-->
</div><!--row-->
<?php get_footer() ?>