$(document).ready(function() {
	$("#achat").val("");
	$("#vente").val("");
	$("#salaries").val("");
	


	$(".btn-calculer").click(function (event)	{
		event.preventDefault();
		$("#step-1").css("display", "none");

		var nbFacturesAchat = $("#achat").val();
		var nbFacturesVente = $("#vente").val();
		var nbSalaries = $("#salaries").val();

		$("#nb-factures-achat").text(nbFacturesAchat);
		$("#nb-factures-vente").text(nbFacturesVente);
		$("#nb-salaries").text(nbSalaries);
		$("#step-2").css("display", "inline-block");

		$.ajax({
			dataType : "json",
			type: "POST",
			data: {
				factures_achat : nbFacturesAchat,
				factures_ventes : nbFacturesVente,
				salaries : nbSalaries
			},
			url: "php/calcul.php",
			success: function (data) {
			console.log(data);
				$("#val-min").text(data.min);
				$("#val-max").text(data.max);
			}			
		})

	});
})