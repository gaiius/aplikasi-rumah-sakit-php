<?php 
include('koneksi.php');
include('top.php');
?>
<table  class="table table-bordered">
	<tr>
	    <td>Menu User</td>
		<td>Kode Produk</td>
		<td>Nama</td>
		<td>Type</td>
		<td>Qty</td>
		<td>Unit</td>
		<td>Keterangan</td>
		<td>Harga</td>
		<td>Max Stok</td>
		<td>Min Stok</td>
		<td>Qty 1</td>
		<td>Expired 1</td>
		<td>Qty 2</td>
		<td>Expired 2</td>
		<td colspan="2">Action</td>
	</tr>
	<?php
	$no=1;
	$view_query=mysql_query("select * from obat");
	while ($list_query=mysql_fetch_array($view_query)){ ?>
		<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $list_query['kode_produk'];?></td>
		<td><?php echo $list_query['nama'];?></td>
		<td><?php echo $list_query['type'];?></td>
		<td><?php echo $list_query['quantity'];?></td>
		<td><?php echo $list_query['unit'];?></td>
		<td><?php echo $list_query['keterangan'];?></td>
		<td><?php echo $list_query['harga'];?></td>
		<td><?php echo $list_query['max_stok'];?></td>
		<td><?php echo $list_query['min_stok'];?></td>
		<td><?php echo $list_query['quantity1'];?></td>
		<td><?php echo $list_query['expired1'];?></td>
		<td><?php echo $list_query['quantity2'];?></td>
		<td><?php echo $list_query['expired2'];?></td>
		
		<td><a href="edit_obat.php?id_obat=<?php echo $list_query['id_obat'];?>">Edit</a></td>
		<td><a href="delete_obat.php?id_obat=<?php echo $list_query['id_obat'];?>">Hapus</a></td>
		</tr>
	
	<?php } ?> 

</table>
<?php
include('bottom.php');?>