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
		<div class="container-fluid overflow-hidden body-content fade-in text-center">
			<?php 
                $username = "webuser";
                $password = "UON6O2a)ruonyiFa";
                $db="contact_data";
                $hostname = "localhost";
                $dblink = new mysqli($hostname,$username,$password,$db); //php connection string
                $sql= "Select * from `entries`";
                $results = $dblink->query($sql) or die("Something went wrong with: $sql<br>".$dblink->error);
                echo '<h3>Contact Form Entries</h3>';
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                    echo '<th>Record #</th>';
                    echo '<th>First Name</th>';
                    echo '<th>Last Name</th>'; 
                    echo '<th>Email</th>'; 
                    echo '<th>Comments</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                    while ( $data = $results->fetch_array(MYSQLI_ASSOC) ){
                        echo "<tr>";
                            echo "<td>$data[auto_id]</td>";
                            echo "<td>$data[first_name]</td>";
                            echo "<td>$data[last_name]</td>";
                            echo "<td>$data[email]</td>";
                            echo "<td>$data[comments]</td>";
                        echo "</tr>";
                    }
                echo '</tbody>';
                echo '<table/>';
			?>
		</div>
</body>
</html>