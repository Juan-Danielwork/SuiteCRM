<?php
$module_name = 'CB4IN_Invoice';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '14%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CB4IN_INVOICE_OPPORTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cb4in_invoice_opportunities',
    'label' => 'LBL_CB4IN_INVOICE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'width' => '15%',
    'default' => true,
  ),
  'CLIENTE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLIENTE',
    'width' => '15%',
    'default' => true,
  ),
  'CB4IN_INVOICE_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cb4in_invoice_accounts',
    'label' => 'LBL_CB4IN_INVOICE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'width' => '15%',
    'default' => true,
  ),
  'COSTO_AVALUO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COSTO_AVALUO',
    'width' => '10%',
    'default' => true,
  ),
  'SUBTOTAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUBTOTAL',
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TOTAL',
    'width' => '10%',
    'default' => true,
  ),
  'INVOICE_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_INVOICE_DATE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => false,
  ),
  'CUENTA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CUENTA',
    'width' => '15%',
    'default' => false,
  ),
  'FECHA_FACTURA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_FACTURA',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
