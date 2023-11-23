<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'C4SET',
  'author' => 'Pensanomica',
  'description' => 'Paquete de Configuracion de Listas desplegables y configuracion del ITBMS.',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Settings',
  'published_date' => '2021-02-15 02:48:44',
  'type' => 'module',
  'version' => 1613357324,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Settings',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'C4SET_Torre',
      'class' => 'C4SET_Torre',
      'path' => 'modules/C4SET_Torre/C4SET_Torre.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'C4SET_ITBMS',
      'class' => 'C4SET_ITBMS',
      'path' => 'modules/C4SET_ITBMS/C4SET_ITBMS.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'C4SET_Edificio',
      'class' => 'C4SET_Edificio',
      'path' => 'modules/C4SET_Edificio/C4SET_Edificio.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'C4SET_Corregimiento',
      'class' => 'C4SET_Corregimiento',
      'path' => 'modules/C4SET_Corregimiento/C4SET_Corregimiento.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'C4SET_Barriada',
      'class' => 'C4SET_Barriada',
      'path' => 'modules/C4SET_Barriada/C4SET_Barriada.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/c4set_torre_opportunitiesMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/c4set_edificio_opportunitiesMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/c4set_corregimiento_opportunitiesMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/c4set_barriada_opportunitiesMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/C4SET_Torre',
      'to' => 'modules/C4SET_Torre',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/C4SET_ITBMS',
      'to' => 'modules/C4SET_ITBMS',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/C4SET_Edificio',
      'to' => 'modules/C4SET_Edificio',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/C4SET_Corregimiento',
      'to' => 'modules/C4SET_Corregimiento',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/C4SET_Barriada',
      'to' => 'modules/C4SET_Barriada',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.php',
      'to_module' => 'Opportunities',
      'language' => 'es_ES',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/C4SET_Torre.php',
      'to_module' => 'C4SET_Torre',
      'language' => 'es_ES',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.php',
      'to_module' => 'Opportunities',
      'language' => 'es_ES',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/C4SET_Edificio.php',
      'to_module' => 'C4SET_Edificio',
      'language' => 'es_ES',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.php',
      'to_module' => 'Opportunities',
      'language' => 'es_ES',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/C4SET_Corregimiento.php',
      'to_module' => 'C4SET_Corregimiento',
      'language' => 'es_ES',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.php',
      'to_module' => 'Opportunities',
      'language' => 'es_ES',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/C4SET_Barriada.php',
      'to_module' => 'C4SET_Barriada',
      'language' => 'es_ES',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_ES.lang.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/c4set_torre_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/c4set_torre_opportunities_C4SET_Torre.php',
      'to_module' => 'C4SET_Torre',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/c4set_edificio_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/c4set_edificio_opportunities_C4SET_Edificio.php',
      'to_module' => 'C4SET_Edificio',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/c4set_corregimiento_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/c4set_corregimiento_opportunities_C4SET_Corregimiento.php',
      'to_module' => 'C4SET_Corregimiento',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/c4set_barriada_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/c4set_barriada_opportunities_C4SET_Barriada.php',
      'to_module' => 'C4SET_Barriada',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'Opportunities' => 'c4set_torre_opportunities_name',
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
        'Opportunities' => 'c4set_edificio_opportunities_name',
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
        'Opportunities' => 'c4set_corregimiento_opportunities_name',
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
        'Opportunities' => 'c4set_barriada_opportunities_name',
      ),
    ),
  ),
);