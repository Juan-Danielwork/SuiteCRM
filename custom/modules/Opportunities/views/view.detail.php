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

require_once('include/MVC/View/views/view.detail.php');
require_once('modules/Users/User.php');

class OpportunitiesViewDetail extends ViewDetail {

 	function OpportunitiesViewDetail(){
 		parent::ViewDetail();
 		$this->useForSubpanel = true;
 	}
 	
 	function display() {
		
		$user = new User();
		global $db;
		$total_query = $db->query("SELECT IFNULL(cb4in_invoice.total, 0) AS total FROM cb4in_invoice_opportunities_c, cb4in_invoice WHERE cb4in_invoice_opportunities_c.cb4in_invoice_opportunitiesopportunities_ida = '".$this->bean->id."'
							AND cb4in_invoice.id = cb4in_invoice_opportunities_c.cb4in_invoice_opportunitiescb4in_invoice_idb AND cb4in_invoice_opportunities_c.deleted = 0");
		$total = 0;
		if($total_query->num_rows>0){
			$row = $db->fetchByAssoc($total_query);
			$total = $row['total'];
		}
		
		$payment_query = $db->query("SELECT IFNULL(c2011_payment.monto, 0) AS monto FROM c2011_payment_opportunities_c, c2011_payment WHERE c2011_payment_opportunities_c.c2011_payment_opportunitiesopportunities_ida  = '".$this->bean->id."'
									AND c2011_payment.id = c2011_payment_opportunities_c.c2011_payment_opportunitiesc2011_payment_idb AND c2011_payment_opportunities_c.deleted = 0");
		
		$payments = 0;
		if($payment_query->num_rows>0){
			while($row=$db->fetchByAssoc($payment_query)){
				$payments += $row['monto'];
			}
		}
		
		$this->bean->saldo_pendiente_c = number_format(($total-$payments), 2, '.', '');
		
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
			if(!empty($row6["name"])){
				$corregimientos_array[htmlspecialchars($row6["name"])] = $row6["name"];
				$corr_array[] = $row6["name"];
			}
		}
		
		$this->dv->focus->field_name_map[corregimiento_c][options] = $corregimientos_array;
		$this->bean->field_name_map[corregimiento_c][options] = $corregimientos_array;
		$this->bean->field_name_map[corregimiento_c][options] = $corregimientos_array;
		$this->bean->field_defs[corregimiento_c][options] = $corregimientos_array;
		
		/********************************************************************
		 * EDIFICIOS @DATA
		 * RELLENAR EL CAMPO edificio_c, CON LOS VALORES DEL MODULO DE EDIFICIO
		 ********************************************************************/
		$query6  = "SELECT DISTINCT name FROM c4set_edificio WHERE deleted = 0 ORDER BY CAST(name AS CHAR) ASC";
		$result6 = $user->db->query($query6, true);
		
		while(($row6=$user->db->fetchByAssoc($result6)) != null) {
			if(!empty($row6["name"])){
				$edificios_array[htmlspecialchars($row6["name"])] = $row6["name"];
			}
		}
		
		$this->dv->focus->field_name_map[edificio_c][options] = $edificios_array;
		$this->bean->field_name_map[edificio_c][options] = $edificios_array;
		$this->dv->focus->field_defs[edificio_c][options] = $edificios_array;
		$this->bean->field_defs[edificio_c][options] = $edificios_array;

		
		/********************************************************************
		 *  BARRIADA @DATA
		 *  RELLENAR EL CAMPO barriada_c, CON LOS VALORES DEL MODULO DE BARRIADA
		 ********************************************************************/
		$query7 = "SELECT DISTINCT name FROM c4set_barriada WHERE deleted = 0 ORDER BY CAST(name AS CHAR) ASC";
		$result7 = $user->db->query($query7, true);
		
		while(($row7=$user->db->fetchByAssoc($result7)) != null) {
			if(!empty($row7["name"])){
				$barriadas_array[htmlspecialchars($row7["name"])] = $row7["name"];
			}
		}

		$this->dv->focus->field_name_map[barriada_c][options] = $barriadas_array;
		$this->bean->field_name_map[barriada_c][options] = $barriadas_array;
		$this->dv->focus->field_defs[barriada_c][options] = $barriadas_array;
		$this->bean->field_defs[barriada_c][options] = $barriadas_array;
		
		/********************************************************************
		 * TORRES @DATA
		 * RELLENAR EL CAMPO torre_c, CON LOS VALORES DEL MODULO DE EDIFICIO
		  ********************************************************************/
		$query6  = "SELECT DISTINCT name FROM c4set_torre WHERE deleted = 0 ORDER BY CAST(name AS CHAR) ASC";
		$result6 = $user->db->query($query6, true);
		
		while(($row6=$user->db->fetchByAssoc($result6)) != null) {
			if(!empty($row6["name"])){
				$torres_array[htmlspecialchars($row6["name"])] = $row6["name"];
			}
		}
		$this->dv->focus->field_name_map[torre_c][options] = $barriadas_array;
		$this->bean->field_name_map[torre_c][options] = $barriadas_array;
		$this->dv->focus->field_defs[torre_c][options] = $barriadas_array;
		$this->bean->field_defs[torre_c][options] = $torres_array;
		
		
		$query55  	= "SELECT DISTINCT name FROM c4set_corregimiento WHERE name LIKE '%".$this->dv->focus->fetched_row[corregimiento_c]."%'";
		$result55 	= $user->db->query($query55, true);
		$row55		= $user->db->fetchByAssoc($result55);
		
		$this->dv->focus->fetched_row[corregimiento_c] = $row55["name"];
		
		
		/********************************************************************
		 * Fix: Listas Desplegables
		 * Este javascript se ejecuta para desplegar el valor correcto en
		 * los campos (corregimiento, edificio, barriada, torre).
		 *
		 * Fecha Creacion: 30/marzo/2011
		 *
		  ********************************************************************/
		  /*SimpleModal Basic Modal Dialog*/
		  echo'<style>
#basic-modal-content {display:none;}
#simplemodal-overlay {background-color:#000; cursor:wait;}
#simplemodal-container {min-height:100px; min-width:420px;color:#0000; background-color:#FFFFFF; border:4px solid #444;}
#simplemodal-container code {background:#141414; border-left:3px solid #65B43D; color:#bbb; display:block; margin-bottom:12px; padding:4px 6px 6px;}
#simplemodal-container a {color:#ddd;}
#simplemodal-container a.modalCloseImg {background:url(custom/modules/Opportunities/simplemodal/x.png) no-repeat; width:25px; height:29px; display:inline; z-index:3200; position:absolute; top:-15px; right:-16px; cursor:pointer;}
#simplemodal-container #basic-modal-content {padding:8px;}
</style>';
/*SimpleModal Basic Modal Dialog ends*/
		//echo '<script type="text/javascript" src="include/javascript/custom/jquery-1.5.min.js"></script>';
		echo '<script type="text/javascript" src="include/javascript/custom/jquery.simplemodal.js"></script>';
		echo '<script type="text/javascript">
		window.onload = function() {
			/* MOSTRAR EL VALOR DE BARRIADA */
			/*jQuery("td[scope=\'row\']:contains(\'Barriada:\') ~ td:eq(0)").html("'.$this->dv->focus->fetched_row[barriada_c].'");*/
			
			/* MOSTRAR EL VALOR DE EDIFICIO */
			/*jQuery("td[scope=\'row\']:contains(\' Edificio: \') ~ td:eq(0)").html("'.$this->dv->focus->fetched_row[edificio_c].'");*/
			/*jQuery("td[scope=\'row\']:contains(\'Edificio:\') ~ td:last").html("'.$this->dv->focus->fetched_row[edificio_c].'");*/
			
			/* MOSTRAR EL VALOR DE CORREGIMIENTO */
			/*jQuery("td[scope=\'row\']:contains(\'Corregimiento:\') ~ td:eq(0)").html("'.$this->dv->focus->fetched_row[corregimiento_c].'");*/
			
			/* MOSTRAR EL VALOR DE TORRE */
			/*jQuery("td[scope=\'row\']:contains(\'Torre:\') ~ td:eq(0)").html("'.$this->dv->focus->fetched_row[torre_c].'");*/

			/** 
			 * LOS SUBPANEL DE LA PARTE INFERIOR
			 * SOLO DEJAR EL TAB QUE DICE "Todos"
			 * Y ELIMINAR LOS DEMAS
			 */
			jQuery("ul#groupTabs li#Todo_sp_tab ~ li").remove();
		};
		</script>';
		echo '<div id="upload-content" style="display:none;width:100%;border:0px;text-align:center;"><form id="file_upload_form" method="post" enctype="multipart/form-data" action="upload.php" target="upload_target" /><div id="form-contents"><h2 style="padding-top:100px;">Seleccione los archivos para subir</h2><div class="clr" ></div><input name="file[]" id="file[]" size="27" type="file" size="60" multiple="multiple" style="margin:10px;"/><div class="clr"></div><input type="hidden" name="record" value="'.$_REQUEST['record'].'"/><input type="submit" name="action" value="subir" onClick="return datahide()"/></div><iframe id="upload_target" name="upload_target"  style="width:100%; height:500px; border:0px;display:none;"></iframe></form></div>';
		echo '<script>jQuery(".multiple").on("click", function(){jQuery("#upload-content").modal();	jQuery("#simplemodal-container").css("height", "500px");jQuery(".simplemodal-wrap").css("overflow-y", "auto");jQuery(".simplemodal-wrap").css("overflow-X", "hidden");jQuery("#simplemodal-container").css("top", "50px");jQuery("#simplemodal-container").css("width", "750px");jQuery("#simplemodal-overlay").css("height", "100%");return false;});</script>';
        echo '<script>function datahide(){$("#form-contents").hide();$("#upload_target").show();$("file_upload_form").target = "upload_target";}</script>';

      
 
        // Added by akk 
        if($this->bean->etapa_de_avaluos_c == 'finalizado' || $this->bean->etapa_de_avaluos_c == 'Cancelado' )
        {        	
        	 echo ' <script type="text/javascript">
        	 $("#formc2011_payment_opportunities").delay(3000).hide();
			 $("#C2011_Payment_nuevo_button").click(function(e) {
				e.preventDefault();
				//do other stuff when a click happens
			});
        	 </script>';

        }
        else
        { 
        	echo ' <script type="text/javascript">
        	 $("#formc2011_payment_opportunities").show();
        	 </script>';
        }
        // Added by akk 

 		parent::display();
		
		if($this->bean->etapa_de_avaluos_c == 'finalizado' || $this->bean->etapa_de_avaluos_c == 'Cancelado' )
        {        	
        	 echo ' <script type="text/javascript">
			 $(document).ready(function() {
				
			});
        	</script>';

        }
 	}
}
?>
