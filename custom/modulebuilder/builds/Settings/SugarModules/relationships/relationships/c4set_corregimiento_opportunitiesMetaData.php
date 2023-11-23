<?php
// created: 2021-02-14 21:48:45
$dictionary["c4set_corregimiento_opportunities"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'c4set_corregimiento_opportunities' => 
    array (
      'lhs_module' => 'C4SET_Corregimiento',
      'lhs_table' => 'c4set_corregimiento',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'c4set_corregimiento_opportunities_c',
      'join_key_lhs' => 'c4set_corregimiento_opportunitiesc4set_corregimiento_ida',
      'join_key_rhs' => 'c4set_corregimiento_opportunitiesopportunities_idb',
    ),
  ),
  'table' => 'c4set_corregimiento_opportunities_c',
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
      'name' => 'c4set_corregimiento_opportunitiesc4set_corregimiento_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'c4set_corregimiento_opportunitiesopportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'c4set_corregimiento_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'c4set_corregimiento_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'c4set_corregimiento_opportunitiesc4set_corregimiento_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'c4set_corregimiento_opportunities_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'c4set_corregimiento_opportunitiesopportunities_idb',
      ),
    ),
  ),
);