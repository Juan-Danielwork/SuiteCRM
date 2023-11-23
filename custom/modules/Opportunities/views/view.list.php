<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');
require_once('modules/Users/User.php');

class OpportunitiesViewList extends ViewList {

     function OpportunitiesViewList()
     {
        parent::ViewList();
     }
	 
	 function preDisplay()
    {
		
        echo "<script type='text/javascript' >
			function disableBasicSearch(){
				$('li.searchTabHandler.basic').hide();
			}


			$( window ).load(function() {
			  disableBasicSearch();
			});
			$(document).ready(function() {
				disableBasicSearch();
				console.log( 'ready!' );
			});
		</script>";
        parent::preDisplay();
    }

	 
	/*
	* Override listViewProcess with addition to where clause to exclude project templates
	*/
    function listViewProcess()
    { 	
		
		$user = new User();
		/**
		 * OCULTAR BUSQUEDA AVANZADA
		 * Y OPCION DE GUARDAR BUSQUEDA
		 */
		//unset($this->searchForm->tabs[1]); 
		$this->searchForm->displaySavedSearch = 0;
		$this->searchForm->showAdvanced = 0;
		$this->searchForm->showSavedSearchesOptions = 0;
		
		//$this->searchForm->searchdefs->templateMeta->javascript = '<script type="text/javascript" src="include/javascript/custom/jquery-1.5.min.js"></script>';
		
		/**
		 * EDIFICIOS @DATA
		 * RELLENAR EL CAMPO edificio_c_advanced, CON LOS VALORES DEL MODULO DE EDIFICIO
		 */
		$query6  = "SELECT DISTINCT name FROM c4set_edificio WHERE deleted = 0 ORDER BY CAST(name AS CHAR) ASC";
		$result6 = $user->db->query($query6, true);
		
		while(($row6=$user->db->fetchByAssoc($result6)) != null) {
				$edificios_array[$row6["name"]] = $row6["name"];
		}
		$this->searchForm->fieldDefs['edificio_c_advanced']['options'] = $edificios_array;
		
		/**
		 * BARRIADA @DATA
		 *  RELLENAR EL CAMPO barriada_c_advanced, CON LOS VALORES DEL MODULO DE BARRIADA
		 */
		$query7 = "SELECT DISTINCT name FROM c4set_barriada WHERE deleted = 0 ORDER BY CAST(name AS CHAR) ASC";
		$result7 = $user->db->query($query7, true);
		
		while(($row7=$user->db->fetchByAssoc($result7)) != null) {
				$barriadas_array[$row7["name"]] = $row7["name"];
		}
		$this->searchForm->fieldDefs['barriada_c_advanced']['options'] = $barriadas_array;
		
		
		$etapa_de_avaluos = count($_REQUEST["etapa_de_avaluos_c_advanced"]);
		
		if(!isset($_REQUEST["etapa_de_avaluos_c_advanced"])){
			$_REQUEST["etapa_de_avaluos_c_advanced"] = array(0 => "solicitud", 1 => "inspeccion agendada", 2 => "armando informe (con finca)", 3 => "armando informe (sin finca)", 4 => "por revisar", 5 => "Por Imprimir", 6 => "por cobrar");
		}
		elseif( isset($_REQUEST["etapa_de_avaluos_c_advanced"]) && $_REQUEST["etapa_de_avaluos_c_advanced"][0] == "" )
		{
			$_REQUEST["etapa_de_avaluos_c_advanced"] = array(0 => "solicitud", 1 => "inspeccion agendada", 2 => "armando informe (con finca)", 3 => "armando informe (sin finca)", 4 => "por revisar", 5 => "Por Imprimir", 6 => "por cobrar", 7 => "Finalizado", 8 => "Cancelado");
			//$etapa_de_avaluos = count($_REQUEST["etapa_de_avaluos_c_advanced"]);
		}
		

		if( isset( $_REQUEST["year_entered_c_advanced"] ) && $_REQUEST["year_entered_c_advanced"][0] == "undefined" )
		{
			$query  = "SELECT DISTINCT oppc.year_entered_c FROM opportunities AS opp, opportunities_cstm AS oppc WHERE opp.id = oppc.id_c";
			$result = $user->db->query($query, true);
			
			if($user->db->getRowCount($result) > 0)
			{
				$rows = $user->db->fetchByAssoc($result);
				
				foreach($rows as $row){
					$years[] = $rows["year_entered_c"];
				}
				
				//$_REQUEST["year_entered_c_advanced"] = $years;
			}
		}
		if( isset( $_REQUEST["barriada_c_advanced"] ) && $_REQUEST["barriada_c_advanced"][0] == "" )
		{
			$query  = "SELECT DISTINCT oppc.barriada_c FROM opportunities AS opp, opportunities_cstm AS oppc WHERE opp.id = oppc.id_c";
			$result = $user->db->query($query, true);
			
			if($user->db->getRowCount($result) > 0)
			{
				while(($row=$user->db->fetchByAssoc($result)) != null) {
					$barriadas[] = $row["barriada_c"];
				}
				
				//$_REQUEST["barriada_c_advanced"] = $barriadas;
			}
        }
		if( isset( $_REQUEST["edificio_c_advanced"] ) && $_REQUEST["edificio_c_advanced"][0] == "" )
		{
			$query  = "SELECT DISTINCT oppc.edificio_c FROM opportunities AS opp, opportunities_cstm AS oppc WHERE opp.id = oppc.id_c";
			$result = $user->db->query($query, true);
			
			if($user->db->getRowCount($result) > 0)
			{
				while(($row=$user->db->fetchByAssoc($result)) != null) {
					$edificios[] = $row["edificio_c"];
				}
				
				//$_REQUEST["edificio_c_advanced"] = $edificios;
			}
        }
		if( isset( $_REQUEST["month_entered_c_advanced"] ) && $_REQUEST["month_entered_c_advanced"][0] == "" )
		{
			//$_REQUEST["month_entered_c_advanced"] = array(0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10, 10 => 11, 11 => 12);
			$month_entered = "all";
        }


		$this->processSearchForm();
		
		/*-----------------------------------------------
		 * CONDICIONES PARA MOSTRAR AVALUOS FINALIZADOS
		 ----------------------------------------------------*/
		 

		
		
		
		/*----------Range Search By Mohsan----------------*/
		/*$start = '';
		$end = '';
		if($_REQUEST['date_entered_start_advanced']!='' && $_REQUEST['date_entered_end_advanced']!=''){
			$start = date('Y-m-d', strtotime($_REQUEST['date_entered_start_advanced']));
			$end = date('Y-m-d', strtotime($_REQUEST['date_entered_end_advanced']));
		}
		elseif($_REQUEST['date_entered_start']!=''){
			$start = date('Y-m-d', strtotime($_REQUEST['date_entered_start_advanced']));
			$end = date('Y-m-d', strtotime($_REQUEST['date_entered_start_advanced']));
		}
		elseif($_REQUEST['date_entered_end']!=''){
			$start = date('Y-m-d', strtotime($_REQUEST['date_entered_end_advanced']));
			$end = date('Y-m-d', strtotime($_REQUEST['date_entered_end_advanced']));
		}
		
		if($start!='' && $end!=''){
			if( $this-> where != "" )
				$this->where .= " AND opportunities.date_entered >= '".$start."' AND opportunities.date_entered <= '".$end."'";
			else
				$this->where .= " opportunities.date_entered >= '".$start."' AND opportunities.date_entered <= '".$end."'";
		}
		
		
		$inspec_start = '';
		$inspec_end = '';
		if($_REQUEST['inspec_start_advanced']!='' && $_REQUEST['inspec_end_advanced']!=''){
			$inspec_start = date('Y-m-d', strtotime($_REQUEST['inspec_start_advanced']));
			$inspec_end = date('Y-m-d', strtotime($_REQUEST['inspec_end_advanced']));
		}
		
		if($inspec_start!='' && $inspec_end!=''){
			if( $this-> where != "" )
				$this->where .= " AND opportunities_cstm.fecha_inspeccion_c >= '".$inspec_start."' AND opportunities_cstm.fecha_inspeccion_c <= '".$inspec_end."'";
			else
				$this->where .= " opportunities_cstm.fecha_inspeccion_c >= '".$inspec_start."' AND opportunities_cstm.fecha_inspeccion_c <= '".$inspec_end."'";
		}*/
		
		//echo $this->where;
		
		$this->lv->searchColumns = $this->searchForm->searchColumns;
			
		if(!$this->headers)
			return;
			
		if(empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false)
		{
			$this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
			$savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
			echo get_form_header($GLOBALS['mod_strings']['LBL_LIST_FORM_TITLE'] . $savedSearchName, '', false);
			echo $this->lv->display();
		} 
	}
}

?> 
