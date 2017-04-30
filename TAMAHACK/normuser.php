<html>
	<head>
		<title>Agora</title>
		<link rel="stylesheet" type="txt/css" href="style/style.css"/>
	</head>

	<body>
		<h1>Normal User</h1>
	<a href="Agora_SignIn.html">Logout</a>		
		<br/><br/><br/>
		<?php 
		$username = $_GET['username'];
		echo "Hello ".$username."!!!";?>
		<br/><br/><br/>
		<a href="Proposal.php?username=<?php echo $username ?>">Create a Project Proposal</a>
		&nbsp &nbsp &nbsp &nbsp
		<a href="Sort_Method.php?username=<?php echo $username ?>">Display Approved Proposals</a>
	
	<body>
</html>