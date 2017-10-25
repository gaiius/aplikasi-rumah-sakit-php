<?php

include('koneksi.php');
$delete_query = mysql_query("delete from dokter where id_dokter='" . $_GET['id_dokter'] . "'");
if ($delete_query) {
    header("location:view_dokter.php");
} else {
    echo mysql_error();
}
?>