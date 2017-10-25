<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['authorized'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='../index.php';</script>");
}

include_once('koneksi.php');
$query=mysql_query("delete from login where id_user='".$_GET[
'id_user']."'")or die (mysql_error());
if($query)header("location:tampil_user.php"); else die (mysql_error());
?>