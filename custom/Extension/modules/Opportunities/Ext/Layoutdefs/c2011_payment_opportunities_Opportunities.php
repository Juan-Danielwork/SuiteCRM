<?php
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
