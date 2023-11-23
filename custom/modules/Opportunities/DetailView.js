function disableButtonForABONOS(){
	$('li.searchTabHandler.basic').hide(); 
	var fieldValue = $('#etapa_de_avaluos_c').val();
	if(fieldValue == 'finalizado' || fieldValue == 'Cancelado'){
		$('#formc2011_payment_opportunities a').hide();
		/*$("#C2011_Payment_nuevo_button").on('click', function(e) {
			alert("Avaluos is in "+fieldValue+" Stage");
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
			return false;
			
			//do other stuff when a click happens
		});*/
	}
}


$( window ).load(function() {
  disableButtonForABONOS();
});