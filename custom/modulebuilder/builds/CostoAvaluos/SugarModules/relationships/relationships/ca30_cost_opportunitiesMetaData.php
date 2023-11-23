<?php
// created: 2020-12-05 22:52:03
$dictionary["ca30_cost_opportunities"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ca30_cost_opportunities' => 
    array (
      'lhs_module' => 'CA30_Cost',
      'lhs_table' => 'ca30_cost',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ca30_cost_opportunities_c',
      'join_key_lhs' => 'ca30_cost_opportunitiesca30_cost_ida',
      'join_key_rhs' => 'ca30_cost_opportunitiesopportunities_idb',
    ),
  ),
  'table' => 'ca30_cost_opportunities_c',
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
      'name' => 'ca30_cost_opportunitiesca30_cost_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ca30_cost_opportunitiesopportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ca30_cost_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ca30_cost_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ca30_cost_opportunitiesca30_cost_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ca30_cost_opportunities_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ca30_cost_opportunitiesopportunities_idb',
      ),
    ),
  ),
);