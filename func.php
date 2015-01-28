<?php
/*********************************************************
 * Orders Integration addon common functions lib
 *
 * @author Json Wong
 ********************************************************/
//在客户下单时向指定url发送订单信息
if ( !defined('AREA') ) { die('Access denied'); }

function fn_orderid_randomer_place_order($order_id, $action, $order_status, $cart, $auth)
{
	echo $order_id;
	echo "--00000000000000000";
	//exit;
}

function fn_orderid_randomer_change_order_status($status_to, $status_from, $order_info, $force_notification, $order_statuses, $place_order)
{

}
?>