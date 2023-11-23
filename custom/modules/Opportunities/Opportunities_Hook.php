<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

include "/var/www/html/vendor/phpmailer/phpmailer/src/PHPMailer.php";
use PHPMailer\PHPMailer\PHPMailer;
class Opportunities_Hook{
//Defino la clase que voy a llamar por parámetro cuando lanze el hook
//Defino la función enviar_mail que recibirá por referencia el $bean que vamos a salvar, el evento que en nuestro caso recibira "before_save" y los argumentos especificos del evento que no vamos a usar en este ejemplo

	function verificar_avaluos(&$bean, $event, $arguments)
	{
		global $current_user;
		require_once("include/SugarPHPMailer.php");

		$contact_email 	= "";


		$site_url		= "http://clientes.pensanomica.com/crm";
		//$site_url		= $_SERVER['DOCUMENT_ROOT'];
		
		//Obtengo los datos de antes de salvar creando un Bean con los datos de la base de datos.
		$oldOpp = new Opportunity();
		//$bean contiene el nuevo bean, pero en caso de estar modificando la base de datos el ID viejo y el nuevo deben ser el mismo.
		$oldOpp->retrieve($bean->id);

		//INFORMACION DEL AVALUADOR
		$avaluador = new User();
		$avaluador->retrieve($bean->assigned_user_id);
		$user_fullname 	= $avaluador->first_name." ".$avaluador->last_name;
		$user_email 	= $avaluador->user_name;
		
		//INFORMACION DE LA CUENTA PRINCIPAL
		$bean->load_relationship('accounts_opportunities');
		$account = new Account();
		$account->retrieve($bean->account_id);

		//INFORMACION DE LA PERSONA DE CONTACTO
		//$query1 = "SELECT c.id FROM contacts AS c, accounts_contacts AS ac WHERE ac.account_id = '".$bean->account_id."' AND ac.contact_id = c.id ";	    
		$query1 = "SELECT a.bean_id AS id FROM email_addr_bean_rel AS a, email_addresses AS b WHERE a.bean_id = '".$_POST['contact_id_c']."' AND a.email_address_id = b.id";
		$result1 = $bean->db->query($query1, true);

	
		/** 
		 * Si existe el contacto; Se trata de una Empresa
		 */
		if($bean->db->getRowCount($result1) >= 1) 
		{
			$row1 = $bean->db->fetchByAssoc($result1);
			
			$query2 = "SELECT emaddr.email_address FROM email_addr_bean_rel AS emarel, email_addresses AS emaddr WHERE emarel.bean_id = '".$row1['id']."' AND emarel.email_address_id = emaddr.id AND emarel.deleted=0 LIMIT 1";
					  

			$result2 	= $bean->db->query($query2, true);
			if($bean->db->getRowCount($result2) == 1) 
			{
			
				$row2 	= $bean->db->fetchByAssoc($result2);	
				$contact_email 	= $row2['email_address'];
			}
			
			$bean->load_relationship('accounts_contacts');
			$contact = new Contact();
			$contact->retrieve($row1['id']);
			
			$contact_name	= $contact->first_name." ".$contact->last_name;
		}
		/** 
		 * Si no existe el contacto; Se trata de una Persona Natural
		 */
		else
		{
			
			$contact_email 	= $bean->cliente_email_c;
			$contact_name	= $bean->cliente_c;



		}
		//$to_email       = $contact_email;
                //$to_name        = $contact_name;

		if ($oldOpp->name == NULL) 
		{
			if ( trim($bean->etapa_de_avaluos_c) == "solicitud" ) 
			{
				$to_email 	= $user_email;
				$to_name 	= $user_fullname;
				
				$subject = "Nuevo Avaluo: ".trim($bean->name)." - (".date('d/M/Y').")";
				
				$path 	= 	'include/templates/mails/solicitud.txt';
				$html	=	file_get_contents("$path", FILE_USE_INCLUDE_PATH);
				
				//------------------------------------
				// INFORMACION DEL AVALUO
				//------------------------------------
				$numero_avaluo	= (isset($bean->name) ? $bean->name : "-");
				$cuenta			= (isset($account->name) ? $account->name : "-");
				$cliente		= (isset($bean->cliente_c) ? $bean->cliente_c : "-");
				$barriada		= (isset($bean->barriada_c) ? $bean->barriada_c : "-");
				$edificio		= (isset($bean->edificio_c) ? $bean->edificio_c : "-");	
				
				$html	=	str_replace("{NumeroAvaluo}", $numero_avaluo, $html);
				$html	=	str_replace("{Cuenta}", ucfirst(trim($cuenta)), $html);
				$html	=	str_replace("{Cliente}", ucfirst(trim($cliente)), $html);
				$html	=	str_replace("{Barriada}", ucfirst(trim($barriada)), $html);
				$html	=	str_replace("{Edificio}", ucfirst(trim($edificio)), $html);
			}
		}
		else
		{
			//if (trim($bean->etapa_de_avaluos_c) == "por imprimir" || trim($bean->etapa_de_avaluos_c) == "por cobrar") 
			if ( trim($bean->etapa_de_avaluos_c) == "por cobrar" ) 
			{
				if($bean->finished_mail_c == 0)
				{
					//------------------------------------
					// VERIFICAR A QUIEN ENVIARLE EL EMAIL
					// SI AL CLIENTE o AL BANCO.
					//------------------------------------
					if(isset($contact->id) && $contact->id != "") 
					{
						$to_email 	= $contact_email;
						$to_name 	= $contact_name;
					}
					else
					{
						$to_email 	= (isset($bean->cliente_email_c) ? $bean->cliente_email_c : "");
						$to_name 	= (isset($bean->cliente_c) ? $bean->cliente_c : "");
					}
					
					$subject = "Avaluo Finalizado: ".$bean->name;
					
					$path 	= 	'include/templates/mails/por_imprimir_cobrar.txt';
					$html	=	file_get_contents("$path", FILE_USE_INCLUDE_PATH);
					
					//------------------------------------
					// INFORMACION DEL AVALUO
					//------------------------------------
					$numero_avaluo		= (isset($bean->name) ? $bean->name : "-");
					$cliente			= (isset($bean->cliente_c) ? $bean->cliente_c : "-");
					$saldo_pendiente	= (isset($bean->saldo_pendiente_c) ? $bean->saldo_pendiente_c : "-");
					
					$html	=	str_replace("{CuentaCliente}", $to_name, $html);
					$html	=	str_replace("{NumeroAvaluo}", $numero_avaluo, $html);
					$html	=	str_replace("{Cliente}", ucfirst(trim($cliente)), $html);
					$html	=	str_replace("{Saldo}", ucfirst(trim($saldo_pendiente)), $html);
					
					//ACTUALIZAR EL CAMPO "finished_mail_c" PARA VALIDAR QUE EL EMAIL, YA HA SIDO ENVIADO. Y NO SE ENVIE MAS DE 1 VEZ.
					$query = "UPDATE opportunities_cstm SET finished_mail_c = 1  WHERE id_c = '".$bean->id."'";
					$bean->db->query($query);
				}
			}
			
			/* ACTUALIZAR ETAPA DE AVALUOS EN LOS ABONOS */
			/* VERIFICAR SI EL AVALUO TIENE ABONO */
			$query50 	= "SELECT c2011_payment_opportunitiesc2011_payment_idb FROM c2011_payment_opportunities_c  WHERE c2011_payment_opportunitiesopportunities_ida = '".$bean->id."'";
			$result50 	= $bean->db->query($query50, true);
			if($bean->db->getRowCount($result50) > 0) 
			{
				$row50		= $bean->db->fetchByAssoc($result50);
				$abono_id 	= (isset($row50['c2011_payment_opportunitiesc2011_payment_idb']) ? $row50['c2011_payment_opportunitiesc2011_payment_idb'] : "");

				$query = "UPDATE c2011_payment_cstm SET etapa_de_avaluos_c = '".$bean->etapa_de_avaluos_c."'  WHERE id_c = '".$abono_id."'";
				$bean->db->query($query);
			}
		}
		
		//Preparo el mail
		$notify_mail = new SugarPHPMailer();
		$notify_mail->isHTML(true);
		$notify_mail->CharSet = "UTF-8";

		$notify_mail->AddAddress("$to_email", "$to_name");
	 	$GLOBALS['log']->fatal("*** HOOK 1 EMAIL TIPO POR COBRAR***".$to_email." ".$to_name);	
		//$notify_mail->AddBCC("jluis.pinilla@hotmail.com", "Jose Luis");
		$notify_mail->From = "raulvallarino@avincopanama.com";
		$notify_mail->FromName = "Avinco";
		$notify_mail->Body = from_html($html);
		$notify_mail->Subject = "$subject";

		//Finalmente mando la notificación por email
		$notify_mail->Send();
			//$GLOBALS['log']->fatal("ERROR Sending email".$notify->ErrorInfo);
		//      $GLOBALS['log']->fatal("Email enviado");
		
		
		$insert = "INSERT INTO log_avaluo (`in`,`numero`,`name`,`mail`,`etapa`) VALUES ( NULL,'".$numero_avaluo."','".$to_name."','".$to_email."','".$bean->etapa_de_avaluos_c."')";
		$bean->db->query($insert, true);
		
		
	}
	
