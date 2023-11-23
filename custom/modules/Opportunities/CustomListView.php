<?php
/**
 * @File 		 : CustomListView.php
 * @Description  : Override the bean class method of Opportunities module for the ListView.

 **/
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once("modules/Opportunities/Opportunity.php");

class CustomListView extends Opportunity{




	function create_new_list_query($order_by, $where,$filter=array(),$params=array(), $show_deleted = 0,$join_type='', $return_array = false,$parentbean=null, $singleSelect = false, $ifListForExport = false)
	{
		//echo $where;
		
		$exclude_stage_basic ='';		
		$exclude_stage_basic = isset($_REQUEST['custom_cancel_c_basic'])?$_REQUEST['custom_cancel_c_basic']:'';

		if($exclude_stage_basic =='Yes'){						
			
			 $where = str_replace("opportunities_cstm.custom_cancel_c like '%Yes%'","opportunities_cstm.etapa_de_avaluos_c NOT IN ('finalizado','Cancelado')",$where);
			
		}

		

		$exclude_stage = isset($_REQUEST['custom_cancel_c_advanced'])?$_REQUEST['custom_cancel_c_advanced']:'';
		
		if($exclude_stage =='Yes'){						
			
			 $where = str_replace("opportunities_cstm.custom_cancel_c like '%Yes%'","opportunities_cstm.etapa_de_avaluos_c NOT IN ('finalizado','Cancelado')",$where);
			
		}

		//echo $where;

		$ret_arr = array();
		$ret_arr = parent::create_new_list_query($order_by, $where, $filter, $params, $show_deleted, $join_type, $return_array, $parentbean, $singleSelect);
 

		
		 return $ret_arr;


		
	}
  
}
?>

