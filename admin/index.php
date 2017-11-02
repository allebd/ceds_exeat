<?php 
session_start();
include 'connect.php';

if(!isset($_SESSION['user_session'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
<title>RGERA Admin</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link href="css/styles.css" rel="stylesheet">
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <!-- Logo -->
                    <div class="logo">
                        <h1><a href="#">CUEA Admin</a></h1>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dropdown" style="margin-top:10px;">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Notifications: <?php 
                            $sql1 = "SELECT * FROM `exeatinfo` WHERE `status`='pending'";
                            $result1 = $conn->query($sql1);
                            $number1 = mysqli_num_rows($result1);
                            echo $number1;
                            ?>
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Pending: <?php 
                            $sql1 = "SELECT * FROM `exeatinfo` WHERE `status`='pending'";
                            $result1 = $conn->query($sql1);
                            $number1 = mysqli_num_rows($result1);
                            echo $number1;
                            ?> </a></li>
                                <li><a href="#">Accepted: <?php 
                            $sql2 = "SELECT * FROM `exeatinfo` WHERE `status`='accepted'";
                            $result2 = $conn->query($sql2);
                            $number2 = mysqli_num_rows($result2);
                            echo $number2;
                            ?></a></li>
                                <li><a href="#">Declined: <?php 
                            $sql3 = "SELECT * FROM `exeatinfo` WHERE `status`='declined'";
                            $result3 = $conn->query($sql3);
                            $number3 = mysqli_num_rows($result3);
                            echo $number3;
                            ?></a></li>
                                
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="navbar navbar-inverse" role="banner">
                        <nav class="navbar-right" role="navigation">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user_session']; ?> <b class="caret"></b></a>
                                    <ul class="dropdown-menu animated fadeInUp">
                                        <!-- <li><a href="profile.html">Profile</a></li> -->
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content contents" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-2" id="sidenav">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                        <li><a href="pending.php"><i class="glyphicon glyphicon-list"></i>Pending students</a></li>
                        <li><a href="accepted.php"><i class="glyphicon glyphicon-list"></i>Accepted students</a></li>
                        <li><a href="declined.php"><i class="glyphicon glyphicon-list"></i>Declined students</a></li>
                    
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h3 style="font-weight:100">All Applied Students</h3>
                                    <hr>
                                </div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <!-- <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a> -->
                                </div>
                            </div>
                            <div class="panel-body">
                                <h4>Total number of Applied Students</h4>
                                <h1><?php 
                                $sql = "SELECT * FROM `exeatinfo`";
                                $result = $conn->query($sql);
                                $number = mysqli_num_rows($result);
                                echo $number;
   ?></h1>
                                <br><br>
                            </div>
                        </div>
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h3 style="font-weight:100">Pending Students</h3>
                                    <hr>
                                </div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <!-- <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a> -->
                                </div>
                            </div>
                            <div class="panel-body">
                                <h4>Total number of Pending Students</h4>
                                <h1><?php echo $number1?></h1>
                                <br><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content-box-header">
                                    <div class="panel-title">Accepted Students</div>

                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                        <!-- <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a> -->
                                    </div>
                                </div>
                                <div class="content-box-large box-with-header">
                                    <h4>Total number of Accepted Students</h4>
                                    <h1><?php echo $number2 ?></h1>
                                    <br /><br />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content-box-header">
                                    <div class="panel-title">Declined Students</div>

                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                        <!-- <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a> -->
                                    </div>
                                </div>
                                <div class="content-box-large box-with-header">
                                    <h4>Total number of Declined Students</h4>
                                    <h1><?php echo $number3?></h1>
                                    <br /><br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" style="position:fixed;bottom:0;left:0">
        <div class="container" id="footer">

            <div class="copy text-center">
                Copyright 2017 CUEDS App Development Group 4
            </div>

        </div>
</footer>

</body>

</html>