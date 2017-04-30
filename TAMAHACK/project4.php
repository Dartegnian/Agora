<!DOCTYPE html>
<html>
<head>
	<title>Agora - Oil Refinery Project</title>
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
          ['Materials & Supply', 9000000000],
          ['Technology', 2000000000],
          ['Project Managment', 123663240],
          ['Miscellaneous', 2131440],
		  ['Labor', 2134569860]
        ]);

        // Set chart options
        var options = {'title':'Oil Refinery Budget Breakdown in Phillipine Peso (PHP)',
                       'width':900,
                       'height':800};

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
	<header id="mproj4">
		<h1 class="slogan"><span class="rotate">GOBYERNONG PROYEKTO, PARA SA PILIPINO, PARA SA PANGKALAHATAN, AGORA</span></h1>
	</header>
	<div class="mainbody">
	<h1>Oil Refinery Project</h1>
		<div id="imagecontainer">
			<div id="image1container" class="images">
				<a href="Resources\Images\CArticle4.jpg" target='_blank'>
					<img src="Resources\Images\CArticle4.jpg"\>
				</a>
			</div>
		</div>
		<aside id="infospace">
			<p>Oil reserves had finally been dug up in the South Philippine Sea, due to the broken relationship with China, the Philippines was forced to build its own oil refinery.
	The project was proposed by Sen. Bong Bong Marcos, in honor of his father he fought to deliver this project to be carried out in the name of former President Ferdinand Marcos.
	It will start on May 25, 2017 at Caloocan City. President Rodrigo Duterte gave full support to this proposal so that it may be done this year on November 21, 2017. The project was a rush, but in return
	it gave a lot of Filipinos a job and drastically gave Philippines a boost in its economy</p>
			<br/>
			<div id="donutchart" style="width: 500px; height: 300px;"></div>
		</aside>
	</div>
	<div class="header2" id="maproj4">
		<div id="leftcontain">
			<h1>Mga Apektadong Lugar</h1>
			<p>- Caloocan City</p>
			<p>- Novaliches City</p>
			<p>- Kaligayahan Village</p>
			<p>- General Luis St</p>
			<br/><br/>
			<button class="contactbutt" onclick="window.open('mailto:BongbongMarcos@Senate.gov.ph?subject=GOVT. PROJECT DEVELOPMENT - ')">I-contact ang mga namamahala nito</button>
		</div>
	</div>
	<div class="mainbody">
	<h1>Oil Refinery</h1>
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