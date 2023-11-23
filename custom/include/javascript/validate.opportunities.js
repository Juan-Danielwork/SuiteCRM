jQuery("document").ready(function() {

	/*---------------------------------------------*
	 * AL CARGAR EL FORMULARIO, NUEVO AVALUO:      *
	 * VERIFICAR SI SE TRATA DE UN AVALUO NUEVO    *
	 *---------------------------------------------*/
	if( jQuery("input[type='hidden'][name='record']").val() == "" )
	{
		/* SI ES UN AVALUO NUEVO,
		 * GENERAR AUTOMATICAMENTE EL NUMERO DE AVALUO
		 */
		jQuery.ajax({
			url: "validate.php",
			data: "opt=autonumber",
			type: "POST",
			success: function(data) {
				
				if( data != "" )
				{
					jQuery("input[id='name'][name='name']").attr("value", data);
					//jQuery("input[id='name'][name='name']").bt('El Numero de Avaluo es Generado Automaticamente.',{ trigger: 'click', positions: 'right', padding: 10, cornerRadius: 10, fill: 'rgba(0, 0, 0, .7)', strokeStyle: '#000', cssStyles: {color: '#FFF', fontWeight: 'normal', background: '#000'} }).trigger("click");
				}

			}
		});
	}

	/*---------------------------------------------------*
	 * VERIFICAR EL ROL DEL USUARIO QUE ESTA EDITANDO    *
	 * O CREANDO EL AVALUO.                              *
	 *												     *
	 *												     *
	 * SI EL ROL DEL USUARIO ES "Avaluador":             *
	 *    - DESHABILITAR LA EDICION DEL CAMPO,           * 
	 *      "Numero de Avaluo".                          *
	 *												     *
	 *    - NO MOSTRAR EN EL DROPDOWN DE ETAPAS,         * 
	 *      LA ETAPA "Finalizado".                       *
	 *---------------------------------------------------*/
	jQuery.ajax({
		url: "validate.php",
		data: "opt=checkrol",
		type: "POST",
		success: function(data) {
			
			if( data == "avaluador" )
			{
				jQuery("select[name='etapa_de_avaluos_c'] option[value='finalizado']").remove();
			}
		}
	});
	
	$("select").css({"width": "inherit"});
	$("#name").prop("readonly","readonly");

	/* Campo: Cuenta no es requerido */
	$("div").find('[data-label="LBL_ACCOUNT_NAME"]').children("span").remove();
	removeFromValidate('EditView','account_name');
});

function checkCustomValidation()
{
	if($("input[type='hidden'][name='record']").val() != "" )
	{
		var x = document.EditView.etapa_de_avaluos_c.selectedIndex;
		etapa = document.EditView.etapa_de_avaluos_c.options[x].value;
		if( etapa == "por cobrar" )
		{
			jQuery.ajax({
				url: "validate.php",
				data: "opt=infoavaluo&idavaluo="+ jQuery("input[type='hidden'][name='record']").val(),
				type: "POST",
				success: function(data) {
					if(data != "")
					{
						var result = data.split("|");
						var saldo_pendiente = result[5];

						if( saldo_pendiente != "" && saldo_pendiente < 0 )
						{
							alert('Debe crear una factura para este avaluo, para poder guardar en etapa de "Por Cobrar".\nNota: Esto es necesario para poder enviarle al cliente la notificacion de finalizado con el verdadero saldo pendiente.');
							return false;
						}
					}
				}
			});
		}
	}
	var _form = document.getElementById('EditView');
	_form.action.value='Save'; 
	if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);
	return false;
}
