<nav id="side-menu">
	<ul <?php if(isset($page)) echo "id='".strip_tags($page)."'"; ?>>
	  <li><h4>Stylesheet-funktioner</h4>
      <ul>
        <li id="choose-stylesheet-"><a href="?page=choose-stylesheet">Välj stylesheet</a>
		<li id="edit-stylesheet-"><a href="?page=edit-stylesheet">Redigera stylesheet</a>
      </ul>
	</ul>
</nav>