<?php
include_once "header.php";
// connect to the database
require_once "../connection/connect.php";
// connect to the database
require_once "../connection/connect.php";

 ?>
 <style>
 body#LoginForm{
   background-image: url("../img/fried-rice.jpg");
   background-repeat: no-repeat;
   background-size:cover;
 }</style>
 <!DOCTYPE html>
<html>
<head>
	<title>Add User</title>



</head>
<body id="LoginForm">
	<div class="container">
		<div class="login-form" style="margin-top: 70px">
			<div class="main-div">
				<div class="panel">
					<h2><i class="glyphicon glyphicon-plus"> Add user</i></h2>
				</div>
				<form method="post" action="add_users.php">
			<input type="text" name="firstname" class="form-control" placeholder="First Name" required="required">
			<br>
			<input type="text" name="lastname" class="form-control" placeholder="Last Name" required="required">
			<br>
			<input type="Email" name="email" class="form-control" placeholder="Email" required="required">
			<br>
			<input type="text" name="username" class="form-control" placeholder="User Name" required="required">
			<br>
			<input type="Password" name="password_1"  class="form-control" placeholder="Password" required="required">
			<br>
			<input type="Password" name="password_2" class="form-control" placeholder="Confirm Password" required="required">
			<br>
			<button type="submit" name="user_reg" class="btn btn-primary"> ADD </button>

				</form>
			</div>
		</div>
	</div>


      <br>

      <?php

      // initializing variables
      $firstname = "";
      $lastname = "";
      $email    = "";
      $username = "";


      // REGISTER USER
      if (isset($_POST['user_reg'])) {
        // receive all input values from the form
        $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if ($password_1 != $password_2) {
          echo "<script type=\"text/javascript\">window.alert('the two password do not match.');
    header('location: index.php');</script>";
      }else {


        // Finally, register user if there are no errors in the form
        	$password = "'" . sha1($_POST['password_1']) . "'";//encrypt the password before saving in the database

        	$sql = "INSERT INTO
                  users (firstname, lastname, email, username,  password)
        			  VALUES('$firstname', '$lastname', '$email', '$username',  '" . sha1($_POST['password_1']) . "')";
                if ( $con->query($sql) !== TRUE) {
                  die('Error: Something went wrong while registering. Please try again later. ');
                }
                echo "<script type=\"text/javascript\">window.alert('You have Successfully Added a new user.');
          header('location: index.php');</script>";
                }
                mysqli_close($con);
                 }


      // ...
      ?>
</body>
<?php include "Footer.html"; ?>
</html>
