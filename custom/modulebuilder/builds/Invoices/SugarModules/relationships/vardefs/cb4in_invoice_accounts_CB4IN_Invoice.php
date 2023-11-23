<?php
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
