<?php
include('koneksi.php');
include('top.php');
?>
<table  class="table table-bordered">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Telpon</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    $no = 1;
    $view_query = mysql_query("select * from obat");
    while ($list_query = mysql_fetch_array($view_query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $list_query['nama']; ?></td>
            <td><?php echo $list_query['alamat']; ?></td>
            <td><?php echo $list_query['telpon']; ?></td>

            <td><a href="edit_suplier.php?id_supplier=<?php echo $list_query['id_supplier']; ?>">Edit</a></td>
            <td><a href="delete_suplier.php?id_supplier=<?php echo $list_query['id_supplier']; ?>">Hapus</a></td>
        </tr>

<?php } ?> 

</table>
<?php include('bottom.php'); ?>