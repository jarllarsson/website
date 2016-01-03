<?php 
include("include/config.php");
$pageTitle = "Välj style för webbplatsen";
$pageId = "style";
// Check url to see if page has been set
$page = null;
if(isset($_GET["page"]))
	$page = $_GET["page"];
// Set file var to the associated with the name
$file = "default.php";
$styleDir="include/style";
switch($page)
{
  case "choose-stylesheet":
	$pageTitle   = "Välj stylesheet";
	$file        = "choose_stylesheet.php";
	break;
  case "choose-stylesheet-process":
	include("$styleDir/choose_stylesheet_process.php");
	break;
  case "edit-stylesheet":
  	$pageTitle   = "Redigera stylesheet";
	$file        = "edit_stylesheet.php";
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
				<h1>Stylesheetfunktioner</h1>
			</header>
			<aside class="article-aside">
				<?php include("$styleDir/aside.php"); ?>
			</aside>
			<!-- load current site -->
			<section id="style-section" class="article-section">
				<?php include("$styleDir/$file"); ?>
			</section>
	
		</article>
		<!-- End of article -->
		
	</div>
</div>

<?php 
include("include/byline.php");
include("include/footer.php"); 
?>
