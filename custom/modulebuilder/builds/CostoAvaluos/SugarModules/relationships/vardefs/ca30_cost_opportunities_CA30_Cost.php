<?php
// created: 2020-12-05 22:52:03
$dictionary["CA30_Cost"]["fields"]["ca30_cost_opportunities"] = array (
  'name' => 'ca30_cost_opportunities',
  'type' => 'link',
  'relationship' => 'ca30_cost_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_CA30_COST_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'ca30_cost_opportunitiesopportunities_idb',
);
$dictionary["CA30_Cost"]["fields"]["ca30_cost_opportunities_name"] = array (
  'name' => 'ca30_cost_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CA30_COST_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'ca30_cost_opportunitiesopportunities_idb',
  'link' => 'ca30_cost_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["CA30_Cost"]["fields"]["ca30_cost_opportunitiesopportunities_idb"] = array (
  'name' => 'ca30_cost_opportunitiesopportunities_idb',
  'type' => 'link',
  'relationship' => 'ca30_cost_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CA30_COST_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
