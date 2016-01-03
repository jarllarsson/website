<?php 	if(userIsAuthenticated()): ?>
<?php
	// Spara path-variabel och läs in alla filer till files-arrayen
	$path = dirname(__FILE__) . "/data/";
	$files = readDirectory($path);
?>

<h1>Initiering av annonsdatabasen</h1>

<p>Annonsfiler sparas i katalogen:<br><code><?php echo $path ?></code></p>

<?php if(is_writable($path)): ?>
  <p class="success">Katalogen är skrivbar.</p>
<?php else: ?>
  <p class="alert">Katalogen är ej skrivbar. Skapa katalogen och gör den skrivbar.</p>
  <?php return; ?>
<?php endif; 
$numberOfFiles=sizeof($files);
?>


<p>Katalogen innehåller <?php if($numberOfFiles>1) echo "$numberOfFiles filer:"; else if($numberOfFiles==1) echo "1 fil:"; else echo "inga filer."; ?></p> 

<ul>
<?php foreach($files as $val): ?>
  <li><?php echo $val; ?>
<?php endforeach; ?>
</ul>


<?php else: ?>
  <p>Du måste logga in för att komma åt denna funktionalitet.</p>
  <?php endif; ?>  