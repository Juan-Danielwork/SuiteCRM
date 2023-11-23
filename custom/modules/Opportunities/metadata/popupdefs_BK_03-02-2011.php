<?php
$popupMeta = array('moduleMain' => 'Opportunity',
						'varName' => 'OPPORTUNITY',
						'orderBy' => 'name',
						'whereClauses' => array('name' => 'opportunities.name', 'account_name' => 'accounts.name'),
						'searchInputs' => array('name', 'account_name'),
						'listviewdefs' => array(
											'NAME' => array(
												'width'   => '15',  
												'label'   => 'LBL_LIST_OPPORTUNITY_NAME', 
												'link'    => true,
										        'default' => true
											),
											'ETAPA_DE_AVALUOS_C' => array (
												'type' => 'enum',
												'default' => true,
												'studio' => 'visible',
												'label' => 'LBL_ETAPA_DE_AVALUOS',
												'width' => '15',
											 ),
										    'ACCOUNT_NAME' => array (
												'width' => '10',
												'label' => 'LBL_LIST_ACCOUNT_NAME',
												'id' => 'ACCOUNT_ID',
												'module' => 'Accounts',
												'link' => true,
												'default' => true,
												'sortable' => true,
												'ACLTag' => 'ACCOUNT',
												'contextMenu' => 
												array (
												  'objectType' => 'sugarAccount',
												  'metaData' => 
												  array (
													'return_module' => 'Contacts',
													'return_action' => 'ListView',
													'module' => 'Accounts',
													'parent_id' => '{$ACCOUNT_ID}',
													'parent_name' => '{$ACCOUNT_NAME}',
													'account_id' => '{$ACCOUNT_ID}',
													'account_name' => '{$ACCOUNT_NAME}',
												  ),
												),
												'related_fields' => 
												array (
												  0 => 'account_id',
												),
											),
											'CLIENTE_C' => array (
												'type' => 'varchar',
												'default' => true,
												'label' => 'LBL_CLIENTE',
												'width' => '18%',
											),
											'FECHA_CIERRE_C' => array (
												'type' => 'varchar',
												'default' => true,
												'label' => 'LBL_FECHA_CIERRE',
											),
										    'ASSIGNED_USER_NAME' => array(
												'width' => '5', 
												'label' => 'LBL_LIST_ASSIGNED_USER',
										        'default' => true),
											),
						'searchdefs'   => array(
										 	'name', 
											array('name' => 'account_name', 'displayParams' => array('hideButtons'=>'true', 'size'=>30, 'class'=>'sqsEnabled sqsNoAutofill')), 
											'opportunity_type',
											'sales_stage',
											array('name' => 'assigned_user_id', 'type' => 'enum', 'label' => 'LBL_ASSIGNED_TO', 'function' => array('name' => 'get_user_array', 'params' => array(false))),
										  )
						);


?>