	function set_request_month(&$bean, $event, $arguments)
	{
		//VERIFICAR SI EL CAMPO month_entered_c ES IGUAL A NULL
		//Fecha Modificacion: 29/12/2010
		if(trim($bean->month_entered_c) == "" || $bean->month_entered_c == NULL || trim($bean->year_entered_c) == "" || $bean->year_entered_c == NULL) 
		{
			//$month_entered = strftime('%m',strtotime($order[0]["expiration_date"]));
			$query40 	= "SELECT MONTH(date_entered), YEAR(date_entered) FROM opportunities WHERE id = '".$bean->id."' AND deleted = 0";
			$result40 	= $bean->db->query($query40, true);

			$row40 			= $bean->db->fetchByAssoc($result40);
			$month_entered 	= (string)$row40['MONTH(date_entered)'];
			$year_entered 	= (string)$row40['YEAR(date_entered)'];
			
			//GUARDAR EL MES EN QUE SE HA CREADO EL AVALUO, PARA PODER HACER BUSQUEDA DE AVALUOS POR MES/AÑO
			$queri = "UPDATE opportunities_cstm SET month_entered_c = '".$month_entered."', year_entered_c = '".$year_entered."'  WHERE id_c = '".$bean->id."'";
			$bean->db->query($queri);
		}
		//Termina Modificacion
	}
	
