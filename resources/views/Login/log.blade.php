<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>

<?php include "/Assests_PHP/JS.php";?>
<?php include "/Assests_PHP/CSS.php";?>


<!-- Custom Theme files -->

<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login Signup form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->

<!-- -->
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>$(document).ready(function(c) {
	$('.green-signup').on('click', function(c){
		$('.green-headleft').fadeOut('slow', function(c){
	  		$('.green-headleft').remove();
		});
	});	  
});
</script>
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script>$(document).ready(function(c) {
	$('.closeup').on('click', function(c){
		$('.green-right').fadeOut('slow', function(c){
	  		$('.green-right').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.rib-close').on('click', function(c){
		$('.ribben').fadeOut('slow', function(c){
	  		$('.ribben').remove();
		});
	});	  
});
</script>
</head>
<body>
<!--header start here-->
<div class="header">
	<div class="wrap">
		<div class="header-main">
		       <h1> Signup form</h1>
			<div class="header-bottom">
				<div class="header-left green-headleft">
					<div class="header-left-top">
						<div class="sign-up"> <h3>SIGN UP</h3> </div>
						<div class="sign-close green-signup"><img src="images/cancel.png" alt=""/></div>
						<div class="clear"> </div>
					</div>
					<div class="header-left-bottom">
						<h3>Welcome to our Site.Please enter your <span class="login-color">Registration </span>details. Or have an account <span class="login-color">Login</span> here </h3>
				      {{Form::open(array('url'=>"/auth/register"))}}

						<input type="text" name="name" class="user active" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}"/>
						<input type="text" name="email" class="email active" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}"/>
						<input type="password" name="password" class="lock active" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>

                        <input type="password" name="password_confirmation" class="lock active" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>

						<span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I Accept Terms.</label>
						 </span>
						<input type="submit" value="Sign up">
					{{Form::close()}}
				</div>
				<div class="header-social">
					<span class="line"> </span>
					<h4>Log In with your <a href="#">Facebook</a> or <a href="#">Twitter</a></h4>
					<a href="#" class="face">Facebook</a>
					<a href="#" class="twitt">Twitter</a>
				</div>
				</div>
				
<!--footer end here-->
</body>
</html>