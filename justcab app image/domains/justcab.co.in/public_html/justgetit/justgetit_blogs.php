<?php
require_once('dbconnect.php');

$sql="select * from blogs_data";
$result=$mysqli->query($sql);

//print_r($result); die;
if(isset($_GET['error']) && $_GET['error']=='review_name'){
	$review_name_msg="Please enter full name";
}else{
	$review_name_msg="";
}

if(isset($_GET['error']) && $_GET['error']=='review_email'){
	$review_email_msg="Please enter email";
}else{
	$review_email_msg="";
}
if(isset($_GET['error']) && $_GET['error']=='review_mobile'){
	$review_mobile_msg="Please enter Mobile no.";
}else{
	$review_mobile_msg="";
}
if(isset($_GET['error']) && $_GET['error']=='review'){
	$review_msg="Please enter review";
}else{
	$review_msg="";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Just Get It</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
	a:link {
		color: green;
		background-color: transparent;
		text-decoration: none;
	}
	a:visited {
		color: blue;
		background-color: transparent;
		text-decoration: none;
	}
	a:hover {
		color: brown;
		font-weight: bold;
		background-color: transparent;
		text-decoration: underline;
	}
	a:active {
		color: yellow;
		background-color: transparent;
		text-decoration: underline;
	}
</style>
	
	
</head>



<body class="body_post">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.justgetit.co.in">Just Get It</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
			
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>Just Get It</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="http://www.justgetit.co.in">JGI</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2016 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                
				<hr>

                <!-- Post Content -->
				<section id="details">
					
				</section >
                
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well review_form_div">
					<form role="form" id="review_form" method="post" action="save_justgetit_blogs.php">
						<div class="col-md-12 nopad ">
							<h5>Name:</h5>
							<input class="form-control" type="text" name="review_name" id="review_name" placeholder="Please Enter Your Name"></input>
							<p class="review_name"><?php echo $review_name_msg; ?></p>
						</div>
						<div class="col-md-12 nopad ">
							<h5>Email:</h5>
							<input class="form-control" type="text" name="review_email" id="review_email" placeholder="Please Enter Email"></input>
							<p class="review_email"><?php echo $review_email_msg; ?></p>
						</div>
						<div class="col-md-12 nopad ">
							<h5>Mobile:</h5>
							<input class="form-control" type="text" name="review_mobile" id="review_mobile" placeholder="Please Enter Mobile"></input>
							<p class="review_mobile"><?php echo $review_mobile_msg; ?></p>
						</div>
						
						<h4>Post Review:</h4>
						<div class="form-group">
							<textarea class="form-control" id="review" name="review" rows="3"></textarea>
							<p class="review"><?php echo $review_msg; ?></p>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">JGI
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">JGI
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested JGI
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
							<?php while($row = $result->fetch_assoc())  {  ?>
                                <li onclick="display_data(<?php echo $row['blog_id']; ?>);" ><a href="javascript:void(0);" ><?php echo ucfirst($row['title']); ?></a></li>
							<?php } ?>	
								
                            </ul>
                        </div>
                    <!--    <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Concept</a></li>
                                
                                <li><a href="#">Team</a></li>
                                
                                <li><a href="#"> FAQs</a></li>

                                <li><a href="#">Privacy Polocy</a></li>
                                
								<li><a href="#">Compliances</a></li>
                                
								<li><a href="#">Career</a></li>
								<li><a href="#">Delivery Conditions</a></li>
								<li><a href="#">Delivery Timings</a></li>
								<li><a href="#">Product Categories</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Orders</a></li>
								<li><a href="#">Customer Subscription</a></li>
								<li><a href="#">Contact Us</a></li>
                                
                            </ul>
                        </div> -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
	<script>
		$("#review_form").submit(function(){
						var flag=new Array();
						var i=0;
						if($.trim($("#review_name").val())==""){
						   $(".review_name").html("Please enter name").css('color','red');
						   flag[i]=false;
						   i=i+1;	
						}else{
							$(".review_name").html("");
							flag[i]=true;
							i=i+1;
						}
						var email=$.trim($("#review_email").val());

						if(email==""){
						   $(".review_email").html("Please enter Email address").css('color','red');
						   flag[i]=false;
						   i=i+1;
						}else{
								 var regexp = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
								 if(regexp.test(email)==false){
									 $(".review_email").html("Please enter valid Email address").css('color','red');
									 flag[i]=false;
									 i=i+1;
								 }else{
									$(".review_email").html("");
									flag[i]=true;
									i=i+1;
								 }
							}
							var phone=$.trim($("#review_mobile").val());

							if(phone==""){
							   $(".review_mobile").html("Please enter Mobile no").css('color','red');
							   flag[i]=false;
							   i=i+1;
							}else{
								
								var isnum = /^\d+$/.test(phone);
								if(isnum==true){
									if(phone.length!=10){
										$(".review_mobile").html("Please enter valid mobile no").css('color','red');
										 flag[i]=false;
										 i=i+1;
									}else{
										$(".review_mobile").html("");
										flag[i]=true;
										i=i+1; 
									}
									
								}else{
										$(".review_mobile").html("");
										flag[i]=true;
										i=i+1;
									 }
								}
								var rvw=$("#review").val();
								if($.trim($("#review").val())==""){
									
								   $(".review").html("Please enter review").css('color','red');
								   flag[i]=false;
								   i=i+1;
								}else{
									$(".review").html("");
									flag[i]=true;
									i=i+1;
								}
								if(rvw.length<20){
									$(".review").html("Minimum 20 characters required ").css('color','red');
								   flag[i]=false;
								   i=i+1;
								}else{
									$(".review").html("");
									flag[i]=true;
									i=i+1;
								}
								
												
								var n=0;
								
								for(j=0;j<i;j++){
									if(flag[j]==false){
										n=n+1;
									}
								}
								alert(n);
								if(n>0){
									return false;
								}else{
									return true;
								}
		})
		
		function display_data(id){
			jQuery.ajax({
				url: 'http://localhost/justgetit-master/'+'get_blog.php',
				data: {blog_id:id},
				type:"post",
				async: false,
				success:function(data){ 
					$("#details").html(data);
				}
			});
		}
	</script>
</html>
