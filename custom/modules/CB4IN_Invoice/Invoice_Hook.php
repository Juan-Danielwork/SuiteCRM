<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/ 

class Invoice_Hook{
//Defino la clase que voy a llamar por parámetro cuando lanze el hook
//Defino la función enviar_mail que recibirá por referencia el $bean que vamos a salvar, el evento que en nuestro caso recibira "before_save" y los argumentos especificos del evento que no vamos a usar en este ejemplo
	
	function save_invoice_info(&$bean, $event, $arguments)
	{
		$GLOBALS["log"]->fatal("************* SAVE HOOK****************");
		if($bean->name == "")
		{
			$bean->name = 0;
		}

		//SI EXISTE VARIABLE DE SESION
		//SE TRATA DE UNA FACTURA NUEVA
		if( isset($_SESSION['nuevo_saldo_pendiente']) && !empty($_SESSION['nuevo_saldo_pendiente']) )
			$bean->saldo_pendiente	= $_SESSION['nuevo_saldo_pendiente'];
		
		
		//$bean->costo_avaluo 	= number_format($bean->costo_avaluo,2, '.', ',');
		
		$avaluo = new Opportunity();
		$avaluo->retrieve($bean->cb4in_invo99e5unities_ida);
		
		if(isset($avaluo->name) && $avaluo->name != "") 
		{
			//GUARDAR CORRECTAMENTE LA FECHA DE CREACION DE LA FACTURA
			$date_created_1 	= $_SESSION['fecha_factura'];
			$date_created_2 	= $_SESSION['fecha_factura'];
			
			//SELECIONAR MES Y AÑO DE CREACION
			$query1 	= "SELECT MONTH(date_entered), YEAR(date_entered) FROM cb4in_invoice WHERE id = '".$bean->id."' AND deleted = 0";
			$result1 	= $bean->db->query($query1, true);
			if($bean->db->getRowCount($result1) == 1) 
			{
				$row1 			= $bean->db->fetchByAssoc($result1);
				$month_entered 	= (string)$row1['MONTH(date_entered)'];
				$year_entered 	= (string)$row1['YEAR(date_entered)'];
			}
			
			// ACTUALIZAR DATOS DE LA FACTURA Y EL SALDO PENDIENTE
			$query2 = "UPDATE cb4in_invoice SET name = '".$bean->name."', cliente = '".$avaluo->cliente_c."', assigned_user_id = '".$avaluo->assigned_user_id."', fecha_factura = '$date_created_1', date_created_1 = '$date_created_1', date_created_2 = '$date_created_2', month_entered = '$month_entered', year_entered = '$year_entered', saldo_pendiente = '".$bean->saldo_pendiente."', costo_avaluo = '".$bean->costo_avaluo."' WHERE id = '".$bean->id."'";
			$bean->db->query($query2);
			
			
			//VERIFICAR SI YA EXISTE Y SE A GUARDADO LOS CAMPOS PERSONALIZADOS ( fecha de factura y numero de avaluo )
			$query50 	= "SELECT * FROM cb4in_invoice_cstm WHERE id_c = '".$bean->id."'";
			$result50 	= $bean->db->query($query50, true);
			$row50 		= $bean->db->fetchByAssoc($result50);
			
			
			$invoice_date = date('Y-m-d', strtotime($bean->date_entered));
			//ACTUALIZAR FECHA DE FACTURA Y EL NUMERO DE AVALUO
			if( isset($row50["id_c"]) && $row50["id_c"] != "" ){
				$query52 = "UPDATE cb4in_invoice_cstm SET invoice_date_c = '".$invoice_date."', numero_avaluo_c = '".$avaluo->name."' WHERE id_c = '".$bean->id."'";
			}
			else{
				$query52 = "INSERT INTO cb4in_invoice_cstm (id_c, invoice_date_c, numero_avaluo_c) VALUES('".$bean->id."', '".$invoice_date."', '".$avaluo->name."')";
			}
			$bean->db->query($query52);
			
			/*//SI NO ACTUALIZA, APLICAR ESTOS QUERY
			$query56 = "UPDATE cb4in_invoice_cstm SET invoice_date_c = '$invoice_date' WHERE id_c = '$invoice_id'";
			$bean->db->query($query56);
			$query57 = "UPDATE cb4in_invoice_cstm SET numero_avaluo_c = '$numero_avaluo' WHERE id_c = '$invoice_id'";
			$bean->db->query($query57);
			*/
			
			/*********************************************************************************************
			 * SI NO SE ACTUALIZA, LA FECHA Y EL NUMERO DE AVALUO 
			 * APLICAR ESTOS QUERY
			 ***********************************************************************************************/
			 //ACTUALIZAR FECHAS DE FACTURAS
			/*$query80  = "SELECT id, DATE_FORMAT(date_entered, '%Y-%m-%d') as date FROM cb4in_invoice WHERE deleted = 0";
			$result80 = $bean->db->query($query80,true);

			while(($row80=$bean->db->fetchByAssoc($result80)) != null) {
				$invoice_id 	= $row80["id"];
				$invoice_date   = $row80["date"];

				$query2 = "UPDATE cb4in_invoice_cstm SET invoice_date_c = '$invoice_date' WHERE id_c = '$invoice_id'";
				$bean->db->query($query2);
			}*/
			
			
		    //ACTUALIZAR NUMERO DE AVALUO
			/*
			$query81  = "SELECT invopp.cb4in_invoa17binvoice_idb AS invoice_id, opp.name AS numero_avaluo FROM opportunities AS opp, cb4in_invoipportunities_c AS invopp WHERE invopp.deleted = 0 AND invopp.cb4in_invo99e5unities_ida = opp.id";
			$result81 = $bean->db->query($query81,true);

			while(($row81=$bean->db->fetchByAssoc($result81)) != null) {
				$invoice_id 	 = $row81["invoice_id"];
				$numero_avaluo   = $row81["numero_avaluo"];

				$query2 = "UPDATE cb4in_invoice_cstm SET numero_avaluo_c = '$numero_avaluo' WHERE id_c = '$invoice_id'";
				$bean->db->query($query2);
			}*/
			//*************************************************************************************

			
			// VERIFICAR SI YA EXISTE LA RELCION ENTRE LA CUENTA Y ESTA FACTURA
			$query54 	= "SELECT * FROM cb4in_invoice_accounts_c WHERE deleted = 0  AND cb4in_invoice_accountsaccounts_ida  = '".$avaluo->account_id."' AND cb4in_invoice_accountscb4in_invoice_idb = '".$bean->id."'";
			$result54 	= $bean->db->query($query54, true);
			$row54 		= $bean->db->fetchByAssoc($result54);
			
			if( !isset($row54["id"]) && $row54["id"] == "" ) 
			{
				$related = $bean->load_relationship('cb4in_invoice_accounts');
				$bean->cb4in_invoice_accounts->add($avaluo->account_id);
				$bean->save();
			}
			
			//BORRAR LA VARIABLE DE SESION DE SALDO PENDIENTE
			unset($_SESSION['nuevo_saldo_pendiente']);
			unset($_SESSION['fecha_factura']);
		}
	}
	
