<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************

 * Description: This file is used to override the default Meta-data DetailView behavior
 * to provide customization specific to the Campaigns module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.edit.php');
require_once('modules/Users/User.php');

class OpportunitiesViewEdit extends ViewEdit {

 	function OpportunitiesViewEdit(){
 		parent::ViewEdit();
 		$this->useForSubpanel = true;
 	}


 	function display() {
		
		$user = new User();
		
		/*echo "<pre>";
		print_r($this);
		echo "</pre>";
		die();*/

		/********************************************************************
		 * CORREGIMIENTOS @DATA
		 * RELLENAR EL CAMPO corregimiento_c, CON LOS VALORES DEL MODULO DE EDIFICIO
		 ********************************************************************/
		$query6  = "SELECT DISTINCT name FROM c4set_corregimiento WHERE deleted = 0 ORDER BY CAST(name AS CHAR) ASC";
		$result6 = $user->db->query($query6, true);
		
		while(($row6=$user->db->fetchByAssoc($result6)) != null) {
			$corregimientos_array[htmlspecialchars($row6["name"])] = $row6["name"];
		}
		$this->bean->field_defs[corregimiento_c][options] = $corregimientos_array;
		
		/********************************************************************
		 * EDIFICIOS @DATA
		 * RELLENAR EL CAMPO edificio_c, CON LOS VALORES DEL MODULO DE EDIFICIO
		 ********************************************************************/
		$query6  = "SELECT DISTINCT name FROM c4set_edificio WHERE deleted = 0 ORDER BY CAST(name AS CHAR) ASC";
		$result6 = $user->db->query($query6, true);
		
		while(($row6=$user->db->fetchByAssoc($result6)) != null) {
			$edificios_array[htmlspecialchars($row6["name"])] = $row6["name"];
		}
		
		//$this->ev->focus->field_name_map[edificio_c][options] = $edificios_array;
		//$this->ev->focus->field_defs[edificio_c][options] = $edificios_array;
		//$this->bean->field_name_map[edificio_c][options] = $edificios_array;
		$this->bean->field_defs[edificio_c][options] = $edificios_array;

		/********************************************************************
		 *  BARRIADA @DATA
		 *  RELLENAR EL CAMPO barriada_c, CON LOS VALORES DEL MODULO DE BARRIADA
		 ********************************************************************/
		$query7 = "SELECT DISTINCT name FROM c4set_barriada WHERE deleted = 0 ORDER BY CAST(name AS CHAR) ASC";
		$result7 = $user->db->query($query7, true);
		
		while(($row7=$user->db->fetchByAssoc($result7)) != null) {
			$barriadas_array[htmlspecialchars($row7["name"])] = $row7["name"];
		}

		$this->ev->focus->field_defs[barriada_c][options] = $barriadas_array;
		$this->bean->field_defs[barriada_c][options] = $barriadas_array;
		
               // echo $this->ev->focus->fetched_row[barriada_c];
               // print_r($barriadas_array);
		/********************************************************************
		 * TORRES @DATA
		 * RELLENAR EL CAMPO torre_c, CON LOS VALORES DEL MODULO DE EDIFICIO
		  ********************************************************************/
		$query6  = "SELECT DISTINCT name FROM c4set_torre WHERE deleted = 0 ORDER BY CAST(name AS CHAR) ASC";
		$result6 = $user->db->query($query6, true);
		
		while(($row6=$user->db->fetchByAssoc($result6)) != null) {
			$torres_array[htmlspecialchars($row6["name"])] = $row6["name"];
		}
		$this->bean->field_defs[torre_c][options] = $torres_array;
		parent::display();
		
		/********************************************************************
		 * CSS/JAVASCRIPT
		 * INCLUIR JAVASCRIPT PARA VALIDAR Y GENERAR NUMERO DE AVALUO
		  ********************************************************************/

	$script = '<script type="text/javascript">
			$("document").ready(function() {
				var form	= jQuery("form#EditView").attr("name");
				var record 	= jQuery("input[name=\'record\']").attr("value");
				if( form == "EditView" && record != "" )
				{';
					
					if( $this->ev->focus->fetched_row[barriada_c] != "")
					{
						$script .= '/* MOSTRAR EL VALOR DE BARRIADA */
						jQuery("select#barriada_c option[value=\''.$this->ev->focus->fetched_row[barriada_c].'\']").attr("selected","selected");';
					}
					if( $this->ev->focus->fetched_row[corregimiento_c] != "" )
					{
						$script .= '/* MOSTRAR EL VALOR DE CORREGIMIENTO */
						jQuery("select#corregimiento_c option[value*=\''.$this->ev->focus->fetched_row[corregimiento_c].'\']").attr("selected","selected");';
					}
					if( $this->ev->focus->fetched_row[edificio_c] != "" )
					{
						$script .= '/* MOSTRAR EL VALOR DE EDIFICIO */ 
						jQuery("select#edificio_c option[value=\''.$this->ev->focus->fetched_row[edificio_c].'\']").attr("selected","selected");';
					}
					if( $this->ev->focus->fetched_row[torre_c] != "" )
					{
						$script .= '/* MOSTRAR EL VALOR DE TORRE */
						$("#torre_c").val("'.$this->ev->focus->fetched_row[torre_c].'");';
					}
	$script .= '}
			});	
	</script>';

		//echo $script;
	
	    
 
 	}
}
?>
