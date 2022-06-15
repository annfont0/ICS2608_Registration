<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    <link rel="stylesheet" href="mystyle.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php 
            $servername="localhost";
            $username="root";
            $password="";
            $dbname = "mydb";

            $con = mysqli_connect($servername, $username, $password, $dbname);



            $email = $_SESSION['email'];
            $uname = $_SESSION['username'];
            $query = "SELECT username, password FROM users WHERE email='$email' AND username='$uname'";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result); 

            if ($count>0) {
                header("location:login.php");
            } else {
                include "./registration.php"; 
                echo '<script type="text/Javascript">';
                echo 'alert("Sorry... email OR username already taken")';
                echo '</script>';
            }

        ?> 

</body>

</html>