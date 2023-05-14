<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet"/>
		<link href="assets/css/style.css" rel="stylesheet"/>
	</head>

	<body>
		<!--Navigation-->
		<nav class="navbar navbar-light" >
			<div class="container-fluid d-flex justify-content-center">
				<ul class="navbar nav">
					<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="contact.php">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
					<li class="nav-item"><a class="nav-link" href="classes.php">Classes</a></li>
					<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
					<li class="nav-item"><a class="nav-link" href="hobbies.php">Hobbies</a></li>
					
				</ul>
			</div>
		</nav>
		
		<!--Page Content-->
		<div class="container-fluid overflow-hidden body-content fade-in">
			<?php 
				if ( !isset( $_POST['submit'] ) ){
					echo '<form action="" method="post">';
					echo 	'<p>First Name: ';
					echo		'<input type="text" name="firstname"/>';
					echo	'</p>';
					echo	'<p>Last Name: ';
					echo	'<input type="text" name="lastname"/>';
					echo	'</p>';
					echo	'<p>Email: ';
					echo		'<input type="text" name="email"/>';
					echo	'</p>';
					echo	'<p>Phone Number: ';
					echo	'<input type="text" name="phone"/>';
					echo	'</p>';
					echo	'<p>Comments: ';
					echo		'<input type="text" name="comments"/>';
					echo	'</p>';
					echo 	'<p><button type="submit" name="submit" value="submit">Submit</button></p>';
					echo '</form>';
				}
				if( isset( $_POST['submit'] ) && $_POST['submit'] == "submit" ){
					$firstname = addslashes($_POST['firstname']);
					$lastname = addslashes($_POST['lastname']);
					$email = addslashes($_POST['email']);
					$phone = addslashes($_POST['phone']);
					$comments = addslashes($_POST['comments']);
					echo '<h3>Data Received</h3>';
					echo "<p>Firstname: $firstname</p>";
					echo "<p>Lastname: $lastname</p>";
					echo "<p>Email: $email</p>";
					echo "<p>Phone: $phone</p>";
					echo "<p>Comments: $comments</p>";
					$username = "webuser";
					$password = "UON6O2a)ruonyiFa";
					$db="contact_data";
					$hostname = "localhost";
					$dblink = new mysqli($hostname,$username,$password,$db); //php connection string
					$sql="Insert into `entries` (`first_name`, `last_name`, `email`, `phone`, `comments`) values ('$firstname','$lastname','$email','$phone','$comments')";
					$dblink->query($sql) or die("Something went wrong with: $sql<br>".$dblink->error);
					echo '<h3>Data entered into Database successfully!</h3>';
				}
			?>
		</div>
</body>
</html>