<style>
.users_bg{
	background-image: url("../img/bg_1.jpg");
	background-repeat: no-repeat;
	background-size:cover;

}
</style>
<?php
require_once 'header.php';

require_once '../connection/connect.php';
if (!isset($_SESSION))
{
  session_start();

}

echo '<div class="users_bg">';
echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM users WHERE id=" . $_POST['id'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

$sql 	= "SELECT * FROM users";
$result = $con->query($sql);

if( $result->num_rows > 0)
{
	?>
	<h2>List of all Users</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Phone</td>
			<td>address</td>
			<td>Email address</td>
			<td>User Name</td>
			<td>Password</td>
			<td width="70px">Delete</td>
			<td width="70px">EDIT</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){
		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id']."' name='id' />"; //added
		echo "<tr>";
		echo "<td>".$row['firstname'] . "</td>";
		echo "<td>".$row['lastname'] . "</td>";
		echo "<td>".$row['phone'] . "</td>";
		echo "<td>".$row['address'] . "</td>";
		echo "<td>".$row['email'] . "</td>";
		echo "<td>".$row['username'] . "</td>";
		echo "<td>".$row['password'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";
		echo "<td><a href='edit.php?id=".$row['id']."' class='btn btn-info'>Edit</a></td>";
		echo "</tr>";
		echo "</form>"; //added
	}
	?>
	</table>
</div>
<?php
}
else
{
	echo "<br><br>No Record Found";
}
?>

<?php
require_once "footer.HTML";
?>
</div>
