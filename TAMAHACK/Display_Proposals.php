<html>
<head>
      <title>Agora</title>
	  <link rel="stylesheet" type="text/css" href="agora1.css"/>
</head>
<body>
	<?php
	$username = $_GET['username'];
	echo "Hello ".$username."!!!<br/>";
	
	function compare($x, $y) {
	// create short variable names
	$sortmethod = $_POST['sortmethod'];
		if ($x[$sortmethod] == $y[$sortmethod]) {
			return 0;
		} else if ($x[$sortmethod] < $y[$sortmethod]) {
			return -1;
		} else {
			return 1;
		}		
	}

// create short variable names
	
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];	
$proposals = file("$DOCUMENT_ROOT/Agora/Approved_Proposals.txt");
$number_of_proposals = count($proposals);

// echo $number_of_products;

for ($i=0;$i<$number_of_proposals;$i++) {
	$proposals_col = explode("~",$proposals[$i]);
	for ($j=0;$j<6;$j++) {
		$list[$i][$j] = $proposals_col[$j];
		}
	}
	

usort($list, 'compare');

	?>
	
	<div id="heading" style="position: absolute;top: 105px;left: 30px;"><h1>Agora</h1></div>
	<div id="sub-heading" style="position: absolute;top: 163px;left: 30px;"><h3>Approved Projects</h3></div>
	<div id="projtitle" style="position: absolute;top: 192px;left: 30px;"><h5>Title</h5></div>
	<div id="projagent" style="position: absolute;top: 192px;left: 235px;"><h5>Agent</h5></div>
	<div id="projloc" style="position: absolute;top: 192px;left: 440px;"><h5>Location</h5></div>
	<div id="projoverview" style="position: absolute;top: 192px;left: 645px;"><h5>Short Description</h5></div>
	<div id="projduration" style="position: absolute;top: 192px;left: 1145px;"><h5>Duration</h5></div>
	<div id="projdept" style="position: absolute;top: 192px;left: 1243px;"><h5>Department</h5></div>
	
<?php	
$widthpos = array(205,205,205,500,103,85);
$leftpos = array(30,235,440,645,1145,1243);

	
	for ($i=0;$i<$number_of_proposals;$i++) {
	$top = 217+25*$i;
	for ($j=0;$j<6;$j++) {
?>	
	<div style="width: <?php echo $widthpos[$j]?>px;
	height: 25px;
	border-left: 1px solid black;
	border-bottom: 1px solid black;
	<?php
	if ($j==5) {
		echo "border-right: 1px solid black;";
	}
	?>
	position: absolute;
	top: <?php echo $top?>px;
	left: <?php echo $leftpos[$j]?>px;"><p class="productdetail">
	<?php 
	echo $list[$i][$j]; 
	?></h5></div>
<?php
	}
	}
$top = 217+25*$i;
?>	

	<div id="backtosort" style="top: <?php echo $top?>px;">
	<a href="Sort_Method.php?username=<?php echo $username ?>">Sort another way</a> &nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="Govt_User.php?username=<?php echo $username ?>">Go Back to Main Page</a>
	</div>
</body>
</html>