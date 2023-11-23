<?php
// created: 2020-12-05 22:52:03
$dictionary["Opportunity"]["fields"]["ca30_cost_opportunities"] = array (
  'name' => 'ca30_cost_opportunities',
  'type' => 'link',
  'relationship' => 'ca30_cost_opportunities',
  'source' => 'non-db',
  'module' => 'CA30_Cost',
  'bean_name' => false,
  'vname' => 'LBL_CA30_COST_OPPORTUNITIES_FROM_CA30_COST_TITLE',
  'id_name' => 'ca30_cost_opportunitiesca30_cost_ida',
);
$dictionary["Opportunity"]["fields"]["ca30_cost_opportunities_name"] = array (
  'name' => 'ca30_cost_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CA30_COST_OPPORTUNITIES_FROM_CA30_COST_TITLE',
  'save' => true,
  'id_name' => 'ca30_cost_opportunitiesca30_cost_ida',
  'link' => 'ca30_cost_opportunities',
  'table' => 'ca30_cost',
  'module' => 'CA30_Cost',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["ca30_cost_opportunitiesca30_cost_ida"] = array (
  'name' => 'ca30_cost_opportunitiesca30_cost_ida',
  'type' => 'link',
  'relationship' => 'ca30_cost_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CA30_COST_OPPORTUNITIES_FROM_CA30_COST_TITLE',
);
