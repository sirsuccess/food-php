

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
          <input type="text" placeholder="username" name="username" class="form-control">
          <br>
          <button type="submit" name="order" class="btn btn-primary"> Order</button>
        </form>
			</div>
		</div>
	</div>
	<style>
	body#LoginForm{
		background-image: url("img/fried-rice.jpg");
		background-repeat: no-repeat;
		background-size:cover;
	}</style>


      <br>

      <?php



      if(isset($_POST['order'])){
                echo "<script type=\"text/javascript\">window.alert('you have to Login to order Food.');
          header('location: login.php');</script>";
                }
         ?>
</body>
<?php
require_once "footer.HTML";
?>
</html>