	function set_saldo_pendiente(&$bean, $event, $arguments)
	{
		
		$GLOBALS["log"]->fatal("************* SALDO PENDIENTe HOOK****************");
		//COSTO "TOTAL" DEL AVALUO
		$costo_total	 = $bean->total; 
		$total_abonado   = 0;	
		$ida;
	//die("CERRADO");		
		//CONSULTAR EL TOTAL ABONONADO DEL AVALUO
		if(is_object($bean->cb4in_invoice_opportunitiesopportunities_ida)){
		 $ida=array_pop($bean->cb4in_invoice_opportunitiesopportunities_ida->beans)->id;	
		}else{
		  $ida=$bean->cb4in_invoice_opportunitiesopportunities_ida;	
		}
			
		//$GLOBALS["log"]->fatal($id);
		//echo "<pre>";
		//		var_dump($ida);
		//echo "</pre>";
		//die("stop"); 
		if(isset($bean->cb4in_invoice_opportunitiesopportunities_ida)){
		$query  = "SELECT DISTINCT SUM(abonos.monto) AS total_abonado FROM c2011_payment AS abonos, c2011_payment_opportunities_c AS relopp WHERE relopp.c2011_payment_opportunitiesopportunities_ida = '".$ida."' AND relopp.c2011_payment_opportunitiesc2011_payment_idb = abonos.id AND abonos.deleted = 0 AND relopp.deleted = 0";
		$result = $bean->db->query($query, true);
		$row =	$bean->db->fetchByAssoc($result);
		}
		$GLOBALS["log"]->fatal($query);
		//die("stop"); 
		
		if($row["total_abonado"] != "" && $row["total_abonado"] != NULL){
			$total_abonado		=	$row["total_abonado"];
			$bean->abono=$total_abonado;
		}
		$nuevo_saldo_pendiente = $costo_total - $total_abonado;
		$nuevo_saldo_pendiente	= number_format($nuevo_saldo_pendiente,2, '.', ',');
		$_SESSION['nuevo_saldo_pendiente']	= $nuevo_saldo_pendiente;
		$bean->saldo_pendiente =$nuevo_saldo_pendiente;
		
		$GLOBALS["log"]->fatal("ABONO  ".$bean->abono);
		/***
		 * Fix: campo tipo fecha (fecha de factura: $bean->invoice_date_c), 
		 * Por algun Motivo, el sugarCRM, no guarda correctamente los campos personalizados de fechas
		 * Se pasará el valor del campo a una variable de sesion, para luego eliminar el campo.
		 ****/
		$_SESSION['fecha_factura']			= trim($bean->invoice_date_c);

		// ACTUALIZAR EL VALOR DEL SALDO PENDIENTE EN EL AVALUO
		$query2 = "UPDATE opportunities_cstm SET saldo_pendiente_c = '".$nuevo_saldo_pendiente."' WHERE id_c = '".$ida."'";
		$bean->db->query($query2);

		unset($bean->invoice_date_c);
	}
	
