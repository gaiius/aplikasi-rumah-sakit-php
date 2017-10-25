<?php

include('koneksi.php');
$delete_query = mysql_query("delete from obat where id_obat='" . $_GET['id_obat'] . "'");
if ($delete_query) {
    header("location:view_obat.php");
} else {
    echo mysql_error();
}
?>