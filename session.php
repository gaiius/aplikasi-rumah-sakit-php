<?php
session_start();
include_once("koneksi.php");
if(isset($_POST['login']) ? $_POST['login']:''){
	$username= isset($_POST['username']) ? $_POST['username']:'';
	$password= isset($_POST['password']) ? $_POST['password']:'';
	$passmd5=md5($password);
	
	if(empty($username) || empty($username)){
		echo("<script type='text/javascript'>
		alert('silahkan isi semua data');document.location='javascript:history.back(1)';
		</script>");
		}else{
		$query=mysql_query("select*from login where username='$username' and password='$passmd5' and status='1'");
		$data=mysql_fetch_array($query);
		if($username==$data['username'] && $passmd5==$data ['password']) {
			$_SESSION['username']=$data['username'];
			$_SESSION['level']=$data['level'];
			$_SESSION['authorized']=1;
			header('Location:index.php');
			$q=mysql_query("select*from tbl_login where username='$username'");
		}else{
			echo ("<script type='text/javascript'> alert ('username atau password anda salah atau akun anda tidak aktif'); document.location='javascript:history.back(1)';
			</script>");
		}
		}
}
?>		