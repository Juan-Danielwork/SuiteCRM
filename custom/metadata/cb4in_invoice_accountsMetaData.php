<?php
// created: 2020-12-05 22:06:21
$dictionary["cb4in_invoice_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cb4in_invoice_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'CB4IN_Invoice',
      'rhs_table' => 'cb4in_invoice',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cb4in_invoice_accounts_c',
      'join_key_lhs' => 'cb4in_invoice_accountsaccounts_ida',
      'join_key_rhs' => 'cb4in_invoice_accountscb4in_invoice_idb',
    ),
  ),
  'table' => 'cb4in_invoice_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'cb4in_invoice_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cb4in_invoice_accountscb4in_invoice_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cb4in_invoice_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cb4in_invoice_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cb4in_invoice_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cb4in_invoice_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cb4in_invoice_accountscb4in_invoice_idb',
      ),
    ),
  ),
);