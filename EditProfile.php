<?php
require_once '../connection/connect.php';

if (!isset($_SESSION))
{
  session_start();

}
?>

<?php
include "Header.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <body>

            <div class="article">
                <h2><span><a href="#">Welcome <?php echo $_SESSION['id'];?></a></span></h2>
               <?php
$ID=$_SESSION['id'];


// Specify the query to execute
$sql = "select * from users where id ='".$ID."'  ";
// Execute query
$result = mysqli_query($con, $sql);
// Loop through each records
$row = mysqli_fetch_array($result)
?>

	<div class="container">
<div class="login-form" style="margin-top: 70px">
  <div class="main-div">
    <div class="panel">
      <strong><h2>Edit Profile</h2></strong>
    </div>
    <form method="post" action="UpdateProfile.php">
      <strong>First Name:</strong>
  <input type="text" name="firstname" class="form-control" placeholder="First Name" value="<?php echo $row['firstname'];?>" required="required">
  <br>
  <strong>Last Name:</strong>
  <input type="text" name="lastname" class="form-control" placeholder="Last Name"value="<?php echo $row['lastname'];?>" required="required">
  <br>
  <strong>Phone Number:</strong>
  <input type="tel" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $row['phone'];?>" required="required">
  <br>
  <strong>Address:</strong>
  <input type="test" name="address" class="form-control" placeholder="Address" value="<?php echo $row['address'];?>"required="required">
  <br>
  <strong>Email:</strong>
  <input type="Email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email'];?>"required="required">
  <br>
  <strong>User Name:</strong>
  <input type="text" name="username" class="form-control" placeholder="User Name" value="<?php echo $row['username'];?>" required="required">
  <br>
  <strong>Password:</strong>
  <input type="Password" name="password_1"  class="form-control" placeholder="Password" value="<?php echo $row['password'];?>" required="required">
  <br>
  <strong>Confirm Password:</strong>
  <input type="Password" name="password_2" class="form-control" placeholder="Confirm Password" value="<?php echo $row['password'];?>" required="required">
  <br>
  <button type="submit" name="update" class="btn btn-primary"> save Changes</button>

    </form>
  </div>
</div>
</div>
</div>
</div>
<style>
body{
background-image: url("../img/fried-rice.jpg");
background-repeat: no-repeat;
background-size:cover;
}</style>

  <?php


  // REGISTER USER
  if (isset($_POST['update'])) {
    // receive all input values from the form
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
      $lastname = mysqli_real_escape_string($con, $_POST['phone']);
        $lastname = mysqli_real_escape_string($con, $_POST['address']);
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

      $sql = "UPDATE
              users (firstname, lastname, phone, address, email, username,  password)
            VALUES('$firstname', '$lastname', '$phone', '$address', '$email', '$username',  '" . sha1($_POST['password_1']) . "')";
            if ( $con->query($sql) !== TRUE) {
              die('Error: Something went wrong while registering. Please try again later. ');
            }
            echo 'Succesfully registered. '.$_POST['username']. ' You can now <a href="login.php"><button class="btn btn-success">sign in</button></a> to view your profile';
            }
            mysqli_close($con);
             }




include "footer.html"
?>

</body>
</html>
