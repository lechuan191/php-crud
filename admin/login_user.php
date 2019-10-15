<?php 
include 'security.php';
if(isset($_POST['login_btn']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="select * from user where email='$email' and password='$password'";
	$run=mysqli_query($conn,$sql);

	if(mysqli_fetch_array($run))
	{
		$_SESSION['username']=$email;
		header('Location:index.php');
	}
	else{
		$_SESSION['status']='Email hoặc password không đúng';
		header('Location:login.php');
	}

}
 ?>
