<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if( !isset($_POST['submit'])){
            echo '<form action="" method="post">
                <p>
                    First Name: <input type="text" name="firstName" id="firstName" class="firstName"/>
                </p>
                <p>
                    Last Name: <input type="text" name="lastName"/>
                </p>
                <p>
                    Email Address: <input type="text" name="email"/>
                </p>
                <p><button type="submit" name="submit" value="submit">Submit</button></p>
                </form>';
        }
        elseif(isset($_POST['submit']))
        {
            $firstname=$_POST['firstName'];
            $lastname=$_POST['lastName'];
            $email=$_POST['email'];
            echo "<h3>Data Recieved from Index.php</h3>";
            echo '<p>First Name: '.strtolower($firstname).'</p>';
            echo '<p>Last Name: ' .$lastname. '</p>';
            echo '<p>Email Address: ' .$email. '</p>';
        }
?>
</body>
</html>