	function restote_saldo_pendiente()
	{
		require_once('modules/Users/User.php');
		$user = new User();
		$user->retrieve($_SESSION['authenticated_user_id']);
		
		if( $_REQUEST["action"] == "MassUpdate" && $_REQUEST["Delete"] == true ){
			$invoice_id = $_REQUEST["mass"][0];
		}
		else if( $_REQUEST["action"] == "Delete" && trim($_REQUEST["Delete"]) == "Eliminar" ){
			$invoice_id = $_REQUEST["record"];
		}
		
		$costo_total = 0;
		
		$query48 = "SELECT DISTINCT cb4in_invoice_opportunitiesopportunities_ida AS opp_id FROM cb4in_invoice_opportunities_c WHERE deleted = 0 AND  cb4in_invoice_opportunitiescb4in_invoice_idb = '".$invoice_id."'";
		$result48 = $user->db->query($query48, true);
		$row48 	= $user->db->fetchByAssoc($result48);
		
		//CONSULTAR EL TOTAL ABONONADO DEL AVALUO
		$query  = "SELECT DISTINCT SUM(abonos.monto) AS total_abonado FROM c2011_payment AS abonos, c2011_payment_opportunities_c AS relopp WHERE relopp.c2011_payment_opportunitiesopportunities_ida = '".$row48["opp_id"]."' AND relopp.c2011_payment_opportunitiesc2011_payment_idb = abonos.id AND abonos.deleted = 0 AND relopp.deleted = 0";
		$result = $user->db->query($query, true);
		$row 	= $user->db->fetchByAssoc($result);
		
		if($row["total_abonado"] != "" && $row["total_abonado"] != NULL){
			$total_abonado		=	$row["total_abonado"];
		}
		
		$nuevo_saldo_pendiente = $costo_total - $total_abonado;
		$nuevo_saldo_pendiente	= number_format($nuevo_saldo_pendiente,2, '.', ',');
		
		// ACTUALIZAR EL VALOR DEL SALDO PENDIENTE EN EL AVALUO
		$query2 = "UPDATE opportunities_cstm SET saldo_pendiente_c = '".$nuevo_saldo_pendiente."' WHERE id_c = '".$row48["opp_id"]."'";
		$user->db->query($query2);
	}
}


?>
