<?php
$host = '192.168.30.179';
$db_name = 'LIY_ERP0503';
$username = 'sa';
$password = '123';
$conn_bid = null;
try {
	//TODO:Thay doi driver
	$conn_erp = odbc_connect("DRIVER={SQL Server Native Client 11.0};Server={$host};Database={$db_name};String Types=Unicode", $username, $password);
	if (!$conn_erp) {
		die(" connect ERP DB error");
	}
} catch (Exception $e) {
	echo $e;
}
// $conn_bid=odbc_connect('BID','sa','123');
// if( ! $conn_bid ) {
// 	die( " connect BID DB Error");
// }
?>