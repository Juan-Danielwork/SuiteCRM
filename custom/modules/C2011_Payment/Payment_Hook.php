<?php

class Payment_Hook{
//Defino la clase que voy a llamar por parámetro cuando lanze el hook
//Defino la función enviar_mail que recibirá por referencia el $bean que vamos a salvar, el evento que en nuestro caso recibira "before_save" y los argumentos especificos del evento que no vamos a usar en este ejemplo
	
	//public $ida;
	function set_payment_name(&$bean, $event, $arguments)
	{
		//$ida;
        //die("CERRADO");
                //CONSULTAR EL TOTAL ABONONADO DEL AVALUO
		if(is_object($bean->c2011_payment_opportunitiesopportunities_ida)){
			//echo "<pre>";
			//var_dump((($bean->c2011_payment_opportunitiesopportunities_ida->rows)));
			$id =$bean->c2011_payment_opportunitiesopportunities_ida->rows;
			$ida =(array_pop(array_pop($id)));
			//var_dump($ida);
			//echo "</pre>";
			//$ida=(array_pop(array_pop($bean->c2011_payment_opportunitiesopportunities_ida->rows)));
			//die("HOOK1");			
                }else{
                  $ida=$bean->c2011_payment_opportunitiesopportunities_ida;
                }
		//$GLOBALS['log']->fatal('NUMERO DE ABONO'.$ida);
		//die();	

			//"ABONO NAME": $bean->name
		//"NUMERO DE AVALUO": opportunity_id_c 
		
		// VERIFICAR SI EL CAMPO name ES VACIO o IGUAL A NULL
		// CREAR EL NOMBRE DE ABONO
		if(trim($bean->name) == "" || $bean->name == NULL) 
		{
			$query40 	= "SELECT name FROM opportunities WHERE id = '".$ida."' AND deleted = 0";
			$result40 	= $bean->db->query($query40, true);
			if($bean->db->getRowCount($result40) == 1) 
			{
				$row40 				= $bean->db->fetchByAssoc($result40);
				$numero_de_abono 	= $row40['name'];
			}

			$GLOBALS['log']->fatal('NUMERO DE ABONO'.$numero_de_abono);
			
			//GUARDAR EL NUMERO DE AVALUO COMO NOMBRE DE ABONO
			$queri = "UPDATE c2011_payment SET name = '".$numero_de_abono."' WHERE id = '".$bean->id."'";
			$bean->db->query($queri);
		}
		
		$query9                 = "SELECT SUM(abonos.monto) AS total_abonado FROM c2011_payment AS abonos, c2011_payment_opportunities_c AS relopp WHERE abonos.deleted = 0 AND relopp.deleted = 0 AND relopp.c2011_payment_opportunitiesopportunities_ida = '".$ida."' AND relopp.c2011_payment_opportunitiesc2011_payment_idb = abonos.id";
                $result9                = $bean->db->query($query9, true);
                $row9                   = $bean->db->fetchByAssoc($result9);
                $total_abonado  = number_format($row9["total_abonado"],2, '.', ',');

                //OBTENER EL ID DE LA FACTURA
                $query41        = "SELECT cb4in_invoice_opportunitiescb4in_invoice_idb AS invoice_id FROM cb4in_invoice_opportunities_c WHERE cb4in_invoice_opportunitiesopportunities_ida = '".$ida."'";
                $result41       = $bean->db->query($query41, true);
                $row41          = $bean->db->fetchByAssoc($result41);

                // ACTUALIZAR EL VALOR DEL ABONO EN EL LA FACTURA
                $query50 = "UPDATE cb4in_invoice SET abono = '$total_abonado' WHERE id = '".$row41['invoice_id']."'";

                //$GLOBALS['log']->fatal($query41);
                //$GLOBALS['log']->fatal($query50);
                $bean->db->query($query50);
	
	}
	
