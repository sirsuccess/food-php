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
	$sql = "DELETE FROM food_order WHERE id=" . $_POST['id'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

$sql 	= "SELECT * FROM food_order";
$result = $con->query($sql);

if( $result->num_rows > 0)
{
	?>
	<h2>List of Orders</h2>
	<table class="table table-bordered table-striped">
		<tr>
      <td>ID.</td>
			<td>Food Ref.</td>
			<td>Food Name </td>
			<td>Food Price</td>
      <td>Status</td>
      <td>UserName</td>
      <td>Order Time</td>
			<td width="70px">Delete</td>
			<td width="70px">EDIT</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){
		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id']."' name='id' />"; //added
		echo "<tr>";
		echo "<td>".$row['id'] . "</td>";
    echo "<td>".$row['foodref'] . "</td>";
		echo "<td>".$row['foodname'] . "</td>";
		echo "<td>".$row['foodprice'] . "</td>";
		echo "<td>".$row['status'] . "</td>";
    echo "<td>".$row['username'] . "</td>";
    echo "<td>".$row['time'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Cancel' class='btn btn-danger' /></td>";
		echo "<td><a href='editorder.php?id=".$row['id']."' class='btn btn-info'>Edit</a></td>";
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
