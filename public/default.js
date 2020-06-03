$(function() {
	$(".calcularValor").change(function(event) {
		buscarValorReserva();
	});

});
function buscarValorReserva() {
	$fide = '';
	$('input[name=fidelidade]').each(function(index, el) {
		if(el.checked)
			$fide = el.value;
	});
	$.ajax( {
		method: "GET",
		url: '/calcularReserva',
		data: {
			hotel:$('select[name=hotel-id]').val(),
			fidelidade:$fide,
			data:$('input[name=data]').val()
		},
		success: function( resposta ) {
			$('#valor').val(resposta);
		},
		error: function() {
		}
	} );
}