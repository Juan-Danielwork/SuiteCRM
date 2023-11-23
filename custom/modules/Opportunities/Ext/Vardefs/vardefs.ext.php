<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-12-05 22:06:07
$dictionary["Opportunity"]["fields"]["c2011_payment_opportunities"] = array (
  'name' => 'c2011_payment_opportunities',
  'type' => 'link',
  'relationship' => 'c2011_payment_opportunities',
  'source' => 'non-db',
  'module' => 'C2011_Payment',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_C2011_PAYMENT_OPPORTUNITIES_FROM_C2011_PAYMENT_TITLE',
);


// created: 2021-02-14 21:48:45
$dictionary["Opportunity"]["fields"]["c4set_barriada_opportunities"] = array (
  'name' => 'c4set_barriada_opportunities',
  'type' => 'link',
  'relationship' => 'c4set_barriada_opportunities',
  'source' => 'non-db',
  'module' => 'C4SET_Barriada',
  'bean_name' => 'C4SET_Barriada',
  'vname' => 'LBL_C4SET_BARRIADA_OPPORTUNITIES_FROM_C4SET_BARRIADA_TITLE',
  'id_name' => 'c4set_barriada_opportunitiesc4set_barriada_ida',
);
$dictionary["Opportunity"]["fields"]["c4set_barriada_opportunities_name"] = array (
  'name' => 'c4set_barriada_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C4SET_BARRIADA_OPPORTUNITIES_FROM_C4SET_BARRIADA_TITLE',
  'save' => true,
  'id_name' => 'c4set_barriada_opportunitiesc4set_barriada_ida',
  'link' => 'c4set_barriada_opportunities',
  'table' => 'c4set_barriada',
  'module' => 'C4SET_Barriada',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["c4set_barriada_opportunitiesc4set_barriada_ida"] = array (
  'name' => 'c4set_barriada_opportunitiesc4set_barriada_ida',
  'type' => 'link',
  'relationship' => 'c4set_barriada_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_C4SET_BARRIADA_OPPORTUNITIES_FROM_C4SET_BARRIADA_TITLE',
);


// created: 2021-02-14 21:48:45
$dictionary["Opportunity"]["fields"]["c4set_corregimiento_opportunities"] = array (
  'name' => 'c4set_corregimiento_opportunities',
  'type' => 'link',
  'relationship' => 'c4set_corregimiento_opportunities',
  'source' => 'non-db',
  'module' => 'C4SET_Corregimiento',
  'bean_name' => 'C4SET_Corregimiento',
  'vname' => 'LBL_C4SET_CORREGIMIENTO_OPPORTUNITIES_FROM_C4SET_CORREGIMIENTO_TITLE',
  'id_name' => 'c4set_corregimiento_opportunitiesc4set_corregimiento_ida',
);
$dictionary["Opportunity"]["fields"]["c4set_corregimiento_opportunities_name"] = array (
  'name' => 'c4set_corregimiento_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C4SET_CORREGIMIENTO_OPPORTUNITIES_FROM_C4SET_CORREGIMIENTO_TITLE',
  'save' => true,
  'id_name' => 'c4set_corregimiento_opportunitiesc4set_corregimiento_ida',
  'link' => 'c4set_corregimiento_opportunities',
  'table' => 'c4set_corregimiento',
  'module' => 'C4SET_Corregimiento',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["c4set_corregimiento_opportunitiesc4set_corregimiento_ida"] = array (
  'name' => 'c4set_corregimiento_opportunitiesc4set_corregimiento_ida',
  'type' => 'link',
  'relationship' => 'c4set_corregimiento_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_C4SET_CORREGIMIENTO_OPPORTUNITIES_FROM_C4SET_CORREGIMIENTO_TITLE',
);


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


// created: 2021-02-14 21:48:44
$dictionary["Opportunity"]["fields"]["c4set_torre_opportunities"] = array (
  'name' => 'c4set_torre_opportunities',
  'type' => 'link',
  'relationship' => 'c4set_torre_opportunities',
  'source' => 'non-db',
  'module' => 'C4SET_Torre',
  'bean_name' => false,
  'vname' => 'LBL_C4SET_TORRE_OPPORTUNITIES_FROM_C4SET_TORRE_TITLE',
  'id_name' => 'c4set_torre_opportunitiesc4set_torre_ida',
);
$dictionary["Opportunity"]["fields"]["c4set_torre_opportunities_name"] = array (
  'name' => 'c4set_torre_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C4SET_TORRE_OPPORTUNITIES_FROM_C4SET_TORRE_TITLE',
  'save' => true,
  'id_name' => 'c4set_torre_opportunitiesc4set_torre_ida',
  'link' => 'c4set_torre_opportunities',
  'table' => 'c4set_torre',
  'module' => 'C4SET_Torre',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["c4set_torre_opportunitiesc4set_torre_ida"] = array (
  'name' => 'c4set_torre_opportunitiesc4set_torre_ida',
  'type' => 'link',
  'relationship' => 'c4set_torre_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_C4SET_TORRE_OPPORTUNITIES_FROM_C4SET_TORRE_TITLE',
);


// created: 2020-12-05 22:52:03
$dictionary["Opportunity"]["fields"]["ca30_cost_opportunities"] = array (
  'name' => 'ca30_cost_opportunities',
  'type' => 'link',
  'relationship' => 'ca30_cost_opportunities',
  'source' => 'non-db',
  'module' => 'CA30_Cost',
  'bean_name' => false,
  'vname' => 'LBL_CA30_COST_OPPORTUNITIES_FROM_CA30_COST_TITLE',
  'id_name' => 'ca30_cost_opportunitiesca30_cost_ida',
);
$dictionary["Opportunity"]["fields"]["ca30_cost_opportunities_name"] = array (
  'name' => 'ca30_cost_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CA30_COST_OPPORTUNITIES_FROM_CA30_COST_TITLE',
  'save' => true,
  'id_name' => 'ca30_cost_opportunitiesca30_cost_ida',
  'link' => 'ca30_cost_opportunities',
  'table' => 'ca30_cost',
  'module' => 'CA30_Cost',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["ca30_cost_opportunitiesca30_cost_ida"] = array (
  'name' => 'ca30_cost_opportunitiesca30_cost_ida',
  'type' => 'link',
  'relationship' => 'ca30_cost_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CA30_COST_OPPORTUNITIES_FROM_CA30_COST_TITLE',
);


// created: 2020-12-05 22:06:21
$dictionary["Opportunity"]["fields"]["cb4in_invoice_opportunities"] = array (
  'name' => 'cb4in_invoice_opportunities',
  'type' => 'link',
  'relationship' => 'cb4in_invoice_opportunities',
  'source' => 'non-db',
  'module' => 'CB4IN_Invoice',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_CB4IN_INVOICE_OPPORTUNITIES_FROM_CB4IN_INVOICE_TITLE',
);


 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['account_name_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['amount_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['apartamento_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['barriada_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['ciudad_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['cliente_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['cliente_celular_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['cliente_email_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['cliente_fax_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['cliente_telefono_casa_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['cliente_telefono_oficina_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['contact_id_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['corregimiento_c']['inline_edit']=1;

 

 // created: 2021-03-26 08:57:03
$dictionary['Opportunity']['fields']['custom_cancel_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['custom_cancel_c']['labelValue']='Excluir fin. y can.';

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['distritos_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['documento_c']['inline_edit']=1;

 

 // created: 2021-07-28 12:38:27
$dictionary['Opportunity']['fields']['edificio_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['edificio_c']['labelValue']='Edificio';

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['etapa_de_avaluos_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['fecha_cierre_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['fecha_inspeccion_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['ficha_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['finca_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['finished_mail_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['folio_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['hora_inspeccion_c']['inline_edit']=1;

 

 // created: 2023-11-11 08:50:41
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2023-11-11 08:50:40
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2023-11-11 08:50:39
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2023-11-11 08:50:39
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['month_entered_c']['inline_edit']=1;

 

 // created: 2021-01-19 20:38:05
$dictionary['Opportunity']['fields']['nombre_calle_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['nombre_calle_c']['labelValue']='Calle';

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['numero_avaluo_c']['inline_edit']=1;

 

 // created: 2021-01-19 20:38:59
$dictionary['Opportunity']['fields']['numero_casa_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['numero_casa_c']['labelValue']='No. de Casa o Apto.';

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['persona_contacto_c']['inline_edit']=1;

 

 // created: 2020-12-12 22:31:14
$dictionary['Opportunity']['fields']['provincia_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['provincia_c']['labelValue']='Provincia';

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['rollo_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['saldo_pendiente_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['sector_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['textarea_comentarios_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:54
$dictionary['Opportunity']['fields']['textarea_contacto_c']['inline_edit']=1;

 

 // created: 2020-12-05 23:13:53
$dictionary['Opportunity']['fields']['tomo_c']['inline_edit']=1;

 

 // created: 2021-01-19 20:39:31
$dictionary['Opportunity']['fields']['torre_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['torre_c']['labelValue']='Torre';

 

 // created: 2022-01-05 00:12:03
$dictionary['Opportunity']['fields']['year_entered_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['year_entered_c']['labelValue']='year entered';

 
?>