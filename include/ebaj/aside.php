<nav id="side-menu">
	<ul <?php if(isset($page)) echo "id='".strip_tags($page)."'"; ?>>
		<li><h4>Alternativ</h4>
		  <ul>
		    <?php 	if(userIsAuthenticated()): ?>
			<li id="init"><a href="?page=ebaj-init">Initiera</a>
			<li id="update"><a href="?page=ebaj-update">Uppdatera annons</a>
			<li id="create"><a href="?page=ebaj-create">Lägg till annons</a>
			<li id="remove"><a href="?page=ebaj-remove">Ta bort annons</a>
			 <?php endif; ?>  
			<li id="show"><a href="?page=ebaj-show">Visa annons</a>
			<li id="show-all"><a href="?page=ebaj-show-all">Visa alla annonser</a>
		  </ul>
	</ul>
</nav>