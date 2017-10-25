<?php
session_start();
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("insert into diskon(nama,alamat,handpone,phone,id_spesialis)
	value(
	'" . $_POST['a'] . "',
	'" . $_POST['b'] . "',
	'" . $_POST['c'] . "',
	'" . $_POST['d'] . "',
	'" . $_POST['e'] . "')");

    if ($add_query) {
        header("location:view_dokter.php");
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
            <td>Alamat</td>
            <td><input type="text" class="form-control "name="b"></td>
        </tr>
        <tr>
            <td>Handpone</td>
            <td><input type="text" class="form-control "name="c"></td>
        </tr>
        <tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" class="form-control "name="d"></td>
        </tr>
        <tr>
        <tr>
            <td>Spesialis</td>
            <td><select class="form-control "name="e">
                    <option value="">--Pilih--</option>
                    <?php
                    $list_query = mysql_query("select * from dokter");
                    while ($data = mysql_fetch_array($list_query)) {
                        ?>
                        <option value="<?php echo $data['id_spesialis']; ?>"><?php echo $data['nama']; ?></option>
<?php } ?>
                    <option 
            </select></td>
    </tr>
    <tr>


        <td><input type="submit" class="form-control "name="save"></td>
    </tr>

</table>
</form>
<?php include('bottom.php'); ?>








