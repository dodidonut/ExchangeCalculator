<?php  
	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];
	
	$sql = "DELETE FROM exch102_history WHERE recordID = $id"; 
	require 'connect.php';
	$sql_exe = $conn -> query($sql);


	if ($sql_exe) {
		echo "Delete complete";
		echo "Delete ID".$id;
		echo "THB".$thb;
		// header("location:index.php");
	} else{
		echo "Delete failed";
	}
?>