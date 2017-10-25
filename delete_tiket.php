<?php

include('koneksi.php');
$delete_query = mysql_query("delete from tiket where id_tiket='" . $_GET['id_tiket'] . "'");
if ($delete_query) {
    header("location:view_tiket.php");
} else {
    echo mysql_error();
}
?>