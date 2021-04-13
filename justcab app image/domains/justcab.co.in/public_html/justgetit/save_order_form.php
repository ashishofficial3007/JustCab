<?php
echo "<pre>";
print_r($_POST);

require_once("dbconnect.php");
echo 'Connection OK';
$mysqli->close();



	if(isset($_POST['first_name']) && trim($_POST['first_name'])==""){
		header("Location: http://localhost/ajeet/fbdemo1.php?error=firstname");
		die;
	}
	
	if(isset($_post['last_name']) && trim($_post['last_name'])==""){
		header("Location: http://localhost/ajeet/fbdemo1.php?error=lastname");
		die;
	}
	if(isset($_post['phone_email']) && trim($_post['phone_email'])==""){
		echo "email or phone no not entered";
		die;
	}
	if(isset($_post['new_password']) && trim($_post['new_password'])==""){
		echo "Password not entered";
		die;
	}
	if(isset($_post['DOBMonth']) && trim($_post['DOBMonth'])==""){
		echo "Date of month not selected";
		die;
	}
	if(isset($_post['DOBDay']) && trim($_post['DOBDay'])==""){
		echo "date of day note selected";
		die;
	}
	if(isset($_post['DOBYear']) && trim($_post['DOBYear'])==""){
		echo "date of year not selected";
		die;
	}
	
	
	//savedata program
	
	$mysqli = new mysqli('31.220.16.135','root','Delhijustget','u437338152_jgi');
	if ($mysqli->connect_error){
		die('connect error('.$mysqli->connect_errno.')'
		.$mysqli->connect_error);
	}
	
	$sql="insert into user (firstname,lastname,phone_email,new_password,gender,product,qty) values('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['phone_email']."','".$_POST['new_password']."','".$_POST['gender']."','".$_POST['product']."',".$_POST['qty'].")";
	
	echo $sql;  die;
	if ($mysqli->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
	
	$mysqli->close();
	

?>
