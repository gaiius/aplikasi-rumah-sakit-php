<?php 
include('koneksi.php');
$id_obat=$_GET['id_obat'];
$query=mysql_query("select * from obat where id_obat='$id_obat'");
$fe=mysql_fetch_array($query);
$harga=$fe['harga'];


echo $harga;

?>