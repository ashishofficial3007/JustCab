<?php

	
require_once('dbconnect.php');
	$html='';
	$sql="select * from blogs_data where blog_id=".$_POST['blog_id'];
	$result=$mysqli->query($sql);
	
	while($row = $result->fetch_assoc())  {
		
		$html.='<p>'.$row['discription'].'</p>';
	}
	
	
	$mysqli->close();
	echo $html;
?>