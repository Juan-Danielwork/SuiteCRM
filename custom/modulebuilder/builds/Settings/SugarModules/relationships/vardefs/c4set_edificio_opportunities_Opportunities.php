<?php
// created: 2021-02-14 21:48:45
$dictionary["Opportunity"]["fields"]["c4set_edificio_opportunities"] = array (
  'name' => 'c4set_edificio_opportunities',
  'type' => 'link',
  'relationship' => 'c4set_edificio_opportunities',
  'source' => 'non-db',
  'module' => 'C4SET_Edificio',
  'bean_name' => 'C4SET_Edificio',
  'vname' => 'LBL_C4SET_EDIFICIO_OPPORTUNITIES_FROM_C4SET_EDIFICIO_TITLE',
  'id_name' => 'c4set_edificio_opportunitiesc4set_edificio_ida',
);
$dictionary["Opportunity"]["fields"]["c4set_edificio_opportunities_name"] = array (
  'name' => 'c4set_edificio_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C4SET_EDIFICIO_OPPORTUNITIES_FROM_C4SET_EDIFICIO_TITLE',
  'save' => true,
  'id_name' => 'c4set_edificio_opportunitiesc4set_edificio_ida',
  'link' => 'c4set_edificio_opportunities',
  'table' => 'c4set_edificio',
  'module' => 'C4SET_Edificio',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["c4set_edificio_opportunitiesc4set_edificio_ida"] = array (
  'name' => 'c4set_edificio_opportunitiesc4set_edificio_ida',
  'type' => 'link',
  'relationship' => 'c4set_edificio_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_C4SET_EDIFICIO_OPPORTUNITIES_FROM_C4SET_EDIFICIO_TITLE',
);
