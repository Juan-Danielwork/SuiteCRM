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
      'etapa_de_avaluos_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ETAPA_DE_AVALUOS',
        'width' => '10%',
        'name' => 'etapa_de_avaluos_c',
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
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
