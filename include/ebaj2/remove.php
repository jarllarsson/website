<?php 	if(userIsAuthenticated()): ?>
<?php
	// Anslut till databasen
	$db = new PDO("sqlite:$dbPath");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script


	// Ta bort om delete-knappen klickades
	if(isset($_POST['delete'])) {
	  $ad[] = $_POST["ads"];

	  $stmt = $db->prepare("DELETE FROM Ads WHERE id=?");
	  $stmt->execute($ad);
	  $output = "Raderade annons. Rowcount=" . $stmt->rowCount() . ".";
	}
	
	// Skapa rullgardinsmeny av tabellen
	$stmt = $db->prepare('SELECT * FROM Ads;');
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$select = "<select id='input1' name='ads'>";
	foreach($res as $ad) {
	  $select .= "<option value='{$ad['id']}'>{$ad['title']} ({$ad['id']})</option>";
	}
	$select .= "</select>";
?>

<h2>Ta bort en annons</h2>

<p>Välj en annons och klicka knappen "Radera" för att ta bort annonsen.</p>

<form method="post">
  <fieldset>
    <p>
      <label for="input1">Befintliga annonser:</label><br>
      <?php echo $select; ?>
    </p>
    
    <p>
      <input type="submit" name="delete" value="Radera">
    </p>
        
    <?php if(isset($output) && $output!="") echo "<p><output class='success'>$output</output></p>"; ?>
        

  </fieldset>
</form>
<?php else: ?>
<p>Du måste logga in för att kunna skapa nya annonser.</p>
<?php endif; ?>  