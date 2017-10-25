<?php
include("koneksi.php");
if (isset($_POST['save'])) {
    $edit_query = mysql_query("update diskon set nama='" . $_POST['a'] . "',
							nominal='" . $_POST['b'] . "',
							expire='" . $_POST['c'] . "'
							where id_diskon='" . $_POST['d'] . "'");

    if ($edit_query) {
        header("location:view_diskon.php");
    } else {
        mysql_error();
    }
}
$show_query = mysql_query("select * from diskon where id_diskon='" . $_GET['id_diskon'] . "'");
$data = mysql_fetch_array($show_query);
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control" name="a" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" class="form-control" name="b" value="<?php echo $data['nominal']; ?>"></td>
        </tr>
        <tr>
            <td>Expire</td>
            <td><input type="text" class="form-control" name="c" value="<?php echo $data['expire']; ?>"></td>
        </tr>
        <tr>

            <td>
                <input type="hidden" name="d" class="btn btn-danger" value="<?php echo $data['id_diskon']; ?>">
                <input type="submit" class="form-control" name="save"></td>
        </tr>

    </table>
</form>
<?php include('bottom.php'); ?>







