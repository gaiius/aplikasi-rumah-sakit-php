<?php
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("update tiket_waktu set nama='" . $_POST['a'] . "'
										         where id_tiket_waktu='" . $_POST['b'] . "'");

    if ($add_query) {
        header("location:view_tiket_waktu.php");
    } else {
        echo mysql_error();
    }
}
$list_query = mysql_query("select * from tiket_waktu where id_tiket_waktu='" . $_GET['id_tiket_waktu'] . "'");
$data = mysql_fetch_array($list_query);
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="a" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <input type="hidden" name="b" value="<?php echo $data['id_tiket_waktu']; ?>">
        <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>
<?php include('bottom.php'); ?>







