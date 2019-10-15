<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('config.php'); 

?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa user 
    </h6>
  </div>

  <div class="card-body">
   	<?php 
		if(isset($_POST['edit_btn']))
		{
			$id=$_POST['edit_id'];
			$query="select * from user where id='$id' ";
			$run=mysqli_query($conn,$query);

			//foreach ($run as $row)
			while($row = mysqli_fetch_assoc($run)) 
			{
                ?>
        <form action="edit_user2.php" method="POST">
          <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

  		<div class="form-group">
                <label> Username </label>
                <input type="text" name="username" value="<?php echo $row['username'] ?>" class="form-control" >
        </div>
        <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" >
        </div>
        <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $row['password'] ?>" class="form-control">
        </div>
        <button type="submit" name="update_btn" class="btn btn-primary">Lưu</button>
        <a href="admin.php" class="btn btn-danger">Hủy</a>
        </form>

		<?php
			} 
		}
	?>

  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>