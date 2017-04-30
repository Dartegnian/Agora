<html>
	<head>
		<title>Agora</title>
	</head>

	<body>
		<?php
			//echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

		$username = $_POST['username'];
		echo "Hello ".$username."!!!";
		
		
			// create short variable names
			$title = $_POST['title'];
			$agent = $_POST['agent'];
			$location = $_POST['location'];
			$overview = $_POST['overview'];
			$duration = $_POST['duration'];
			$dept = $_POST['dept'];
			

			$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];	
			
			$outputstring = $title."~".$agent."~".$location."~".$overview."~".$duration."~".$dept."\n";
			$fp = fopen("$DOCUMENT_ROOT/Agora/proposals.txt", "at");
			fwrite($fp, $outputstring);
			?>
	<h1>Your proposal has been sent successfully!</h1>
	<br/><br/><br/>
	<p>
	<a href="Sort_Method.php?username=<?php echo $username ?>">Display Approved Proposals</a>
	</p>
	<body>	
</html>