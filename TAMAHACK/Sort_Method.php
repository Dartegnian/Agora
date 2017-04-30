<html>
<head>
      <title>Agora</title>
	  <link rel="stylesheet" type="text/css" href="agora.css">
</head>
<body>
		<?php 
		$username = $_GET['username'];
		echo "Hello ".$username."!!!";?>
	<form action="Display_Proposals.php?username=<?php echo $username ?>" method="post">
	<div id="heading"><h1>Agora</h1></div>
	<div id="sub-heading"><h3>Project Proposals</h3></div>
	<div id="messagebox">
	<br />
	<div id="howsort_label"><h6>How would you like the projects to be sorted?</h6></div>
	<div id="howsort_select">
			<select name="sortmethod">
				<option value="0">Title</option>
				<option value="1">Agent</option>
				<option value="2">Location</option>
				<option value="4">Time Duration</option>
				<option value="5">Government Department</option>
			</select>
	</div>
	<div id="submit2"><input type="submit" value="Submit" /></div>
	<div id="reset2"></div>
	</form>
</body>
</html>
