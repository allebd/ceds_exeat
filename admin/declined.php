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
<script src="main.js"></script>

</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <!-- Logo -->
                    <div class="logo">
                        <h1><a href="index.html">RGERA Admin</a></h1>
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
                            <li><a href="#">Suspended: <?php 
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user_session']; ?><b class="caret"></b></a>
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
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                <!-- Main menu -->
                <li><a href="index.php"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                <li><a href="pending.php"><i class="glyphicon glyphicon-list"></i>Pending students</a></li>
                <li><a href="accepted.php"><i class="glyphicon glyphicon-list"></i>Accepted students</a></li>
                <li class="current"><a href="declined.php"><i class="glyphicon glyphicon-list"></i>Declined students</a></li>
            
            </ul>
                </div>
            </div>
            <div class="col-md-10">
                <h3>Declined Students<button class="btn btn-primary" id="refresh" onclick="refresh();" style="float:right;"><span class="glyphicon glyphicon-refresh"> </span>  Refresh Page</button></h3>
                <h5>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <?php 
    $sql = "SELECT * FROM `exeatinfo` WHERE `status`='declined'";
    $result = $conn->query($sql);
?>
                        <thead class="thead">
                        <tr>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Gender</th>
                        <th>Hall</th>
                        <th>Room Number</th>
                        <th>Matric Number</th>
                        <th>Level</th>
                        <th>Department</th>
                        <th>Course</th>
                        <th>Dad's Contact</th>
                        <th>Optional Contact</th>
                        <th>Email</th>
                        <th>Reason</th>
                        <th>Date Leaving</th>
                        <th>Time of the Day</th>
                        <th>Date Returning</th>
                        <th>Exeat Type</th>
                        <th>Status</th>
                    </tr>
                        </thead>
                        <?php 
                        $i=0;
    while($row=$result->fetch_array()):;
    $i++;
?>
                        <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[5] ?></td>
                        <td><?php echo $row[6] ?></td>
                        <td><?php echo $row[7] ?></td>
                        <td><?php echo $row[8] ?></td>
                        <td><?php echo $row[9] ?></td>
                        <td><?php echo $row[10] ?></td>
                        <td><?php echo $row[11] ?></td>
                        <td class="email"><?php echo $row[12] ?></td>
                        <td><?php echo $row[13] ?></td>
                        <td><?php echo $row[14] ?></td>
                        <td><?php echo $row[15] ?></td>
                        <td><?php echo $row[16] ?></td>
                        <td><?php echo $row[17] ?></td>
                        <td><button class="btn btn-success success" id="accept">Accept</button></td>
                    </tr>
                <?php endwhile; ?>
                    </table>
                    </div>
                </h5>
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