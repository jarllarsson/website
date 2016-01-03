<?php 
include("include/config.php");
$pageTitle = "eBaj";
$pageId = "ebaj";
// SQLite database path
$dbPath = dirname(__FILE__) . "/include/ebaj2/data/ebaj.sqlite";
// Check url to see if page has been set
$page = null;
if(isset($_GET["page"]))
	$page = $_GET["page"];
// Set file var to the associated with the name
$file = "default.php";
$path="include/ebaj2";
switch($page)
{
  case "ebaj-init":
	$pageTitle   = "Initiera";
	$file        = "init.php";
	break;
  case "ebaj-update":
	$pageTitle   = "Uppdatera";
	$file        = "update.php";
	break;
  case "ebaj-create":
  	$pageTitle   = "Lägg till annons";
	$file        = "create.php";
	break;
  case "ebaj-remove":
  	$pageTitle   = "Ta bort annons";
	$file        = "remove.php";
	break;
  case "ebaj-show":
  	$pageTitle   = "Visa annons";
	$file        = "show.php";
	break;
  case "ebaj-show-all":
  	$pageTitle   = "Visa alla annonser";
	$file        = "showall.php";
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
				<h1>eBaj</h1>
			</header>
			<aside class="article-aside">
				<?php include("$path/aside.php"); ?>
			</aside>
			<!-- load current site -->
			<section id="style-section" class="article-section">
				<?php include("$path/$file"); ?>
			</section>
	
		</article>
		<!-- End of article -->
		
	</div>
</div>

<?php 
include("include/byline.php");
include("include/footer.php"); 
?>
