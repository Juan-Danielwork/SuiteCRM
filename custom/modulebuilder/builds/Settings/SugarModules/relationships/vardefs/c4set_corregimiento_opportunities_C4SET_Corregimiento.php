<?php
// created: 2021-02-14 21:48:45
$dictionary["C4SET_Corregimiento"]["fields"]["c4set_corregimiento_opportunities"] = array (
  'name' => 'c4set_corregimiento_opportunities',
  'type' => 'link',
  'relationship' => 'c4set_corregimiento_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_C4SET_CORREGIMIENTO_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'c4set_corregimiento_opportunitiesopportunities_idb',
);
$dictionary["C4SET_Corregimiento"]["fields"]["c4set_corregimiento_opportunities_name"] = array (
  'name' => 'c4set_corregimiento_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C4SET_CORREGIMIENTO_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'c4set_corregimiento_opportunitiesopportunities_idb',
  'link' => 'c4set_corregimiento_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["C4SET_Corregimiento"]["fields"]["c4set_corregimiento_opportunitiesopportunities_idb"] = array (
  'name' => 'c4set_corregimiento_opportunitiesopportunities_idb',
  'type' => 'link',
  'relationship' => 'c4set_corregimiento_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_C4SET_CORREGIMIENTO_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
