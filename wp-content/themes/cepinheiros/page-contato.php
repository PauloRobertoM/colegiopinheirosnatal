<?php get_header() ?>
<h1 class="titulo">Contato</h1>
<div class="row">
	<div class="col-sm-8">

		<?php echo get_message('error') ?>
		<?php echo get_message('sucess') ?>

		<form method="post" action="?contato">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group"><input type="text" name="nome" class="form-control" placeholder="nome" value="<?php echo get_input_old('nome') ?>"></div>
				</div><!--col-sm-6-->
				<div class="col-sm-6">
					<div class="form-group"><input type="text" name="email" class="form-control" placeholder="email" value="<?php echo get_input_old('email') ?>"></div>
				</div><!--col-sm-6-->
				<div class="col-sm-6">
					<div class="form-group"><input type="text" name="telefone" class="form-control" placeholder="telefone" value="<?php echo get_input_old('telefone') ?>"></div>
				</div><!--col-sm-6-->
				<div class="col-sm-6">
					<div class="form-group"><input type="text" name="assunto" class="form-control" placeholder="assunto" value="<?php echo get_input_old('assunto') ?>"></div>
				</div><!--col-sm-6-->
			</div><!--row-->

			<div class="form-group"><textarea name="mensagem" rows="7" class="form-control" placeholder="mensagem"><?php echo get_input_old('mensagem') ?></textarea></div>

			<div class="form-group" id="captcha">
				<?php $rand_um = rand(1,10); ?>
				<?php $rand_dois = rand(1,10); ?>
				<input type="hidden" value="<?php echo $rand_um ?>" name="numero_um">
				<input type="hidden" value="<?php echo $rand_dois ?>" name="numero_dois">
				<span id="captcha-pergunta">Quanto é <b><?php echo $rand_um ?></b> + <b><?php echo $rand_dois ?></b>?</span><input type="text" name="captcha" class="form-control" id="captcha-resposta">
			</div>

			<div style="text-align: right;"><button class="botao" id="enviar">Enviar</button></div>
		</form>

		<section id="google-maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.3802227358196!2d-35.22215!3d-5.8018550000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2554d0abe5b23%3A0xa5033ce88ad265a6!2sCentro+Educacional+Pinheiro!5e0!3m2!1spt-BR!2sbr!4v1417045849985" width="100%" height="350" frameborder="0" style="border:0"></iframe>
		</section><!--google-maps-->

	</div><!--col-sm-8-->
	<div class="col-sm-4"><?php get_sidebar() ?></div><!--col-sm-4-->
</div><!--row-->
<?php get_footer() ?>