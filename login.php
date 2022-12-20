<?php

include("Constant/constant.php");
$conn = mysqli_connect("localhost", "root", "");
$sql = mysqli_select_db($conn, "cardstore") or die(mysqli_connect_error());

if (isset($_POST['Log_in'])) {

$username = $_POST['username'];
$password = $_POST['pwd'];

$sql="SELECT * FROM Users WHERE username='$username' AND password_='$password'";

$res = mysqli_query($conn, $sql);

if($res==true)
{

    $row = mysqli_num_rows($res);
    if($row==1)
    {
        echo "Log-in sucessfull";
        header("location:Home.php? username=$username&pass=$password");
    }
    else
    {
        echo "Entered username and password is wrong";
        // $_SESSION['login-not'] = "Login unsucessfully ";
        header("location:" . SITEURL . 'Index.php');
    }
} 
else 
{
    // echo "Connection is not good";
}
}
// Log in end
?>