<?php
include_once "header.php";
require_once '../connection/connect.php';

if (!isset($_SESSION))
{
  session_start();

}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>



</head>
<body id="LoginForm">
	<div class="container">
    <h2><span><a href="#">Welcome <?php echo $_SESSION['username'];?></a></span></h2>
		<div class="login-form" style="margin-top: 70px">
			<div class="main-div">
				<div class="panel">
					<h2><b>Place Order</b></h2>
				</div>
        <form method="post" action="order.php">
          <input type="text" name="foodref" class="form-control" placeholder="Food Ref." required="required">
            <br>
        <input type="text" name="foodname" class="form-control" placeholder="Name of Food" required="required">
        <br>
        <input type="text" name="foodprice" class="form-control" placeholder="Price of Food" required="required" >
        <br>
        <input type="hidden" name="status" class="form-control" value="Unconfirm" >
        <br>
          <input type="text" value="<?php echo $_SESSION['username']; ?>" name="username" class="form-control">
          <br>
          <button type="submit" name="order" class="btn btn-primary"> Order</button>
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
      $username=$_SESSION['username'];

        if(isset($_POST['order'])){
            $foodref = mysqli_real_escape_string($con, $_POST['foodref']);
            $foodname = mysqli_real_escape_string($con, $_POST['foodname']);
            $foodprice = mysqli_real_escape_string($con, $_POST['foodprice']);
            $status = mysqli_real_escape_string($con, $_POST['status']);
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $sql = "INSERT INTO
                    food_order (foodref, foodname, foodprice, status, username)
                  VALUES('$foodref', '$foodname', '$foodprice', '$status', '$username')";
                  if ( $con->query($sql) !== TRUE) {
                    die("script type=\"text/javascript\">window.alert('Oop unable place an order at this time try again.');
              header('location: track_order.php');</script>");
                  }
                  echo "<script type=\"text/javascript\">window.alert('you have Succesfully place an order.');
            header('location: track_order.php');</script>";
                  }
                  mysqli_close($con);


         ?>
</body>
<?php
require_once "footer.HTML";
?>
</html>
