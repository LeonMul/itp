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
 		echo "<script>alert('Thank you for signing up to our newsletter, your details have been posted to our database and you shall recieve emails in the coming weeks'); location.href='home.php';</script>";


	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>

