<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title><?php echo $pageTitle; ?></title>
		<link rel="shortcut icon" href="images/favicon_glider.ico">
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!-- links to external stylesheets -->
		<?php if(isset($_SESSION['stylesheet'])): // Fetch custom stylesheet from session, if specified?> 
			<link type="text/css" rel="stylesheet" href="stylesheets/<?php echo $_SESSION['stylesheet']; ?>">   
		<?php else: ?>
			<link type="text/css" rel="stylesheet" href="stylesheets/stylesheet.css" title="General stylesheet"> 
			<link type="text/css" rel="alternate stylesheet" href="stylesheets/old_stylesheet.css" title="Ye olde stylesheet">
		<?php endif; ?>
		

		<!-- PHP conditional that adds a page-defined stylesheet if defined -->
		<?php if(isset($pageStyle)) : ?>
			<style type="text/css">
				<?php echo $pageStyle; ?> <!-- Print style data -->
			</style>
		<?php endif; ?>
	</head>
	
	<!-- Body id dependant on selected page -->
	<body <?php if(isset($pageId)) echo " id='$pageId' "; ?>>
	
		<!-- Above header -->
		<header id="above-header" class="scale banner-width page-header">		   
		  <!-- login & logout menu -->
		  <?php echo userLoginMenu(); ?>
		  <!-- Related links -->
		  <nav class="related">
			<a href="../kmom01/me.php">kmom01</a>
			<a href="../kmom02/me.php">kmom02</a>
			<a href="../kmom03/me.php">kmom03</a>
			<a href="../kmom04/me.php">kmom04</a>
			<a href="../kmom05/me.php">kmom05</a>
			<a href="me.php">kmom06</a>
		  </nav>
		</header>
		
		<!-- Header -->
		<header id="main-header" class="scale banner-width main-header-height page-header">
			<div id="banner" class="scale banner-width main-header-height" >
			</div>
			<!-- wrapper needed to center-->
			<div class="scale">
				<div class="scale" id="header-overlay">
					<img id="logo" src="images/logo.png" alt="htmlphp logo" width=318 height=97>
					<!-- Navigation bar -->
					<nav class="navmenu">
						<a id="me-" 	href="me.php">Me</a>
						<a id="report-" href="report.php">Report</a>
						<a id="php-" 	href="test.php">PHP</a>
						<a id="ebaj-" 	href="eBaj2.php">eBaj</a>
						<a id="style-" 	href="style.php">Style</a>
						<a id="source-" href="viewsource.php">Source</a>
					</nav>	
				</div>
			</div>
		</header>

