<h2>Alla annonser</h2>
<?php
		// Läs in allt i mappen data
		$path = dirname(__FILE__) . "/data/";
		$files = readDirectory($path);
		// Skapa table
		$table = "<table class='table-body'>";
		$table .= "<tr><th>Namn</th><th>Innehåll</th></tr>";
		// Lägg till filer från $files till menyn
		foreach($files as $val) 
			  $table .= "<tr><td>$val</td><td class='td-body'>".getFileContents($path.$val)."</td></tr>";
		$table .= "</table>";
?>

<div class="table-container"><?php echo $table; ?></div>

