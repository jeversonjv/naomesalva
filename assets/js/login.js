$(document).ready(function(evt) {
	$(".cadastro").hide();

	$(".controls a").click(function(evt) {
		let reference = $(this).data("reference");

		$(".controls a").removeClass("active");

		$(".tab").hide();

		$(this).addClass("active");
		$(`.${reference}`).show("fast");
		$("input[name=tab_actived]").val(reference);
	});


	$("#fechar_alerta").click(function (evt) { 
		$(this).parent().hide("fast");
	});

	$(".submit").click(function(evt){
		if($(this).parent()[0].checkValidity()){
			$(this).html(`<img src="http://localhost/naomesalva/assets/img/loading.gif" width="30" height="30" />`);
			let btn = $(this);
			setTimeout(function(){
				$(btn).parent().submit();
			}, 1500);
		} else {
			toastr.error("Preencha todos os campos corretamente!", "Ops...", {timeOut: 2500, progressBar: true});
		}
	});

	$("input").keyup(function(evt){
		if(evt.which == 13){
			let tab = $("input[name=tab_actived]").val(), btn;
			if(tab == "login")
				btn = $(".submit")[0];
			else
				btn = $(".submit")[1];
			$(btn).trigger("click");
		}
	});
});
