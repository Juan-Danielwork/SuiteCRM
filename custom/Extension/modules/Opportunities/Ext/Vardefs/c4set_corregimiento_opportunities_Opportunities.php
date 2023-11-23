<?php
// created: 2021-02-14 21:48:45
$dictionary["Opportunity"]["fields"]["c4set_corregimiento_opportunities"] = array (
  'name' => 'c4set_corregimiento_opportunities',
  'type' => 'link',
  'relationship' => 'c4set_corregimiento_opportunities',
  'source' => 'non-db',
  'module' => 'C4SET_Corregimiento',
  'bean_name' => 'C4SET_Corregimiento',
  'vname' => 'LBL_C4SET_CORREGIMIENTO_OPPORTUNITIES_FROM_C4SET_CORREGIMIENTO_TITLE',
  'id_name' => 'c4set_corregimiento_opportunitiesc4set_corregimiento_ida',
);
$dictionary["Opportunity"]["fields"]["c4set_corregimiento_opportunities_name"] = array (
  'name' => 'c4set_corregimiento_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C4SET_CORREGIMIENTO_OPPORTUNITIES_FROM_C4SET_CORREGIMIENTO_TITLE',
  'save' => true,
  'id_name' => 'c4set_corregimiento_opportunitiesc4set_corregimiento_ida',
  'link' => 'c4set_corregimiento_opportunities',
  'table' => 'c4set_corregimiento',
  'module' => 'C4SET_Corregimiento',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["c4set_corregimiento_opportunitiesc4set_corregimiento_ida"] = array (
  'name' => 'c4set_corregimiento_opportunitiesc4set_corregimiento_ida',
  'type' => 'link',
  'relationship' => 'c4set_corregimiento_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_C4SET_CORREGIMIENTO_OPPORTUNITIES_FROM_C4SET_CORREGIMIENTO_TITLE',
);