	function set_saldo_pendiente(&$bean, $event, $arguments)
	{
		
		//$ida;
        //die("CERRADO");
                //CONSULTAR EL TOTAL ABONONADO DEL AVALUO
                if(is_object($bean->c2011_payment_opportunitiesopportunities_ida)){
                	//echo "<pre>";
                        //var_dump(reset(reset($bean->c2011_payment_opportunitiesopportunities_ida->rows)));
                        $id =$bean->c2011_payment_opportunitiesopportunities_ida->rows; 
			$ida=(array_pop(array_pop($id)));
                        //var_dump($bean->c2011_payment_opportunitiesopportunities_ida->rows);
                        //echo "</pre>";
                        //die("HOOK0");

                }else{
                  $ida=$bean->c2011_payment_opportunitiesopportunities_ida;
                }

		//$GLOBALS['log']->fatal("***************AFTER SAVE HOO    1****************");
                //echo "<pre>";
                //var_dump($bean->c2011_payment_opportunitiesopportunities_ida);
                //echo"</pre>";

                //die("stop");

		$old_paid = new C2011_Payment();
		$old_paid->retrieve($bean->id);
		
		// VERIFICAR SI EL ABONO VIENE DEL FORMULARIO DE "CREAR ABONO"
		// y NO ES UNA MODIFICACION DE UN ABONO YA EXISTENTE
		if(!isset($old_paid->id) && $old_paid->id == "") 
		{
			//MONTO ABONADO
			$monto_abonado	 = $bean->monto;
			
			//CONSULTAR EL SALDO PENDIENTE DEL AVALUO
			$query40 	= "SELECT saldo_pendiente_c FROM opportunities_cstm WHERE id_c = '".$ida."'";
			$result40 	= $bean->db->query($query40, true);
			if($bean->db->getRowCount($result40) > 0){
				$row40				= $bean->db->fetchByAssoc($result40);
				$saldo_pendiente 	= (isset($row40['saldo_pendiente_c']) ? $row40['saldo_pendiente_c'] : 0);
			}
			else{
				$saldo_pendiente 	= 0;
			}
			
			// VERIFICAR SI EL SALDO PENDIENTE ES UN ABONO A FAVOR DEL CLIENTE
			// O SI ES EL SALDO PENDIENTE REAL QUE DEBE EL CLIENTE
			if( $saldo_pendiente < 0){
				// Si saldo pendiente es un monto negativo, se trata de un abono 
				// a favor del cliente
				$nuevo_saldo_pendiente = $saldo_pendiente - $monto_abonado;
			}
			else{
				// Si saldo pendinete es un monto positivo, se trata de
				// del verdadero saldo pendiente que debe el cliente
				$nuevo_saldo_pendiente = $saldo_pendiente - $monto_abonado;
			}
			
			$nuevo_saldo_pendiente = number_format($nuevo_saldo_pendiente,2, '.', ',');
		
			// ACTUALIZAR EL VALOR DEL SALDO PENDIENTE EN EL AVALUO
			$queri = "UPDATE opportunities_cstm SET saldo_pendiente_c = '".$nuevo_saldo_pendiente."' WHERE id_c = '".$ida."'";
			$bean->db->query($queri);
			
			//OBTENER EL ID DE LA FACTURA
			$query41 	= "SELECT cb4in_invoice_opportunitiescb4in_invoice_idb AS invoice_id FROM cb4in_invoice_opportunities_c WHERE cb4in_invoice_opportunitiesopportunities_ida = '".$ida."'";
			$result41 	= $bean->db->query($query41, true);
			$row41		= $bean->db->fetchByAssoc($result41);
			
			// ACTUALIZAR EL VALOR DEL SALDO PENDIENTE EN EL LA FACTURA
			$query50 = "UPDATE cb4in_invoice SET saldo_pendiente = '".$nuevo_saldo_pendiente."' WHERE id = '".$row41['invoice_id']."'";
			$bean->db->query($query50);
		}
	}
	
	function set_total_abonado(&$bean, $event, $arguments)
	{
			
		//$ida;
        //die("CERRADO");
                //CONSULTAR EL TOTAL ABONONADO DEL AVALUO
                if(is_object($bean->c2011_payment_opportunitiesopportunities_ida)){
                 echo "<pre>";
                        //(reset(reset($bean->c2011_payment_opportunitiesopportunities_ida->rows)));
                        echo "</pre>";
			die();
			$ida=(reset(reset($bean->c2011_payment_opportunitiesopportunities_ida->rows)));
                }else{
                  $ida=$bean->c2011_payment_opportunitiesopportunities_ida;
                }


		//CONSULTAR EL TOTAL ABONONADO DEL AVALUO
		$query9			= "SELECT SUM(abonos.monto) AS total_abonado FROM c2011_payment AS abonos, c2011_payment_opportunities_c AS relopp WHERE abonos.deleted = 0 AND relopp.deleted = 0 AND relopp.c2011_payment_opportunitiesopportunities_ida = '".$ida."' AND relopp.c2011_payment_opportunitiesc2011_payment_idb = abonos.id";
		$result9 		= $bean->db->query($query9, true);
		$row9			= $bean->db->fetchByAssoc($result9);
		$total_abonado	= number_format($row9["total_abonado"],2, '.', ',');
		
		//OBTENER EL ID DE LA FACTURA
		$query41 	= "SELECT cb4in_invoice_opportunitiescb4in_invoice_idb AS invoice_id FROM cb4in_invoice_opportunities_c WHERE cb4in_invoice_opportunitiesopportunities_ida = '".$ida."'";
		$result41 	= $bean->db->query($query41, true);
		$row41		= $bean->db->fetchByAssoc($result41);
		
		// ACTUALIZAR EL VALOR DEL ABONO EN EL LA FACTURA
		$query50 = "UPDATE cb4in_invoice SET abono = '$total_abonado' WHERE id = '".$row41['invoice_id']."'";
		
		//$GLOBALS['log']->fatal($query41);
		//$GLOBALS['log']->fatal($query50);
		$bean->db->query($query50); 
	}
	
	function disableSaveIfStatusIsFinalized(&$bean, $event, $arguments){
		if(isset($bean->c2011_payment_opportunitiesopportunities_ida) && !empty($bean->c2011_payment_opportunitiesopportunities_ida)){
			$oppBean = BeanFactory::getBean('Opportunitites', $bean->c2011_payment_opportunitiesopportunities_ida);
			if($oppBean->etapa_de_avaluos_c == 'finalizado' || $oppBean->etapa_de_avaluos_c == 'Cancelado'){
				sugar_die("Avaluos is in ".$oppBean->etapa_de_avaluos_c." stage");
				die("Avaluos is in ".$oppBean->etapa_de_avaluos_c." stage");
			}
		}
	}
}


?>
