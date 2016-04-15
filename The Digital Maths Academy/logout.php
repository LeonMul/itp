<?php

session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
//header("Location: Index.php");//use for the redirection to some page  
 echo "<script>alert('Thanks for dropping by, we hope to see you soon!'); location.href='Index.php';</script>";
?> 