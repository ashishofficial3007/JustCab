<?php

//echo "<pre>";
//print_r($_POST); die;
if(isset($_POST['review_name']) && trim($_POST['review_name'])==""){
		header("Location: http://justgetit.co.in/new_user_sign_up_form.php?error=firstname");
		die;
	}

if(isset($_POST['review_email']) && trim($_POST['review_email'])==""){
		header("Location: http://justgetit.co.in/new_user_sign_up_form.php?error=email");
		die;
}
if(isset($_POST['review_mobile']) && trim($_POST['review_mobile'])==""){
		header("Location: http://justgetit.co.in/new_user_sign_up_form.php?error=phone");
		die;
}


//savedata program
	
	require_once("dbconnect.php");
	
	$sql="insert into blog_post (name,email,phone,review) values('".$_POST['review_name']."','".$_POST['review_email']."','".$_POST['review_mobile']."','".$_POST['review']."')";
	
	//echo $sql;  die;
	if ($mysqli->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
	
	$mysqli->close();
?>