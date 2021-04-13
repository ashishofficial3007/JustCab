  <footer id="footer" class="dark">

            <div class="container">

                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="col_two_third">

                        <div class="col_one_third">

                            <div class="widget clearfix">

                                <!-- s<img src="images/footer-widget-logo.png" alt="" class="footer-logo"> -->

                                <!-- <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p> -->

                                <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                    <address>
										<strong>Headquarters:</strong><br>
										Rustomjee, Majiwada,Saket Ground<br>
										Thane, MAHARASHTRA 400601.<br>
										
									</address>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 9619348557 / 9619347993
                                    <br>
                                    <!-- <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br> -->
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> support@justcab.co.in
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> justcabapk@gmail.com
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> justgetit.co.in@gmail.co.in
                                </div>

                            </div>

                        </div>

                        


						</div> -->

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix" style="margin-bottom: -20px;">

                            <div class="row">

                                <div class="col-md-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="50" data-to="8789" data-refresh-interval="80" data-speed="3000" data-comma="true"></span>
                                    </div>
                                    <h5 class="nobottommargin">Total Deliveries</h5>
                                </div>

                                <div class="col-md-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="10" data-to="591" data-refresh-interval="50" data-speed="2000" data-comma="true"></span>
                                    </div>
                                    <h5 class="nobottommargin">Clients</h5>
                                </div>

                            </div>

                        </div>

                        

                    </div>

                </div>
                <!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Copyrights &copy; 2016 Justcab
                        <br>
                        <div class="copyright-links">

                            


                        </div>
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="https://www.facebook.com/justgetit.co.in/" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="https://twitter.com/JustGetIt_JGI" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="https://plus.google.com/u/0/108314702891986048099/posts" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>



                            <a href="https://www.linkedin.com/in/justget-it-00920b11b?trk=hp-identity-name" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>

                        <div class="clear"></div>


                    </div>

                </div>

            </div>
            <!-- #copyrights end -->

        </footer>
        <!-- #footer end -->

    </div>
    <!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
	============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
<!-- Modal -->
	<script src = "js/jquery-ui.js"></script>      
	<script>
		$(function() {
		//	$( "#input_date1" ).datepicker();
		//	$( "#input_date1" ).datepicker("show");
		});
	</script>
<div id="sign_in" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Please sign in here</h4>
      </div>
		<div class="modal-body" style="height:290px;">
			<div class="col-md-12 nopad"> 
				<form id="order_form" method="post" >
					<div class="col-md-12 nopad " >
						<input type="text"  id="email_phone" name="email_phone" placeholder="Email or Phone No" class="form-control input_box_border" />
						<p class="email_phone"><?php //echo $email_phone; ?></p>
					</div>
					<div class="col-md-12 nopad">
						<input type="text" id="sign_in_password" name="sign_in_password" placeholder="Password" class="form-control input_box_border" />
						<p class="sign_in_password"><?php //echo $sign_in_password; ?></p>
						<p class="sign_error"></p>
					</div>	
					
					<div class="col-md-12 text-center">
						<input class="btn-success btn" type="button" value="Sign in"  id="save_sign_in" />
					</div>
				</form>
			</div>	
			<div class="col-md-12 nopad text-center" >
				<h5><a href="#">Forgot Password</a></h5>
			</div>	
						
			<div class="col-md-12 nopad text-center" style="margin-top:20px;">
				<h5>New user please <a href="new_user_sign_up_form.php">Sign Up</a> Here.</h5>
			</div>
			
			
		</div> <!-- end of main div -->
					
		</div>
     
    </div>

  </div>
</div>
	


	<script src="js/sweetalert.min.js"></script>
	<script>
	
		  $("#signup").click(function(){
				$("#myModal").modal();
		  }) 
		  
	
			
	$("#signup_form").submit(function(){
		var flag=new Array();
				var i=0;
				if($.trim($("#first_name").val())==""){
				   $(".first_name").html("Please enter first name").css('color','red');
				   flag[i]=false;
				   i=i+1;	
				}else{
					$(".first_name").html("");
					flag[i]=true;
				    i=i+1;
				}
				if($.trim($("#last_name").val())==""){
				   $(".last_name").html("Please enter last name").css('color','red');
				   flag[i]=false;
				   i=i+1;
				}else{
					$(".last_name").html("");
					flag[i]=true;
				    i=i+1;
				}
				if($.trim($("#customer_address").val())==""){
				   $(".customer_address").html("Please enter  Valid Address").css('color','red');
				   flag[i]=false;
				   i=i+1;
				}else{
					$(".customer_address").html("");
					flag[i]=true;
				    i=i+1;
				}
				
				var email=$.trim($("#email").val());

				if(email==""){
				   $(".email").html("Please enter Email address").css('color','red');
				   flag[i]=false;
				   i=i+1;
				}else{
						 var regexp = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
						 if(regexp.test(email)==false){
							 $(".email").html("Please enter valid Email address").css('color','red');
							 flag[i]=false;
							 i=i+1;
						 }else{
							$(".email").html("");
							flag[i]=true;
							i=i+1;
						 }
					}
				
				var phone=$.trim($("#phone").val());

				if(phone==""){
				   $(".phone").html("Please enter Phone no").css('color','red');
				   flag[i]=false;
				   i=i+1;
				}else{
					
					var isnum = /^\d+$/.test(phone);
					if(isnum==true){
						if(phone.length!=10){
							$(".phone").html("Please enter valid mobile no").css('color','red');
							 flag[i]=false;
							 i=i+1;
						}else{
							$(".phone").html("");
							flag[i]=true;
							i=i+1; 
						}
						
					}else{
							$(".phone").html("");
							flag[i]=true;
							i=i+1;
						 }
					}
				
				
				
				
				if($.trim($("#new_password").val())==""){
				   $(".new_password").html("Please enter New password").css('color','red');
				   flag[i]=false;
				   i=i+1;
				}else{
					$(".new_password").html("");
					flag[i]=true;
				    i=i+1;
				}
								
				var n=0;
				
				for(j=0;j<i;j++){
					if(flag[j]==false){
						n=n+1;
					}
				}
				
				if(n>0){
					return false;
				}else{
					return true;
				}
			
	})	
	function signin(){
		$("#sign_in").modal();
	}
	function logout(){
		jQuery.ajax({
				url: "logout.php",
				data:{},
				type: 'POST',
				success: function(result){
					window.location = "http://justgetit.co.in";
				}
			});
	}
	$("#save_sign_in").click(function(){
			jQuery.ajax({
				url: "check_sign_in.php",
				data:{email:$("#email_phone").val(),password:$("#sign_in_password").val()},
				type: 'POST',
				success: function(result){
					//alert(result);
					if(result=="1"){
						//$("#sign_in").modal('hide');
						window.location = "http://justgetit.co.in";
						//window.location = "http://justgetit.co.in/";
					}else{
						$(".sign_error").html("Invalid user name password");
					}
				}
			});
	})
	</script>
</html>