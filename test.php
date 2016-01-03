<?php 
include("include/config.php");
$pageTitle = "PHP tester";
$pageId = "php";
// Check url to see if page has been set
$page = null;
if(isset($_GET["page"]))
	$page = $_GET["page"];
// Set file var to the associated with the name
$file = "default.php";
$testDir="include/test/";
switch($page)
{
	case "kmom02-pagestyle":
		$pageTitle="Test kmom02: Ändra page style";
		$file="kmom02_pagestyle.php";
		break;
	case "kmom03-get":
		$pageTitle="Test kmom03: Visa &#36;_GET";
		$file="kmom03_get.php";
		break;
	case "kmom03-getform":
		$pageTitle="Test kmom03: Form med Get";
		$file="kmom03_getform.php";
		break;
	case "kmom03-postform":
		$pageTitle="Test kmom03: Form med Post";
		$file="kmom03_postform.php";
		break;
	case "kmom03-validate":
		$pageTitle="Test kmom03: Validering av inkommande";
		$file="kmom03_validate.php";
		break;
	case "kmom03-server":
		$pageTitle="Test kmom03: Visa &#36;_SERVER";
		$file="kmom03_server.php";
		break;
	case "kmom03-sessiondestroy":
		$pageTitle="Test kmom03: Förstör sessionen";
		$file="kmom03_sessiondestroy.php";
		destroySession();
		break;
	case "kmom03-session":
		$pageTitle="Test kmom03: Visa &#36;_SESSION";
		$file="kmom03_session.php";
		break;
	case "kmom03-sessionchange":
		$pageTitle="Test kmom03: Ändra värden i sessionen";
		$file="kmom03_sessionchange.php";
		break;
}
include("include/header.php"); 	
?>

<!-- Main content -->
<div id="content">
	<!-- Article wrapper -->
	<div class="scale" id="wrapper">	
		<!-- Article -->
		<article class="page-article">
			<!-- Article header -->
			<header class="article-header">
				<h1>PHP-tester</h1>
			</header>
			<aside class="article-aside">
				<?php include("$testDir/aside.php"); ?>
			</aside>
			<!-- load current site -->
			<section id="phptest-section" class="article-section">
				<?php include("$testDir/$file"); ?>
			</section>
	
		</article>
		<!-- End of article -->
		
	</div>
</div>

<?php 
include("include/byline.php");
include("include/footer.php"); 
?>
