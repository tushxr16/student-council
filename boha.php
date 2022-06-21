<?php $root_path = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Hostel | SC IIT Ropar</title>

	<?php include($root_path . 'assets/include/header-files.php'); ?>

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
		<header id="home" style="height:100%;padding-bottom:50px" class="row">
			<div class="container">
				<div class="row">
					<div class="section-header text-center">
						<h1 style="margin:20px" class="title">BOHA</h1>
					</div>
				</div>
				<div class="row justify-content-md-center">

					<!-- home content -->
					<div class="col-md-7">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="assets/img/boha/img_1.jpg">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="assets/img/boha/img_2.jpg">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="assets/img/boha/img_3.jpg">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="assets/img/boha/img_4.jpg">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="assets/img/boha/img_5.jpg">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="assets/img/boha/img_6.jpg">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<div class="section-header text-center">
								<h2 style="margin-top:20px" class="title">Mission</h2>
							</div>

							<p class="black-text" style="text-align:justify">In every IIT it is mandatory for each and every student to live in the campus premises itself in order to promote self-dependency and bonhomie. And to fulfil that, every IIT has hostels for students. For ensuring that the hostels are maintained properly and students are comfortable , a hostel secretary is elected.

								Under hostel secretary, there are hostel representatives for each hostel who are responsible for the maintainence of their hostel . Every year, there are competitions among hostel on different festivals like hostel decoration, samagam etc to promote unity,teamwork and competetive spirit among the hostelers.
							</p>
							<!-- <button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button> -->
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>

		</header>
		<!-- /Header -->

		<!-- Blog -->
		<div id="hostels" class="section row sm-padding">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row justify-content-md-center">
					<div class="col-md-10 col-md-offset-1">
						<div class="section-header text-center">
							<h2 style="margin-top:20px" class="title">Hostels</h2>
						</div>

						<p class="black-text" style="text-align:justify">
							The Institute campus houses 8 hostels: Satlej, Beas, Sindhu, Mercury, Jupiter, Neptune Hostels for boys and Ravi, Venus Hostels for girls. The hostels are well equipped for comfortable lodging and boarding of students. All hostels are provided with water coolers and RO systems. Each hostel has a common room that provides facilities for indoor recreation and games. The hostel complex also includes shops that cater to the basic needs of the residents, and also a few washing machine facility.

							The day-to-day management of hostels is taken care of by a committee consisting of student representatives. Each hostel has a warden, who guides the students to manage the affairs of the hostels.
						</p>
						<!-- <button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button> -->
					</div>
					<div class="row justify-content-md-center" style="margin-bottom:20px;">
						<div class="col-md-4">
							<img class="img-responsive" src="assets/img/boha/hos_sutlej.jpg" alt="" style="width:100%;">
						</div>
						<div class="col-md-4">
							<img class="img-responsive" src="assets/img/boha/hos_ravi.jpg" alt="" style="width:100%;">
						</div>
					</div>
					<div class="row justify-content-md-center">
						<div class="col-md-4">
							<img class="img-responsive" src="assets/img/boha/hos_venus.jpg" alt="" style="width:100%;">
						</div>
						<div class="col-md-4">
							<img class="img-responsive" src="assets/img/boha/hos_mercury.jpg" alt="" style="width:100%;">
						</div>
					</div>
				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<div id="samagam" class="section row sm-padding bg-grey">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row justify-content-md-center">
					<div class="col-md-10 col-md-offset-1">
						<div class="section-header text-center">
							<h2 style="margin-top:20px" class="title">Samagam</h2>
						</div>

						<p class="black-text" style="text-align:justify">
							Samagam allows to foster and develop all student activities in the Institute. It aims at promoting and developing organizational abilities in students. It has been successful over the years in evolving a well-informed, articulate and participatory student community life. It has been instrumental in identifying student issues and promoting discussion on them.
						</p>
						<!-- <button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button> -->
					</div>

					<div class="col-md-4  work">
						<img class="img-responsive" src="assets/img/boha/s1.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>
					<div class="col-md-4  work">
						<img class="img-responsive" src="assets/img/boha/s2.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>
					<div class="col-md-4  work">
						<img class="img-responsive" src="assets/img/boha/s3.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>
					<div class="col-md-4  work">
						<img class="img-responsive" src="assets/img/boha/s4.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>
					<div class="col-md-4  work">
						<img class="img-responsive" src="assets/img/boha/s5.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>
					<div class="col-md-4  work">
						<img class="img-responsive" src="assets/img/boha/s6.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>

				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<!-- /Blog -->

		<div id="mess" class="section row sm-padding bg-grey">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row justify-content-md-center">
					<div class="col-md-10 col-md-offset-1">
						<div class="section-header text-center">
							<h2 style="margin-top:20px" class="title">Mess</h2>
						</div>

						<p class="black-text" style="text-align:justify">
							The mess has a spacious and air-conditioned dinning room, a well-equipped and hygienically maintained kitchen, a cold storage room for perishable items and a storeroom for other items. The menu has popular dishes from different regions of the country in order to serve the needs of the hostel's mixed population.


						</p>
						<!-- <button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button> -->
					</div>

					<div class="col-md-5  work">
						<img class="img-responsive" src="assets/img/boha/mess_1.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>
					<div class="col-md-5  work">
						<img class="img-responsive" src="assets/img/boha/mess_2.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>
					<div class="col-md-5  work">
						<img class="img-responsive" src="assets/img/boha/mess_3.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>
					<div class="col-md-5  work">
						<img class="img-responsive" src="assets/img/boha/mess_4.jpg" alt="" style="width:100%; margin:10% 0;">
					</div>

				</div>

			</div>

		</div>


		<div id="constitutional_bodies" class="section row sm-padding">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row justify-content-md-center">
					<div class="col-md-10 col-md-offset-1">
						<div class="section-header text-center">
							<h2 style="margin-top:20px" class="title">Constitutional Bodies</h2>
						</div>

						<p class="black-text" style="text-align:justify">
							The section presents the Organisation of the Bodies supporting each member of the Executive Council.<br>
							All the constitutional bodies shall meet atleast once every month pertaining issues and
							new proposals for the welfare of the Students.
						</p>

						<h3>The Council Works as under:</h3>
						<ul class="black-text" style="text-align:justify">
							<li><b>1. Members:</b>
								<ul>
									<li>a. Chief Warden and Hostel Wardens, IIT Ropar (Advisory).</li>
									<li>b. Mess Secretary I</li>
									<li>c. Mess Secretary II</li>
									<li>d. Hostel representatives from each hostel.</li>
								</ul>
							</li>
							<li><b>2.</b> The committee shall assist the General Secretary BOHA in all matters related to the Mess.</li>
						</ul>
					</div>
				</div>
			</div>


		</div>

		<div id="executive_council" class="section row sm-padding bg-grey">

			<div class="container">

				<!-- Row -->
				<div class="row justify-content-md-center">
					<div class="col-md-10 col-md-offset-1">
						<div class="section-header text-center">
							<h2 style="margin-top:15px" class="title">Executive Council</h2>
						</div>


						<p class="black-text" style="text-align:justify;margin-bottom:20px;">
							The roles, responsibilities and duties of the elected Executive Council members of the Student Council are described in the sub-sections below.<br>
							The Executive Council shall meet atleast once every month pertaining issues and new proposals for the welfare of the Students.
						</p>


						<h3>Responsibilities:</h3>
						<ul class="black-text" style="text-align:justify">
							<li><b>1.</b> The General Secretary BOHA shall be responsible for the overall functioning of the Hostels, which shall include, but not limited to,<ul>
									<li><b>(a) </b> Hostel maintenance</li>
									<li><b>(b) </b>Mess management</li>
									<li><b>(c) </b>Misc. Hostel Activities</li>
								</ul>
							</li>
							<li><b>2.</b> He/she shall be supported by Presidents of each hostels and mess secretary (to selected at hostel level), for all matters related to hostels</li>
							<li><b>3.</b> He/she shall plan the budgetary requirements for the hostel in consultation with the hostel presidents and Mess Secretary and discuss it with the President who will forward it to the Chief Warden.</li>
							<li><b>4.</b> He/she shall seek advice from the Chief Warden on all matters related to the hostels.</li>
							<li><b>5.</b> He/she shall provide support to the institute on all matters related to the mess.</li>
							<li><b>6.</b> He/she shall work with the Faculty advisor, Mess Committee of the institute to liaison with external agencies regarding matters related to mess activities.</li>
							<li><b>7.</b> He/she shall present detailed account of all expenditure to the President for all expenditures related to hostels at the end of his term.</li>
						</ul>

					</div>
				</div>
			</div>

		</div>



	</div>
	<!-- Footer -->
	<?php include($root_path . 'assets/include/footer.php'); ?>

	<?php include($root_path . 'assets/include/footer-files.php'); ?>

</body>

</html>