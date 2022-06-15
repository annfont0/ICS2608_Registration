<!--Registration:
    1. Email Address >> Primary Key
    2. 1st Name
    3. Last Name
    4. Username
    5. Password >> must contain small letter, capital letter, number and special characters. Min. of 8 characters -->


<DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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

        //MySQL Connect: Create connection
        $con = mysqli_connect($servername, $username, $password, '');

        //Create database
        $sql = "CREATE DATABASE mydb";
        mysqli_query($con, $sql); 

        $con = mysqli_connect($servername, $username, $password, 'mydb');
        
        //Create table
        $sql = "CREATE TABLE users (
            email VARCHAR(100) NOT NULL PRIMARY KEY, 
            firstname VARCHAR(50) NOT NULL,
            lastname VARCHAR(50) NOT NULL,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(50) NOT NULL)";
        mysqli_query($con, $sql);

        mysqli_close($con);
    ?>

    <!--form-->
    <div class = "container-fluid" id="full">
        <div class="row h-100">
            <div class="col-md-5" id="left">
                <div class="left-container text-center">
                    <img src="images/writing.png" alt="sign up" class="mx-auto d-block img-fluid" id="image"> <br>
                    <h1>New Here?</h1>
                </div>  
            </div>
            <div class="col-md-7" id="right">                
                <div class="form-group text-center" id="formStyle">
                <form method="post" action="connect.php" id="form">
                    <h1><b>Sign Up</b></h1><br><br>

                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-lg" placeholder="First Name" name="firstname" id="firstname" required>
                            <div id="firstnameErr"></div>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-lg" placeholder="Last Name" name="lastname" id="lastname" required>
                            <div id="lastnameErr"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <br><input type="email" class="form-control form-control-lg" placeholder="Email Address" name="email" id="email" required> 
                            <div id="emailErr"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <br><input type="text" class="form-control form-control-lg" placeholder="Username" name="uname" id="username" required>
                            <div id="usernameErr"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <br><input type="password" class="form-control form-control-lg" placeholder="Password" id="password" name="password" required> 
                            <div id="passwordErr"></div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <br><button type="submit" class="btn btn-block" id="submit" name="save" value="login">Sign Up</button>
                    </div>
                        <a href="login.php" id="text">Already a member?</a>
                    </div>
                </div>           
                </form>
                
            </div>
        </div> 
    </div>


</body>

</html>