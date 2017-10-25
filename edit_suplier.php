<?php
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("update supplier set nama ='" . $_POST['a'] . "',
												alamat='" . $_POST['b'] . "',
												telpon='" . $_POST['c'] . "'
												where id_supplier = '" . $_POST['d'] . "'"
    );

    if ($add_query) {
        header("location:view_suplier.php");
    } else {
        echo mysql_error();
    }
}
$list_query = mysql_query("select * from supplier where id_supplier='" . $_GET['id_supplier'] . "'");
$data = mysql_fetch_array($lis_query);
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="a" value="<?php echo $data['nama']; ?>"/></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" class="form-control "name="b" value="<?php echo $data['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td><input type="text" class="form-control "name="c" value="<?php echo $data['telpon']; ?>"></td>
        </tr>
        <tr>
        <input type="hidden" class="form-control "name="d" value="<?php echo $data['id_supplier']; ?>">
        <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>
<?php include('bottom.php'); ?>








