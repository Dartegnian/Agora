<html>
	<head>
		<title>Agora</title>
		<link rel="stylesheet" type="txt/css" href="style/style.css"/>
	</head>

	<body>
		<h1>Government User</h1>		
		<a href="Agora_SignIn.html">Logout</a>		
		<br/><br/><br/>
		<?php 
			$username = $_GET['username'];
			echo "Hello ".substr($username,0,-7)."!!!";
		?>
		<br/><br/><br/>
		<a href="Proposal.php?username=<?php echo substr($username,0,-7) ?>">Create a Project Proposal</a>
		&nbsp &nbsp &nbsp &nbsp
		<a href="Sort_Method.php?username=<?php echo substr($username,0,-7) ?>">Display Approved Proposals</a>
		<br/><br/><br/>
		<a href="Proposal_List.php?username=<?php echo substr($username,0,-7) ?>">Review a Proposal for Approval</a>
	<body>
</html>