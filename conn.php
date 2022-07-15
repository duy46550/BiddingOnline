<?php
$host = '192.168.30.118';
$db_name = 'BID';
$username = 'sa';
$password = '123';
$conn_bid = null;
try {
	//TODO:Thay doi driver
	$conn_bid = odbc_connect("DRIVER={SQL Server Native Client 11.0};Server={$host};Database={$db_name};String Types=Unicode", $username, $password);
	if (!$conn_bid) {
		die(" connect BID DB error");
	}
} catch (Exception $e) {
	echo $e;
}
// $conn_bid=odbc_connect('BID','sa','123');
// if( ! $conn_bid ) {
// 	die( " connect BID DB Error");
// }
?>