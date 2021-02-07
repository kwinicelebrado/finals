<?php include('orderForm_Connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="orderFormStyle.css">
	<title>Order form</title>
</head>
<body>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/header.php'); 
	?>


	<form action="orderForm_Connect.php" method="post" enctype="multipart/form-data">
	<div class="title-form">
		<h2>ORDER FORM</h2>
	</div>
	<div class="order-form">
		<div class="row-one">
			<label>Commission type:</label><br> 
			<input value="portrait" type="radio" name="comm_type" required>Portrait<br>
			<input value="bust-up" type="radio" name="comm_type" required>Bust up<br>
			<input value="half-body" type="radio" name="comm_type" required="">Half body<br>
			<input value="full-body" type="radio" name="comm_type" required="">Full body<br>
		</div>
		<div class="row-two">
  	  		<label>Upload your photo (Photo must be clear, much better if HD.</label> 
  	  		<input type="file" name="image" required><br>
  		</div>
  		<div class="row-three">	
			<label>Background:</label><br> 
			<input value="solid" type="radio" name="background" required>1 Solid Color<br>
			<input value="gradient" type="radio" name="background" required>Gradient<br>
			<input value="specific" type="radio" name="background" required>Specific Full Background<br>
			<input value="transparent" type="radio" name="background" required>Transparent<br> 
		</div>
		<div class="row-four">
			<label>For Full Background</label><br>
			<input type="text" name="fullBg"><br>
		</div>
		<div class="row-five">
  	  		<label>Upload your photo</label> 
  	  		<input type="file" name="image2"><br>
  		</div>
  		<div class="row-six">
			<label>Additional Character:</label><br> 
			<input value="one" type="radio" name="addons" required>one (1)<br>
			<input value="two" type="radio" name="addons" required>two (2)<br>
			<input value="none" type="radio" name="addons" required>none<br> 
		</div>
		<div class="row-seven">
			<label>Props or Elements:</label><br> 
			<input type="text" name="props"><br>
		</div>
		<div class="row-eight">
			<label>Enhance or Change something:</label><br> 
			<input type="text" name="enhance"><br>
		</div>
		<div class="row-nine">
			<label>Deadline:</label><br> 
			<input type="date" name="deadline" required><br>
		</div>
		<div class="row-ten">
			<button type="submit" name="submit">Add to cart</button>
		</div>
	</div>
	</form>


	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/footer.php'); 
	?>

	
</body>
</html>