
<?php 
require_once('db_connection.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
	$sql = "delete FROM collect_blood WHERE ID=" . $_GET['id'];
	$res = mysqli_query($con, $sql);
	//$r = mysqli_fetch_assoc($res);
	//unlink($r['Delete']);
	 
}else{
	header("Location: collection_list.php");
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