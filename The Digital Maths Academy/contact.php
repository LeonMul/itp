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

if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['comment']=='')
{
Echo "Please return to the form and fill the empty field.";
}

else{
$sql="INSERT INTO queries(name,email,comment) VALUES('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['comment']."')";

	if (mysqli_query($conn, $sql)) {
 echo "<script>alert('Thank you for submitting your query, your details have been posted to our database and we shall be in contact shortly.'); location.href='contact.html';</script>";


	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>

