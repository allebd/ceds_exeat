<?php 
  session_start();
  include 'php/connect.php';
  if(isset($_SESSION['user'])){
    header('Location: homepage.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CUEA</title>
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jscript.js"></script>
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <section id="loginForm" style="padding:20px">
      <strong><h1><center id="welcomeText">Hi there, we are here to make life easy for you. Apply for your exeat here.</center></h1></strong>
      <button class="btn btn-lg" id="login" data-toggle="collapse" data-target="#demo">Click Here to Login </button>
      
      <center>
      <div id="demo" class="collapse">
    
      <form id="form" action="index.php" method="POST">
      <container>
  <div class="form-row">
    <div class="col-md-12">
      <input type="text" id="one" class="form-control" placeholder="Username" name="username" required>
    </div>
    <div class="col-md-12">
      <input type="password" id="two" class="form-control" placeholder="Password" name="password" required>
    </div>
    <div class="col-md-12">
      <button type="submit" id="three" class="form-control btn btn-lg btn-success" placeholder="Password" name="submit">Submit</button>
    </div>
  </div>
  </container>
</form>


          </div>
   

    	</container>      
          </center>
          </section>
    <?php 
      if(isset($_POST['submit'])){
          $username = $_POST['username'];
          $password = $_POST['password'];

          $sql = "SELECT `usern` AND `passwrd` FROM `studentinfo` WHERE `usern`='$username' AND `passwrd`='$password'   ";
          $result = $conn->query($sql);
          $rowcount = mysqli_num_rows($result);

          if($rowcount>0){
            if ($username == 'admin') {
              $_SESSION['user'] = $username;
            header('Location: adminpage.php');
            }else{
            $_SESSION['user'] = $username;
            header('Location: homepage.php');}
          }else{
            echo '<script type="text/javascript">alert("Invalid username or password!")</script>';
          }
      }
    ?>

    <header id="header">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('asset/images/DSC_0057.JPG')">
            <div class="carousel-caption d-none d-md-block">
              <span id="carCaption">This is a description for the first slide.</span>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('asset/images/DSC_0113.JPG')">
            <div class="carousel-caption d-none d-md-block">
               <span id="carCaption">This is a description for the first slide.</span>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('asset/images/DSC_0114.JPG')">
            <div class="carousel-caption d-none d-md-block">
               <span id="carCaption">This is a description for the first slide.</span>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('asset/images/DSC_0293a.jpg')">
            <div class="carousel-caption d-none d-md-block">
               <span id="carCaption">This is a description for the first slide.</span>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('asset/images/DSC_0335.JPG')">
            <div class="carousel-caption d-none d-md-block">
               <span id="carCaption">This is a description for the first slide.</span>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('asset/images/DSC_0464a.jpg')">
            <div class="carousel-caption d-none d-md-block">
               <span id="carCaption">This is a description for the first slide.</span>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('asset/images/DSC_0294.JPG')">
            <div class="carousel-caption d-none d-md-block">
                <span id="carCaption">This is a description for the first slide.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
