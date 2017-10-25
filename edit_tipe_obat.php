<?php
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("update tipe_obat set nama='" . $_POST['a'] . "'
										         where id_tipe_obat='" . $_POST['b'] . "'");

    if ($add_query) {
        header("location:view_tipe_obat.php");
    } else {
        echo mysql_error();
    }
}
$list_query = mysql_query("select * from tipe_obat where id_tipe_obat='" . $_GET['id_tipe_obat'] . "'");
$data = mysql_fetch_array($list_query);
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="a" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <input type="hidden" name="b" value="<?php echo $data['id_tipe_obat']; ?>">
        <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>
<?php include('bottom.php'); ?>








