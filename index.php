<?php $root_path = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Student Council | IIT Ropar</title>

	<?php include($root_path . 'assets/include/header-files.php'); ?>

	<style>
		.index-back {
			height: 90vh;
			width: 100%;
			position: relative;
			top: -100px;
			margin-bottom: -100px;
		}
	</style>

	<style>
		.arrow {
			text-align: center;
			margin: 8% 0;
			position: absolute;
			bottom: 10px;
			width: 100%;
			cursor: pointer;
		}

		.bounce {
			-moz-animation: bounce 5s infinite;
			-webkit-animation: bounce 5s infinite;
			animation: bounce 6s infinite;
		}

		@keyframes bounce {

			0%,
			30%,
			70% {
				transform: translateY(0);
			}

			10%,
			40% {
				transform: translateY(30px);
			}

		}

		.main-head {
			display: block;
			position: absolute;
			top: 200px;
			width: 100%;
			text-align: center;
			font-family: 'Raleway';
			letter-spacing: 5px;
			font-size: 70px;
			color: rgba(255, 255, 255, 1);
			font-weight: 700;
		}

		@media (max-width: 992px) {
			.main-head {
				font-size: 40px;
				padding: 20px;
			}
		}
	</style>
	<style>
		.cont-head {
			font-size: 36px;
			font-family: 'Raleway';
			font-weight: 700;
			margin-bottom: 20px;
			letter-spacing: 2px;
		}

		.cont-desc {
			font-size: 20px;
			font-family: 'Source Sans Pro';
			line-height: 35px;
		}

		.sep {
			margin-top: 20px;
			height: 3px;
			width: 80px;
			display: block;
			background-color: #444;
		}

		@media (max-width: 992px) {
			.cont-head {
				font-size: 30px;
			}
		}
	</style>
	<style>
		.video-box {
			width: 97%;
			margin: auto;
			margin-bottom: 50px;
		}

		@media (max-width: 660px) {
			.video-box {
				width: 92%;
			}
		}

		.ach-img img {
			margin-top: 20px;
			width: 100%;
		}

		.ach-desc-head {
			margin-top: 10px;
			font-size: 24px;
			font-family: 'Righteous';
			color: #029275;
			width: 100%;
			text-align: center;
		}

		.ach-desc-desc {
			font-size: 16px;
			font-family: 'Baloo Tammudu 2';
			color: #333;
			width: 100%;
			text-align: center;
			padding: 20px;

		}

		@media (max-width: 660px) {
			.ach-desc-desc {
				border-bottom: 1px solid #aaa;
			}
		}
	</style>
</head>

<body style="background-color:#eee;">
	<!-- Navbar -->
	<?php
	$active = "HOME";
	$trans = 1;
	include($root_path . 'assets/include/navbar.php');
	?>

		<div class="parallax-window index-back" data-parallax="scroll" data-image-src="<?php echo $root_path; ?>assets/img/campus/index.jpg" data-android-fix="disable">
			<div class="main-head">
				STUDENT COUNCIL<BR>IIT ROPAR
			</div>
			<div class="arrow bounce">
				<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="35" viewBox="0 0 24 24" width="35" style="transform: rotateZ(90deg);">
					<g>
						<rect fill="none" height="24" width="24" />
					</g>
					<g>
						<g>
							<polygon fill="#fff" points="15.5,5 11,5 16,12 11,19 15.5,19 20.5,12" />
							<polygon fill="#fff" points="8.5,5 4,5 9,12 4,19 8.5,19 13.5,12" />
						</g>
					</g>
				</svg>
			</div>
		</div>



	<!-- Main Content -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-12 cont-head">
					MESSAGE FROM DEAN
					<div class="sep">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 order-md-1 dp">
					<div class="row">
						<img src="<?php echo $root_path; ?>assets/img/ppl/deansa.jpg?v=1">
					</div>
					<div class="row">
						<div class="name">
							Dr. SC Martha
						</div>
						<br>
						<div class="desig">
							Associate Dean Student Affairs
						</div>
					</div>
				</div>
				<div class="col-md-9 cont-desc">
					<br>
					What I understand the duty of student affairs (SA) is to create an environment to students to participate in various academic and non-academic activities, while judiciously ensuring discipline and security, for making them global "learned" leaders with utmost satisfaction on their understanding, knowledge and experience gained while staying at campus. I strongly believe that, our students have huge potential to become world leaders and SA team is working hard to ensure this happen !
				</div>
			</div>
			<br>
			<hr>
			<br>
			<div class="row">
				<div class="col-12 cont-head">
					ACHIEVEMENTS
					<div class="sep">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="video-box">
					<iframe width="100%" height="400px" src="https://www.youtube.com/embed/AVEozYc5Zm4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="ach-img">
						<img src="assets/img/achievements/the_asia.jpg">
					</div>
					<div class="ach-desc">
						<div class="ach-desc-head">
							THE ASIA Ranking
						</div>
						<div class="ach-desc-desc">
							Out of 350 ranked universities maximum is from Japan followed by China. India has 56 universities in the list with two in the top 50 - IISc Bangalore 36th and HOLD YOUR BREATH, IITRopar 47th.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ach-img">
						<img src="assets/img/achievements/the_young.jpg">
					</div>
					<div class="ach-desc">
						<div class="ach-desc-head">
							THE YOUNG Ranking
						</div>
						<div class="ach-desc-desc">
							IIT Ropar emerges as the Top Indian Institution in Times Young Univeristy Rankings 2020. It is ranked highest in the nation in Young University Rankings 2020. It is among top 70 young universities with 62nd Rank in the world.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ach-img">
						<img src="assets/img/achievements/nirf.jpg">
					</div>
					<div class="ach-desc">
						<div class="ach-desc-head">
							NIRF Ranking
						</div>
						<div class="ach-desc-desc">
							Indian Institute of Technology, Ropar has been ranked 39th in the overall category and climbed to rank 25th in the Engineering category in the latest India Rankings 2020 by the National Institutional Ranking Framework (NIRF).
						</div>
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