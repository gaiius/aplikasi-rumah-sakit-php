<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['authorized'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}

include ('koneksi.php');
include ('top.php');

?>
<div class="body-content">
<div class="page-content">
<a href="input_user.php" class="btn btn-danger">Tambah Data</a>
<form method="POST"/>
<table class="table table-bordered">

	<tr>
		<td>No</td>
		<td>Username</td>
		<td>Password</td>
		<td>Admin</td>
		
		<td colspan="2">Action</td>
	</tr>
	<?php
	$no=1;
	$list_pengalaman=mysql_query("select * from login");
	while($proses=mysql_fetch_array($list_pengalaman)){
		
		?>
<tr>
<td><?php echo $no++;?></td>
	
	<td><?php echo $proses['username'];?></td>
	<td><?php echo $proses['password'];?></td>
    <td><?php echo $proses['level'];?></td>
    
	
	
	<td><a class="btn btn-warning"href="edit_user.php?id_user=<?php echo $proses['id_user'];?>"/>
	Edit</a></td>
	
	<td><a class="btn btn-danger" href="delete_user.php?id_user=<?php echo $proses['id_user'];?>"/>
	Delete</a></td>
</tr>
	<?php } ?>
</table>
<div>
<?php
include('bottom.php');?>