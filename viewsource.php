<?php 
include("include/config.php");
$pageTitle = "Källkod";
$pageId = "source";

// Include code from source.php to display sourcecode-viewer
$sourceBasedir=dirname(__FILE__);
$sourceNoEcho=true;
include("src/source.php");
$pageStyle=$sourceStyle;

include("include/header.php"); 
?>

<!-- Main content -->
<div id="content">
<!-- Article wrapper -->
	<div class="scale" id="wrapper">	
		<!-- Article -->
		<article class="page-article">	
			<?php echo "$sourceBody"; ?>
		</article>
	</div>
</div>

<?php 
include("include/byline.php");
include("include/footer.php"); 
?>


