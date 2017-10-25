<?php
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("update obat set kode_produk='" . $_POST['kode_produk'] . "',
											nama='" . $_POST['nama'] . "',
											type='" . $_POST['type'] . "',
											quantity='" . $_POST['quantity'] . "',
											unit='" . $_POST['unit'] . "',
											keterangan='" . $_POST['keterangan'] . "',
											harga='" . $_POST['harga'] . "',
											max_stok='" . $_POST['max_stok'] . "',
											min_stok='" . $_POST['min_stok'] . "',
											quantity1='" . $_POST['quantity1'] . "',
											expired1='" . $_POST['expired1'] . "',
											quantity2='" . $_POST['quantity2'] . "',
											expired2='" . $_POST['expired2'] . "'
											where id_obat='" . $_POST['id_obat'] . "'");


    if ($add_query) {
        header("location:view_obat.php");
    } else {
        echo mysql_error();
    }
}
$view_obat = mysql_query("select * from obat where id_obat='" . $_GET['id_obat'] . "'");
$data = mysql_fetch_array($view_obat);
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>Kode Produk</td>
            <td><input type="text" class="form-control "name="kode_produk" value="<?php echo $data['kode_produk']; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="nama" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Qty</td>
            <td><input type="text" class="form-control "name="quantity" value="<?php echo $data['quantity']; ?>"></td>
        </tr>
        <tr>
            <td>Unit</td>
            <td><input type="text" class="form-control "name="unit" value="<?php echo $data['unit']; ?>"></td>
        </tr>

        <tr>
            <td>Keterangan</td>
            <td><input type="text" class="form-control "name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
        </tr>

        <tr>
            <td>Harga</td>
            <td><input type="text" class="form-control "name="harga" value="<?php echo $data['harga']; ?>"></td>
        </tr>

        <tr>
            <td>Min Stok</td>
            <td><input type="text" class="form-control "name="max_stok" value="<?php echo $data['max_stok']; ?>"></td>
        </tr>

        <tr>
            <td>Max Stok</td>
            <td><input type="text" class="form-control "name="min_stok" value="<?php echo $data['min_stok']; ?>"></td>
        </tr>


        <tr>
            <td>Qty1</td>
            <td><input type="text" class="form-control "name="quantity1" value="<?php echo $data['quantity1']; ?>"></td>
        </tr>


        <tr>
            <td>Expire1</td>
            <td><input type="text" class="form-control "name="expired1" value="<?php echo $data['expired1']; ?>"></td>
        </tr>


        <tr>
            <td>Qty2</td>
            <td><input type="text" class="form-control "name="quantity2" value="<?php echo $data['quantity2']; ?>"></td>
        </tr>

        <tr>
            <td>Expire2</td>
            <td><input type="text" class="form-control "name="expired2" value="<?php echo $data['expired2']; ?>"></td>
        </tr>

        <input type="hidden" name="id_obat" value="<?php echo $data['id_obat']; ?>">
        <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>
<?php include('bottom.php'); ?>







