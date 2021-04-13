<?php
	//echo "<pre>";
	//print_r($_POST); die;
	session_start();
	require_once("dbconnect.php");
	$sql="select * from user where email='".$_POST['email']."' and password='".$_POST['password']."'";
	$result=$mysqli->query($sql);
	//echo "<pre>"; print_r($result);die;
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$_SESSION['id']=$row['id'];
			$_SESSION['email']=$row['email'];
			$_SESSION['mobile']=$row['mobile'];
			$_SESSION['firstname']=$row['firstname'];
			$_SESSION['lastname']=$row['lastname'];
			$_SESSION['address']=$row['address'];
		}
		echo "1";
	}else{
		echo "0";
	}

?>