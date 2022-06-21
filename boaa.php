<?php $root_path = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Academics | SC IIT Ropar</title>

	<?php include($root_path . 'assets/include/header-files.php'); ?>

	<style>
		.cal-select {
			margin-bottom: 20px;
			font-family: 'Roboto';
		}

		.cal-select .head {
			font-size: 20px;
			text-align: center;
			width: 100%;
			font-weight: 600;
			margin-bottom: 10px;
			font-family: 'Lato';
		}

		.cal-select .des {
			text-align: left;
			padding: 2px;
		}

		.cal-select .des label {
			width: 100%;
			font-size: 14px !important;
			padding-left: 22px;
			text-indent: -22px;
		}

		.btn {
			margin: 5px 10px;
		}
	</style>

</head>

<body>
	<!-- Navbar -->
	<?php
	$active = "BOARDS";
	$trans = 0;
	include($root_path . 'assets/include/navbar.php');
	?>

	<!-- Header -->

	<div class="container" style="margin-bottom:50px;">

		<header id="home" style="height:100%;padding-bottom:20px" class="row">
			<div class="container">
				<div class="row">
					<div class="section-header text-center">
						<h1 style="margin:20px" class="title">BOAA</h1>
					</div>
				</div>
			</div>
		</header>
		<div class="row cal-select" style="width:100%; text-align:center; margin:20px auto;">
			<div class="col-md">
				<div class="head">2020 Batch</div>
				<div class="head"><button type="submit" class="btn btn-primary btn-sm" onclick="calAll2020(this)" id="cal-all-20">Select All</button></div>
				<div class="des"><label><input type="checkbox" id="cal-2020-1" onchange="cal_update()">Chemical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2020-2" onchange="cal_update()">Civil</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2020-3" onchange="cal_update()">Computer Science</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2020-4" onchange="cal_update()">Electrical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2020-5" onchange="cal_update()">Mechanical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2020-6" onchange="cal_update()">Metallurgy</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2020-7" onchange="cal_update()">MNC</label></div>
			</div>
			<div class="col-md">
				<div class="head">2019 Batch</div>
				<div class="head"><button type="submit" class="btn btn-primary btn-sm" onclick="calAll2019(this)" id="cal-all-19">Select All</button></div>
				<div class="des"><label><input type="checkbox" id="cal-2019-1" onchange="cal_update()">Chemical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2019-2" onchange="cal_update()">Civil</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2019-3" onchange="cal_update()">Computer Science</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2019-4" onchange="cal_update()">Electrical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2019-5" onchange="cal_update()">Mechanical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2019-6" onchange="cal_update()">Mechanical Dual</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2019-7" onchange="cal_update()">Metallurgy</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2019-8" onchange="cal_update()">MNC</label></div>
			</div>
			<div class="col-md">
				<div class="head">2018 Batch</div>
				<div class="head"><button type="submit" class="btn btn-primary btn-sm" onclick="calAll2018(this)" id="cal-all-18">Select All</button></div>
				<div class="des"><label><input type="checkbox" id="cal-2018-1" onchange="cal_update()">Chemical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2018-2" onchange="cal_update()">Civil</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2018-3" onchange="cal_update()">Computer Science</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2018-4" onchange="cal_update()">Electrical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2018-5" onchange="cal_update()">Mechanical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2018-6" onchange="cal_update()">Mechanical Dual</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2018-7" onchange="cal_update()">Metallurgy</label></div>
			</div>
			<div class="col-md">
				<div class="head">2017 Batch</div>
				<div class="head"><button type="submit" class="btn btn-primary btn-sm" onclick="calAll2017(this)" id="cal-all-17">Select All</button></div>
				<div class="des"><label><input type="checkbox" id="cal-2017-1" onchange="cal_update()">Chemical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2017-2" onchange="cal_update()">Civil</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2017-3" onchange="cal_update()">Computer Science</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2017-4" onchange="cal_update()">Electrical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2017-5" onchange="cal_update()">Mechanical</label></div>
				<div class="des"><label><input type="checkbox" id="cal-2017-6" onchange="cal_update()">Mechanical Dual</label></div>
			</div>
			<div class="col-md">
				<div class="head">Other Calendars</div>
				<div class="des"><label><input type="checkbox" id="cal-o-1" onchange="cal_update()">Holidays</label></div>
				<div class="des"><label><input type="checkbox" id="cal-o-2" onchange="cal_update()">CDCRC Placement</label></div>
				<div class="des"><label><input type="checkbox" id="cal-o-3" onchange="cal_update()">CDCRC Internship</label></div>
				<div class="des"><label><input type="checkbox" id="cal-o-4" onchange="cal_update()">Other CDCRC Activities</label></div>
				<div class="des"><label><input type="checkbox" id="cal-o-5" onchange="cal_update()">IIT Ropar Academic Calendar</label></div>
			</div>
		</div>
		<div class="row" style="width:100%; text-align:center; margin:auto;">
			<div style="width:100%; text-align:center; margin:auto; font-size:50px; font-family:'Lato'; margin-bottom:100px; max-width:1000px;" id="cal-wrap">
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include($root_path . 'assets/include/footer.php'); ?>

	<?php include($root_path . 'assets/include/footer-files.php'); ?>

	<script>
		window.addEventListener("load", function() {
			var urlParams = new URLSearchParams(window.location.search);
			var q1 = urlParams.get('q');
			if (q1 != "" && q1 != null) {
				var q = q1.split(" ");
				for (var i = 0; i < q.length - 1; i++) {
					document.getElementById('cal-' + q[i]).checked = true;
				}
			} else {
				document.getElementById('cal-o-1').checked = true;
			}
			cal_update();
		});

		function calAll2020(e) {
			if (e.innerHTML == "Select All") {
				document.getElementById('cal-2020-1').checked = true;
				document.getElementById('cal-2020-2').checked = true;
				document.getElementById('cal-2020-3').checked = true;
				document.getElementById('cal-2020-4').checked = true;
				document.getElementById('cal-2020-5').checked = true;
				document.getElementById('cal-2020-6').checked = true;
				document.getElementById('cal-2020-7').checked = true;

				e.innerHTML = "Unselect All";
			} else {
				document.getElementById('cal-2020-1').checked = false;
				document.getElementById('cal-2020-2').checked = false;
				document.getElementById('cal-2020-3').checked = false;
				document.getElementById('cal-2020-4').checked = false;
				document.getElementById('cal-2020-5').checked = false;
				document.getElementById('cal-2020-6').checked = false;
				document.getElementById('cal-2020-7').checked = false;

				e.innerHTML = "Select All";
			}

			cal_update();
		}

		function calAll2019(e) {
			if (e.innerHTML == "Select All") {
				document.getElementById('cal-2019-1').checked = true;
				document.getElementById('cal-2019-2').checked = true;
				document.getElementById('cal-2019-3').checked = true;
				document.getElementById('cal-2019-4').checked = true;
				document.getElementById('cal-2019-5').checked = true;
				document.getElementById('cal-2019-6').checked = true;
				document.getElementById('cal-2019-7').checked = true;
				document.getElementById('cal-2019-8').checked = true;

				e.innerHTML = "Unselect All";
			} else {
				document.getElementById('cal-2019-1').checked = false;
				document.getElementById('cal-2019-2').checked = false;
				document.getElementById('cal-2019-3').checked = false;
				document.getElementById('cal-2019-4').checked = false;
				document.getElementById('cal-2019-5').checked = false;
				document.getElementById('cal-2019-6').checked = false;
				document.getElementById('cal-2019-7').checked = false;
				document.getElementById('cal-2019-8').checked = false;

				e.innerHTML = "Select All";
			}

			cal_update();
		}

		function calAll2018(e) {
			if (e.innerHTML == "Select All") {
				document.getElementById('cal-2018-1').checked = true;
				document.getElementById('cal-2018-2').checked = true;
				document.getElementById('cal-2018-3').checked = true;
				document.getElementById('cal-2018-4').checked = true;
				document.getElementById('cal-2018-5').checked = true;
				document.getElementById('cal-2018-6').checked = true;
				document.getElementById('cal-2018-7').checked = true;

				e.innerHTML = "Unselect All";
			} else {
				document.getElementById('cal-2018-1').checked = false;
				document.getElementById('cal-2018-2').checked = false;
				document.getElementById('cal-2018-3').checked = false;
				document.getElementById('cal-2018-4').checked = false;
				document.getElementById('cal-2018-5').checked = false;
				document.getElementById('cal-2018-6').checked = false;
				document.getElementById('cal-2018-7').checked = false;

				e.innerHTML = "Select All";
			}

			cal_update();
		}

		function calAll2017(e) {
			if (e.innerHTML == "Select All") {
				document.getElementById('cal-2017-1').checked = true;
				document.getElementById('cal-2017-2').checked = true;
				document.getElementById('cal-2017-3').checked = true;
				document.getElementById('cal-2017-4').checked = true;
				document.getElementById('cal-2017-5').checked = true;
				document.getElementById('cal-2017-6').checked = true;

				e.innerHTML = "Unselect All";
			} else {
				document.getElementById('cal-2017-1').checked = false;
				document.getElementById('cal-2017-2').checked = false;
				document.getElementById('cal-2017-3').checked = false;
				document.getElementById('cal-2017-4').checked = false;
				document.getElementById('cal-2017-5').checked = false;
				document.getElementById('cal-2017-6').checked = false;

				e.innerHTML = "Select All";
			}

			cal_update();
		}

		function cal_update() {
			var url = "";
			var cal = '<iframe src="https://calendar.google.com/calendar/embed?height=700&amp;wkst=1&amp;bgcolor=%23009688&amp;ctz=Asia%2FKolkata&amp;';

			//Other - Holidays
			if (document.getElementById('cal-o-1').checked) {
				cal += "src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += 'o-1%20';
			}
			//Other - CDCRC Placement
			if (document.getElementById('cal-o-2').checked) {
				cal += "src=Y19wOW1rdDNzcWc3bmsxYmYwcWhrOGw0YzI0a0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += 'o-2%20';
			}
			//Other - CDCRC Internship
			if (document.getElementById('cal-o-3').checked) {
				cal += "src=Y183amNqdHFzMjVvMDU4OGtxa2tsMnV0M2YxZ0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += 'o-3%20';
			}
			//Other - Other CDCRC Activities
			if (document.getElementById('cal-o-4').checked) {
				cal += "src=Y18wZjYydjg0NWpvNWcza2N0ZnBqNGR1N3BwY0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += 'o-4%20';
			}
			//Other - IIT Ropar Academic Calendar
			if (document.getElementById('cal-o-5').checked) {
				cal += "src=Y192dm9ldHVxbzJudDh1Y2dmM2ljbHQzdTVqNEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += 'o-5%20';
			}

			//Chemical 2020
			if (document.getElementById('cal-2020-1').checked) {
				cal += "src=Y18xOWNoYTJyMW81NG1qdDBqZzBzYjg0YzVrMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2020-1%20';
			}
			//Civil 2020
			if (document.getElementById('cal-2020-2').checked) {
				cal += "src=Y19xdnVsYTZyaWM2bXFhOGVrZzVuaTNxZTcwMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2020-2%20';
			}
			//CSE 2020
			if (document.getElementById('cal-2020-3').checked) {
				cal += "src=Y182c2M2Y2ppOWp0YjE1dmY4OGw5MzhsZ21nY0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2020-3%20';
			}
			//EE 2020
			if (document.getElementById('cal-2020-4').checked) {
				cal += "src=Y19tcmdqaGM5NzRzMTFoNGo4YXYyZ2hmcGg1MEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2020-4%20';
			}
			//ME 2020
			if (document.getElementById('cal-2020-5').checked) {
				cal += "src=Y19oNTFyYmI1amJ1MTg3N2RuaTd2Njl2c2lkMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2020-5%20';
			}
			//MET 2020
			if (document.getElementById('cal-2020-6').checked) {
				cal += "src=Y19sdW0xb2JtdjNranFmY3NqZG5kdW81MnQza0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2020-6%20';
			}
			//MNC 2020
			if (document.getElementById('cal-2020-7').checked) {
				cal += "src=Y19vODhqcnM3bWt1NzQ5OTc3MnM5Y280aHI4NEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2020-7%20';
			}

			//Chemical 2019
			if (document.getElementById('cal-2019-1').checked) {
				cal += "src=Y180ZWxrc2k4bTRpNWkzN3BqbWkxdTVxcjQ0a0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2019-1%20';
			}
			//Civil 2019
			if (document.getElementById('cal-2019-2').checked) {
				cal += "src=Y185YmVuaXFqc2JsY3Bncm5tbnAycmtkc2g1MEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2019-2%20';
			}
			//CSE 2019
			if (document.getElementById('cal-2019-3').checked) {
				cal += "src=Y192cjM0YXJkNnM2ZjZrYWpobG9zOHQ4Y2F2MEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2019-3%20';
			}
			//EE 2019
			if (document.getElementById('cal-2019-4').checked) {
				cal += "src=Y19mYWoydjRjc2o1ZWZtNnJuMXNiNGg5M3ZxOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2019-4%20';
			}
			//ME 2019
			if (document.getElementById('cal-2019-5').checked) {
				cal += "src=Y19uZzJwcW1nOGtuNTlzaWlhOGo0YnI5MWhoMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2019-5%20';
			}
			//ME Dual 2019
			if (document.getElementById('cal-2019-6').checked) {
				cal += "src=Y19samdnbzBoc2Z1ZGpiYTkyNWhlamRrYjJ0Y0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2019-6%20';
			}
			//MET 2019
			if (document.getElementById('cal-2019-7').checked) {
				cal += "src=Y190YWtjYTBqYWMybG4zczBhamlwdTJlYTdoa0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2019-7%20';
			}
			//MNC 2019
			if (document.getElementById('cal-2019-8').checked) {
				cal += "src=Y183Y2Jvc2YzcmhzNDd2b3VyZWRsbTlnY25vZ0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2019-8%20';
			}

			//Chemical 2018
			if (document.getElementById('cal-2018-1').checked) {
				cal += "src=Y184c2hjZzgycnUyamljYm0wOW02MGtpaTdzc0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2018-1%20';
			}
			//Civil 2018
			if (document.getElementById('cal-2018-2').checked) {
				cal += "src=Y19pb2U3bm5lcjcxYWs5ODMyMnBta2YxN2VkNEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2018-2%20';
			}
			//CSE 2018
			if (document.getElementById('cal-2018-3').checked) {
				cal += "src=Y19sam1nYmt0MzhwNDQzdmZvNzlyYjFlc3RmNEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2018-3%20';
			}
			//EE 2018
			if (document.getElementById('cal-2018-4').checked) {
				cal += "src=Y19vMTFvcDc1ZGxrYzBhZjQyYzBzMmJnazdoMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2018-4%20';
			}
			//ME 2018
			if (document.getElementById('cal-2018-5').checked) {
				cal += "src=Y19qbjBudDk1dm1tOTI1cDQ4azM1OGwzc2cwY0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2018-5%20';
			}
			//ME Dual 2018
			if (document.getElementById('cal-2018-6').checked) {
				cal += "src=Y19jcDFscnE3cmNxbTJwcnVhcmUxMWoxcTNuMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2018-6%20';
			}
			//MET 2018
			if (document.getElementById('cal-2018-7').checked) {
				cal += "src=Y192NmljNTRocHJvanA0ZGhwcDBldms2b3Y0NEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2018-7%20';
			}

			//Chemical 2017
			if (document.getElementById('cal-2017-1').checked) {
				cal += "src=Y181dTRldGwwOWZuYjU5MTZuc2w3M2IwcHNub0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2017-1%20';
			}
			//Civil 2017
			if (document.getElementById('cal-2017-2').checked) {
				cal += "src=Y19vYW5sbWF1ZDQycThkcHRqdXI1cjk5MXVta0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2017-2%20';
			}
			//CSE 2017
			if (document.getElementById('cal-2017-3').checked) {
				cal += "src=Y19pYmM0aDQ2aWQ1ZnNqcWF2aXI2ZjFxZmZua0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2017-3%20';
			}
			//EE 2017
			if (document.getElementById('cal-2017-4').checked) {
				cal += "src=Y19maWgxNWkzMWJzdTY5ZDZxZWg0dnBzaG1jc0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2017-4%20';
			}
			//ME 2017
			if (document.getElementById('cal-2017-5').checked) {
				cal += "src=Y19kbzVjZmRudWswY29wNWo2MGJpZWExZ2RhNEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2017-5%20';
			}
			//ME Dual 2017
			if (document.getElementById('cal-2017-6').checked) {
				cal += "src=Y19uZXZmNmtoM2Y2ZXM5MHAxcDc0M3AwcnE5OEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;";
				url += '2017-6%20';
			}

			cal += "color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;color=%23FFFFFF&amp;";
			cal += 'title=IIT%20Ropar%20Academic%20Calendar" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>';
			document.getElementById('cal-wrap').innerHTML = cal;

			if (document.getElementById('cal-2020-1').checked && document.getElementById('cal-2020-2').checked && document.getElementById('cal-2020-3').checked && document.getElementById('cal-2020-4').checked && document.getElementById('cal-2020-5').checked && document.getElementById('cal-2020-6').checked && document.getElementById('cal-2020-7').checked)
				document.getElementById('cal-all-20').innerHTML = "Unselect All";
			else
				document.getElementById('cal-all-20').innerHTML = "Select All";

			if (document.getElementById('cal-2019-1').checked && document.getElementById('cal-2019-2').checked && document.getElementById('cal-2019-3').checked && document.getElementById('cal-2019-4').checked && document.getElementById('cal-2019-5').checked && document.getElementById('cal-2019-6').checked && document.getElementById('cal-2019-7').checked && document.getElementById('cal-2019-8').checked)
				document.getElementById('cal-all-19').innerHTML = "Unselect All";
			else
				document.getElementById('cal-all-19').innerHTML = "Select All";

			if (document.getElementById('cal-2018-1').checked && document.getElementById('cal-2018-2').checked && document.getElementById('cal-2018-3').checked && document.getElementById('cal-2018-4').checked && document.getElementById('cal-2018-5').checked && document.getElementById('cal-2018-6').checked && document.getElementById('cal-2018-7').checked)
				document.getElementById('cal-all-18').innerHTML = "Unselect All";
			else
				document.getElementById('cal-all-18').innerHTML = "Select All";

			if (document.getElementById('cal-2017-1').checked && document.getElementById('cal-2017-2').checked && document.getElementById('cal-2017-3').checked && document.getElementById('cal-2017-4').checked && document.getElementById('cal-2017-5').checked && document.getElementById('cal-2017-6').checked)
				document.getElementById('cal-all-17').innerHTML = "Unselect All";
			else
				document.getElementById('cal-all-17').innerHTML = "Select All";

			var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?q=' + url;
			window.history.replaceState('', "", newurl);

			var urlParams = new URLSearchParams(window.location.search);
			var q = urlParams.get('q');
			console.log(q);
			if (q == "" || q == null) {
				document.getElementById('cal-o-1').checked = true;
				cal_update();
			}
		}
	</script>

</body>

</html>