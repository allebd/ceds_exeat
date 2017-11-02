<?php
	session_start();
	include 'php/connect.php';
	if(!isset($_SESSION['user'])){
		header('Location: index.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CUEA</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/homepage.css" rel="stylesheet">
</head>
<body>
	<div class="container" id="header1">
		<center>
			<header>
			<div class="row">
				<div class="col-md-12">
					<h3><p id="title"><img src="asset/images/cu.jpg" width="100px" height="100px"> Covenant University Exeat Application Form</p></h3>
				</div>
				<div class="col-md-12">
					<h5>
						<p id="user"><strong>
					<?php 
					echo $_SESSION['user']; 
					?></strong>, you're warmly welcome. 
						
					</p>
					</h5>
				</div>
				<div class="col-md-12">
					<a href="php/logout.php" class="btn btn-md btn-success">LOG OFF</a>
				</div>
			</div>

		</header>
		</center>
		
	</div>

			<center><hr></center>

	<div class="container">
		<legend>Enter every required info as appropriate as possible.</legend>
		<section>
			<div class="col-md-12">
				<form action="homepage.php" method="POST">

				<!-- personal details -->
					<div class="form-group" id="personalDetails">
						<div class="row">
						<div class="col-md-12"><h4><p class="heading">Personal Details</p></h4></div>
						</div>
						<div class="row">

							<div class="col-md-4">
								<input class="form-control" type="name" name="fname" placeholder="First Name" required>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="name" name="sname" placeholder="Surname" required>
							</div>
							<div class="col-md-4">
								<div class="form-check">
						      <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="Male" checked>Male
						      </label>
							    </div>
							    <div class="form-check">
							    <label class="form-check-label">
							        <input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="option2">
							        Female
							      </label>
							    </div>
							</div>
							
						</div>
					</div>

				<!-- student details -->
					<div class="form-group" id="studentsDetails">
						<div class="row">
							<div class="col-md-12"><h4><p class="heading">Student's Details</p></h4></div>
						</div>
						<div class="row">

							<div class="col-md-4">
								<input class="form-control" type="text" name="hall" placeholder="Hall" required>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="text" name="rmNo" placeholder="Room Number(e.g. A222)" required>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="text" name="matNo" placeholder="Matric Number" required>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="text" name="level" placeholder="Level" required>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="text" name="department" placeholder="Department" required>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="text" name="course" placeholder="Course" required>
							</div>
						</div>
					</div>
					<!-- Exeat details -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-12"><h4><p class="heading">Exeat Details</p></h4></div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<input class="form-control" type="text" name="dadsNo" placeholder="Parent or Gaurdian's Contact" required>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="text" name="Ocontact" placeholder="Optional Contact">
							</div>
							<div class="col-md-4">
								<input class="form-control" type="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<textarea class="form-control" id="exampleTextarea" rows="7" name = "reason" placeholder="REASON FOR EXEAT"></textarea>
							</div>
						    
						 </div>
						 <div class="row">
						 	<div class="col-md-4">
						 		<input class="form-control" type="text" name="dateGoing" placeholder="Date Leaving (e.g. dd/mm)" required>
						 	</div>
						 	<div class="col-md-4">
						 		<input class="form-control" type="text" name="timeLeaving" placeholder="Time Leaving (e.g. Morning or Afternoon)" required>
						 	</div>
						 	<div class="col-md-4">
						 		<input class="form-control" type="text" name="dateReturning" placeholder="Date Returning (e.g. sunday-25th of august-2022)" required>
						 	</div>
						 	<div class="col-md-4">
						 		<center><h6 id="typeofexeat">Type of Exeat</h6></center>
						 		<div class="form-check">
						      <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="exeatType" id="optionsRadios1" value="Day" checked>Day
						      </label>
							    </div>
							    <div class="form-check">
							    <label class="form-check-label">
							        <input type="radio" class="form-check-input" name="exeatType" id="optionsRadios2" value="Weekend">
							        CanaanLand
							      </label>
							    </div>
							    <div class="form-check">
							    <label class="form-check-label">
							        <input type="radio" class="form-check-input" name="exeatType" id="optionsRadios3" value="Home">
							       	Home
							      </label>
							    </div>
						 	</div>
						 </div>
					</div>
					<center><hr></center>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<h5>
									<b>
										<p id="user"> We know it's been tiring filling out this form. Don't worry, we'll reply your request as soon as we possibly can! Also, don't forget to check the supplied mail in this form for your exeat status.  kindly Submit your form, Thanks for the patience. <span class="glyphicon glyphicon-heart"></span>
										</p>
									</b>
									
								</h5>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="col-md-12">
							<!-- <button class="btn btn-lg btn-success btn-block" type="submit">
								Submit
							</button> -->



							<!-- MODAL -->
							<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>

								<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
								  <div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
									  <div class="modal-header">
										<h4 class="modal-title">Like What you've seen?</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									  </div>
									  <div class="modal-body">
										<p><b>Photography By: </b></p>
										<p><b>Website Designed By:</b> Group 3, App Development.<br><b>Led by: </b> Simileoluwa Aluko<br><b>twitter: </b> @SimiAluko<br>
										<b>facebook messenger:</b> @simileoluwa.aluko</p>
									  </div>
									  <div class="modal-footer">
										<a href="php/logout.php" class="btn btn-md btn-success">Logout</a>
									  </div>
									</div>

								  </div>
								</div>
					</div>
				</div>
				</form>
				
			</div>
			<?php
				if(isset($_POST['submit'])){
					$fname = $_POST['fname'];
					$sname = $_POST['sname'];
					$gender = $_POST['gender'];
					$hall = $_POST['hall'];
					$rmNo = $_POST['rmNo'];
					$matNo = $_POST['matNo'];
					$level = $_POST['level'];
					$department = $_POST['department'];
					$course = $_POST['course'];
					$dadsNo = $_POST['dadsNo'];
					$Ocontact = $_POST['Ocontact'];
					$email = $_POST['email'];
					$reason = $_POST['reason'];
					$dateGoing = $_POST['dateGoing'];
					$timeLeaving = $_POST['timeLeaving'];
					$dateReturning = $_POST['dateReturning'];
					$exeatType = $_POST['exeatType'];
					
					
					$sql = "INSERT INTO `exeatinfo` (`fname`,`sname`,`gender`,`hall`,`roomNo`,`mNumber`,`level`,`depart`,`course`,`Dcontact`,`Ocontact`,`email`,`reason`,`Dleaving`,`Tleaving`,`TReturning`,`ExeatType`,`status`) VALUES ('$fname','$sname','$gender','$hall','$rmNo','$matNo','$level','$department','$course','$dadsNo','$Ocontact','$email','$reason','$dateGoing','$timeLeaving','$dateReturning','$exeatType','pending')";
					
					$result = $conn->query($sql);



					if($result === TRUE){
						echo '<script type="text/javascript">alert("Your Request has been accepted, we will reply to you shortly.")</script>';
						
					}else{
                        echo '<script type="text/javascript">alert("Request not Sent. Error sending Request")</script>';
					}
				}
			?>
		</section>
		
	</div>



	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>