<?php
/**
 * VALIDATION SCRIPT
 * (c) PENSANOMICA 2011
 */

//error_reporting(1);
 
if(!defined('sugarEntry'))define('sugarEntry', true);

require_once('include/entryPoint.php');
require_once('modules/Accounts/Account.php');
require_once('modules/Contacts/Contact.php');
require_once('modules/Users/User.php');
require_once('modules/Opportunities/Opportunity.php');

session_start();

$cUser = new User();
$cUser->retrieve($_SESSION['authenticated_user_id']);

/* *
 * FUNCION PARA
 * GENERAR NUMERO CONSECUTIVO */
function ConsecutiveNumber( $dia, $num_avaluo )
{
	if(strlen($num_avaluo) > 1){
		$string = 	explode("-", $num_avaluo);
		$num 	= 	str_replace("A", "", $string[1]);
	}else{
		$num 	= 	$num_avaluo;
	}
	
	$num_consecutivo = $num + 1;
	$num_consecutivo = sprintf("%02s" , $num_consecutivo);
	
	if($num_consecutivo >= 100) {
		$num_consecutivo = "A$num_consecutivo";
	}

	$month = strftime('%m', strtotime( date('Y-m-d') ) );
	$year  = sprintf("%d", strftime('%y', strtotime( date('Y-m-d') ) ) );
	
	$numero_avaluo = "AV-$num_consecutivo-$month-$year";
	
	return $numero_avaluo;
}

$data 			= "";
$option 		= isset($_POST['opt']) ? $_POST['opt'] : '';
$search_number 	= isset($_POST['name']) ? $_POST['name'] : '';
$idavaluo 		= isset($_POST['idavaluo']) ? $_POST['idavaluo'] : '';

/**
 *  OPTION: Auto Number
 *  GENERAR AUTOMATICAMENTE EL NUMERO DE AVALUO
 */
if( $option == "autonumber" )
{
	//$query  = "SELECT name FROM opportunities WHERE deleted = 0 ORDER BY date_entered DESC LIMIT 1";
	//$query  = "SELECT MAX(name) FROM opportunities WHERE MONTH(date_entered) = MONTH(SYSDATE())  AND YEAR(date_entered) = YEAR(SYSDATE())   ORDER BY date_entered DESC";
	$query = "SELECT MAX(CAST(REPLACE(REPLACE(name, 'AV', ''), '-', '') AS unsigned)) AS name FROM opportunities WHERE name LIKE '%".date('m-y')."'";	
	$result = $cUser->db->query($query, true);

	if($cUser->db->checkError()){
		trigger_error("checkForNewStates-Query failed");
	}
	
	if($result->num_rows>0){
		$row = $cUser->db->fetchByAssoc($result);
		if($row['name']>0){
			$number = str_replace(date('my'), '', $row['name'])+1;
			$data = "AV-".$number."-".date('m-y');
		}
		else{
			$data = "AV-1-".date('m-y');
		}
	}
	else{
		$data = "AV-1-".date('m-y');
	}
	
	/*
	$row 	= 	$cUser->db->fetchByAssoc($result);
	$dia	=	sprintf("%d", strftime('%d', strtotime(date('Y-m-d'))));
	$numero_avaluo = (isset($row['MAX(name)']) ? $row['MAX(name)'] : 0);
	$data	=	ConsecutiveNumber( $dia, $numero_avaluo );
	//$data	=	$numero_avaluo;*/
}

/**
 *  OPTION: Validate Number
 *  VERIFICAR SI EL AVALUO EXISTE EN LA DB
 */
if( $option == "validatenumber" )
{
	//$query  = " SELECT name FROM opportunities WHERE name = '$search_number' AND deleted = 0";
	$query  = "SELECT CONCAT(usr.first_name,' ',usr.last_name) AS created_by FROM opportunities AS opp, users AS usr WHERE opp.name = '$search_number' AND opp.deleted = 0 AND opp.created_by = usr.id";
	$result = $cUser->db->query($query, true);

	if($cUser->db->checkError()){
		trigger_error("checkForNewStates-Query failed");
	}
	
	//OBTENER ULTIMO NUMERO DE AVALUO
	//$queryopp  = "SELECT MAX(name) AS name FROM opportunities WHERE  MONTH(date_entered) = MONTH(SYSDATE()) AND YEAR(date_entered) = YEAR(SYSDATE()) ORDER BY date_entered DESC";
	$queryopp = "SELECT MAX(CAST(REPLACE(REPLACE(name, 'AV', ''), '-', '') AS unsigned)) AS name FROM opportunities WHERE name LIKE '%".date('m-y')."'";	
	$resultopp = $cUser->db->query($queryopp, true);

	if($cUser->db->getRowCount($result) == 1) 
	{
		if($cUser->db->getRowCount($resultopp)==1){
			$rowopp    = $cUser->db->fetchByAssoc($resultopp);
			if($rowopp['name']>0){
				$number = str_replace(date('my'), '', $rowopp['name'])+1;
				$next = "AV-".$number."-".date('m-y');
			}
			else{
				$next = "AV-1-".date('m-y');
			}
		}
		else{
			$next = "AV-1-".date('m-y');
		}
		
		$row	=	$cUser->db->fetchByAssoc($result);
		$numero_avaluo	=	$next; //ConsecutiveNumber( $dia, $rowopp['name'] );
		$created_by		= 	$row['created_by'];
		$data			=	"exist|$created_by|$numero_avaluo";
	}
}

