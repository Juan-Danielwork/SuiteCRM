<?php
// created: 2020-12-10 12:18:39
$dictionary["c2011_payment_securitygroups_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'c2011_payment_securitygroups_1' => 
    array (
      'lhs_module' => 'C2011_Payment',
      'lhs_table' => 'c2011_payment',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'c2011_payment_securitygroups_1_c',
      'join_key_lhs' => 'c2011_payment_securitygroups_1c2011_payment_ida',
      'join_key_rhs' => 'c2011_payment_securitygroups_1securitygroups_idb',
    ),
  ),
  'table' => 'c2011_payment_securitygroups_1_c',
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
      'name' => 'c2011_payment_securitygroups_1c2011_payment_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'c2011_payment_securitygroups_1securitygroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'c2011_payment_securitygroups_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'c2011_payment_securitygroups_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'c2011_payment_securitygroups_1c2011_payment_ida',
        1 => 'c2011_payment_securitygroups_1securitygroups_idb',
      ),
    ),
  ),
);