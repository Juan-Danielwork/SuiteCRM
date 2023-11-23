<?php
$searchdefs ['Opportunities'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'label' => 'LBL_OPPORTUNITY_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'cliente_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CLIENTE',
        'width' => '10%',
        'name' => 'cliente_c',
      ),
      'etapa_de_avaluos_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ETAPA_DE_AVALUOS',
        'width' => '10%',
        'name' => 'etapa_de_avaluos_c',
      ),
      'account_name' => 
      array (
        'type' => 'relate',
        'link' => 'accounts',
        'label' => 'LBL_ACCOUNT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'account_name',
      ),
      'edificio_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EDIFICIO',
        'width' => '10%',
        'name' => 'edificio_c',
      ),
      'month_entered_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MONTH_ENTERED',
        'width' => '10%',
        'name' => 'month_entered_c',
      ),
      'barriada_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_BARRIADA',
        'width' => '10%',
        'name' => 'barriada_c',
      ),
      'year_entered_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_YEAR_ENTERED',
        'width' => '10%',
        'name' => 'year_entered_c',
      ),
      'finca_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_FINCA',
        'width' => '10%',
        'name' => 'finca_c',
      ),
      'assigned_user_name' => 
      array (
        'link' => 'assigned_user_link',
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
    ),
    'advanced_search' => 
    array (
      'cliente_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CLIENTE',
        'width' => '10%',
        'name' => 'cliente_c',
      ),
      'account_name' => 
      array (
        'type' => 'relate',
        'link' => 'accounts',
        'label' => 'LBL_ACCOUNT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'account_name',
      ),
      'name' => 
      array (
        'type' => 'name',
        'label' => 'LBL_OPPORTUNITY_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'finca_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_FINCA',
        'width' => '10%',
        'name' => 'finca_c',
      ),
      'barriada_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_BARRIADA',
        'width' => '10%',
        'name' => 'barriada_c',
      ),
      'edificio_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EDIFICIO',
        'width' => '10%',
        'name' => 'edificio_c',
      ),
      'month_entered_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MONTH_ENTERED',
        'width' => '10%',
        'name' => 'month_entered_c',
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
    'javascript' => '<script type="text/javascript" src="include/javascript/custom/jquery-1.5.min.js"></script>',
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'include/javascript/custom/4',
      ),
    ),
  ),
);
?>
