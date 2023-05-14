<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Input</title>
</head>
<body>
    <?php
        if( !isset($_POST['submit'])){
            echo '<form action="" method="post">';
            if($_GET['firstname'] != '')
                echo '<p>First Name: <input type="text" name="firstName" value="'.$_GET['firstname'].'"/></p>';
            else{
                if(isset($_REQUEST['fnameErr'])){
                    echo '<p>First Name: <input type="text" name="firstName"/></p>';
                    echo '<p><span style="color:#F00">First name cannot be blank!</span></p>';
                }else{
                    echo '<p>First Name: <input type="text" name="firstName"/></p>';
                }
            }

            if($_GET['lastname'] != '')
                echo '<p>Last Name: <input type="text" name="lastName" value="'.$_GET['lastname'].'"/></p>';
            else{
                if(isset($_REQUEST['lnameErr'])){
                    echo '<p>Last Name: <input type="text" name="lastName"/></p>';
                    echo '<p><span style="color:#F00">Last name cannot be blank!</span></p>';
                }else{
                    echo '<p>Last Name: <input type="text" name="lastName"/></p>';
                }
            }

            if($_GET['email'] != '')
                echo '<p>Email Address: <input type="text" name="email" value="'.$_GET['email'].'"/></p>';
            else{
                if(isset($_REQUEST['emailErr'])){
                    echo '<p>Email Address: <input type="text" name="email"/></p>';
                    echo '<p><span style="color:#F00">Email address cannot be blank!</span></p>';
                }else{
                    echo '<p>Email Address: <input type="text" name="email"/></p>';
                }
            }
            echo '<p><button type="submit" name="submit" value="submit">Submit</button></p>';
            echo '</form>';
        }
        elseif(isset($_POST['submit']))
        {
            $errString="";
            if (($firstname=$_REQUEST['firstName']) == '')
                $errString.="fnameErr=true&";
            if(($lastname=$_REQUEST['lastName']) == '')
                $errString.="lnameErr=true&";
            if(($email=$_REQUEST['email']) == '')
                $errString.="emailErr=true";
            if($errString != "")
                header("Location: https://ec2-3-145-186-165.us-east-2.compute.amazonaws.com/hw11/index.php?$errString&firstname=$_REQUEST[firstName]&lastname=$_REQUEST[lastName]&email=$_REQUEST[email]");
            echo "<h3>Data Recieved from Index.php</h3>";
            echo '<p>First Name: '.strtolower($firstname).'</p>';
            echo '<p>Last Name: ' .$lastname. '</p>';
            echo '<p>Email Address: ' .$email. '</p>';
        }
?>
</body>
</html>