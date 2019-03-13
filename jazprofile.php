<!DOCTYPE HTML>

<html>
	<head>
		<title>Jazbaat Home Page</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="css/5grid/viewport.js"></script><!--[if lt IE 9]><script src="css/5grid/ie.js"></script><![endif]--><link rel="stylesheet" href="css/5grid/responsive.css" /><!--/5grid-->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="5grid">
					<div class="12u-first">

						<!-- Logo -->
							<h1><a href="#">Jazbaat</a></h1>

						<!-- Nav -->
							<nav>
								<a href="homepage.html">Homepage</a>
							</nav>

					</div>
				</header>
				<div id="banner">
					<div class="5grid 5grid-alt">
						<div class="6u-first">

							<!-- Banner Copy -->
								<p>All about the props we have...</p>
								<p></p>

						</div>
						<div class="6u">

							<!-- Banner Image -->
								<a href="#" class="bordered-feature-image"><img src="jazbaat.jpg" height= "350px" width="100px" alt="" /></a>

						</div>
						<div class="5grid-clear"></div>
					</div>
				</div>
			</div>


		<!-- Features -->
		<div id="header-wrapper">
				<header id="header" class="5grid">
					<div class="12u-first">

						<!-- Logo -->
							<h1><a href="#">Own</a></h1>

					</div>
				</header>
		</div>

		<!-- Features -->
			<div id="features-wrapper">
				<div id="features">
					<div class="5grid">
						<div class="3u-first">

							<!-- Feature #1 -->
								<section>
									<a href="#" class="bordered-feature-image"><img src="harmonium.jpg" alt="" /></a>
									<h2>Harmonium</h2>
									<p>

									</p>
								</section>

						</div>

					</div>
				</div>
			</div>



		<div id="header-wrapper">
				<header id="header" class="5grid">
					<div class="12u-first">

						<!-- Logo -->
							<h1><a href="#">Other Props</a></h1>

					</div>
				</header>
		</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="5grid">
						<div class="4u-first">
							<!-- Box #1 -->
								<?php
								$link = mysql_connect('dbms.iiitdmj.ac.in', '2016013', '54d2d108') or die ("Unable to connect the server.");
								$db=mysql_select_db('2016013');
								if(!$db){ die("Unable to select database"); }
								$qry='SELECT Quantity FROM Props WHERE PNAme="Drums"';
								$results=mysql_query($qry);
								//$var = mysql_fetch_row($results);

								if (mysql_num_rows($results)==1)
								{
										$var = mysql_fetch_array($results);
										if($var['Quantity']==0)
									{
									echo '<section style = "opacity: 0.4;">
									<header>
										<h2>Drums</h2>
										<h3>Saaz-The Music Club</h3>
									</header>
									<a href="#" class="feature-image"><img src="drums.png" alt="" /></a>

									</section>';}
									else{
									echo '<section style = "opacity: 1.0;">
									<header>
										<h2>Drums</h2>
										<h3>Saaz-The Music Club</h3>
									</header>
									<a href="#" class="feature-image"><img src="drums.png" alt="" /></a>
									<p>
									<a href="jazdrumborrow.php" class="feature-image"><center>Borrow</center></a>
									</p>
									</section>';
									}
								}
								?>

						</div>

						<div class="4u">
							<!-- Box #2 -->
								<?php
								$link = mysql_connect('dbms.iiitdmj.ac.in', '2016013', '54d2d108') or die ("Unable to connect the server.");
								$db=mysql_select_db('2016013');
								if(!$db){ die("Unable to select database"); }
								$qry='SELECT Quantity FROM Props WHERE PNAme="Canvas"';
								$results=mysql_query($qry);
								//$var = mysql_fetch_row($results);

								if (mysql_num_rows($results)==1)
								{
										$var = mysql_fetch_array($results);
										if($var['Quantity']==0)
									{
									echo '<section style = "opacity: 0.4;">

									<header>
										<h2>Canvas</h2>
										<h3>Abhivyakti-The Art and Craft Club</h3>
									</header>
									<a href="#" class="feature-image"><img src="canvas.jpg" alt="" /></a>
									</section>';}
								else{
									echo '<section style = "opacity: 1.0;">
									<header>
										<h2>Canvas</h2>
										<h3>Abhivyakti-The Art and Craft Club</h3>
									</header>
									<a href="#" class="feature-image"><img src="canvas.jpg" alt="" /></a>
									<p>
									<a href="jazcanvasborrow.php" class="feature-image"><center>Borrow</center></a>
									</p>
								</section>';}}
								?>

						</div>


						<div class="4u">

							<!-- Box #3 -->
								<section>

								<?php
								$link = mysql_connect('dbms.iiitdmj.ac.in', '2016013', '54d2d108') or die ("Unable to connect the server.");
								$db=mysql_select_db('2016013');
								if(!$db){ die("Unable to select database"); }
									$qry='SELECT Quantity FROM Props WHERE PNAme="Speakers"';
									$results=mysql_query($qry);
								$results=mysql_query($qry);
								//$var = mysql_fetch_row($results);

								if (mysql_num_rows($results)==1)
								{
										$var = mysql_fetch_array($results);
										if($var['Quantity']==0)
									{
									echo '<section style = "opacity: 0.4;">
									<header>
										<h2>Speakers</h2>
										<h3>Aavartan-The Dance Club</h3>
									</header>
									<a href="#" class="feature-image"><img src="HTS.jpg" alt="" /></a>

								</section>';}
								else{
									echo '<section style = "opacity: 1.0;">
									<header>
										<h2>Speakers</h2>
										<h3>Aavartan-The Dance Club</h3>
									</header>
									<a href="#" class="feature-image"><img src="HTS.jpg" alt="" /></a>
									<p>
									<a href="jazHTSborrow.php" class="feature-image"><center>Borrow</center></a>
									</p>
								</section>';}}
								?>
						</div>
					</div>
				</div>
			</div>
		<p>Show availability:</p>
		<a href="6.php"><center>Show</center></a>


	</body>
</html>