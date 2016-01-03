<?php 
include("include/config.php");
$pageId = "login";

// Login
// Check if the url contains a querystring with a page-part.
// Check url to see if page has been set
$page = null;
if(isset($_GET["page"]))
	$page = $_GET["page"];
// load appropriate page content based on string	
$content=null;
if($page=="login")
{
	$pageTitle = "Logga in";
	$content = userLogin();
}
else if ($page=="logout")
{
	$pageTitle = "Logga ut";
	$content = userLogout();
}
else
	$pageTitle = "Status login/logout";

include("include/header.php"); 
?>

<!-- Main content -->
<div id="content">
	<!-- Article wrapper -->
	<div class="scale" id="wrapper">	
		<!-- Article -->
		<article class="page-article">
			<?php if(isset($content)):
					 echo $content;
				  else: ?> 
					<header class="article-header">
						<h1>Status login/logout</h1>
					</header>
					<div class="article-column">
						<p>Denna webbplats har skyddade delar. Du måste logga in för att komma åt dem.</p>
						<p>För tillfället är du: 
						<?php if(userIsAuthenticated()): ?>
							<strong>inloggad</strong>.</p>
							<p><a href="?page=logout">Vill du logga ut</a>?</p>
						<?php else: ?>
							<strong>ej inloggad</strong>.</p>
							<p><a href="?page=login">Vill du logga in</a>?</p>
						<?php endif; ?>  
					</div>
				<?php endif; ?>
		</article>
		<!-- End of article -->
	</div>
</div>

<?php 
include("include/byline.php");
include("include/footer.php"); 
?>


