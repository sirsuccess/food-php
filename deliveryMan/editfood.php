
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

		if( empty($_POST['id']) || empty($_POST['foodname']) ||
			empty($_POST['foodprice']) )
		{
			echo "<script type=\"text/javascript\">window.alert('Ooop!  Please fillout all required fields.');
header('location: editfood.php');</script>";
		}else{
			$id  = $_POST['id'];
			$foodname 	= $_POST['foodname'];
			$foodprice 	= $_POST['foodprice'];
			$fooddesc = $_POST['fooddesc'];
			$sql = "UPDATE food SET id='{$id}', foodname = '{$foodname}',
						foodprice = '{$foodprice}, fooddesc = '{$fooddesc}'
						WHERE id=$id";

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated Food</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM food WHERE id={$id}";
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
			<h3><i class="glyphicon glyphicon-edit"></i>&nbsp;MODIFY FOOD</h3>
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
				<label for="username">Food NAME</label>
				<input type="text" id="username"  name="firstname" value="<?php echo $row['foodname']; ?>" class="form-control" required="required"><br>
				<label for="username">FOOD PRICE</label>
				<input type="text" id="username"  name="lastname" value="<?php echo $row['foodprice']; ?>" class="form-control" required="required"><br>
				<label for="username">FOOD Description</label>
				<input type="text" id="username"  email="username" value="<?php echo $row['fooddesc']; ?>" class="form-control" required="required"><br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>

</div>
</div>
<?php

 require_once 'footer.html';
