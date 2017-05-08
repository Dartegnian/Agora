<!DOCTYPE html>
<html>
<head>
	<title>Agora - Modernizing LRT Project</title>
	<link rel="stylesheet" type="text/css" href="Resources/agoraproject.css">
	<link rel="icon" type="image/png" href="Resources/Images/logo.png">
	<meta name="viewport" content="width=device-width" />
	<script src='Resources/jquery.min.js'></script>
	<script src='Resources/textrotator.js'></script>
	<script type="text/javascript" src="Resources/loader.js"></script>
    <script type="text/javascript" src="Resources/chartcore.js"></script>
	<script>
		$(document).ready(function(){
			$(".slogan .rotate").textrotator({
				animation: "flipCube",
				speed: 2500
			});
		});
		function Redirect() {
               window.location="http://localhost/TAMAHACK/registration.php";
               //window.location="https://google.com";
               //window.location.replace("http://localhost/TAMAHACK/registration.php");

        }
	</script>
	<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Sad',     1],
          ['Anger',      1],
          ['Joy',  1],
          ['Disgust', 1],
          ['Fear',    1]
        ]);

        var options = {
          title: 'How People Feel About It',
          pieHole: 0.5,
        };
		var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
		
		function selectHandler() {
          var selectedItem = chart.getSelection()[0];
			  if (selectedItem) {
				var toppings = data.getValue(selectedItem.row, 1);
				toppings++;
				
          }
		  data.setValue(selectedItem.row, 1, toppings);
		  chart.draw(data, options);
        }
		google.visualization.events.addListener(chart, 'select', selectHandler);    
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Names');
        data.addColumn('number', 'Amountt');
        data.addRows([
         ['Materials & Supply', 234000000],
          ['Technology', 10103240000],
          ['Project Managment', 254200000],
          ['Miscellaneous', 5895000],
		  ['Labor', 12354825]
        ]);

        // Set chart options
        var options = {'title':'Modernizing LRT Project Budget Breakdown in Phillipine Peso (PHP)',
                       'width':900,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	<link rel="stylesheet" type="text/css" href="Resources/textrotator.css" />
</head>
<body>
	<div id="fullwidth" style="height: 50px;">
		<h1 style="display: inline;"><a href="http://localhost/TAMAHACK"><img id="logo" src="Resources\Images\agora.png"\></a></h1>
	</div>
	<header id="mproj3">
		<h1 class="slogan"><span class="rotate">GOBYERNONG PROYEKTO, PARA SA PILIPINO, PARA SA PANGKALAHATAN, AGORA</span></h1>
	</header>
	<div class="mainbody">
	<h1>Modernizing LRT Project</h1>
		<div id="imagecontainer">
			<div id="image1container" class="images">
				<a href="Resources\Images\CArticle3.jpg" target='_blank'>
					<img src="Resources\Images\CArticle3.jpg"\>
				</a>
			</div>
		</div>
		<aside id="infospace">
			<p>New trains are coming with a better integrated technology embedded with IONT. A modern train proposed by Sen. Manny Paquiao to start revolutionizing LRT.
	This project might give our beloved country a chance to technologically advance for at least 10 years ahead compare to the other countries. These trains shall revolutionize transportation, since
	it uses internet to somehow teleport humans from one destination to another. This Project was experimented with 10,000 FIlipinos with a perfect result and no side effects on our human body appeared, because of this
	the government was confident to approve Sen. Manny Pacquiao's project with flying colors. The project started January 24, 2016 and is expected to finish on year 2020. President Rodrigo Duterte gave full support to Sen.Pacquiao and even 
	recommended him to be the next president for year 2021 to take the throne and manage our beloved country, the Philippines.</p>
			<br/>
			<div id="donutchart" style="width: 500px; height: 300px;"></div>
		</aside>
	</div>
	<div class="header2" id="maproj3">
		<div id="leftcontain">
			<h1>Mga Apektadong Lugar</h1>
			<p>- Malibay City</p>
			<p>- Metropoint</p>
			<p>- Park Ave</p>
			<br/><br/>
			<button class="contactbutt" onclick="window.open('mailto:mannypacquiao@senate.gov.ph?subject=GOVT. PROJECT DEVELOPMENT - ')">I-contact ang mga namamahala nito</button>
		</div>
	</div>
	<div class="mainbody">
	<h1>Modern Train Modern Technology Modern Philippines</h1>
		<div id="chart_div"></div>
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