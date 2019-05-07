<?php
// Establish Connection with Database
require_once '../connection/connect.php';
if (!isset($_SESSION))
{
  session_start();

}


include "Header.php";
?>
<style>
.body{
  background-image: url("../img/bg_1.jpg");
  background-repeat: no-repeat;
  background-size:cover;
}</style>
<div class="body">
               <div class="container"<?php
$ID=$_SESSION['id'];


// Specify the query to execute
$sql = "select * from users where id ='".$ID."'  ";
// Execute query
$result = mysqli_query($con, $sql);
// Loop through each records
$row = mysqli_fetch_array($result);
?>
<div class="main-div">
                <table width="50%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>First Name:</strong></td>
                    <td><?php echo $row['firstname'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Last Name:</strong></td>
                    <td><?php echo $row['lastname'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email Address:</strong></td>
                    <td><?php echo $row['email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td><?php echo $row['username'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Password:</strong></td>
                    <td><?php echo $row['password'];?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="EditProfile.php?id=<?php echo $row['id']; ?>">Edit Profile</a></td>
                  </tr>
                </table>

</div>
</div>
</div>

<?php include "footer.html" ?>
</html>
