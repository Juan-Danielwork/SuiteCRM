<?php
$module_name = 'CB4IN_Invoice';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'numero_avaluo_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMERO_AVALUO',
        'width' => '10%',
        'name' => 'numero_avaluo_c',
      ),
      'date_created_1' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_CREATED_1',
        'width' => '10%',
        'default' => true,
        'name' => 'date_created_1',
      ),
      'date_created_2' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_CREATED_2',
        'width' => '10%',
        'default' => true,
        'name' => 'date_created_2',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      'label' => '10',
      'field' => '20',
    ),
  ),
);
?>
