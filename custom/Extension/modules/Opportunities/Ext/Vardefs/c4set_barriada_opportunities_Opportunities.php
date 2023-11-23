<?php
// created: 2021-02-14 21:48:45
$dictionary["Opportunity"]["fields"]["c4set_barriada_opportunities"] = array (
  'name' => 'c4set_barriada_opportunities',
  'type' => 'link',
  'relationship' => 'c4set_barriada_opportunities',
  'source' => 'non-db',
  'module' => 'C4SET_Barriada',
  'bean_name' => 'C4SET_Barriada',
  'vname' => 'LBL_C4SET_BARRIADA_OPPORTUNITIES_FROM_C4SET_BARRIADA_TITLE',
  'id_name' => 'c4set_barriada_opportunitiesc4set_barriada_ida',
);
$dictionary["Opportunity"]["fields"]["c4set_barriada_opportunities_name"] = array (
  'name' => 'c4set_barriada_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C4SET_BARRIADA_OPPORTUNITIES_FROM_C4SET_BARRIADA_TITLE',
  'save' => true,
  'id_name' => 'c4set_barriada_opportunitiesc4set_barriada_ida',
  'link' => 'c4set_barriada_opportunities',
  'table' => 'c4set_barriada',
  'module' => 'C4SET_Barriada',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["c4set_barriada_opportunitiesc4set_barriada_ida"] = array (
  'name' => 'c4set_barriada_opportunitiesc4set_barriada_ida',
  'type' => 'link',
  'relationship' => 'c4set_barriada_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_C4SET_BARRIADA_OPPORTUNITIES_FROM_C4SET_BARRIADA_TITLE',
);
