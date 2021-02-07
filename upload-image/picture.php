<?php include("pictureConnect.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="headFoot.css">
	<link rel="stylesheet" type="text/css" href="pic.css">
	<title>Image Upload</title>

</head>
<body>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/header.php'); 
	?>

	<div class="header">
		<h1>Admin Panel</h1>

	</div>

	<div class="sidebar">
		<ul>
			<li><a href = "/finals/upload-image/picture.php">Manage Pages</a></li>
			<li><a href = "add.php">Manage Users</a></li>
			<li><a href="#">Manage Orders</a></li>
			
		</ul>
	</div>

	<div class="center">
		<form method="post" action="picture.php" enctype="multipart/form-data">
			<div class="file_choose">
  	  			<input type="file" name="image" required>
  			</div>
			<div class="btn">
  				<button type="submit" name="upload">ADD PICTURE</button>
  			</div>
		</form>

		<div class="data">
		<?php

			$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
			$sql = "SELECT * FROM picture_table";
			$result = mysqli_query($db, $sql);
				echo "<table>
                    <th>ID</th>
                    <th>Picture Name</th>
                    <th>Uploaded</th>";
			if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
    		echo	"<style>
                    table{
                    	position: absolute;
                        padding: 10px;
                        margin: auto;
                        width: 70%;
                        text-align: center;
                       	align-items: center;
                       	top: 250px;
                       	left: 300px;
                    } 
                    th{
                        border: 1.5px solid black;
                        background-color: #C39BD3;
                        padding: 5px;
                    }
                    td{
                        border: 1px solid black;
                        background-color: #dcdcdc;
                        padding: 5px;
                    }
                </style>" ;
                echo "<tr>";
                echo "<td>$row[picture_ID]</td>";
                echo "<td>$row[picture]</td>";  
                echo  "<td>$row[uploaded]</td>";
                echo "<td><a href="edit.php"> $row[picture_ID]"Edi;    
                echo "</tr><br>";    

            }
			} else {
   			 	echo "0 results";
			}
			echo "</table>";
  		?>
  		</div>
	</div>


	

	<?php
		include($_SERVER['DOCUMENT_ROOT']. '/finals/controls/footer.php');
	?>

</body>
</html>