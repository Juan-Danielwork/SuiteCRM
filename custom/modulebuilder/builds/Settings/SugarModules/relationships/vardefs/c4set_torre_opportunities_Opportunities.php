<?php
// created: 2021-02-14 21:48:44
$dictionary["Opportunity"]["fields"]["c4set_torre_opportunities"] = array (
  'name' => 'c4set_torre_opportunities',
  'type' => 'link',
  'relationship' => 'c4set_torre_opportunities',
  'source' => 'non-db',
  'module' => 'C4SET_Torre',
  'bean_name' => false,
  'vname' => 'LBL_C4SET_TORRE_OPPORTUNITIES_FROM_C4SET_TORRE_TITLE',
  'id_name' => 'c4set_torre_opportunitiesc4set_torre_ida',
);
$dictionary["Opportunity"]["fields"]["c4set_torre_opportunities_name"] = array (
  'name' => 'c4set_torre_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C4SET_TORRE_OPPORTUNITIES_FROM_C4SET_TORRE_TITLE',
  'save' => true,
  'id_name' => 'c4set_torre_opportunitiesc4set_torre_ida',
  'link' => 'c4set_torre_opportunities',
  'table' => 'c4set_torre',
  'module' => 'C4SET_Torre',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["c4set_torre_opportunitiesc4set_torre_ida"] = array (
  'name' => 'c4set_torre_opportunitiesc4set_torre_ida',
  'type' => 'link',
  'relationship' => 'c4set_torre_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_C4SET_TORRE_OPPORTUNITIES_FROM_C4SET_TORRE_TITLE',
);
