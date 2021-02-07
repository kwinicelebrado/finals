<?php include('userConnect.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign in - Sign up Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="userStyle.css">
</head>
<body>
	<div class="container" id="container">
<!--SIGN IN FORM -->
    	<div class="underlay-container sign-in">
    	<form method="post" action="users.php">
          <?php
            include('errorList2.php');
          ?>
      		<h1>SIGN IN</h1>
      		<label>Username<input type="text" name="username"></label>
      		<label>Password<input type="password" name="password"></label>
      		<a href="#">Forgot Password?</a>
      		<button type="submit" name="login">Sign in</button>
      	</form>
      	</div>
      

<!--SIGN UP FORM -->
		<div class="underlay-container sign-up">
		<form method="post" action="users.php">
          <?php
            include('errorList.php');
          ?>
        	<h1>CREATE AN ACCOUNT</h1>
        	<label>Name<input type="text" name="fullName"></label>
        	<label>Username<input type="text" name="username"></label>
        	<label>Email<input type="email" name="email"></label>
        	<label>Password<input type="password" name="password"></label>
        	<label>Confirm Password<input type="password" name="passAgain"></label><br>
        	<button type="submit" name="register">Sign up</button>
        </form>
		</div>      		


<!--COVER OF THE FORM -->
    	<div class="overlay-container">
    		<div class="overlay">
	    		<div class="overlay-panel left">
	    			<h2>Welcome Back!</h2>
			        <p>Already have an account? Sign in now.</p>
			        <button id="signIN">Sign in</button>
	        	</div>

	        	<div class="overlay-panel right">
			        <h2>New Customer?</h2>
			        <p>Sign up and create an account now.</p>
			        <button id="signUP">Sign up</button>
	        	</div>
    		</div>
    	</div>
    </div>
    <script type="text/javascript">
    const signUpBtn = document.getElementById('signUP');
		const signInBtn = document.getElementById('signIN');
		const contain = document.getElementById('container');

		signUpBtn.addEventListener('click', () =>
		container.classList.add('right-panel-active'));

		signInBtn.addEventListener('click', () =>
		container.classList.remove('right-panel-active'));
    </script>
</body>
</html>