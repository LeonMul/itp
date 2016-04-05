<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<title>Digital Maths Academy </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
			<meta name="viewport" content="width=device-width, initial scale=1">
			<link rel="stylesheet" href="css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/style.css" />
					
 			<link rel="shortcut icon" href="images/icon1.ico"/>
	
	<link rel="stylesheet" type="text/css" href="css/Quiz.css" />
</head>

<body>
	
			
			
			
	<div id="page-wrap">

		<h1>Quiz Results</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
        
            $totalCorrectAddition = 0;
            
            if ($answer1 == "C") { $totalCorrectAddition++; }
            if ($answer2 == "B") { $totalCorrectAddition++; }
            if ($answer3 == "A") { $totalCorrectAddition++; }
            if ($answer4 == "D") { $totalCorrectAddition++; }
            if ($answer5 == "B") { $totalCorrectAddition++; }
            if ($answer6 == "C") { $totalCorrectAddition++; }
            if ($answer7 == "B") { $totalCorrectAddition++; }
            if ($answer8 == "C") { $totalCorrectAddition++; }
            if ($answer9 == "D") { $totalCorrectAddition++; }
            if ($answer10 == "A") { $totalCorrectAddition++; }
            
            echo "<div id='results'>$totalCorrectAddition / 10 correct</div>";
            
        ?>
	
	</div>
	
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>