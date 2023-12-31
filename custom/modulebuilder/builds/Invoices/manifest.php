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
  'key' => 'CB4IN',
  'author' => '',
  'description' => 'Paquete de Facturacion',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Invoices',
  'published_date' => '2020-12-05 22:06:21',
  'type' => 'module',
  'version' => 1607205981,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Invoices',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'CB4IN_Invoice',
      'class' => 'CB4IN_Invoice',
      'path' => 'modules/CB4IN_Invoice/CB4IN_Invoice.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/cb4in_invoice_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/cb4in_invoice_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/cb4in_invoice_accountsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/cb4in_invoice_opportunitiesMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/CB4IN_Invoice',
      'to' => 'modules/CB4IN_Invoice',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/CB4IN_Invoice.php',
      'to_module' => 'CB4IN_Invoice',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/CB4IN_Invoice.php',
      'to_module' => 'CB4IN_Invoice',
      'language' => 'es_ES',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'es_ES',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/CB4IN_Invoice.php',
      'to_module' => 'CB4IN_Invoice',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/CB4IN_Invoice.php',
      'to_module' => 'CB4IN_Invoice',
      'language' => 'es_ES',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.php',
      'to_module' => 'Opportunities',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.php',
      'to_module' => 'Opportunities',
      'language' => 'es_ES',
    ),
    8 => 
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
      'from' => '<basepath>/SugarModules/relationships/vardefs/cb4in_invoice_accounts_CB4IN_Invoice.php',
      'to_module' => 'CB4IN_Invoice',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cb4in_invoice_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cb4in_invoice_opportunities_CB4IN_Invoice.php',
      'to_module' => 'CB4IN_Invoice',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cb4in_invoice_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);