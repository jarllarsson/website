<?php 	if(userIsAuthenticated()): ?>
<?php
	// Anslut till databasen
	$db = new PDO("sqlite:$dbPath");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script

	// Skapa en rad med titel om skapa-knappen har klickats
	if(isset($_POST['create'])) 
	{
	  $cleanTitle = strip_tags($_POST["title"], "<br><b><i><p><img>");
	  if ($cleanTitle!="")
	  {
		  $ad[] = $cleanTitle;

		  $stmt = $db->prepare("INSERT INTO Ads (title) VALUES (?)");
		  $stmt->execute($ad);
		  $output = "<output class='success'>Lade till en ny annons med id " . $db->lastInsertId() . ". Rowcount=" . $stmt->rowCount() . ".</output>";
	  }
	  else
		  $output = "<output class='alert'>Ogiltig titel.</output>";
	}


	// Skapa rullgardinsmeny av tabellen
	$stmt = $db->prepare('SELECT * FROM Ads;');
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$select = "<select multiple id='input1' name='ads'>";
	foreach($res as $ad) 
	{
	  $select .= "<option value='{$ad['id']}'>{$ad['title']} ({$ad['id']})</option>";
	}
	$select .= "</select>";
?>

<h2>Lägg till annons</h2>

<p>Ange ett unikt namn på en annons och klicka på knappen för att spara den.</p>

<form method="post">
  <fieldset>
    <p>
      <label for="input1">Befintliga annonser:</label><br>
      <?php echo $select; ?>
    </p>
    
    <p>
      <label for="input2">Ny annons:</label><br>
      <input id="input2" class="text" name="title">
    </p>    
    
    <p>
      <input type="submit" name="create" value="Skapa">
      <input type="reset" value="Avbryt">
    </p>
        
    <?php if(isset($output) && $output!="") echo "<p>$output</p>"; ?>
       
  </fieldset>
</form>
<?php else: ?>
<p>Du måste logga in för att kunna skapa nya annonser.</p>
<?php endif; ?>  