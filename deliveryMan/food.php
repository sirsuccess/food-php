<?php
include_once "header.php";
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>



</head>
<body id="LoginForm">
	<div class="container">
		<div class="login-form" style="margin-top: 70px">
			<div class="main-div">
				<div class="panel">
					<h2><b>ADD FOOD</b></h2>
				</div>
				<form method="post" action="food.php">
			<input type="text" name="foodname" class="form-control" placeholder="Name of Food" required="required">
			<br>
			<input type="text" name="foodprice" class="form-control" placeholder="Price of Food" required="required">
			<br>
			<input type="text" name="fooddesc" class="form-control" placeholder="food description" required="required">
			<br>
			<button type="submit" name="add_food" class="btn btn-primary"> ADD </button>

				</form>
			</div>
		</div>
	</div>
	<style>
	body#LoginForm{
		background-image: url("../img/fried-rice.jpg");
		background-repeat: no-repeat;
		background-size:cover;
	}</style>


      <br>

      <?php
      // initializing variables
      $foodname = "";
      $foodprice = "";
      $fooddesc    = "";

      // connect to the database
      require_once "../connection/connect.php";

      // REGISTER USER
      if (isset($_POST['add_food'])) {
        // receive all input values from the form
        $foodname = mysqli_real_escape_string($con, $_POST['foodname']);
        $foodprice = mysqli_real_escape_string($con, $_POST['foodprice']);
        $fooddesc = mysqli_real_escape_string($con, $_POST['fooddesc']);

        	$sql = "INSERT INTO
                  food (foodname, foodprice, fooddesc)
        			  VALUES('$foodname', '$foodprice', '$fooddesc')";

                if ( $con->query($sql) !== TRUE) {
                  echo "<script type=\"text/javascript\">window.alert('Ooop! you were unable to add food.');
            header('location: food.php');</script>";
                }
                echo "<script type=\"text/javascript\">window.alert('you have Succesfully added a new Food');
                  header('location: food.php');</script>";
                }
                mysqli_close($con);



      // ...
      ?>
</body>
<?php
require_once "footer.HTML";
?>
</html>
