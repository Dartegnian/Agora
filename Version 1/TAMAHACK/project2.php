<!DOCTYPE html>
<html>
<head>
	<title>Agora - House A Lot Project</title>
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
               window.location="registration.php";
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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Names');
        data.addColumn('number', 'Amountt');
        data.addRows([
         ['Materials & Supply', 1000000000],
          ['Labor', 1000040000],
          ['Security', 250000000],
          ['Miscellaneous', 5125000]
        ]);
        var options = {'title':'Leni Project Budget Breakdown in Phillipine Peso (PHP)',
                       'width':900,
                       'height':500};
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
	<header id="mproj2">
		<h1 class="slogan"><span class="rotate">GOBYERNONG PROYEKTO, PARA SA PILIPINO, PARA SA PANGKALAHATAN, AGORA</span></h1>
	</header>
	<div class="mainbody">
	<h1>House A Lot Project</h1>
		<div id="imagecontainer">
			<div id="image1container" class="images">
				<a href="Resources\Images\CArticle2.jpg" target='_blank'>
					<img src="Resources\Images\CArticle2.jpg"\>
				</a>
			</div>
		</div>
		<aside id="infospace">
			<p>With the increase of population here in the Philippines and with only few who are capable to cope up with the society, 
	people are running out of homes and jobs to go to.
	As a solution to this our Vice President Leni Robredo started a home building project. A 10k Acre of land in Surigao del Sur 
	was dedicated for all homeless Filipinos to live there and create their own society with 
	VP. Leni Robredo as their local President. Homeless People will be given a task to build houses until the whole 10k acre of land
	is filled up, as they build they also get to live in their own house,
	while the other houses are sold to people in the city</p>
			<br/>
			<div id="donutchart" style="width: 500px; height: 300px;"></div>
		</aside>
	</div>
	<div class="header2" id="maproj2">
		<div id="leftcontain">
			<h1>Mga Apektadong Lugar</h1>
			<p>- Surigao Del Sur</p>
			<p>- Bayugan City</p>
			<p>- Prosperidad</p>
			<p>- Butuan City</p>
			<p>- Cabadbaran City</p>
			<p>- Tandag</p>
			<p>- Hinatuan</p>
			<br/><br/>
			<button class="contactbutt" onclick="window.open('mailto:lenirobredo@vp.gov.ph?subject=GOVT. PROJECT DEVELOPMENT - ')">I-contact ang mga namamahala nito</button>
		</div>
	</div>
	<div class="mainbody">
	<h1>House A Lot Project</h1>
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