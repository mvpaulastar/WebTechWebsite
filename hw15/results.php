<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet"/>
		<link href="assets/css/style.css" rel="stylesheet"/>
        <script src="assets/js/jquery-3.5.1.js"></script>
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
            <h3>Contact Form Entries - Reload every 10 seconds.</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Record #</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody id="results">
                </tbody>
            </table>
		</div>
</body>
</html>

<script>
    function refresh_table(){
        $.ajax({
            type:'post',
            url: 'https://ec2-3-145-186-165.us-east-2.compute.amazonaws.com/hw15/query.php',
            success: function(data) {
                $('#results').html(data);
            }
        });
    };
    setInterval( function(){ refresh_table(); }, 10000);
</script>