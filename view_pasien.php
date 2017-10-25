<?php
include('koneksi.php');
include('top.php');
?>
<table  class="table table-bordered">
    <tr>
        <td>No</td>
        <td>No Pasien</td>
        <td>Nama</td>
        <td>Umur</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal </td>
        <td>Alamat</td>
        <td>Telpon</td>
        <td>Telpon Rumah</td>
        <td>Tanggal Daftar</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    $no = 1;
    $view_query = mysql_query("select * from pasien");
    while ($list_query = mysql_fetch_array($view_query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $list_query['no_pasien']; ?></td>
            <td><?php echo $list_query['nama']; ?></td>
            <td><?php echo $list_query['umur']; ?></td>
            <td><?php echo $list_query['jenis_kelamin']; ?></td>
            <td><?php echo $list_query['tanggal']; ?></td>
            <td><?php echo $list_query['alamat']; ?></td>
            <td><?php echo $list_query['telpon']; ?></td>
            <td><?php echo $list_query['telpon_rumah']; ?></td>
            <td><?php echo $list_query['tanggal_daftar']; ?></td>
            <td><a href="edit_pasien.php?id_pasien=<?php echo $list_query['id_pasien']; ?>">Edit</a></td>
            <td><a href="delete_pasien.php?id_pasien=<?php echo $list_query['id_pasien']; ?>">Hapus</a></td>
        </tr>

<?php } ?> 

</table>
<?php include('bottom.php'); ?>