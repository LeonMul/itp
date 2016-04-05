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

if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['message']=='' )
{
Echo "Cant send, missing content.";
}

else{
$sql="INSERT INTO users(name,email,message) VALUES('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['message']."')";

	if (mysqli_query($conn, $sql)) {
	    $last_id = mysqli_insert_id($conn);
	    echo "New record created successfully. Last inserted ID is: " . $last_id;
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>


<DOCTYPE html>
<html>
	<head>
		<title>The Digital Maths Academy</title>
			<meta name="viewport" content="width=device-width, initial scale=1">
			<link rel="stylesheet" href="css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="shortcut icon" href="images/icon1.ico"/>
	</head>
	
	<body class="">
		<div class=" container">
			<div class="row text-center">
			    <div class="col-md-3 text-center">
					 <h3>Question sent! We'll email you soon :)</h3>
					<a href ="Index.html" button class="btn submitButton squareBtn greenHoverBtn" href="home.html">Home</a>
                 </p>		
			</div>
		</div>
	</body>
</html>