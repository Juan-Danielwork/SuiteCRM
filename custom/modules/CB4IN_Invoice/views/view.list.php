<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');
require_once('modules/Users/User.php');

class CB4IN_InvoiceViewList extends ViewList {

     function CB4IN_InvoiceViewList()
     {
        parent::ViewList();
     }

	/*
	* Override listViewProcess with addition to where clause to exclude project templates
	*/
    function listViewProcess()
    { 	
		/*echo "<pre>";
		print_r($this);
		echo "</pre>";
		die();*/
		
		/**
		 * OCULTAR BUSQUEDA AVANZADA
		 * Y OPCION DE GUARDAR BUSQUEDA
		 */
		//unset($this->searchForm->tabs[1]); 
		//$this->searchForm->displaySavedSearch = 0;
		//$this->searchForm->showAdvanced = 0;
		//$this->searchForm->showSavedSearchesOptions = 0;
		//$this->searchForm->searchdefs->templateMeta->javascript = '<script type="text/javascript" src="include/javascript/custom/jquery-1.5.min.js"></script>';
		
		//echo '<link rel="stylesheet" href="include/javascript/custom/invoices.css" type="text/css" />';
		//echo '<script type="text/javascript" src="include/javascript/custom/jquery-1.5.min.js"></script>';
		//echo '<script type="text/javascript" src="include/javascript/custom/invoices.js"></script>';

		$this->processSearchForm();
		
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
