<?php
if(isset($_GET['error']) && $_GET['error']=='first_name'){
	$firstname_msg="Please enter first name";
}else{
	$firstname_msg="";
}

if(isset($_GET['error']) && $_GET['error']=='last_name'){
	$lastname_msg="Please enter last name";
}else{
	$lastname_msg="";
}
if(isset($_GET['error']) && $_GET['error']=='customer_address'){
	$customer_address_msg="Please enter Valid Address";
}else{
	$customer_address_msg="";
}
if(isset($_GET['error']) && $_GET['error']=='email'){
	$email_msg="Please enter email";
}else{
	$email_msg="";
}
if(isset($_GET['error']) && $_GET['error']=='phone'){
	$phone_msg="Please enter Phone no.";
}else{
	$phone_msg="";
}
if(isset($_GET['error']) && $_GET['error']=='new_password'){
	$new_password_msg="Please enter New Password";
}else{
	$new_password_msg="";
}
?>

<?php include('header.php'); ?>

		 <div class="container clearfix " style="height:485px !important;">
				<div class="col-md-12 ">
					<div class="col-md-4">
					</div>
					<!-- sign up body div -->
					<div class="col-md-4 sign_up_body_color gap" id="signup_div" style="height:463px;">
					<form id="signup_form" method="post" action="save_new_interns.php">
						<h5><font color="white">New intern pls register here.</font></h5>
						<div  class="col-md-12 nopad gap">
							<div class="col-md-6 nopad ">
								<input class="form-control input_box_border" type="text" name="first_name" id="first_name" placeholder="First Name">
								<p class="first_name"><?php echo $firstname_msg; ?></p>
							</div>
							<div class="col-md-6 nopad ">
								<input class="form-control input_box_border" type="text" name="last_name" id="last_name" placeholder="Last Name">
								<p class="last_name"><?php echo $lastname_msg; ?></p>
							</div>
						</div>
						<div class="col-md-12 nopad gap">
								<input class="form-control input_box_border" type="text" name="customer_address" id="customer_address" placeholder="Address">
								<p class="customer_address"><?php echo $customer_address_msg; ?></p>
						</div>
					
						<div class="col-md-12 nopad gap">
								<input class="form-control input_box_border" type="text" name="email" id="email" placeholder="Email">
								<p class="email"><?php echo $email_msg; ?></p>
						</div>
						<div class="col-md-12 nopad gap">
								<input class="form-control input_box_border" type="text" name="phone" id="phone" placeholder="Phone">
								<p class="phone"><?php echo $phone_msg; ?></p>
						</div>
						<div class="col-md-12 nopad gap">
								<input class="form-control input_box_border" type="text" name="new_password" id="new_password" placeholder="New Password">
								<p class="new_password"><?php echo $new_password_msg; ?></p>
						</div>
						<div class="col-md-6 nopad gap">
							<input class="btn-success btn" type="submit" value="Register"  id="register_interns" />
						</div>
					</div>
					</form>
					<!-- sign up body div end -->
					<div class="col-md-4">
					</div>
				</div>
				
		</div>
		
		
	<?php include('footer.php'); ?>