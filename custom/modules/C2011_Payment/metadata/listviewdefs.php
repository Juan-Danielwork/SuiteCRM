<?php
$module_name = 'C2011_Payment';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CUENTA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CUENTA',
    'width' => '10%',
  ),
  'MONTO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MONTO',
    'width' => '13%',
    'default' => true,
  ),
  'CLIENTE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CLIENTE',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '13%',
    'default' => true,
  ),
  'AVALUADOR_ASIGNADO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AVALUADOR_ASIGNADO',
    'width' => '10%',
  ),
);
;
?>