/**
 *  OPTION: INFORMACION DE AVALUO
 *  RETORNAR LA INFORMACION DE UN AVALUO EN ABONOS
 */
if( $option == "infoavaluo")
{
	$avaluo = new Opportunity();
	$avaluo->retrieve($idavaluo);
	
	//INFORMACION DE LA CUENTA
	$avaluo->load_relationship('accounts_opportunities');
	$account = new Account();
	$account->retrieve($avaluo->account_id);
	
	//INFORMACION DEL AVALUADOR
	$avaluador = new User();
	$avaluador->retrieve($avaluo->assigned_user_id);
	$user_fullname 	= $avaluador->first_name." ".$avaluador->last_name;
	
	//CONSULTAR EL TOTAL ABONONADO DEL AVALUO
	$query  = "SELECT SUM(abonos.monto) AS total_abonado FROM c2011_payment AS abonos, c2011_payment_opportunities_c AS relopp WHERE relopp.c2011_payment_opportunitiesopportunities_ida = '".$idavaluo."' AND relopp.c2011_payment_opportunitiesc2011_payment_idb = abonos.id AND abonos.deleted = 0 AND relopp.deleted = 0";
	$result = $cUser->db->query($query, true);
	
	$row	=	$cUser->db->fetchByAssoc($result);
	if( $row["total_abonado"] != "" )
	{
		$total_abonado	=	$row["total_abonado"];
		$total_abonado	=	number_format($total_abonado,2, '.', ',');
	}else{
		$total_abonado	=	"0.00";
	}
	
	//VERIFICAR QUE EL SALDO PENDIENTE EXISTA
	if( $avaluo->saldo_pendiente_c == ""){
		$saldo_pendiente = "-$total_abonado";
	}
	else{
		$saldo_pendiente = $avaluo->saldo_pendiente_c;
		//$saldo_pendiente = number_format($saldo_pendiente,2, '.', ',');
	}
	
	$data = ucfirst($avaluo->etapa_de_avaluos_c)."|".$account->name."|".$avaluo->cliente_c."|".$user_fullname."|".$total_abonado."|".$saldo_pendiente;
}

/**
 *  OPTION: VERIFICAR ROL
 *  RETORNAR EL NOMBRE DEL ROL; DEL USUARIO QUE ESTA LOGUIADO
 */
if( $option == "checkrol" ){

	$query  = "SELECT r.name
	FROM acl_roles AS r
	LEFT JOIN acl_roles_users AS ru ON ru.role_id = r.id 
	WHERE r.deleted = 0 AND ru.user_id = '".$_SESSION['authenticated_user_id']."'";
	
	$result 	=	$cUser->db->query($query, true);
	$roleinfo	=	$cUser->db->fetchByAssoc($result);
	
	$data = ( !empty($roleinfo['name']) ? strtolower($roleinfo['name']) : '');
}

/**
 *  OPTION: VERIFICAR SI EXISTE UN ITBMS ACTIVO
 *  RETORNAR EL NOMBRE DEL ROL; DEL USUARIO QUE ESTA LOGUIADO
 */
if( $option == "check_active_itbms" ){

	$clause_itbm_id = ( $_POST['itbm_id'] != "" ? "AND itbm.id <> '".$_POST['itbm_id']."'" : "" );
	
	$query  = "SELECT itbm.name 
	FROM c4set_itbms_cstm AS itbm_c
	LEFT JOIN c4set_itbms AS itbm ON itbm.id = itbm_c.id_c 
	WHERE itbm.deleted = 0 AND itbm_c.estado_c = 'activo' $clause_itbm_id";
	
	$result 	=	$cUser->db->query($query, true);
	$itbm_info	=	$cUser->db->fetchByAssoc($result);
	
	$data = ( !empty($itbm_info['name']) ? strtolower($itbm_info['name']) : '');
}

echo $data;

?>
