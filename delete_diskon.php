<?php

include('koneksi.php');
$delete_query = mysql_query("delete from diskon where id_diskon='" . $_GET['id_diskon'] . "'");
if ($delete_query) {
    header("location:view_diskon.php");
} else {
    echo mysql_error();
}
?>