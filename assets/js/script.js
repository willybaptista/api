//var nome = "Willy";
//document.write(nome);

$(function(){

	$('#form').bind('submit', function(e) {

		e.preventDefault();

		var txt = $(this).serialize();

		$.ajax({

			type:'POST',
			url:'http://localhost/api/todo/addProduto',
			data:txt,
			//dataType:'json',
			success:function(result) {
				//$('#titulo').val("");
				//$('#quantidade').val("");
				//$('#valor').val("");			
			}

		});

	});

});

function addDados(nome, idade) {

	var area = document.getElementById("area");
	var texto = prompt("Qual seu nome?");

	area.innerHTML = nome + " " + texto + " tem "+idade+" anos";

}

function addTarefa() {

	var it = document.getElementById("item").value;

	var listahtml = document.getElementById("lista").innerHTML;

	listahtml = listahtml + "<li>"+it+"</li>";

	document.getElementById("lista").innerHTML = listahtml;

}

function somar() {

	var campo1 = parseFloat(document.getElementById("campo1").value);
	var campo2 = parseFloat(document.getElementById("campo2").value);

	var soma = parseFloat(campo1 + campo2);

	alert(soma);

}

