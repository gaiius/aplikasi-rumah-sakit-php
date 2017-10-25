<?php
include('koneksi.php');
include('top.php');
?>
<div class="header-bottom ">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--horatio">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item"><a href="add_diskon.php" class="btn btn-success">Add Diskon</a></li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>

<table  class="table table-bordered">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Nominal</td>
        <td>Expire</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    $no = 1;
    $view_query = mysql_query("select * from diskon");
    while ($list_query = mysql_fetch_array($view_query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $list_query['nama']; ?></td>
            <td><?php echo $list_query['nominal']; ?></td>
            <td><?php echo $list_query['expire']; ?></td>
            <td><a href="edit_diskon.php?id_diskon=<?php echo $list_query['id_diskon']; ?>">Edit</a></td>
            <td><a href="delete_diskon.php?id_diskon=<?php echo $list_query['id_diskon']; ?>">Hapus</a></td>
        </tr>

<?php } ?> 

</table>
<?php include('bottom.php'); ?>