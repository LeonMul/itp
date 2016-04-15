<!DOCTYPE html>
	<html>
		<head>
			<title>Digital Maths Academy </title>
			<meta name="viewport" content="width=device-width, initial scale=1">
			<link rel="stylesheet" href="css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="shortcut icon" href="images/icon1.ico"/>
			
		</head>
		<body class="">
			
			
			
																
																	
			<div class="navbar-fixed-top navbar-default fixed customColourNavbar" id="home">
				<div class="container">
					<div class="navbar-brand">
						The Digital Maths Academy
					</div> 
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						Menu
					</button>
					<div class="collapse navbar-collapse navHeaderCollapse"> 
						<ul class="nav navbar-nav navbar-right navHover">
							<li><a href="home.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							
							<li class="dropdown">
						        <a class="dropdown-toggle customColourNavbar" data-toggle="dropdown" href="#">Activities
						        <span class="caret"></span></a>
						        <ul class="dropdown-menu customColourNavbar">
						        <li><a href="Quiz.html">Quiz</a></li>
						        <li><a href="leaderboards.php">Leaderboards</a></li> 
								<li><a href="Games.html">Games</a></li> 
						        </ul>
						    </li>
						    
							<li><a href="contact.html">Contact</a></li>												
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
			
				<div class=" row">
					<div class="col-md-12 text-center lrgPaddingTop"> 	
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.8382655543317!2d-6.2438445334783745!3d53.349046329908234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1455882696428" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				
				
				<div class="container">
					<div  class=" row lrgPadding">
						<div id="mapholder" class="col-md-12 text-center smlPadding"> 	
								<h3 id="demo">Click the button to get your position.</h3>
								<button onclick="getLocation()">Try It</button>
						</div>
					</div>
				</div>
				
				
				<div class="container">
					<div class=" row medPadding">
						<div class="col-md-12 text-center smlPadding"> 	
							<h2><strong>Top 3 Scoring Schools</strong></h2>	
						</div>							
	
					</div>
				</div>
				
				<div class ="mapSection">
					<div class="container">
						<div class=" row medPadding">
							<div class="col-md-4 text-center smlPadding"> 
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.8382655543317!2d-6.2438445334783745!3d53.349046329908234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1455882696428" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
							<h3><strong>School 1</strong></h3>						
							</div>
							
							<div class="col-md-4 text-center smlPadding"> 
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.8382655543317!2d-6.2438445334783745!3d53.349046329908234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1455882696428" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
							<h3><strong>School 2</strong></h3>								
							</div>		
							
							<div class="col-md-4 text-center smlPadding"> 
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.8382655543317!2d-6.2438445334783745!3d53.349046329908234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1455882696428" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
							<h3><strong>School 3</strong></h3>
							</div>							
							
						</div>
					</div>				
				</div>				
				
				

					
													

					<div class="container">
					<div class=" row medPadding">
						<div class="col-md-12 text-center smlPadding"> 	
							<h2><strong>View leaderboards in more detail in the leaderboard section!</strong></h2>
							</br>
							<h1>School Leaderboard!</h1>
							
							
				<?php
					$servername = "localhost";
					$username = "leonmul";
					$password = "";
					$dbname = "c9";
					
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
					    die("Connection failed: " . mysqli_connect_error());
					}
					
					$sql = "SELECT school FROM users LIMIT 0, 10 ";
					$result = mysqli_query($conn, $sql);
					
					
					echo "<div class='container'>
							<div class='col-md-2'></div>
							<table class='table-hover table-bordered myTable'>
							<tr>
							<th>Schools</th>
							</tr>";
						
					if (mysqli_num_rows($result) > 0) {
					     //output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					         echo "<tr>";
							
							  echo "<td>" . $row['school'] . "</td>";
							
							  echo "</tr>";
							
							  }
						
							echo "</div> </table>";
					} else {
				    echo "0 results";
					}
	
					mysqli_close($conn);
				?>
				
							</div>
							</br>
						</div>							
					</div>
				</div>			
				
				


				<div class ="topFooter">
	                 <div class="container whiteText">
						<div class=" row medPadding">
							<div class="col-md-4 text-center"> 			
							<h4></h4>
							</div>
							<div class="col-md-1 text-center"> 			
								<a href ="logout.php" ><img class="footerIcon" src="images/logout2.png" /></a>
								<strong>Logout</strong>
							</div>	
							<div class="col-md-1 text-center"> 			
								<a href ="leaderboards.php" ><img class="footerIcon" src="images/Leaderboards2.png" /></a>	
								<strong>Leaderboards</strong>
							</div>
							<div class="col-md-1 text-center"> 			
								<a href ="Quiz.html" ><img class="footerIcon" src="images/quiz2.png" /></a>
								<strong>Quiz</strong>
							</div>
							<div class="col-md-1 text-center"> 			
								<a href ="maps.php" ><img class="footerIcon" src="images/map2.png" /></a>
								<strong>Maps</strong>
							</div>							
							<div class="col-md-4 text-right"> 			
			
							</div>							
						</div>
					</div>
				</div>
				
				<div class="topFooter whiteText">
					<div class="container whiteText">
						<div class=" row smlPadding">
							<div class="col-md-2 text-center"> 			
								<h4></h4>
							</div>
								<div class="col-md-2 text-center"> 			
									<h4><strong>Educational Links</strong></h4>		
								</div>	
								<div class="col-md-2 text-center"> 			
									<h4><strong>About Us</strong></h4>		
								</div>
								<div class="col-md-2 text-center"> 			
									<h4><strong>Meet the Team</strong></h4>		
								</div>
								<div class="col-md-2 text-center"> 			
									<h4><strong>Terms of Service</strong></h4>		
								</div>								
							<div class="col-md-2 text-right"> 			
							</div>							
						</div>
					</div>
				</div>
				
                <div class="footer footerBackground whiteText">
					<div class=" row smlPadding">
						<div class="col-md-6 text-center"> 			
						<h4><strong>The Digital Maths Academy</strong></h4>
						</div>
						<div class="col-md-5 text-center"> 			
							<h4><strong>Copyright 2016 &copy;</strong></h4>		
						</div>	
						<div class="col-md-1 text-right"> 			
		
						</div>							
					</div>
				</div>
                		
                		
                		
            <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
			<script src="js/bootstrap.js"></script>	
			<script type="text/javascript" src="js/script.js"></script>	
  
		</body>
	</html>