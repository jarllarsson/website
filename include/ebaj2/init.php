<?php 	if(userIsAuthenticated()): ?>
<?php
	// Spara path-variabel och läs in alla filer till files-arrayen
	$path = dirname(__FILE__) . "/data/";
	$files = readDirectory($path);
?>

<h1>Initiering av annonsdatabasen</h1>

<p>Databasfilen sparas i katalogen:<br><code><?php echo dirname($dbPath); ?></code></p>

<?php if(is_writable(dirname($dbPath))): ?>
  <p class="success">Katalogen är skrivbar.</p>
<?php else: ?>
  <p class="alert">Katalogen är ej skrivbar. Skapa katalogen och gör den skrivbar.</p>
  <?php return; ?>
<?php endif; 
$numberOfFiles=sizeof($files);
?>
<?php 
// Create and initialise the database
if(isset($_GET['create-database'])) {
  include(dirname(__FILE__) . "/init_database.php");
}
?>

<?php 
// Test connection with database
if(is_file($dbPath)) {
  $db = new PDO("sqlite:$dbPath");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script
  echo "<p class='success'>Databasfilen <code>$dbPath</code> finns och kunde öppnas.</p>";
} else {
  echo "<p class='alert'>Databasfilen finns ej. <a href='?page=ebaj-init&amp;create-database'>Klicka här för att skapa och initiera databasen</a>.</p>";
  return;
}
?>


<?php // Output database status
if(is_writable($dbPath)): ?>
  <p class="success">Databasfilen är skrivbar.</p>
<?php else: ?>
  <p class="alert">Databasfilen är ej skrivbar med nuvarande rättigheter.</p>
  <?php return; ?>
<?php endif; ?>

<p>Katalogen innehåller <?php if($numberOfFiles>1) echo "$numberOfFiles filer:"; else if($numberOfFiles==1) echo "1 fil:"; else echo "inga filer."; ?></p> 
<ul>
<?php foreach($files as $val): ?>
  <li><?php echo $val; ?>
<?php endforeach; ?>
</ul>

<p><a href="?p=init&amp;create-database">Återställ databasfilen</a>.</p>

<?php else: ?>
  <p>Du måste logga in för att komma åt denna funktionalitet.</p>
  <?php endif; ?>  