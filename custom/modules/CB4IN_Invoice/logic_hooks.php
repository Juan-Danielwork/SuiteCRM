<?php
 /**
  *	$hook_array
  *	Your logic hook will also define the $hook_array. $hook_array is a two dimensional array:
  *		
  *	- name: the name of the event that you are hooking your custom logic to
  *	- array: an array containing the parameters needed to fire the hook
  *
  *	A best practice is for each entry in the top level array to be defined on a single line to make it easier to automatically replace this file. Also, logic_hooks.php should contain only hook definitions; the actual logic is defined elsewhere.
  *
  *	For example:
  *	$hook_array['before_save'][] = Array(
  *										  1,                                     //Se trata de un índice. Lo pasamos a 1 
  *										  test,                                  //Se trata del nombre del hook. Sirve solo para identificar el hook.
  *										  'custom/modules/Leads/test12.php',     //Es el fichero que contendrá nuestra acción personalizada
  *										  'TestClass',                           //El nombre de la clase dentro del fichero test12.php.
  *										  'lead_before_save_1'                   //Nombre del método a ejecutar dentro de la clase test12.
  *										);
  * Available Hooks:
  * 
  *	   Module hooks:
  *		- before_delete
  *		- after_delete
  *		- before_restore	
  *		- after_restore	
  *		- after_retrieve	
  *		- before_save	
  *		- after_save	
  *		- process_record
  *
  **/
 
$hook_version = 1; 
$hook_array = Array(); 
$hook_array['after_save'] = Array();
$hook_array['before_save'] = Array();
$hook_array['before_delete'] = Array();
$hook_array['after_save'][] = Array(1,"save_invoice_info","custom/modules/CB4IN_Invoice/Invoice_Hook.php","Invoice_Hook","save_invoice_info");
$hook_array['before_save'][] = Array(1,"set_saldo_pendiente","custom/modules/CB4IN_Invoice/Invoice_Hook.php","Invoice_Hook","set_saldo_pendiente");
$hook_array['before_delete'][] = Array(1,"restote_saldo_pendiente","custom/modules/CB4IN_Invoice/Invoice_Hook.php","Invoice_Hook","restote_saldo_pendiente");



?>