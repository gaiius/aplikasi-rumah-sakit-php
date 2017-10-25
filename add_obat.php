<?php
session_start();
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("insert into obat(kode_produk,nama,type,quantity,unit,keterangan,harga,max_stok,min_stok,quantity1,expired1,quantity2,expired2)
	value(
	'" . $_POST['kode_produk'] . "',
	'" . $_POST['nama'] . "',
	'" . $_POST['quantity'] . "',
	'" . $_POST['unit'] . "',
	'" . $_POST['keterangan'] . "',
	'" . $_POST['harga'] . "',
	'" . $_POST['max_stok'] . "',
	'" . $_POST['min_stok'] . "',
	'" . $_POST['quantity1'] . "',
	'" . $_POST['expired1'] . "',
	'" . $_POST['quantity2'] . "',
	'" . $_POST['expired2'] . "')");

    if ($add_query) {
        header("location:view_obat.php");
    } else {
        echo mysql_error();
    }
}
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>Kode Produk</td>
            <td><input type="text" class="form-control "name="kode_produk"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="nama"></td>
        </tr>
        <tr>
            <td>Qty</td>
            <td><input type="text" class="form-control "name="quantity"></td>
        </tr>
        <tr>
            <td>Unit</td>
            <td><input type="text" class="form-control "name="unit"></td>
        </tr>

        <tr>
            <td>Keterangan</td>
            <td><input type="text" class="form-control "name="keterangan"></td>
        </tr>

        <tr>
            <td>Harga</td>
            <td><input type="text" class="form-control "name="harga"></td>
        </tr>

        <tr>
            <td>Min Stok</td>
            <td><input type="text" class="form-control "name="max_stok"></td>
        </tr>

        <tr>
            <td>Max Stok</td>
            <td><input type="text" class="form-control "name="min_stok"></td>
        </tr>


        <tr>
            <td>Qty1</td>
            <td><input type="text" class="form-control "name="quantity1"></td>
        </tr>


        <tr>
            <td>Expire1</td>
            <td><input type="text" class="form-control "name="expired1"></td>
        </tr>


        <tr>
            <td>Qty2</td>
            <td><input type="text" class="form-control "name="quantity2"></td>
        </tr>

        <tr>
            <td>Expire2</td>
            <td><input type="text" class="form-control "name="expired2"></td>
        </tr>


        <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>

<?php
include('bottom.php');






