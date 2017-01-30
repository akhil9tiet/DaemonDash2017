<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Non Profit Connect</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="No Profit Connect" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- radio-buttons -->
<link rel="stylesheet" href="css/sky-forms.css">
<!-- //radio-buttons -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,900,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
	<!-- ui-kit -->
		<div class="ui-kit">
			<div class="container">
				<h1><i class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></i>Non Profit<span>Connect</span><span><h3>Volunteer Login Page</h3></span><br></h1>
				<div class="ui-kit-grids">
					<div class="col-md-5">
						<div class="login-form">
							<form>
								<input type="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
								<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							</form>
							
							<div class="ckeck-bg">
								<div class="checkbox-form">
									<div class="check-left">
										<div class="check">
											<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Remember me</label>
										</div>
									</div>
									<div class="check-right">
										<div class="check-right">
											<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Save Password</label>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<form>
								<input type="submit" value="SIGNIN">
							</form><br>
							<h3> Or Signin using Instagram</h3><br>
							
									<?php
											set_time_limit(0);
											ini_set('default_socket_timeout',300);
											session_start();
											/*.............Instagram API Keys.............*/
											define("clientID",'752a1fea6ed846c3bcae710738d53e2b');
											define("clientSecret",'a495c1e7e38443aeb609a153cc0c96a8');
											define("redirectURI",'http://localhost/inglorious/userpages/map_merge.php');

											function connectToInstagram($url){
											    $ch= curl_init();
											    curl_setopt_array($ch,array(
											        CURLOPT_URL=>$url,
											        CURLOPT_RETURNTRANSFER=>true,
											        CURLOPT_SSL_VERIFYPEER=>false,
											        CURLOPT_SSL_VERIFYHOST=>2 //this means we wont really verify the host
											    ));
											    $result=curl_exec($ch);
											    curl_close($ch);
											    return $result;
											}
									?>
							<form>
                                <a class="btn btn-primary" href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID;?>&redirect_uri=<?php echo redirectURI;?>&response_type=code" role="button">Login through Instagram</a>
                            </form>
						</div>
                    </div>
                
					
					<div class="col-md-5">
						<div class="login-form">
							<form action="./userpages/map_merge.php" method="POST">
								<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required=""><br>
								<input type="text" value="Interests" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Interests';}" required="">
								<input type="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
								<input type="text" value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}" required="">
							
								<input type="submit" value="SIGNUP">
							</form>						
						</div>
					</div>			
				</div>
			</div>
		</div>
	<!-- //ui-kit -->
</body>

</html>
