<?php

//echo "<pre>";
//print_r($_POST); die;
if(isset($_POST['first_name']) && trim($_POST['first_name'])==""){
		header("Location: http://justgetit.co.in/new_user_sign_up_form.php?error=firstname");
		die;
	}
if(isset($_POST['last_name']) && trim($_POST['last_name'])==""){
		header("Location: http://justgetit.co.in/new_user_sign_up_form.php?error=lastname");
		die;
}
if(isset($_POST['customer_address']) && trim($_POST['customer_address'])==""){
		header("Location: http://justgetit.co.in/new_user_sign_up_form.php?error=address");
		die;
}
if(isset($_POST['email']) && trim($_POST['email'])==""){
		header("Location: http://justgetit.co.in/new_user_sign_up_form.php?error=email");
		die;
}
if(isset($_POST['phone']) && trim($_POST['phone'])==""){
		header("Location: http://justgetit.co.in/new_user_sign_up_form.php?error=phone");
		die;
}
if(isset($_POST['new_password']) && trim($_POST['new_password'])==""){
		header("Location: http://justgetit.co.in/new_user_sign_up_form.php?error=newpassword");
		die;
}

//savedata program
	
	require_once("dbconnect.php");
	
	$sql="insert into just_get_interns (firstname,lastname,email,mobile,password,address) values('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['new_password']."','".$_POST['customer_address']."')";
	
	//echo $sql;  die;
	if ($mysqli->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
	
	$mysqli->close();
?>