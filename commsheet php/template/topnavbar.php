<!DOCTYPE html>
<html>
<head>
<style>
	body{
		font-family: century gothic;
		top: 0px;
		margin: 0px;
	}

	/* N A V I G A T I O N  B A R  S T Y L E */
	.NavBar{
  		margin: 0 100px 0 100px;
	}

	ul {
	  	list-style-type: none;
	  	margin-top: 0;
	  	padding: 0;
	  	padding-top: 3px;
	  	overflow: hidden;
	}

	li.webname{
		font-family: Didot LT Std;
		font-weight: bold;
		letter-spacing: 5px; 
		font-size: 25px;
		float: left;
	}

	img.icon-navbar{
		width: 20px;
		height: 20px;
	}

	li {
		float: right;
		text-align: left;
	}

	li a, .dropnav {
	  	display: inline-block;
	  	color: black;
	  	text-align: center;
	  	padding: 14px 16px;
	  	text-decoration: none;
	}

	li a:hover, .dropdown:hover  .dropnav {
	  	color: #F6B7B7;
	  	cursor: pointer;
	}

	li.dropdown  {
	  	display: inline-block;
	}

	.dropChoose {
	  	display: none;
	  	position: absolute;
	  	background-color: #white;
	  	min-width: 10%;
	  	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  	z-index: 1;
	}

	.dropChoose a {
	  	color: black;
	  	padding: 12px 16px;
	  	text-decoration: none;
	  	display: block;
	  	text-align: left;
	}

	.dropChoose a:hover {
		color: black;
		background-color: #FBE2E2;}

	.dropdown:hover  .dropChoose {
	  	display: block;
	}
</style>
</head>

<body>
	<!-- N A V I G A T I O N  B A R -->
		<div class="NavBar">
			<ul>
				<li class="webname">
					<a href="#">beyart.jpg</a>
				</li>

				<li><a href="#"><img class="icon-navbar" src="/finals/logos/user.png"></a></li>
				
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropNav"><img class="icon-navbar" src="/finals/logos/cart.png"></a>
					<div class="dropChoose">
						<a href="#">View Cart</a>
						<a href="#">Check Out</a>
					</div>
				</li> 

				<li><a href="#">FAQ</a></li>

				<li class="dropdown">
					<a href="javascript:void(0)" class="dropNav">Commission</a>
					<div class="dropChoose">
						<a href="#">Commission Information</a>
						<a href="#">Terms of Service</a>
						<a href="#">Order Form</a>
					</div>
				</li>

				<li><a href="#">About</a></li>

				<li class="dropdown">
					<a href="javascript:void(0)" class="dropnav">Home</a>
					<div class="dropChoose">
						<a href="#">Gallery</a>
						<a href="#">Commissioned Works</a>
					</div>
				</li>
			</ul>
		</div>	
</body>
</html>	