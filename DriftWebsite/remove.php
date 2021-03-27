<?php
include('connection.php');
session_start();
$email = $_SESSION['login_user'];
$sql2 = "SELECT * FROM customer where email = '$email'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$user = $row2['userid'];
$pid = $_GET['pid'];
$sql = "DELETE FROM cart WHERE userid ='$user' AND proid ='$pid'";
if($conn->query($sql)===true){
header("location: cart.php");
}
else{
	echo "error";
}
?>