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

if($_REQUEST['name']=='' || $_REQUEST['email']=='')
{
Echo "Please return to the form and fill the empty field.";
}

else{
$sql="INSERT INTO newsletter(name,email) VALUES('".$_REQUEST['name']."', '".$_REQUEST['email']."')";

	if (mysqli_query($conn, $sql)) {
	    echo "Thank you for signing up to our newsletter, your details have been posted to our database and you shall recieve emails in the coming weeks";


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
					 <h3>Please return to home page...</h3>
					<a href ="home.html" button class="btn greenHoverBtn roundBtn">Return to home</a>
                 </p>		
			</div>
		</div>
	</body>
</html>