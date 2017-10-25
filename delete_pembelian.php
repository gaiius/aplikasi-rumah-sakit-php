<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['authorized'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='../index.php';</script>");
}

include_once('koneksi.php');
$query=mysql_query("delete from purchases_headers where id_purchases_headers='".$_GET[
'id_purchases_headers']."'")or die (mysql_error());
if($query)header("location:view_pembelian.php"); else die (mysql_error());
?>