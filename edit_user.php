<?php
session_start();
include ('koneksi.php');
if(isset($_SESSION['username']) && isset($_SESSION['authorized'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='../index.php';</script>");
}

if (isset($_POST['save'])){
	(int)$id=$_POST['id_user'];
$cek = mysql_query("select * from login where id_user =$id");
$dtcek=mysql_fetch_array($cek);
//echo print_r($dtcek);
$old_password =$dtcek['password'];
//echo $old_password;
//die;
if($old_password == $_POST['Password']){
	$password = $_POST['Password'];
}else{
	$password = md5($_POST['Password']);
}
//echo print_r($cek);die;
$query_update=mysql_query("UPDATE login set
username='".$_POST['username']."',
password='".$password."',
level='".$_POST['level']."',
status='".$_POST['pengalaman']."'
where
id_user='".$_POST['id_user']."'");
if($query_update) {
	header("location:tampil_user.php");
}else{
	  echo mysql_error();
	  }
	  }
$tampilan_data=mysql_query("select * from login where 
id_user ='".$_GET['id_user']."'");
$hasil_data=mysql_fetch_array($tampilan_data);

include('top.php');
?>
<form method="POST"/>
<div class="page-content">
<table border="5" class="table table-bordered">

	<tr>
		<td>Nama</td>
		<td><input Name="username" class="form-control" type="text" value="<?php echo $hasil_data['username'];?>"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input Name="Password" class="form-control"  type="password" value="<?php echo $hasil_data['password'];?>"/></td>
	</tr>
	
	<tr>
		<td>Level</td>
		<td><input Name="level" class="form-control"  type="text" value="<?php echo $hasil_data['level'];?>"/></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><select type="text" class="form-control" name="status"/><
			<option value="1">Aktif</option>
						<option value="1">Todak Aktif</option>
		</select></td>
	</tr>
	
		<input type="hidden" name="id_user" value="<?php echo $hasil_data['id_user'];?>"/>
	
	<tr>
		<td><input type="submit" name="save"/></td>
	</tr>
</table>
</form>
</div>
<?php
include('bottom.php');
	