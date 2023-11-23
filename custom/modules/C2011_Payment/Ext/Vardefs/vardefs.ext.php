<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-12-05 22:06:07
$dictionary["C2011_Payment"]["fields"]["c2011_payment_opportunities"] = array (
  'name' => 'c2011_payment_opportunities',
  'type' => 'link',
  'relationship' => 'c2011_payment_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_C2011_PAYMENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'c2011_payment_opportunitiesopportunities_ida',
);
$dictionary["C2011_Payment"]["fields"]["c2011_payment_opportunities_name"] = array (
  'name' => 'c2011_payment_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C2011_PAYMENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'c2011_payment_opportunitiesopportunities_ida',
  'link' => 'c2011_payment_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["C2011_Payment"]["fields"]["c2011_payment_opportunitiesopportunities_ida"] = array (
  'name' => 'c2011_payment_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'c2011_payment_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_C2011_PAYMENT_OPPORTUNITIES_FROM_C2011_PAYMENT_TITLE',
);


// created: 2020-12-10 12:18:39
$dictionary["C2011_Payment"]["fields"]["c2011_payment_securitygroups_1"] = array (
  'name' => 'c2011_payment_securitygroups_1',
  'type' => 'link',
  'relationship' => 'c2011_payment_securitygroups_1',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_C2011_PAYMENT_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
);


 // created: 2020-12-05 23:13:52
$dictionary['C2011_Payment']['fields']['avaluador_asignado_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:52
$dictionary['C2011_Payment']['fields']['cliente_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:52
$dictionary['C2011_Payment']['fields']['cuenta_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:52
$dictionary['C2011_Payment']['fields']['etapa_de_avaluos_c']['inline_edit']=1;

 
?>