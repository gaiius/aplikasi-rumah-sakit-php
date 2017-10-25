<?php
session_start();
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("insert into diskon(nama,nominal,expire)
	value(
	'" . $_POST['a'] . "',
	'" . $_POST['b'] . "',
	'" . $_POST['c'] . "')");

    if ($add_query) {
        header("location:view_diskon.php");
    } else {
        echo mysql_error();
    }
}
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="a"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" class="form-control "name="b"></td>
        </tr>
        <tr>
            <td>Expire</td>
            <td><input type="text" class="form-control "name="c"></td>
        </tr>
        <tr>

            <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>
<?php include('bottom.php'); ?>








