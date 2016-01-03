<nav id="side-menu">
	<ul <?php if(isset($page)) echo "id='".strip_tags($page)."'"; ?>>
		<li><h4>Kmom02</h4>
		  <ul>
			<li id="pagestyle"><a href="?page=kmom02-pagestyle">Ändra style på sidan</a>
		  </ul>
		<li><h4>Kmom03</h4>
		  <ul>
			<li id="get"><a href="?page=kmom03-get">Visa <code>$_GET</code></a>
			<li id="getform"><a href="?page=kmom03-getform">Formulär med GET</a>
			<li id="postform"><a href="?page=kmom03-postform">Formulär med POST</a>
			<li id="validate"><a href="?page=kmom03-validate">Validering av inkommande</a>
			<li id="server"><a href="?page=kmom03-server">Visa <code>$_SERVER</code></a>
			<li id="sessiondestroy"><a href="?page=kmom03-sessiondestroy">Förstör sessionen</a>
			<li id="session"><a href="?page=kmom03-session">Visa <code>$_SESSION</code></a>
			<li id="sessionchange"><a href="?page=kmom03-sessionchange">Ändra värden i sessionen</a>
		  </ul>
	</ul>
</nav>