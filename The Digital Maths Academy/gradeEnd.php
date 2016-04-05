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
            $answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
            $answer16 = $_POST['question-16-answers'];
            $answer17 = $_POST['question-17-answers'];
            $answer18 = $_POST['question-18-answers'];
            $answer19 = $_POST['question-19-answers'];
            $answer20 = $_POST['question-20-answers'];
            /*$answer21 = $_POST['question-21-answers'];
            $answer22 = $_POST['question-22-answers'];
            $answer23 = $_POST['question-23-answers'];
            $answer24 = $_POST['question-24-answers'];
            $answer25 = $_POST['question-25-answers'];
            $answer26 = $_POST['question-26-answers'];
            $answer27 = $_POST['question-27-answers'];
            $answer28 = $_POST['question-28-answers'];
            $answer29 = $_POST['question-29-answers'];
            $answer30 = $_POST['question-30-answers'];
            $answer31 = $_POST['question-31-answers'];
            $answer32 = $_POST['question-32-answers'];
            $answer33 = $_POST['question-33-answers'];
            $answer34 = $_POST['question-34-answers'];
            $answer35 = $_POST['question-35-answers'];
            $answer36 = $_POST['question-36-answers'];
            $answer37 = $_POST['question-37-answers'];
            $answer38 = $_POST['question-38-answers'];
            $answer39 = $_POST['question-39-answers'];
            $answer40 = $_POST['question-40-answers']; */
        
            $totalCorrect = 0;
            
            if ($answer1 == "D") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "B") { $totalCorrect++; }
            if ($answer10 == "C") { $totalCorrect++; }
            if ($answer11 == "D") { $totalCorrect++; }
            if ($answer12 == "B") { $totalCorrect++; }
            if ($answer13 == "A") { $totalCorrect++; }
            if ($answer14 == "C") { $totalCorrect++; }
            if ($answer15 == "B") { $totalCorrect++; }
            if ($answer16 == "A") { $totalCorrect++; }
            if ($answer17 == "C") { $totalCorrect++; }
            if ($answer18 == "D") { $totalCorrect++; }
            if ($answer19 == "D") { $totalCorrect++; }
            if ($answer20 == "A") { $totalCorrect++; }
            /*if ($answer21 == "B") { $totalCorrect++; }
            if ($answer22 == "A") { $totalCorrect++; }
            if ($answer23 == "B") { $totalCorrect++; }
            if ($answer24 == "C") { $totalCorrect++; }
            if ($answer25 == "B") { $totalCorrect++; }
            if ($answer26 == "A") { $totalCorrect++; }
            if ($answer27 == "D") { $totalCorrect++; }
            if ($answer28 == "A") { $totalCorrect++; }
            if ($answer29 == "C") { $totalCorrect++; }
            if ($answer30 == "C") { $totalCorrect++; }
            if ($answer31 == "D") { $totalCorrect++; }
            if ($answer32 == "A") { $totalCorrect++; }
            if ($answer33 == "B") { $totalCorrect++; }
            if ($answer34 == "C") { $totalCorrect++; }
            if ($answer35 == "B") { $totalCorrect++; }
            if ($answer36 == "A") { $totalCorrect++; }
            if ($answer37 == "D") { $totalCorrect++; }
            if ($answer38 == "A") { $totalCorrect++; }
            if ($answer39 == "C") { $totalCorrect++; }
            if ($answer40 == "C") { $totalCorrect++; } */
            
            echo "<div id='results'>$totalCorrect / 20 correct</div>";
            
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