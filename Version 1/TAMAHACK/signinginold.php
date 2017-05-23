<html>
<head>
      <title>Signing In</title>
</head>
<body>
	<h1>Signing In</h1>
	<?php
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(strpos($username, "gov.ph")){
			echo "Welcome ".substr($username,0,-7).", you have logged in as a Government Official.\n";
	?>
	<a href="Govt_User.php?username=<?php echo $username ?>"><br/><br/>Continue</a>
	<?php
		}
		else {
			echo "Welcome ".$username.", you have logged in as a normal user.<br/><br/>";
	?>
	<a href="Normal_User.php?username=<?php echo $username ?>">Continue</a>
	<?php
		} 
	?>
</body>
</html>