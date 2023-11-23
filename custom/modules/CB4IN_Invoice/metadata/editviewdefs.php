<?php
$module_name = 'CB4IN_Invoice';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
     //'javascript' => '<script type="text/javascript" src="include/javascript/custom/jquery-1.5.min.js"></script><script type="text/javascript" src="include/javascript/custom/jquery.validate.min.js"></script>',
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/custom/invoices.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'abono',
            'label' => 'LBL_ABONO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'invoice_date_c',
            'label' => 'LBL_INVOICE_DATE',
          ),
          1 => 
          array (
            'name' => 'saldo_pendiente',
            'label' => 'LBL_SALDO_PENDIENTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cb4in_invoice_opportunities_name',
            'label' => 'LBL_CB4IN_INVOICE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          ),
          1 => 
          array (
            'name' => 'itbms_monto',
            'label' => 'LBL_ITBMS_MONTO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'costo_avaluo',
            'label' => 'LBL_COSTO_AVALUO',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'descuento',
            'label' => 'LBL_DESCUENTO',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'subtotal',
            'label' => 'LBL_SUBTOTAL',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'itbms',
            'label' => 'LBL_ITBMS',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'total',
            'label' => 'LBL_TOTAL',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
