<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['authorized'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}

include ("koneksi.php");
if(isset($_POST['Simpan'])) {
	$password=md5($_POST['password']);
$query= "insert into login(username,password,level,status)
value (
'".$_POST['username']."',
'".$password."',
'".$_POST['level']."',
'".$_POST['status']."')";
	   
   
$proses=mysql_query ($query);
if($proses){
	header('location:tampil_user.php');
echo 'ok';
}else{
	echo mysql_error();
}
}
include('top.php');
?>
<form method="POST"/>
<div class="page-content">
<table class="table table-bordered">


	<tr>
	<td><Strong>Username</strong></td>
	<td><input type="text" class='form-control' name="username"></td>
	</tr>
	<tr>
	<td><Strong>Password</strong></td>
	<td><input type="password" class='form-control' name="password"></td>
	</tr>
	
	<tr>
	<td><Strong>Level</strong></td>
	<td><input type="text" class='form-control' name="level"></td>
	</tr>
	
	<tr>
	<td><Strong>Status</strong></td>
	<td><select class='form-control' name="status">
	<option value="1">Aktif</option>
	<option value="0">TIdak Aktif</option>
	
	</select></td>
	</tr>
	
	<tr>
	<td><input type="submit" value="Simpan" class='btn btn-danger' name="Simpan"/></td>
	</tr>
	</table>
</div>
	</form>

	<?php
include('bottom.php');