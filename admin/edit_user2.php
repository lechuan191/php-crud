<?php
include('config.php'); 
        if(isset($_POST['update_btn']))
        {
            $id=$_POST['edit_id'];
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
           
            $query = "UPDATE user SET username='$username', email='$email', password='$password' WHERE id='$id'  ";
            $run = mysqli_query($conn, $query);

            if($run){
              $_SESSION['success']="Sửa thành công";
              header('Location:admin.php');
            }
            else {
              $_SESSION['status']="Sửa thất bại";
              echo "Error: " . $query . "<br>" . mysqli_error($conn);
              header('Location:admin.php');
              }
        }
?>