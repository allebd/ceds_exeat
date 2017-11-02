<?php 
session_start();
include 'connect.php';

if(isset($_SESSION['user_session'])){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>CUEA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="css/main.css">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../public_html/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="main.js"></script>

</head>

<body class="login-bg">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Logo -->
                    <div class="logo">
                        <h1><a href="index.html">CUEA Admin</a></h1>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="page-content container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-wrapper">
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="content-wrap">
                                <b><p id="heading" style="font-size:2.6em;font-weight:100;">Covenant University Exeat <br> Application</p></b>
                                <b><h3>Sign In</h3><b>
                                <hr>
                                <input class="form-control input-lg" type="text" placeholder="Username" name="username" required><br>
                                <input class="form-control input-lg" type="password" placeholder="Password" name="password" required>
                                 <div class="action"> 
                                    <button type="submit" name="login" class="btn btn-primary signup btn-lg">LOG IN</button>
                                 </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
      if(isset($_POST['login'])){
          $username = $_POST['username'];
          $password = $_POST['password'];

          $sql = "SELECT `username` AND `password` FROM `adminInfo` WHERE `username`='$username' AND `password`='$password'   ";
          $result = $conn->query($sql);
          $rowcount = mysqli_num_rows($result);

          if($rowcount>0){
              $_SESSION['user_session'] = $username;
            header('Location: index.php');
          }else{
            echo '<script type="text/javascript">alert("Invalid username or password!")</script>';
          }
      }
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>