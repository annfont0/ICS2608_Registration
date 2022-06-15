<!--Once registered, the webpage will ask user to sign in using username & password.-->

<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
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

    <div class = "container-fluid" id="full">
        <div class="row h-100">
            <div class="col-md-5" id="left">
                <div class="left-container text-center">
                    <img src = "images/funny.png" alt = "hello" class="mx-auto d-block img-fluid"> <br>
                    <h1>Have Fun</h1>
                </div>  
            </div>
            <div class="col-md-7" id="right">
                <form  method="post" action="security.php" class="needs-validation" id="form" novalidate>

                <div class="form-group text-center" id="login_form">
                    <h1><b>Sign In</b></h1> <br><br>

                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control form-control-lg" placeholder="Username" name="uname" id="username" required><br><br>
                            <div id="usernameErr"></div>
                        </div>
                        <div class="col-sm-12">
                            <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" id="password" required><br><br>
                            <div id="passwordErr"></div>
                        </div>
                    </div>  

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block" id="submit" name="login" value="login">Login</button>
                    </div>
                    <div class="text-center">
                        <a href="registration.php" id="text">Go back?</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    </body>

</html>
