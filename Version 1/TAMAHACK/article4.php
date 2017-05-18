<!DOCTYPE html>
<html>
<head>
	<title>Agora - Pahayagan ng Bayan</title>
	<link rel="stylesheet" type="text/css" href="Resources/agoraarticle.css">
	<link rel="icon" type="image/png" href="Resources/Images/logo.png">
	<meta name="viewport" content="width=device-width" />
	<script src='Resources/jquery.min.js'></script>
	<script src='Resources/textrotator.js'></script>
	<script>
		$(document).ready(function(){
			$(".slogan .rotate").textrotator({
				animation: "flipCube",
				speed: 2500
			});
		});
		function Redirect() {
               window.location="registration.php";
        }
	</script>
	<link rel="stylesheet" type="text/css" href="Resources/textrotator.css" />
</head>
<body>
	<div id="fullwidth" style="height: 50px;">
		<h1 style="display: inline;"><a href="http://localhost/TAMAHACK"><img id="logo" src="Resources\Images\agora.png"\></a></h1>
	</div>
	<header id="mproj6">
		<h1 class="slogan"><span class="rotate">GOBYERNONG PROYEKTO, PARA SA PILIPINO, PARA SA PANGKALAHATAN, AGORA</span></h1>
	</header>
	<div class="mainbody">
	<h1>Pahayagan ng Bayan</h1>
		<div id="imagecontainer">
			<div id="image1container" class="images">
				<a href="Resources\Images\Article4.jpg" target='_blank'>
					<img src="Resources\Images\Article4.jpg"\>
				</a>
			</div>
		</div>
		<aside id="infospace" style="min-height: 396px;">
			<p>The Pahayagan ng Bayan is public service announcement tool of the Agency where events, projects and activities of various national and local government units in Metro Manila as well as non-government or civic organizations. These are steel pylons, measuring 20 ft. high and 6 ft. wide, strategically-placed on different areas in Metro Manila. The advertisement of the events, printed on tarpaulins, are posted on the pylons for a maximum of three months. As of Dec. 1, 2016, there are 114 Pahayagan ng Bayan pylons on the stretch of EDSA, C-5, Roxas Blvd., NAIA Road, Ortigas, Marcos Highway, Magsaysay Blvd. and Quezon Avenue. The maintenance and supervision of the use of the Pahayagan ng Bayan is under the Public Information Office of the MMDA.</p>
		</aside>
	</div>
	<footer>
		<a href="Resources\Images\coatofarms.png" target='_blank'>
			<img src="Resources\Images\coatofarms.png"\>
		</a>
		<div class="footcontain">
			<h4>About GOV.PH</h4>
			<p>Learn more about the Philippine government, its structure, how government works, and the people behind it. </p>
			<ul>
			<li><a href="http://www.gov.ph">Official Gazette</a></li>
			<li><a href="http://data.gov.ph">Open Data Portal</a></li>
			<li><a href="http://www.gov.ph/feedback/idulog/">Send your feedback</a></li>
			</ul>
		</div>
		<div class="footcontain">
			<h4>Government Links</h4>
			<ul>
			<li><a href="http://president.gov.ph">The President</a></li>
			<li><a href="http://op-proper.gov.ph">Office of the President</a></li>
			<li><a href="http://ovp.gov.ph">Office of the Vice President</a></li>
			<li><a href="http://senate.gov.ph/">Senate of the Philippines</a></li>
			<li><a href="http://www.congress.gov.ph/">House of Representatives</a></li>
			<li><a href="http://sc.judiciary.gov.ph/">Supreme Court</a></li>
			<li><a href="http://ca.judiciary.gov.ph/">Court of Appeals</a></li>
			<li><a href="http://sb.judiciary.gov.ph/">Sandiganbayan</a></li>
			</ul>
		</div>
		<div class="footcontain">
			<h4>Other Government Links</h4>
			<ul>
			<li><a href="http://www.deped.gov.ph/">Department of Education</a></li>
			<li><a href="http://www.dfa.gov.ph/">Department of Foreign Affairs</a></li>
			<li><a href="http://www.doh.gov.ph/">Department of Health</a></li>
			<li><a href="http://www.doj.gov.ph/">Department of Justice</a></li>
			<li><a href="http://www.dost.gov.ph/">Department of Science and Technology</a></li>
			<li><a href="http://www.ched.gov.ph/">Commission on Higher Education</a></li>
			<li><a href="http://www.cfo.gov.ph/">Commission on Filipino Overseas</a></li>
			</ul>
		</div>
	</footer>
	<footer id="apcfooter">
		<center>Coded with <a href="Resources\Images\APC-Hymn.jpg">&#10084;</a> by the students of <a href="https://apc.edu.ph/" target='_blank'>Asia Pacific College</a></center>
	</footer>
</body>
</html>