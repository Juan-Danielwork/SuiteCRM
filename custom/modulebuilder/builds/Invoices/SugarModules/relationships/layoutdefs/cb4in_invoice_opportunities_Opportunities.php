<?php
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
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
