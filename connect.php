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

            //get the post records
            $txtEmail = $_POST['email'];

            $txtFirstName = $_POST['firstname'];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$txtFirstName)) {
                echo include "./registration.php";
                echo '<script type="text/Javascript">';
                echo 'alert("Invalid First Name: Only letters and white space allowed")';
                echo '</script>';
            }

            $txtLastName = $_POST['lastname'];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$txtLastName)) {
                echo include "./registration.php";
                echo '<script type="text/Javascript">';
                echo 'alert("Invalid Last Name: Only letters and white space allowed")';
                echo '</script>';
            }

            $txtUsername = $_POST['uname'];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$txtUsername)) {
                echo include "./registration.php";
                echo '<script type="text/Javascript">';
                echo 'alert("Invalid Username: Only letters and white space allowed")';
                echo '</script>';
            }

            $txtPassword_input = $_POST['password'];
            if(!preg_match('@[A-Z]@', $txtPassword_input) || !preg_match('@[a-z]@', $txtPassword_input) || !preg_match('@[0-9]@', $txtPassword_input) || !preg_match('@[^\w]@', $txtPassword_input) || strlen($txtPassword_input) < 8) {
                echo include "./registration.php";
                echo '<script type="text/Javascript">';
                echo 'alert("Invalid Password: Must contain small & capital letter, number and special characters. Min. of 8 characters.")';
                echo '</script>';
            }

                $email = $_POST['email'];
                $username = $_POST['uname'];
                $query = "SELECT * FROM users WHERE email='$email' OR username='$username'";
                $result = mysqli_query($con, $query);

                if(mysqli_num_rows($result) > 0) {
                    $failed=1;
                    include "./registration.php"; 
                    echo '<script type="text/Javascript">';
                    echo 'alert("Sorry... email OR username already taken")';
                    echo '</script>';
                } else {
                    header("location:login.php");
                    $sql = "INSERT INTO users (email, firstname, lastname, username, password) values ('$txtEmail', '$txtFirstName', '$txtLastName', '$txtUsername', '$txtPassword_input')";
                    mysqli_query($con, $sql);
                }  
            
?>

</body>



</html>