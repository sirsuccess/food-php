
		<?php
		//header inclusion
		require_once 'header.php';
		?>

		<body id="LoginForm">
	<div class="container">

		<div class="login-form" style="margin-top: 70px;" >
			<div class="main-div">
				 <div class="panel">
              <h2>Login</h2>
                 </div>

		<form method="post" action="login.php">
			<div class="form-group" >
			<input type="text" name="username" class="form-control" placeholder="Username" id="username" required="required">
		</div>
			<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" required="required">
		</div>

			<button type="submit" name="user_login" class="btn btn-primary"> Login</button>
		</form>
		<div class="forgot">Not registered?<a href="register.php"> Register</a>
                    </div>
		</div>

		</div>
	</div>
	<style>
	body#LoginForm{
	  background-image: url("./img/pound.jpg");
	  background-repeat: no-repeat;
	  background-size:cover;

	}
</style>';
<?php
require_once "connection/connect.php";
if (!isset($_SESSION))
{
  session_start();

}

// LOGIN USER
if (isset($_POST['user_login'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);


  	$query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password = '" . sha1($_POST['password']) . "'");
  	$results =mysqli_fetch_assoc($query);
		$id= $results['id'];
  	if (mysqli_num_rows($query) == 1) {
			$_SESSION['id']=$id;
  	  $_SESSION['username']=$username;
			$_SESSION['firstname']=$firstname;
			$_SESSION['lastname']=$lastname;

			if($username === 'admin'){
				header('Status: 301 Moved Permanently', false, 301);
				header('location: admin/index.php?id=$id');
				exit();
			}
			elseif ($username === 'deliveryman'){
				header('Status: 301 Moved Permanently', false, 301);
				header('location: deliveryMan/index.php?id=$id');
				exit();
			}else {
  	  
			header('Status: 301 Moved Permanently', false, 301);
  	  header('location: user/index.php?id=$id');
			exit();
		}
  	}else {
			echo "<script type=\"text/javascript\">window.alert('Ooop!  you have supplied incorret username or password.');
header('location: index.php');</script>";
exit();
  	}
  }
	include "footer.html"
 ?>
</html>
