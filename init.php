<?php
/*********************************************************
 * Orderid random addon common functions lib
 *
 * @author Dongling
 ********************************************************/

if ( !defined('AREA') ) { die('Access denied'); }

fn_register_hooks(
	'place_order',
	'change_order_status'
);

?>