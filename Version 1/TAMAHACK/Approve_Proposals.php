<html>
	<head>
		<title>Agora</title>
		<link rel="stylesheet" type="txt/css" href="style/style.css"/>
	</head>

	<body>
		<?php
			$username = $_GET['username'];
			echo "Hello ".$username."!!!";
				$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
				$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];	
				$proposals = file("$DOCUMENT_ROOT/Agora/Proposals.txt");
				$number_of_proposals = count($proposals);
				$outputstring="";

				for ($i=0;$i<$number_of_proposals;$i++) {
					$proposals_col = explode("~",$proposals[$i]);
					for ($j=0;$j<6;$j++) {
						$list[$i][$j] = $proposals_col[$j];
						}
					}
				
				for ($x=0;$x<$number_of_proposals;$x++) {
					if(isset($_POST[$x])){
						for($y=0;$y<6;$y++){
							if ($y==5){
							$outputstring .= $list[$x][$y];							
							}else{
							$outputstring .= $list[$x][$y].'~';
							}
						}
						$fp = fopen("$DOCUMENT_ROOT/Agora/Approved_Proposals.txt", "at");
						fwrite($fp, $outputstring);
						$outputstring='';
					}
				}				
		?>
	<h1>Congratulations, you have successfully approved the chosen proposals.</h1>
	<br/><br/><br/>
	<p>
	<a href="Sort_Method.php?username=<?php echo $username ?>">Click here to view all approved proposals</a>
	</p>
	<body>	
</html>