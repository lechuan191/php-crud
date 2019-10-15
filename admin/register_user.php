<?php 
session_start();
require 'config.php';

if (isset($_POST['registerbtn'])) {

	$ten=$_POST['username'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$passtrung=$_POST['confirmpassword'];
	if($pass===$passtrung)
	{
		$sql="insert into user (username, email, password) values ('$ten','$email','$pass')";
		$run=mysqli_query($conn,$sql);
		
		if($run){
			$_SESSION['success']="Thêm thành công";
			header('Location:admin.php');
		}
		else {
			$_SESSION['status']="Thêm thất bại";
			header('Location:admin.php');
			}	
	}
	else{
		$_SESSION['status']="Nhập lại password giống nhau";
			header('Location:admin.php');
	}
	
}
 ?>