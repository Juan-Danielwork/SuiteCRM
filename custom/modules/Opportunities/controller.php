<?php
/**
 * @File 		 : controller.php
 * @Description  : Override the Controller of Opportunities module for the ListView. 
 * @Developer   : Akk
 **/

class OpportunitiesController extends SugarController 
{
    /**
	 * @Function    : action_listview
	 * @Description : Fuction to override ListView 
	 * @Developer   : Akk
	 **/ 
    function action_listview()
    {
        
        require_once ("custom/modules/Opportunities/CustomListView.php"); 
        $this->view = "list"; 
        $this->bean = new CustomListView(); 
    }
}

