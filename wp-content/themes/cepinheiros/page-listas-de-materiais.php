<?php get_header() ?>
<h1 class="titulo"><?php the_title() ?></h1>
<div class="row">
	<div class="col-sm-8">

		<?php $path = wp_upload_dir(); ?>

		<ul id="lista">
			<?php /* <li><a href="<?php echo $path["baseurl"] . "/listas-2024/lista_ensino_medio_2024.pdf" ?>" target="_blank">Ensino Médio - 2024</a></li> */ ?> 
		   
		    <?php /* <li><a href="<?php echo $path["baseurl"] . "/listas-2024/lista_6_9_ano_2024.pdf" ?>" target="_blank">Lista de Material 6º ao 9º Ano - 2024</a></li> */ ?>
			<?php /* <li><a href="<?php echo $path["baseurl"] . "/listas-2022/listas_6_ao_9_ano_2021.pdf" ?>" target="_blank">6ª ao 9º Ano - 2022</a></li> */ ?>
			<li><a href="<?php echo $path["baseurl"] . "/listas-2025/nivel-iii-2025.pdf" ?>" target="_blank">Lista de Material Nível III - 2025</a></li>
			<li><a href="<?php echo $path["baseurl"] . "/listas-2025/nivel-iv-2025.pdf" ?>" target="_blank">Lista de Material Nível IV - 2025</a></li>
			<li><a href="<?php echo $path["baseurl"] . "/listas-2025/nivel-v-2025.pdf" ?>" target="_blank">Lista de Material Nível V - 2025</a></li>
			<li><a href="<?php echo $path["baseurl"] . "/listas-2025/lista_1_5_ano_2025.pdf" ?>" target="_blank">Lista de Material 1º ao 5º Ano - 2025</a></li>
			<li><a href="<?php echo $path["baseurl"] . "/listas-2025/lista_6_ano_2025.pdf" ?>" target="_blank">Lista de Mterial 6º Ano - 2025</a></li>
		    <li><a href="<?php echo $path["baseurl"] . "/listas-2025/lista_7_ano_2025.pdf" ?>" target="_blank">Lista de Mterial 7º Ano - 2025</a></li>
		    <li><a href="<?php echo $path["baseurl"] . "/listas-2025/lista_8_ano_2025.pdf" ?>" target="_blank">Lista de Mterial 8º Ano - 2025</a></li>
		    <li><a href="<?php echo $path["baseurl"] . "/listas-2025/lista_9_ano_2025.pdf" ?>" target="_blank">Lista de Mterial 9º Ano - 2025</a></li>
		    <li><a href="<?php echo $path["baseurl"] . "/listas-2025/lista_1_ano_ensino_medio_2025.pdf" ?>" target="_blank">Lista de Mterial 1º Ano do Ensino Médio   - 2025</a></li>
		    <li><a href="<?php echo $path["baseurl"] . "/listas-2025/lista_2_ano_ensino_medio_2025.pdf" ?>" target="_blank">Lista de Mterial 2º Ano do Ensino Médio  - 2025</a></li>
		    <li><a href="<?php echo $path["baseurl"] . "/listas-2025/lista_pre_2025.pdf" ?>" target="_blank">Lista de Mterial Pré 2025</a></li>
		</ul>

		<li>compras online dos livros do 6° ao Ensino Médio - Editora FTD</li>

		<video src=" . /listas-2025/compra_oline_ftd.mp4"

            controls
			width="500"
		>
				
		</video>

	</div><!--col-sm-8-->
	<div class="col-sm-4"><?php get_sidebar() ?></div><!--col-sm-4-->
</div><!--row-->
<?php get_footer() ?>