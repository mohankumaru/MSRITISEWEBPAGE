<?php
require('admin/connect.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($connection,"DELETE FROM comments WHERE id='$id'");
header("location: comment.php");
}
mysqli_close($connection);
?>