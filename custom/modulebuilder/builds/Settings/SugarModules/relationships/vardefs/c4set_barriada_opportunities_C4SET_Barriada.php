<?php
// created: 2021-02-14 21:48:45
$dictionary["C4SET_Barriada"]["fields"]["c4set_barriada_opportunities"] = array (
  'name' => 'c4set_barriada_opportunities',
  'type' => 'link',
  'relationship' => 'c4set_barriada_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_C4SET_BARRIADA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'c4set_barriada_opportunitiesopportunities_idb',
);
$dictionary["C4SET_Barriada"]["fields"]["c4set_barriada_opportunities_name"] = array (
  'name' => 'c4set_barriada_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C4SET_BARRIADA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'c4set_barriada_opportunitiesopportunities_idb',
  'link' => 'c4set_barriada_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["C4SET_Barriada"]["fields"]["c4set_barriada_opportunitiesopportunities_idb"] = array (
  'name' => 'c4set_barriada_opportunitiesopportunities_idb',
  'type' => 'link',
  'relationship' => 'c4set_barriada_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_C4SET_BARRIADA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
