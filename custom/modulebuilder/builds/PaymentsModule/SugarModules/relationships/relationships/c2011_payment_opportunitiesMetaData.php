<?php
// created: 2020-12-05 22:06:07
$dictionary["c2011_payment_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'c2011_payment_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'C2011_Payment',
      'rhs_table' => 'c2011_payment',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'c2011_payment_opportunities_c',
      'join_key_lhs' => 'c2011_payment_opportunitiesopportunities_ida',
      'join_key_rhs' => 'c2011_payment_opportunitiesc2011_payment_idb',
    ),
  ),
  'table' => 'c2011_payment_opportunities_c',
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
      'name' => 'c2011_payment_opportunitiesopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'c2011_payment_opportunitiesc2011_payment_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'c2011_payment_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'c2011_payment_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'c2011_payment_opportunitiesopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'c2011_payment_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'c2011_payment_opportunitiesc2011_payment_idb',
      ),
    ),
  ),
);