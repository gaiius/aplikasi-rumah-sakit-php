<?php
include('koneksi.php');
include('top.php');
?>
<table  class="table table-bordered">
    <tr>
        <td>No</td>
        <td>Nama</td>

        <td colspan="2">Action</td>
    </tr>
    <?php
    $no = 1;
    $view_query = mysql_query("select * from tiket_waktu");
    while ($list_query = mysql_fetch_array($view_query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $list_query['nama']; ?></td>
            <td><a href="edit_tiket_waktu.php?id_tiket_waktu=<?php echo $list_query['id_tiket_waktu']; ?>">Edit</a></td>
            <td><a href="delete_tiket_waktu.php?id_tiket_waktu=<?php echo $list_query['id_tiket_waktu']; ?>">Hapus</a></td>
        </tr>

<?php } ?> 

</table>
<?php include('bottom.php'); ?>