	function agendar_inspeccion(&$bean, $event, $arguments)
	{
		global $current_user;
		require_once("include/SugarPHPMailer.php");
		
		if(trim($bean->etapa_de_avaluos_c) == "inspeccion agendada")
		{
			$path 	= 	'include/templates/mails/inspeccion.txt';
			$html	=	file_get_contents("$path", FILE_USE_INCLUDE_PATH);

			//------------------------------------
			// VERIFICAR A QUIEN ENVIARLE EL EMAIL
			// SI AL CLIENTE o AL BANCO.
			//
			// INFORMACION DEL CONTACTO DE LA CUENTA
			//------------------------------------
			$contact = new Contact();
			$contact->retrieve($bean->contact_id_c);
			
			if(isset($contact->id) && $contact->id != "") 
			{
				$query2 	= "SELECT emaddr.email_address FROM email_addr_bean_rel AS emarel, email_addresses AS emaddr WHERE emarel.bean_id = '".$contact->id ."' AND emarel.email_address_id = emaddr.id";
				$result2 	= $bean->db->query($query2, true);
				if($bean->db->getRowCount($result2) > 0) 
				{
					$row2 	= $bean->db->fetchByAssoc($result2);
					$email 	= $row2['email_address'];
				}
				
				$name	= $contact->first_name." ".$contact->last_name;
			}
			else
			{
				//------------------------------------
				//INFORMACION DEL CLIENTE
				//------------------------------------
				$name	= (isset($bean->cliente_c) ? $bean->cliente_c : "");
				$email	= (isset($bean->cliente_email_c) ? $bean->cliente_email_c : "");
			}
			
			//------------------------------------
			// SI EXISTE LA DIRECCION DE CORREO SE LE ENVIARA EL EMAIL AL CLIENTE O CUENTA
			// DE LO CONTRARIO, NO SE ENVIARA NADA.
			//------------------------------------
			if( isset($email) && $email != "")
			{
				//------------------------------------
				// INFORMACION DEL AVALUO
				//------------------------------------
				$numero_avaluo	= (isset($bean->name) ? $bean->name : "-");
				$cliente		= (isset($bean->cliente_c) ? $bean->cliente_c : "-");
				$barriada		= (isset($bean->barriada_c) ? $bean->barriada_c : "-");
				$edificio		= (isset($bean->edificio_c) ? $bean->edificio_c : "-");
				$fecha_inspeccion	= (isset($bean->fecha_inspeccion_c) ? $bean->fecha_inspeccion_c : "-");
				$fecha_inspeccion	= strftime('%d/%m/%Y',strtotime($fecha_inspeccion));
				$hora_inspeccion	= (isset($bean->hora_inspeccion_c) ? $bean->hora_inspeccion_c : "-");
				
				/**** MAGIC TAGS:
				 *
				 * {NumeroAvaluo}
				 * {Cliente}
				 * {Barriada}
				 * {Edificio}
				 * {Fecha Inspeccion}
				 * {HoraInspeccion}
				 **/
				
				$html	=	str_replace("{NumeroAvaluo}", $numero_avaluo, $html);
				$html	=	str_replace("{Cliente}", ucfirst(trim($cliente)), $html);
				$html	=	str_replace("{Barriada}", ucfirst(trim($barriada)), $html);
				$html	=	str_replace("{Edificio}", ucfirst(trim($edificio)), $html);
				$html	=	str_replace("{FechaInspeccion}", $fecha_inspeccion, $html);
				$html	=	str_replace("{HoraInspeccion}", $hora_inspeccion, $html);
				
			
				//------------------------------------
				// CONFIGURAR Y ENVIAR CORREO
				//------------------------------------
				$GLOBALS['log']->fatal("*** HOOK 2 EMAIL INSPECCION AGENDADA*** ".$email." ".$name." ");

				$notify_mail = new PHPMailer();
				$notify_mail->isHTML(true);
				$notify_mail->CharSet = "UTF-8";
				$notify_mail->AddAddress("$email", "$name");
				$notify_mail->From = "no-reply@avincopanama.com";
				//$notify_mail->AddAddress("zetta.tecnologias@gmail.com", "Zetta");
				//$notify_mail->From = "kbrown@pensanomica.com";
				//$notify_mail->From = "raulvallarino@avincopanama.com";
				$notify_mail->FromName = "Avinco";
				$notify_mail->Body = from_html($html);
				$notify_mail->Subject = "Avinco - Inspeccion Agendada (Avaluo: $numero_avaluo) ";

				//Finalmente mando la notificación por email
				$notify_mail->Send();
				/*if($notify_mail->send()){

					$message = "Hello world from Logic Hook";
					$mail = new PHPMailer();
					$mail->SMTPDebug =1;
					$mail->CharSet = "UTF-8";
					$mail->AddAddress("zetta.tecnologias@gmail.com", "Avinco");
					$mail->SetFrom("raulvallarino@avincopanama.com","Avinco");
					$mail->Subject = "Test Message from Logic Hook";
					$mail->Body = $message;
					$mail->Send();

                        		//$GLOBALS['log']->fatal("ERROR Sending email".$notify_mail->ErrorInfo);
                			
                        	$GLOBALS['log']->fatal("Email enviado");
               			 }*/

	
                        	$GLOBALS['log']->fatal("Email enviado");
               			 
				$insert = "INSERT INTO log_avaluo (`in`,`numero`,`name`,`mail`,`etapa`) VALUES ( NULL,'2-->".$numero_avaluo."','".$name."','".$email."','".$bean->etapa_de_avaluos_c."')";
				$bean->db->query($insert, true);
				
					
			}
		}
	}
	

}


?>
