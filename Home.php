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

    <!-- Font-awosome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            /* background-color: black; */
        }

        body {
            overflow-x: hidden;
            /* background-color: black; */
        }

        .navigation-bar {
            margin-bottom: 0px;
            border-radius: 0px;
            color: white;
        }

        .bigcontaint {
            padding: 0px;
        }

        .sidebar {
            padding: 0px;
            margin: 0px;
            background-color: pink;
            width: 100%;
            /* min-height:50px; */
            height: auto;
        }

        .sidebar h1 {
            width: 50px;
            padding: 5px;
        }

        .col-8 {
            /* background-color: aqua; */
            float: left;
            width: 100%;
            height: auto;
        }

        .col-8 div {
            margin: 5px;
        }

        .container {
            display: none;
        }

        .col4::-webkit-scrollbar {
            width: 12px;
        }

        .col4::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        .col4::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }

        .icon {
            padding-right: 15px;
        }

        .color_chger {
            color: white;
            float: right;
            padding: 3px;
        }

        .user-detail {
            /* background-color: yellow; */
            height: 500px;
        }
        .bigc
        {
            padding: 1% 1%;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            height: auto;
        }
        .bigc .col4
        {
            margin:1% 5%;
            min-width:90%;
            height: 300px;
            overflow: auto;
        }
        .sm4
        {
            width: 100px;
            height: 30px;
            font-size: 20px;
        }
        .formcontain
        {
            width: 90%;
            margin: 1% 5%;
        }
    </style>
    <script>
        function form_show() {
            document.getElementById('submit').style.display = "block";
        }

        function form_hide() {
            document.getElementById('submit').style.display = "none";
        }

        function make_ratting(id) {
            console.log(id);
            document.getElementById(id).className = "fa fa-star";
        }

        function change_color(id, id2) {
            console.log(1);
            if (document.getElementById(id).className != "fa fa-circle-o") {
                document.getElementById(id).className = "fa fa-circle-o";
                document.getElementById(id2).style.color = "white";
                document.getElementById(id).style.color = "black";
                document.getElementById(id).style.float = "right";
                document.getElementById(id).style.padding = "3px";
            } else {
                document.getElementById(id).className = "fa fa-circle";
                document.getElementById(id2).style.color = "black";
                document.getElementById(id).style.color = "white";
                document.getElementById(id).style.float = "right";
                document.getElementById(id).style.padding = "3px";
            }
        }
    </script>
</head>

