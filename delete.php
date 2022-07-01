
<?php 
require_once('db_connection.php');
if(isset($_GET['donorId']) && !empty($_GET['donorId'])){
	$sql = "delete FROM donor_tbl WHERE Donor_ID=" . $_GET['donorId'];
	$res = mysqli_query($con, $sql);
	//$r = mysqli_fetch_assoc($res);
	//unlink($r['Delete']);
	 
}else{
	header("Location: donorlist.php");
}
if ($con->query($sql) === TRUE) 
{
    echo "Record deleted successfully";
} else 
{
    echo "Error deleting record: " . $con->error;
}

$con->close();

?>