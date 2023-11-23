<?php
// created: 2020-12-05 22:06:21
$dictionary["CB4IN_Invoice"]["fields"]["cb4in_invoice_opportunities"] = array (
  'name' => 'cb4in_invoice_opportunities',
  'type' => 'link',
  'relationship' => 'cb4in_invoice_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_CB4IN_INVOICE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'cb4in_invoice_opportunitiesopportunities_ida',
);
$dictionary["CB4IN_Invoice"]["fields"]["cb4in_invoice_opportunities_name"] = array (
  'name' => 'cb4in_invoice_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CB4IN_INVOICE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'cb4in_invoice_opportunitiesopportunities_ida',
  'link' => 'cb4in_invoice_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["CB4IN_Invoice"]["fields"]["cb4in_invoice_opportunitiesopportunities_ida"] = array (
  'name' => 'cb4in_invoice_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'cb4in_invoice_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CB4IN_INVOICE_OPPORTUNITIES_FROM_CB4IN_INVOICE_TITLE',
);
