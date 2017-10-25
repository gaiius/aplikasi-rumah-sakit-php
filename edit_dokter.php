<?php
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("update dokter set nama='" . $_POST['a'] . "',
											  alamat='" . $_POST['b'] . "',
											  handpone='" . $_POST['c'] . "',
											  phone='" . $_POST['d'] . "',
											  id_spesialis='" . $_POST['e'] . "'
											  where id_dokter='" . $_POST['f'] . "'");


    if ($add_query) {
        header("location:view_dokter.php");
    } else {
        echo mysql_error();
    }
}
$view_dokter = mysql_query("select * from dokter where id_dokter='" . $_GET['id_dokter'] . "'");
$list_query = mysql_fetch_array($view_dokter);
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="a" value="<?php echo $list_query['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" class="form-control "name="b" value="<?php echo $list_query['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>Handpone</td>
            <td><input type="text" class="form-control "name="c" value="<?php echo $list_query['handpone']; ?>"></td>
        </tr>
        <tr>
        <tr>
            <td>Phone</td><input type="hidden" name="f"  value="<?php echo $list_query['id_dokter']; ?>">
        <td><input type="text" class="form-control "name="d" value="<?php echo $list_query['phone']; ?>"></td>
        </tr>
        <tr>
        <tr>
            <td>Spesialis</td>
            <td><select class="form-control "name="e">

                    <?php
                    $list_query = mysql_query("select * from spesialis");
                    while ($data = mysql_fetch_array($list_query)) {
                        ?>
                        <option value="<?php echo $data['id_spesialis']; ?>"<?php echo $data['id_spesialis'] == $list_query['id_spesialis'] ? 'selected="selected"' : ''; ?>><?php echo $data['nama']; ?></option>
<?php } ?>

                </select></td>
        </tr>
        <tr>


            <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>
<?php
include('bottom.php');
?>







