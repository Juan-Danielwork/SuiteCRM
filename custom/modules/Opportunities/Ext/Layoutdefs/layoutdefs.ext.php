<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2020-12-05 22:06:07
$layout_defs["Opportunities"]["subpanel_setup"]['c2011_payment_opportunities'] = array (
  'order' => 100,
  'module' => 'C2011_Payment',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_C2011_PAYMENT_OPPORTUNITIES_FROM_C2011_PAYMENT_TITLE',
  'get_subpanel_data' => 'c2011_payment_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    // Added by akk 
   /* 1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),*/
    // Added by akk 
  ),
);


 // created: 2020-12-05 22:06:21
$layout_defs["Opportunities"]["subpanel_setup"]['cb4in_invoice_opportunities'] = array (
  'order' => 100,
  'module' => 'CB4IN_Invoice',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CB4IN_INVOICE_OPPORTUNITIES_FROM_CB4IN_INVOICE_TITLE',
  'get_subpanel_data' => 'cb4in_invoice_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


$layout_defs["Opportunities"]["subpanel_setup"]["cb4in_invoice_opportunities"] = array (
  'order' => 100,
  'module' => 'CB4IN_Invoice',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CB4IN_INVOICE_OPPORTUNITIES_FROM_CB4IN_INVOICE_TITLE',
  'get_subpanel_data' => 'cb4in_invoice_opportunities',
  'top_buttons' =>
  array (
    0 =>
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 =>
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);




//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['c2011_payment_opportunities']['override_subpanel_name'] = 'Opportunity_subpanel_c2011_payment_opportunities';


//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['cb4in_invoice_opportunities']['override_subpanel_name'] = 'Opportunity_subpanel_cb4in_invoice_opportunities';

?>