<?php
session_start();
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("insert into pasien(no_pasien,nama,umur,jenis_kelamin,tanggal,alamat,telpon,telpon_rumah,tanggal_daftar)
	value(
	'" . $_POST['a'] . "',
	'" . $_POST['b'] . "',
	'" . $_POST['c'] . "',
	'" . $_POST['d'] . "',
	'" . $_POST['e'] . "',
	'" . $_POST['f'] . "',
	'" . $_POST['g'] . "',
	'" . $_POST['h'] . "',
	'" . $_POST['i'] . "')");

    if ($add_query) {
        header("location:view_pasien.php");
    } else {
        echo mysql_error();
    }
}
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>No Pasien</td>
            <td><input type="text" class="form-control "name="a"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="b"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><input type="text" class="form-control "name="c"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" class="form-control "name="d"></td>
        </tr>

        <tr>
            <td>Tanggal</td>
            <td><input type="text" class="form-control "name="e"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" class="form-control "name="f"></td>
        </tr>

        <tr>
            <td>Telpon</td>
            <td><input type="text" class="form-control "name="g"></td>
        </tr>

        <tr>
            <td>Telpon Rumah</td>
            <td><input type="text" class="form-control "name="h"></td>
        </tr>

        <tr>
            <td>Tanggal Daftar</td>
            <td><input type="text" class="form-control "name="i"></td>
        </tr>
        <tr>

            <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>
<?php include('bottom.php'); ?>








