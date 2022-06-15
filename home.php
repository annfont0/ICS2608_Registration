<!-- When log in successful, it will display Welcome <1st Name><Last Name> & the email address below the name. There should be a LOG OUT BUTTON and it will redirected to the login/registration. -->

<DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">

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
        
        session_start();

        // echo $_SESSION['username'];
       // echo $_SESSION['password'];
         //fetch data
         $uname = $_SESSION['username'];
         $password = $_SESSION['password'];
         $sql = "SELECT * FROM users WHERE username='$uname' AND password='$password'";
         $result = mysqli_query ($con, $sql);

         if(mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
             }            
         }  

        mysqli_close($con);

    ?>
    <div class = "container-fluid" id="welcome">
        <div class = "row h-100">
            <div class = "col-sm-4" id="image">
                <img src="images/hi.png" alt="hello" class="img-fluid float-right">
            </div>
            <div class = "col-sm-8" id="welcome_header">
                <div class="container" id="line">
                <h3>Welcome </h3> <h1 id="info"><?php echo $firstname . " " . $lastname; ?></h1><br>
                <h3>Your Email Address is </h3> <h1 id="info"><?php echo $email; ?></h1> <br> 
                </div>
                <div class="container">
                <br><a href="registration.php"><button type = "button" class = "btn btn-lg" id="submit">Log Out</button></a>
                </div>
            </div>
        </div>
    </div>
    
</body>