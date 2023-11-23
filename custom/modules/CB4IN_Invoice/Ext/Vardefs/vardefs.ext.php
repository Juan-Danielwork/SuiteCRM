<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-12-05 22:06:21
$dictionary["CB4IN_Invoice"]["fields"]["cb4in_invoice_accounts"] = array (
  'name' => 'cb4in_invoice_accounts',
  'type' => 'link',
  'relationship' => 'cb4in_invoice_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CB4IN_INVOICE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'cb4in_invoice_accountsaccounts_ida',
);
$dictionary["CB4IN_Invoice"]["fields"]["cb4in_invoice_accounts_name"] = array (
  'name' => 'cb4in_invoice_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CB4IN_INVOICE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'cb4in_invoice_accountsaccounts_ida',
  'link' => 'cb4in_invoice_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["CB4IN_Invoice"]["fields"]["cb4in_invoice_accountsaccounts_ida"] = array (
  'name' => 'cb4in_invoice_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'cb4in_invoice_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CB4IN_INVOICE_ACCOUNTS_FROM_CB4IN_INVOICE_TITLE',
);


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


 // created: 2020-12-05 23:13:53
$dictionary['CB4IN_Invoice']['fields']['invoice_date_c']['inline_edit']=1;

 

 // created: 2020-12-24 14:18:16
$dictionary['CB4IN_Invoice']['fields']['name']['inline_edit']=true;
$dictionary['CB4IN_Invoice']['fields']['name']['duplicate_merge']='disabled';
$dictionary['CB4IN_Invoice']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['CB4IN_Invoice']['fields']['name']['merge_filter']='disabled';
$dictionary['CB4IN_Invoice']['fields']['name']['unified_search']=false;

 

 // created: 2020-12-05 23:13:53
$dictionary['CB4IN_Invoice']['fields']['numero_avaluo_c']['inline_edit']=1;

 
?>