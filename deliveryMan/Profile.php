<?php
if (!isset($_SESSION))
{
  session_start();

}
echo '<div class="users_bg">';
include "Header.php";
echo "<div class='container'>";
?>
<style>
.users_bg{
	background-image: url("../img/bg_1.jpg");
	background-repeat: no-repeat;
	background-size:cover;

}
</style>

            <div class="article">
                <h2><span><botton> Welcome <?php echo $_SESSION['username'];?></botton></span></h2>
               <?php
$ID=$_SESSION['id'];
// Establish Connection with Database
include_once '../connection/connect.php';

// Specify the query to execute
$sql = "select * from users where id ='".$ID."'  ";
// Execute query
$result = $con->query($sql);
// Loop through each records
$row = mysqli_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>USER ID:</strong></td>
                    <td><?php echo $row['id'];?></td>
                  </tr>
                  <tr>
                    <td><strong>First Name:</strong></td>
                    <td><?php echo $row['firstname'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Last Nmae:</strong></td>
                    <td><?php echo $row['lastname'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
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

              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />

        </div> <!-- /content -->

<
    </div> <!-- /page-in -->
    </div> <!-- /page -->



</body>
</html>
