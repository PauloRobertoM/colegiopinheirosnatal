;(function($, window) {

	/*
	var errors_br = {
		not_empty: 'O campo :field é obrigatório.',
		email: 'O campo :field não tem um e-mail válido.',
	};

	var errors_en = {
		not_empty: 'O campo :field é obrigatório',
		email: 'O campo :field não tem um e-mail válido.',
	};

	function get_error(error, lang, campo) {
		return errors_br[error].replace(":field", campo);
	}
	*/

	$('#aniimated-thumbnials').lightGallery({
	    thumbnail:true
	}); 


	$(window).load(function() {
		$(".grid").removeClass("carregando");
		$('.grid').masonry({
		  percentPosition: true,
		  itemSelector: '.grid-item',
		  isResizeBound: true,
		  animate: true
		});
	});

	window.sr = new scrollReveal();

	$('[data-toggle="tooltip"]').tooltip();

	VMasker($(".vanilla_telefone")).maskPattern("(99) 99999-9999");
	VMasker($(".vanilla_data")).maskPattern("99/99/9999");

	$('.date').datetimepicker({
		locale: 'pt-BR',
	});

	$('.datecompra').datetimepicker({
		locale: 'pt-BR',
		format: 'DD/MM/YYYY',
		viewMode: 'years'
	});

	$nano = $(".nano")
	$nano.nanoScroller();
	$nano.bind("scrollend", function(e){
		var $aceite = $("#aceite");

		$aceite
			.removeClass("disabled")
			.find("input")
			.prop("disabled", false);
	});

	$(".lightgallery").lightGallery({
		selector: '.item',
		download: false
	}); 

	var $incluir_mergulho = $("#incluir_mergulho");
	var $possuo_credenciamento = $("#possuo_credenciamento");

	$incluir_mergulho
		.find("input")
		.on("click", function() {
			$possuo_credenciamento.toggleClass("disabled");
			$possuo_credenciamento.find("input").prop('disabled', function(i, v) { return !v; });
		});	

	//$('#bigvideo').vide('http://vjs.zencdn.net/v/oceans.mp4', {

	$('#bigvideo').vide(BASE_URL + "assets/videos/pedras.mp4", {
		volume: 1,
		playbackRate: 1,
		muted: true,
		loop: true,
		autoplay: true,
		posterType: 'detect',
		resizing: true
	}).resize();;


	$(".accordion .tab a").on("click", function() {
		$(".accordion .tab a").not(this).removeClass("selected");

		$(this).toggleClass("selected");
	});


	$(".remove").on("click", function( event ) {
		event.preventDefault();

		$( $(this).attr("data-html") ).remove();
	});

	/* --------------------------
	--- VITRINES
	-------------------------- */
	$('#vitrines .owl-carousel').owlCarousel({
		items: 1,
		autoplay: true,
		loop: $("#vitrines .owl-carousel .item").length-1,
		animateOut: 'fadeOut'
	});

	$('.anima_pages').owlCarousel({
		items: 1,
	});


	// $('.fechar').on("click", function( event ) {
	// 	event.preventDefault();
	// 	$("#popup").remove();
	// })

	


	/* --------------------------
	--- SLIDER
	-------------------------- */
	$('.slider').lightSlider({
      gallery: true,
      item: 1,
      verticalHeight: 350,
      vThumbWidth: 150,
      thumbItem: 4,
      thumbMargin: 4,
      slideMargin: 0
    });  

	/* --------------------------
	--- TOGGLE MENU
	-------------------------- */
	$("#toggleMenu").on("click", function( event ) {
		$(this).toggleClass("active");
		$("#menuMobile").toggleClass("active");
		$("body").toggleClass("no_overflow_mobile");
	});

	$(".tem_submenu").on("click", function( event ) {
		event.preventDefault();

		if ( $(this).siblings().hasClass("on") ) {
			$(this).siblings().removeClass("on");
			$(this).removeClass("active");
			return;
		}

		$(".tem_submenu").siblings().removeClass("on");
		$(".tem_submenu").removeClass("active");
		$(this).siblings().toggleClass("on");
		$(this).toggleClass("active");
	});


	/* --------------------------
	--- RESERVAR E-MAILS
	-------------------------- */
	$("#env").on("submit", function(event) {
		event.preventDefault();

		var $form   = $(this);
		var dados = $(this).serializeArray();

		$("input[type='checkbox']").each(function(i, e) {
			dados.push({ name: $(e).attr('name'), value: $(e).is(":checked") ? "SIM" : "NÃO" });
		});

		$.ajax({
			type: "POST",
			url: $form.data('url'),
			data: dados,
			beforeSend: function( response ) {
				$form.find(".alert").remove();
				$form.find("button[type='submit']").prop("disabled", true);
				$form.find(".loading").toggleClass("on");
			},
			success: function( response ) {
				if ( response.success )
				{
					$form.prepend( alerta('success', $form.data('success')) );

					for (var i = dados.length - 1; i >= 0; i--) {
						$form.find("input[name='"+dados[i].name+"']").val("");
					};
				} 

				if ( response.errors )
				{
					var error = Object.keys(response.errors)[0];
					$form.prepend( alerta('error', response.errors[error]) );
				} 
			},
			error: function( response ) {
				$form.prepend( alerta('danger', 'Ops, estamos com problemas em nosso servidor. Tente de novo mais tarde.') );
			},
			complete: function() {
				$form.find("button[type='submit']").prop("disabled", false);
				$form.find(".loading").toggleClass("on");
			}
		});

	});

	function alerta(tipo, texto) {
		var $output = "";

		$output += "<div class='alert alert-"+tipo+" alert-dismissible fade in'>";
			$output += "<button type='button' class='close' data-dismiss='alert'><span>×</span></button>";
			$output += texto;
		$output += "</div>";

		return $output;
	}

})(jQuery, window);

function fechar(){
	document.getElementById('popup').style.display = 'none';
	document.getElementById('shadow').style.display = 'none';
	document.getElementsByClassName('modal-open').remove();
}