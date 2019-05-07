
<style>
.body{
	background-image: url("../img/fried-rice.jpg");
	background-repeat: no-repeat;
	background-size:cover;
}</style>

<?php
require_once 'header.php';
require_once '../connection/connect.php';

?>
<div class ="body">
<div class="container">

	<?php

	if(isset($_POST['update'])){

		if( empty($_POST['username']) || empty($_POST['password']) ||
			empty($_POST['email']) )
		{
			echo "<script type=\"text/javascript\">window.alert('Ooop!  Please fillout all required fields.');
header('location: edit.php');</script>";
		}else{
			$username  = $_POST['username'];
			$password 	= $_POST['password'];
			$email 	= $_POST['email'];
			$sql = "UPDATE users SET username='{$username}', password = '{$password}',
						email = '{$email}'
						WHERE id=" . $_POST['id'];

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated  user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM users WHERE id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>


	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3>
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
				<label for="username">FIRST NAME</label>
				<input type="text" id="username"  name="firstname" value="<?php echo $row['firstname']; ?>" class="form-control" required="required"><br>
				<label for="username">LAST NAME</label>
				<input type="text" id="username"  name="lastname" value="<?php echo $row['lastname']; ?>" class="form-control" required="required"><br>
				<label for="username">Email</label>
				<input type="text" id="username"  email="username" value="<?php echo $row['email']; ?>" class="form-control" required="required"><br>
				<label for="username">USER NAME</label>
				<input type="text" id="username"  name="username" value="<?php echo $row['username']; ?>" class="form-control" required="required"><br>
				<label for="password">PASSWORD</label>
				<input type="password"  name="password" id="password" value="<?php echo $row['password']; ?>" class="form-control" required="required"><br>
				<label for="check_password">COMFIRM PASSWORD</label>
				<input type="password"  name="check_password"id="password" value="<?php echo $row['password']; ?>" class="form-control" required="required"><br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>

</div>
</div>
<?php

 require_once 'footer.html';
