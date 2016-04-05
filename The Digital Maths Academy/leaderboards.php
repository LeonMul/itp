<?php

        $result = mysql_query("SELECT user, score FROM leaderboard ORDER BY score DESC");
        $rank = 1;

        if (mysql_num_rows($result)) {
            while ($row = mysql_fetch_assoc($result)) {
                echo "<td>{$rank}</td>
                      <td>{$row['user']}</td>
                      <td>{$row['score']}</td>";

                $rank++;
            }
        }
    ?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Digital Maths Academy </title>
			<meta name="viewport" content="width=device-width, initial scale=1">
			<link rel="stylesheet" href="css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/style.css" />
			<script src="js/slideshow.js"></script>			
 			<link rel="shortcut icon" href="images/icon1.ico"/>
		
			
		</head>
		<body>
	
			
			
																
																	
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
									<li><a href="Quiz.html">Quiz</a></li>
									<li><a href="Games.html">Games</a></li>
									<li><a href="contact.html">Contact</a></li>	
									<li><a href="Index.php">Loout</a></li> 

						</ul>
					</div>
				</div>
			</div>	
			
				<div class="jumbotron">
				<div class=" container">
					<div class=" row medPadding">
						<div class="col-md-12 text-center smlPadding"> 	
						<br/>
								<br/>
							
								<br/>
								<img src="images/welcomeTo.png">
						</div>							
								
								<br/>
								<br/>
								<br/>
								<br/>
								
								<br/>
						<div class="col-md-4 text-justify smlPadding"> 

						</div>										
					</div>
				</div>
			</div>



			<div class="container table-responsive">
				    <table class="table table-striped">
					  	  <thead>
					        <tr>
					            <th>Row</th>
					            <th>First Name</th>
					            <th>Last Name</th>
					            <th>Email</th>
					        </tr>
						  </thead>
						  <tbody>
					        <tr>
					            <td>1</td>
					            <td>John</td>
					            <td>Carter</td>
					            <td>johncarter@mail.com</td>
					        </tr>
					        <tr>
					            <td>2</td>
					            <td>Peter</td>
					            <td>Parker</td>
					            <td>peterparker@mail.com</td>
					        </tr>
					        <tr>
					            <td>3</td>
					            <td>John</td>
					            <td>Rambo</td>
					            <td>johnrambo@mail.com</td>
					        </tr>
					    </tbody>
				</table>
			</div>









<div class ="topFooter">
	                 <div class="container whiteText">
						<div class=" row medPadding">
							<div class="col-md-4 text-center"> 			
							<h4></h4>
							</div>
							<div class="col-md-1 text-center"> 			
								<a href ="Index.html" ><img class="footerIcon" src="images/logout2.png" /></a>
								<strong>Logout</strong>
							</div>	
							<div class="col-md-1 text-center"> 			
								<img class="footerIcon" src="images/Leaderboards2.png" />	
								<strong>Leaderboards</strong>
							</div>
							<div class="col-md-1 text-center"> 			
								<a href="Quiz.html"><img class="footerIcon" src="images/quiz2.png" /></a>
								<strong>Quiz</strong>
							</div>
							<div class="col-md-1 text-center"> 			
								<img class="footerIcon" src="images/map2.png" />
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