<?php
include('koneksi.php');
include('top.php');
?>
<table  class="table table-bordered">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Hanphone</td>
        <td>Phone</td>
        <td>Spesialis</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    $no = 1;
    $view_query = mysql_query("select a.*,b.nama as dok from dokter a join spesialis b ON a.id_spesialis = b.id_spesialis");
    while ($list_query = mysql_fetch_array($view_query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $list_query['nama']; ?></td>
            <td><?php echo $list_query['alamat']; ?></td>
            <td><?php echo $list_query['handpone']; ?></td>
            <td><?php echo $list_query['phone']; ?></td>
            <td><?php echo $list_query['dok']; ?></td>

            <td><a href="edit_dokter.php?id_dokter=<?php echo $list_query['id_dokter']; ?>">Edit</a></td>
            <td><a href="delete_dokter.php?id_dokter=<?php echo $list_query['id_dokter']; ?>">Hapus</a></td>
        </tr>

    <?php } ?> 

</table>
<?php include('bottom.php'); ?>