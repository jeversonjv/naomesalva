$(document).ready(function() {
	$(".curso").click(function() {
		window.location.href = $(this).data("link");
	});

	$(".menu ul li a").click(function(evt){
		$(".menu ul li").removeClass("menu-active");
		$(this).parent().addClass("menu-active");
	});

	$("#aula1").hover(function(){
		$(".menu ul li").removeClass("menu-active");
		let list = $(".menu ul").children()[0];
		$(list).addClass("menu-active");
	});

	$("#aula2").hover(function(){
		$(".menu ul li").removeClass("menu-active");
		let list = $(".menu ul").children()[1];
		$(list).addClass("menu-active");
	});

	$("#questionario").hover(function(){
		$(".menu ul li").removeClass("menu-active");
		let list = $(".menu ul").children()[2];
		$(list).addClass("menu-active");
	});

	$("#btn_correcao").click(function(){
		let corretas = 0, questoes = ["q1", "q2", "q3"];
		$.each(questoes, function(key, questao){
			$.each($(`input[name=${questao}]`), function(key, alternativa){
				let correto = $(alternativa).data("correto");
				if(correto == 1){
					if($(alternativa).is(":checked"))
						corretas++;
					$(alternativa).parent().addClass("questao_certa");
				}
				if(correto == 0 && $(alternativa).is(":checked")){
					$(alternativa).parent().addClass("questao_errada");
				}
			});
		});
		if(corretas == 3){
			$("#feedback").html(`<p>Parabéns. Você acertou todas as questões!</p>`);
		} else {
			$("#feedback").html(`<p>Você acertou <b>${corretas}/3</b>. Continue tentando!</p>`);
		}
		$("#questao1").addClass("lock");
		$("#questao2").addClass("lock");
		$("#questao3").addClass("lock");
	});

	$(".abrir_menu").click(function(){
		$(".menu").show("fast");
	});

	$("#fechar_menu").click(function(){
		$(".menu").hide("fast");
	});

});
