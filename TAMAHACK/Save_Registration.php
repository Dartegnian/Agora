<html>
	<head>
		<title>Agora</title>
		<link rel="stylesheet" type="txt/css" href="style/style.css"/>
	</head>

	<body>
		<?php
			//echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

			// create short variable names
			$username = $_POST['username'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			$email = $_POST['email'];

			$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];	
			
			$outputstring = $username."\t".$password."\t".$email."\n";

			if(strpos($username, "gov.ph")){
				$fp = fopen("$DOCUMENT_ROOT/Agora/Gov_Accounts.txt", "at");
						if($password == $cpassword){
							fwrite($fp, $outputstring);
							?><a href="Agora_SignIn.html">Registration Successful</a><?php
						}
						else{
							?><a href="registration.php">Your password does not match.</a><?php
						}
				}
			else {
				$fp = fopen("$DOCUMENT_ROOT/Agora/User_Accounts.txt", "at");
						if($password == $cpassword){
							fwrite($fp, $outputstring);
							?><a href="Agora_SignIn.html">Registration Successful</a><?php
						}
						else{
							?><a href="registration.php">Your password does not match.</a><?php
						}
				} 
			?>
	<body>	
</html>