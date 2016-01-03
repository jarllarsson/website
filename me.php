<?php 
include("include/config.php");
$pageTitle = "Min Me-sida om mig själv";
$pageId = "me";

$pageStyle = null;
if(isset($_GET['matrix'])) {
  $pageStyle .= '
  @import url(http://fonts.googleapis.com/css?family=VT323);
body { 
font-family: "VT323", cursive;
text-shadow: 2px 2px 5px #99FF00;
background-image: url(images/xen5s0vu.jpg);
background-repeat: repeat;
}
div#content { 
background: transparent;
}
body#me header#main-header {
	background-image: url(images/banner_img_neo.jpg);
}
';
}
if(isset($_GET['boxshadow'])) {
  $pageStyle .= '
figure { 
 -moz-box-shadow: 2px 2px 19px #0091FF;
 -webkit-box-shadow: 2px 2px 19px #0091FF;
 box-shadow:2px 2px 19px #0091FF;
}
';
}
if(isset($_GET['gradient'])) {
  $pageStyle .= '
div#content { 
background: rgb(255,245,170);
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZjVhYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmNzk2MjEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top, rgba(255,245,170,1) 0%, rgba(247,150,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,245,170,1)), color-stop(100%,rgba(247,150,33,1)));
background: -webkit-linear-gradient(top, rgba(255,245,170,1) 0%,rgba(247,150,33,1) 100%);
background: -o-linear-gradient(top, rgba(255,245,170,1) 0%,rgba(247,150,33,1) 100%);
background: -ms-linear-gradient(top, rgba(255,245,170,1) 0%,rgba(247,150,33,1) 100%);
background: linear-gradient(top, rgba(255,245,170,1) 0%,rgba(247,150,33,1) 100%);
}
';
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
				<h1>Om mig</h1>
			</header>
			
			<aside class="article-aside">
				<figure class="article-fig" id="f1">
					<img src="images/me.jpg" alt="Bild på Jarl Larsson">
					<figcaption>En person i behov av kaffe.</figcaption>
				</figure>
			</aside>
			<div class="article-column">
				<p>Jag heter Jarl Larsson och går snart klart mitt tredje år på BTH i programmet "civilingenjör spel- och programvaruteknik." </p>
				<p>Jag gillar att arbeta med grafik och programmera spel.</p>
				<p>Jag har tidigare erfarenhet av HTML, PHP, databaser och CSS, Det var dock ett tag sen jag arbetade aktivt med det nu. 
				Jag har dessutom inte prövat på nya HTML5 och CSS3, vilket ska bli intressant, man har ju vid det här laget sett vilken 
				potential de har jämfört med föregående versioner.
				</p>
			</div>

		</article>
		<!-- End of article -->
		
	</div>
</div>

<?php 
include("include/byline.php");
include("include/footer.php"); 
?>


