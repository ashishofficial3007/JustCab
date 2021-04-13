<?php
session_start();
//require_once("dbconnect.php");
$sql="select * from review_blogs where b_id='".$_POST['blog_id']."'";

<script>
	$("#display_data").click(function(){
			jQuery.ajax({
				
				success: function(row){
					//alert(row);
					if(row=="<?[blog_id]?>"){
						$(".display_discription")=$row['discription'];
						
				}
			});
	})
	
</script>
?>