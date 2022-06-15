<!DOCTYPE html>
<html>
    <head>
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
            
            $uname = $_POST['uname'];
            $password = $_POST['password'];
            $query = "SELECT username, password FROM users WHERE username='$uname' AND password='$password'";
                $result = mysqli_query($con, $query);
                $count = mysqli_num_rows($result); 

            session_start();
            $_SESSION['username'] = $uname;
            $_SESSION['password'] = $password;

                    if ($count>0) {
                        header("location:home.php");
                    } else {
                        include "./login.php";
                        echo '<script type="text/Javascript">';
                        echo 'alert("Incorrect Username or Password")';
                        echo '</script>';
                    } 

        ?> 

</body>

</html>