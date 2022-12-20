<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        * {
            padding: 0;
            margin: 0;
            /* background-color: black; */
        }

        /* body {
            overflow: hidden;
        } */

        .navigation-bar {
            margin-bottom: 0px;
            border-radius: 0px;
            /* background-color: #eec0c6;
            background-image: linear-gradient(315deg, #eec0c6 0%, #e58c8a 74%); */
            color: white;
        }

        .container {
            margin-top: 40px;
        }

        .container blockquote footer {
            color: white
        }

        .btn-center {
            align-self: center;
            /* margin-left: %; */
        }

        .imgecontain {
            height: 700px;
            background-image: url("img/pexels-francesco-ungaro-673648.jpg");
            background-size: cover;
            background-position: right;
        }

        .container {
            background-color: rgb(231, 225, 219, 0.5);
            border-radius: 10px;
            padding: 20px;
        }

        #log_in {
            position: absolute;
            width: 70%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin-left: 0px;
            background-color: rgb(44, 44, 44, 0.6);
            border-radius: 0px;
            color: white;
            display: none;
        }

        #sign_up {
            position: absolute;
            width: 70%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin-left: 0px;
            background-color: rgba(26, 26, 26, 0.6);
            border-radius: 0px;
            color: white;
            display: none;
        }
    </style>

    <script>
        function sign_in() {

            document.getElementById("sign_up").style.display = "block";
            document.getElementById("nav").style.display = "none";
        }

        function log_in() {
            document.getElementById("log_in").style.display = "block";
            document.getElementById("nav").style.display = "none";
        }

        function close_form() {
            document.getElementById("sign_up").style.display = "none";
            document.getElementById("log_in").style.display = "none";
            document.getElementById("nav").style.display = "block";
        }
    </script>

</head>

<body>

    <!-- navigation bar using bootstrap start-->
    <nav class="navbar navbar-default container-fluid navigation-bar" id="nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Card Reminder</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a onclick="sign_in()" id="button1"><span class="glyphicon glyphicon-user"></span> Sign
                        Up</a></li>
                <li><a onclick="log_in()" id="button2"><span class="glyphicon glyphicon-log-in"></span>
                        Login</a></li>
            </ul>
        </div>
    </nav>
    <!-- navigation bar using bootstrap end-->

    <!-- Content body start -->
    <div class="container-fluid imgecontain" onclick="close_form()">
        <div class="container">
            <h1 class="text-center">Let's just flip the card</h1>
            <blockquote class="lead">
                Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more
                time
                <footer>Thomas A. Edison</footer>
            </blockquote>
            <p class=" text-center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem eius veniam asperiores atque quasi!
                Laborum animi voluptatem iusto placeat similique hic deleniti rerum ex nulla, porro expedita? Earum,
                sunt
                temporibus.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem eius veniam asperiores atque quasi!
                Laborum animi voluptatem iusto placeat similique hic deleniti rerum ex nulla, porro expedita? Earum,
                sunt
                temporibus.
            </p>
            <p class=" text-center">
                <button type="button" class="btn btn-success btn-center btn-lg" onclick="log_in()">To start login
                    first</button>
            </p>
        </div>

    </div>

    <!-- Content body end -->

    <!-- Sign Up Start-->
    <div class="container" id="sign_up">
        <h1 class="text-center">Sign Up</h1><br><br>
        <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="full_name">Full name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="usernameforsignup" name="username" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="emailforSignup" name="email" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwdfor_signup" name="pwd" placeholder="Enter password">
                </div>
            </div>
            <!-- <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
                </div>
              </div>
            </div> -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-default" name="Sign_up">
                </div>
            </div>
        </form>
    </div>
    <!-- Sign Up End -->

    <!-- Log in start -->
    <div class="container" id="log_in">
        <h1 class="text-center">Log in</h1><br><br>
        <form class="form-horizontal" method="POST" action="login.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
                </div>
            </div>
            <!-- <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
                </div>
              </div>
            </div> -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-default" name="Log_in">
                </div>
            </div>
        </form>
    </div>
    <!-- Log in end -->
</body>

<?php

include("Constant/constant.php");
$conn = mysqli_connect("localhost", "root", "");
$sql = mysqli_select_db($conn, "cardstore") or die(mysqli_connect_error());
if ($conn == true) {
    // echo "Connection establish";
}

// Sign up start
if (isset($_POST['Sign_up'])) {

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['pwd']);
    
    $sql = "CREATE TABLE $username (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        username VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        password_ INT(10)
        )";
    
    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());

    if($res==true)
    {
        echo "Table created";
    }
    else
    {
        echo "Table is not crated";
    }

    $sql="INSERT INTO Users SET
        full_name='$full_name',
        username='$username',
        email='$email',
        password_='$password'";

     
    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());

    if($res==true)
    {
        echo "data inserted";
    }
    else
    {
        echo "data is not inserted";
    }

}
else 
{
    // echo "Connection is not good";
}
// Sign up end

?>

</html>