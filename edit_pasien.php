<?php
include("koneksi.php");
if (isset($_POST['save'])) {
    $add_query = mysql_query("update pasien set no_pasien='" . $_POST['a'] . "',
											  nama='" . $_POST['b'] . "',
											  umur='" . $_POST['c'] . "',
											  jenis_kelamin='" . $_POST['d'] . "',
											  tanggal='" . $_POST['e'] . "',
											  alamat='" . $_POST['f'] . "',
											  telpon='" . $_POST['g'] . "',
											  telpon_rumah='" . $_POST['h'] . "',
											  tanggal_daftar='" . $_POST['i'] . "'
											  where id_pasien ='" . $_POST['j'] . "'"
    );


    if ($add_query) {
        header("location:view_pasien.php");
    } else {
        echo mysql_error();
    }
}
$list_query = mysql_query("select * from pasien where id_pasien ='" . $_GET['id_pasien'] . "'");
$data = mysql_fetch_array($list_query);
include('top.php');
?>
<form method="post">
    <table class="table table-bordered">
        <tr>
            <td>No Pasien</td>
            <td><input type="text" class="form-control "name="a" value="<?php echo $data['no_pasien']; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control "name="b" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><input type="text" class="form-control "name="c" value="<?php echo $data['umur']; ?>"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" class="form-control "name="d" value="<?php echo $data['jenis_kelamin']; ?>"></td>
        </tr>

        <tr>
            <td>Tanggal</td>
            <td><input type="text" class="form-control "name="e" value="<?php echo $data['tanggal']; ?>"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" class="form-control "name="f" value="<?php echo $data['alamat']; ?>"></td>
        </tr>

        <tr>
            <td>Telpon</td>
            <td><input type="text" class="form-control "name="g" value="<?php echo $data['telpon']; ?>"></td>
        </tr>

        <tr>
            <td>Telpon Rumah</td>
            <td><input type="text" class="form-control "name="h" value="<?php echo $data['telpon_rumah']; ?>"></td>
        </tr>

        <tr>
            <td>Tanggal Daftar</td>
            <td><input type="text" class="form-control "name="i" value="<?php echo $data['tanggal_daftar']; ?>"></td>
        </tr>
        <tr>
        <input type="hidden" name="j" value="<?php echo $data['id_pasien']; ?>"/>
        <td><input type="submit" class="form-control "name="save"></td>
        </tr>

    </table>
</form>
<?php include('bottom.php'); ?>







