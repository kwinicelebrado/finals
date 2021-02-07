<?php include("comms_server.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/finals/template/topnavbar.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Commission Sheet</title>

	<style type="text/css">
		html{
			height: 100%;
		}

		body{
			min-height: 100%;
			background-color: #FAF5EF;
		}

		.aboutpage{
			height: 100%;
			letter-spacing: 2px;
			text-align: center;
			width: 800px;
			margin: auto;
		}

		.container{
			margin: auto;
			width: 75%;
			padding: 5px;
			border-radius: 8px;
			background-color: #F6B7B7;
		}

		p.desc{
			padding: 0px 100px 0 100px;
			text-align: justify;
			font-size: 15px;
		}

		.center{
			text-align: center;
			padding: 20px;
		}

		button{
			width: 200px;
			background-color: #F6B7B7;
			border: none;
			border-radius: 20px;
			padding: 2px 5px;
			font-size: 18px;
			font-family: century gothic;
			cursor: pointer;
		}

		a.btn{
			text-decoration: none;
			color: black;
		}

		button:hover{
			background-color: #ed8790;
			font-weight: bold;
		}

		.img_container{
			display: flex;
			width: 280px;
			margin: 0 15% 30px 15%;
		}


		.comms_image{
			background-color: white;
			margin: 10px 10px 0 10px;
			height: 550px;
			width: 280px;
			border-style: solid;
			border-width: 1px;
			border-radius: 0px 0px 8px 8px;
		  	display: inline-block;
		  	text-align: center;
		  	font-size: 20px;
		  	font-weight: bold;
		  	letter-spacing: 2px; 	
		}

		.description{
			white-space: pre-wrap;
			letter-spacing: 1px;
			padding: 10px;
			font-size: 15px;
			font-weight: normal;
			text-align: justify;
		}

		.add{
			font-weight: bold;
		}

		.comms_image img{
			padding: 0px;
			border-bottom: solid;
			border-width: 1px;
		    width: 280px;
		    height: 280px;
		}

		.moreinfo{
			width: 550px;
			display: flex;
			margin: 0 auto;
			text-align: left;
			letter-spacing: 2px;
			padding-bottom: 30px;
		}

		.moreinfo-left, .moreinfo-right{
			flex: 50%;
			padding-left: 10px; 
		}


		.moreinfo-left img{
			text-align: left;
			width: 15px;
			height: 15px;
			padding-right: 10px; 
		}

		.moreinfo-left p, .moreinfo-right p{
			padding-bottom: 0px;
			margin: 0px;	
		}


	</style>
</head>

<body>	
	<div class="aboutpage">		
		<h1>ART COMMISSION INFORMATION</h1>
			<h4 class="container">COMMISSION STATUS:</h4>
			<p class="desc">For a personal/private commissions, please read through this page carefully to get an overiew of my current rates and offered service if you want to hire me. Read also my <strong>Terms of Service</strong> before ordering.</p>
	
		<button><a class="btn" href="#">Terms of Service</a></button><br>	
	</div>

	<div class="img_container">
		<?php 	
			$conn = mysqli_connect(db_host, db_username, db_password, db_name, db_port);

			$sql = "SELECT comm_type, price, image, comm_desc, additional FROM commsheet";
			$res = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_array($res)) {
				echo "<div class='comms_image'>";
					//DISPLAY IMAGE
					echo "<img src='/finals/order/order-images/".$row['image']."'>";

					//DISPLAY TYPE & PRICE
					echo "<br>". $row['comm_type']. "<br>";
					echo "". $row['price']. " USD";

					//DISPLAY DESCRIPTION
						echo "<div class='description'>";
							echo "". $row['comm_desc']. "<br>";

					//DISPLAY ADDITIONAL
						echo "<div class='add'>";	
							echo "<br>". "Additional Character +". $row['additional']. " USD";
						echo "</div>";
						echo "</div>";
				echo "</div>";
			}
		?>	
	</div>

	<div class="center">
		<button><a class="btn" href="#">Order Now</a></button><br>
	</div>

	<div class="moreinfo">
		<div class="moreinfo-left">
			<h4><u>DO'S AND DONT'S</u></h4>
				<p><img src="../logos/check-mark.png"></img>Fan arts</p>
				<p><img src="../logos/check-mark.png"></img>Original Characters</p>
				<p><img src="../logos/check-mark.png"></img>Personal Portraits</p>
				<p><img src="../logos/check-mark.png"></img>Soft NSFW (Sexy & Revealing Characters)</p><br>

				<p><img src="../logos/cancel-mark.png"></img>Pets</p>
				<p><img src="../logos/cancel-mark.png"></img>Mecha</p>
				<p><img src="../logos/cancel-mark.png"></img>Furries & Anthros</p>
				<p><img src="../logos/cancel-mark.png"></img>Pornography & NSFW</p>
				<p><img src="../logos/cancel-mark.png"></img>Imitate other artist's style</p>
		</div>

		<div class="moreinfo-right">
			<h4><u>ADDITIONAL CHARGES</u></h4>
			<p><b>BACKGROUND</b></p>
			<p><b>+$25 -</b> Full scene/ detailed background</p><br>
			<p><b>CHARACTERS</b></p>
			<p><b>+$10 -</b> Complex changes to characters</p>
			<p><b>+</b> Limited to two additional characters only.</p><br>
			<p><b>PROPS</b></p>
			<p><b>+10 -</b> 3-5 Props (ex. plants, flowers, gaming console, etc.)</p>
		</div>
	</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/finals/template/footer.php'); ?>
</body>
</html>