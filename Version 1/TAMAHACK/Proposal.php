<html>
	<head>
		<title>Agora</title>
		<link rel="stylesheet" type="txt/css" href="style/style.css"/>
	</head>
	<body>
		<h1>Project Proposal</h1><br/><br/>
		<?php 
			$username = $_GET['username'];
			echo "Hello ".$username."!"
		?>
		<br/><br/>
		<h3>Fields with * are required</h3>	
		<form action="Save_Proposal.php" method="post">
		<input type="hidden" name="username" value="<?php echo $username;?>">
		<table border="0">
		<tr>
		<td>Project Title*</td>
		<td align="left"><input type="text" name="title" size="20" maxlength="20" /></td>
		</tr>
		<tr>
		<td>Name of Implementing Agent</td>
		<td align="left"><input type="text" name="agent" size="20" maxlength="20" /></td>
		</tr>
		<tr>
		<td>Project Location*</td>
		<td align="left"><input type="text" name="location" size="20" maxlength="20" /></td>
		</tr>
		<tr>
		<tr>
		<td>Short Description*</td>
		<td align="left"><input type="text" name="overview" size="50" maxlength="200" /></td>
		</tr>
		<tr>
		<td>Project Duration</td>
		<td align="left"><input type="text" name="duration" size="10" maxlength="20" /></td>
		</tr>
		<tr>
		<td>Relevant Government Department</td>
		<td align="left"><input type="text" name="dept" size="5" maxlength="20" /></td>
		</tr>
		<tr>
		<td colspan="2" align="center"><input type="submit" value="Submit Proposal" /></td>
		</tr>
		</table>
		</form>		
	<body>
</html>