<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['authorized'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='../index.php';</script>");
}

include_once('koneksi.php');
$query=mysql_query("delete from transaksi_headers where id_transaction_headers='".$_GET[
'id_transaction_headers']."'")or die (mysql_error());
if($query)header("location:view_transaksi.php"); else die (mysql_error());
?>