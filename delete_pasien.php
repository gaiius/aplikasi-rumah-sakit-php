<?php

include('koneksi.php');
$delete_query = mysql_query("delete from pasien where id_pasien='" . $_GET['id_pasien'] . "'");
if ($delete_query) {
    header("location:view_pasien.php");
} else {
    echo mysql_error();
}
?>