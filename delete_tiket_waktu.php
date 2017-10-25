<?php

include('koneksi.php');
$delete_query = mysql_query("delete from tiket where id_tiket_waktu='" . $_GET['id_tiket_waktu'] . "'");
if ($delete_query) {
    header("location:view_tiket_waktu.php");
} else {
    echo mysql_error();
}
?>