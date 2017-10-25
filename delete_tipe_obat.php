<?php

include('koneksi.php');
$delete_query = mysql_query("delete from tipe_obat where id_tipe_obat='" . $_GET['id_tipe_obat'] . "'");
if ($delete_query) {
    header("location:view_tipe_obat.php");
} else {
    echo mysql_error();
}
?>