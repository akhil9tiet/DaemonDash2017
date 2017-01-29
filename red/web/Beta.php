
<!DOCTYPE html>
<html>
<head>
<title>NGO Connect</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Red Ui Kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
				<h1><i class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></i>Non Profit<span>Connect</span><span><h3>Non Profit Login Page</h3></span><br></h1>
				<div class="ui-kit-grids">
					<div class="col-md-6">
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
							</form>
						</div>
					</div>
						
					<div class="col-md-6">
						<div class="login-form">
							<form action="/inglorious/red/web/userpages/ngo_merge.php" method="POST">
								<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required=""><br>
								<input type="text" name="Location" value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}" required="">
								<!-- <input type="text" value="Domain" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Domanin';}" required=""> -->
								<select class="dropdown" name="Domain">
  									<option value="Wildlife" >Wildlife</option>
									  <option value="Environment">Environment</option>
									  <option value="Education">Education</option>
									  <option value="Human Rights">Human Rights</option>

								</select>
								<input type="text" name="Interests" value="Interests" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Interests';}" required="">
								<input type="text" name="WebURL" value="WebURL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'WebURL';}" required="">
								<input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
								<input type="text" name="Chairperson" value="Chairperson" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Chairperson';}" required="">
								<input type="email" name="Email_Address" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
								<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
						<input type="submit" name="submit" value="SIGNUP">
							</form>
							
							
						</div>
					</div>
									
				</div>
			</div>
		</div>
	<!-- //ui-kit -->
</body>

</html>