<body>

    <?php

    $conn = mysqli_connect("localhost", "root", "");
    $sql = mysqli_select_db($conn, "cardstore") or die(mysqli_connect_error());
    
    $username=$_GET['username'];
    $password=$_GET['pass'];
    ?>

    <!-- navigation bar using bootstrap start-->
    <nav class="navbar navbar-default container-fluid navigation-bar" id="nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Card Reminder</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <!-- <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php" id="button2"><span class="glyphicon glyphicon-log-in"></span>
                        LogOut</a></li>
                <li><a id="button1"><span class="glyphicon glyphicon-user"></span><?php echo $username; ?></a></li>
            </ul>
        </div>
    </nav>
    <!-- navigation bar using bootstrap end-->


    <div class="container-fluid bigcontaint">
        <div class="col-sm-4 sidebar">
        <div class="col-sm-4 sm4"><i class="fa fa-plus text-left icon" onclick="form_show()"></i></div>
            <form method="POST" >
                <label for="Choose Subject">Subject:</label>
                <select name="sub" id="sub">
                    <option>All subject</option>
                    <?php
                    $sql = "SELECT sub_name from $username";
                    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());

                    if ($res == true) {
                        $row = mysqli_num_rows($res);

                        if ($row > 0) {
                            while ($count = mysqli_fetch_assoc($res)) {
                                $sub_name = $count['sub_name'];
                    ?>
                                <option><?php echo $sub_name; ?></option>
                    <?php
                            }
                        } else {
                        }
                    } else {
                    }
                    ?>
                </select>
                <label for="Choose Topic">Topic:</label>
                <select name="topic" id="topic">
                    <option>All topics</option>
                    <?php
                    $sql = "SELECT topic_name from $username";
                    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());

                    if ($res == true) {
                        $row = mysqli_num_rows($res);

                        if ($row > 0) {
                            while ($count = mysqli_fetch_assoc($res)) {
                                $topic_name = $count['topic_name'];
                    ?>
                                <option><?php echo $topic_name; ?></option>
                    <?php
                            }
                        } else {
                        }
                    } else {
                    }
                    ?>
                </select>
                <label for="submit">
                    <input type="submit" name="filtter">
                </label>
            </form>
           
        </div>


        <div class="col-sm-8 col-8 container-fluid bigc">
            <!-- Subject form Start-->
            <div class="container formcontain" id="submit">
                <h1 class="text-right"><i class="fa fa-remove" onclick="form_hide()"></i></h1>
                <h1 class="text-center">Enter Your notes detail</h1><br><br>
                <form class="form-vertical container-fluid " action="" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sub_name">Subject name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sub_name" name="sub_name" placeholder="Enter Subject name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="chap_name">Chapter name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="chap_name" name="chap_name" placeholder="Enter Chapter name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="topic_name">Topic name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topic_name" name="topic_name" placeholder="Enter Topic name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="topic_detail">Toic description:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="topic_detail" name="topic_detail" placeholder="Enter Topic detail"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" name="submit">
                        </div>
                    </div>
                </form>
            </div>
            <?php

            if (isset($_POST['filtter'])) {
                $subject = $_POST['sub'];
                $topic = $_POST['topic'];

                if ($subject != 'All subject' and $topic != 'All topics') {
                    $sql = "SELECT * from $username WHERE sub_name='$subject' OR topic_name='$topic'";
                } else if ($topic == "All topics" and $subject != 'All subject') {
                    $sql = "SELECT * from $username WHERE sub_name='$subject'";
                } else {
                    $sql = "SELECT * from $username";
                }
            } else {
                $sql = "SELECT * from $username";
            }
            $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
            if ($res == true) {
                $row = mysqli_num_rows($res);

                $ids = ['a', 'b', 'c', 'd', 'e', 'f'];
                if ($row > 0) {

                    $n = 0;

                    while ($count = mysqli_fetch_assoc($res)) {
                        $id = $count['id'];
                        $sub_name = $count['sub_name'];
                        $chap_name = $count['chap_name'];
                        $topic_name = $count['topic_name'];
                        $topic_detail = $count['topic_detail'];
            ?>

            <div class="col-sm-4 col4" id="<?php echo $ids[$n]; ?>">
                            <i class="fa fa-star-o" onclick="make_ratting(id)" id="<?php echo $n; ?>1"></i>
                            <i class="fa fa-star-o" onclick="make_ratting(id)" id="<?php echo $n; ?>2"></i>
                            <i class="fa fa-star-o" onclick="make_ratting(id)" id="<?php echo $n; ?>3"></i>
                            <i class="fa fa-star-o" onclick="make_ratting(id)" id="<?php echo $n; ?>4"></i>
                            <i class="fa fa-star-o" onclick="make_ratting(id)" id="<?php echo $n; ?>5"></i>
                            <i class="fa fa-circle color_chger" onclick="change_color(id,'<?php echo $ids[$n]; ?>')" id="<?php echo $n; ?>"></i>

                            <h2><?php echo $sub_name; ?></h2>
                            <h3><?php echo $chap_name; ?></h2>
                                <sub><?php echo $topic_name; ?></sub>
                                <p><?php echo $topic_detail; ?></p>

            </div>
                        <script>
                            col_array = ["#7cffcb",
                                "#0cbaba",
                                "#a40606;",
                                "#a4508b;",
                                "#a40606;"
                            ];

                            img_array = ["linear-gradient(315deg, #7cffcb 0%, #74f2ce 74%)",
                                "linear-gradient(315deg, #0cbaba 0%, #380036 74%)",
                                "linear-gradient(315deg, #a40606 0%, #d98324 74%)",
                                "linear-gradient(326deg, #a4508b 0%, #5f0a87 74%)",
                                "linear-gradient(315deg, #a40606 0%, #d98324 74%)"
                            ];

                            document.getElementById("<?php echo $ids[$n]; ?>").style.backgroundColor = col_array[<?php echo $n; ?>]
                            document.getElementById("<?php echo $ids[$n]; ?>").style.backgroundImage = img_array[<?php echo $n; ?>]
                        </script>
            <?php

                        $n++;
                    }
                }
            }
            ?>
            <!-- Subject form End -->
        </div>
    </div>

</body>

</html>

<?php

include("Constant/constant.php");
$conn = mysqli_connect("localhost", "root", "");
$sql = mysqli_select_db($conn, "cardstore") or die(mysqli_connect_error());
if ($conn == true) {
    // echo "Connection establish";
}

if (isset($_POST['submit'])) {

    $sub_name = $_POST['sub_name'];
    $chap_name = $_POST['chap_name'];
    $topic_name = $_POST['topic_name'];
    $topic_detail = $_POST['topic_detail'];

    $sql = "INSERT INTO $username SET
    sub_name='$sub_name',
    chap_name='$chap_name',
    topic_name='$topic_name',
    topic_detail='$topic_detail'";


    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
    if ($res == true) {
        // echo "Record Inserted";
    } else {
        // echo "Record is not inserted";
    }
}
?>





