<?php
$viewdefs ['Opportunities'] = 
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
    ),
    'panels' => 
    array (
      'lbl_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'amount_c',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'etapa_de_avaluos_c',
            'studio' => 'visible',
            'label' => 'LBL_ETAPA_DE_AVALUOS',
          ),
          1 => 
          array (
            'name' => 'fecha_cierre_c',
            'label' => 'LBL_FECHA_CIERRE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fecha_inspeccion_c',
            'label' => 'LBL_FECHA_INSPECCION',
          ),
          1 => 
          array (
            'name' => 'hora_inspeccion_c',
            'studio' => 'visible',
            'label' => 'LBL_HORA_INSPECCION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
      'lbl_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
          1 => 
          array (
            'name' => 'persona_contacto_c',
            'studio' => 'visible',
            'label' => 'LBL_PERSONA_CONTACTO',
          ),
        ),
      ),
      'lbl_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'provincia_c',
            'studio' => 'visible',
            'label' => 'LBL_PROVINCIA',
          ),
          1 => 
          array (
            'name' => 'distritos_c',
            'studio' => 'visible',
            'label' => 'LBL_DISTRITO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ciudad_c',
            'studio' => 'visible',
            'label' => 'LBL_CIUDAD',
          ),
          1 => 
          array (
            'name' => 'corregimiento_c',
            'studio' => 'visible',
            'label' => 'LBL_CORREGIMIENTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'barriada_c',
            'studio' => 'visible',
            'label' => 'LBL_BARRIADA',
          ),
          1 => 
          array (
            'name' => 'numero_casa_c',
            'label' => 'LBL_NUMERO_CASA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sector_c',
            'label' => 'LBL_SECTOR',
          ),
          1 => 
          array (
            'name' => 'edificio_c',
            'label' => 'LBL_EDIFICIO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nombre_calle_c',
            'label' => 'LBL_NOMBRE_CALLE',
          ),
          1 => 
          array (
            'name' => 'apartamento_c',
            'label' => 'LBL_APARTAMENTO',
          ),
        ),
      ),
      'lbl_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'finca_c',
            'label' => 'LBL_FINCA',
          ),
          1 => 
          array (
            'name' => 'rollo_c',
            'label' => 'LBL_ROLLO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tomo_c',
            'label' => 'LBL_TOMO',
          ),
          1 => 
          array (
            'name' => 'documento_c',
            'label' => 'LBL_DOCUMENTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'folio_c',
            'label' => 'LBL_FOLIO',
          ),
          1 => 
          array (
            'name' => 'ficha_c',
            'label' => 'LBL_FICHA',
          ),
        ),
      ),
    ),
  ),
);
?>
