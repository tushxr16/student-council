<style>
	nav {
		height: 90px;
		transition: all 0.2s ease-in-out;
		font-family: 'Lato';
	}

	nav a {
		font-weight: 600;
		color: #444 !important;
		transition: all 0.2s ease-in-out;
	}

	nav a:hover {
		opacity:0.7;
	}

	.active a{
		color: #1ABC9C !important;
		font-weight: 700 !important;
	}

	.navbar-brand-img {
		width: 45px;
		transition: all 0.2s ease-in-out;
	}

	.dropdown-menu {
		background-color: #333;
		position: relative;
		left: -50px;
		transition: all 0.2s ease-in-out;
		border-top: solid 3px #1ABC9C;
		max-width: 300px;
	}

	.dropdown-menu a {
		transition: all 0.2s ease-in-out;
		padding: 10px;
		border-bottom: 1px solid #555;
	}

	.dropdown-menu a span {
		transition: all 0.2s ease-in-out;
		color: #aaa;
		word-wrap: break-word !important;
		display: block !important;
		white-space: normal;
	}

	.dropdown-menu a:hover {
		background-color: #222;
		color: #bbb;
	}

	.dropdown-menu a:hover span {
		margin-left: 2px;
		margin-right: -2px;
	}
	.nav-fill{
			display:block;
			transition:all 0.2s ease-in-out;
			height:0px;
		}
	@media (min-width:993px) {
		.dropdown:hover .dropdown-menu {
			margin-top: 0;
			display: block;
		}

		.dropdown-menu {
			width: 200px;
		}

		.navbar-collapse ul li {
			margin-left: 10px;
		}
		.nav-link-trans{
			color:white !important;
		}
		.active .a-trans{
		color: #ddd !important;
		font-weight: 700 !important;
	}
	}

	@media (max-width: 992px) {
		.navbar-collapse {
			position: fixed;
			top: 0px;
			left: 0;
			padding-left: 15px;
			padding-right: 15px;
			padding-bottom: 15px;
			padding-top: 15px;
			width: 75%;
			height: 100%;
			background-color: white;
			overflow-y: auto;
		}

		.navbar-collapse li:after {
			content: "";
			display: block;
			margin: 10px 0px;
			margin-left: -5px;
			width: 50%;
			border-bottom: 1px solid #ddd;
		}

		.navbar-collapse.collapsing {
			transform: translateX(-120%);
			transition: height 0s ease;
		}

		.navbar-collapse.show {
			transform: translateX(0);
			transition: transform 300ms ease-in-out;
		}

		.navbar-toggler.collapsed~.navbar-collapse {
			transition: transform 500ms ease-in-out;
		}

		.navbar-toggler {
			border: none !important;
			outline: none !important;
		}

	}
</style>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
	<a class="navbar-brand" href="<?php echo "$root_path"; ?>index.php">
		<img src="<?php echo $root_path; ?>assets/img/logo/logo_black.jpg" class="d-inline-block align-top navbar-brand-img" alt="">
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			
			<li class="nav-item <?php if ($active=="HOME") echo"active";?>">
				<a class="nav-link <?php if($trans==1) if($active=="HOME") echo"a-trans"; else echo"nav-link-trans"; ?>" href="<?php echo "$root_path"; ?>index.php">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if($trans==1) if($active=="CONSTITUTION") echo"a-trans"; else echo"nav-link-trans"; ?>" href="<?php echo "$root_path"; ?>download.php?q=constitution" target="_blank" rel="noopener noreferrer">CONSTITUTION</a>
			</li>
			<li class="nav-item <?php if ($active=="OFFICE BEARERS") echo"active";?>">
				<a class="nav-link <?php if($trans==1) if($active=="OFFICE BEARERS") echo"a-trans"; else echo"nav-link-trans"; ?>" href="<?php echo "$root_path"; ?>office-bearers.php?q=2021">OFFICE BEARERS</a>
			</li>
			<li class="nav-item dropdown <?php if ($active=="BOARDS") echo"active";?>">
				<a class="nav-link dropdown-toggle <?php if($trans==1) if($active=="BOARDS") echo"a-trans"; else echo"nav-link-trans"; ?>" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					BOARDS
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?php echo "$root_path"; ?>boards.php?q=boha"><span>Board of Hostel Affairs</span></a>
					<a class="dropdown-item" href="<?php echo "$root_path"; ?>boards.php?q=bosa"><span>Board of Sports Affairs</span></a>
					<a class="dropdown-item" href="<?php echo "$root_path"; ?>boards.php?q=bost"><span>Board of Science and Technology</span></a>
					<a class="dropdown-item" href="<?php echo "$root_path"; ?>boards.php?q=boca"><span>Board of Cultural Activities</span></a>
					<a class="dropdown-item" href="<?php echo "$root_path"; ?>boards.php?q=bola"><span>Board of Literary Activities</span></a>
					<a class="dropdown-item" href="<?php echo "$root_path"; ?>boards.php?q=boaa"><span>Board of Academic Affairs</span></a>
				</div>
			</li>
			<li class="nav-item <?php if ($active=="CALENDAR") echo"active";?>">
				<a class="nav-link <?php if($trans==1) if($active=="CALENDAR") echo"a-trans"; else echo"nav-link-trans"; ?>" href="<?php echo "$root_path"; ?>calendar.php">CALENDAR</a>
			</li>
			<li class="nav-item <?php if ($active=="FEEDBACK") echo"active";?>">
				<a class="nav-link <?php if($trans==1) if($active=="FEEDBACK") echo"a-trans"; else echo"nav-link-trans"; ?>" href="<?php echo "$root_path"; ?>feedback.php">FEEDBACK</a>
			</li>
			<!--
			<li class="nav-item <?php if ($active=="CONTACT") echo"active";?>">
				<a class="nav-link <?php if($trans==1) if($active=="CONTACT") echo"a-trans"; else echo"nav-link-trans"; ?>" href="<?php echo "$root_path"; ?>contact_us.php">CONTACT US</a>
			</li>
			-->
		</ul>
	</div>
</nav>
<div class="nav-fill"></div>