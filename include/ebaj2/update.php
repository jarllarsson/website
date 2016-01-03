<h2>Redigera annons</h2>
<?php 	if(userIsAuthenticated()): ?>
<?php
		// Anslut till databasen
		$db = new PDO("sqlite:$dbPath");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script
		
		// Kolla i POST om sparning ska göras ( om spara-knappen har klickats)
		$saveResult = null;	
		if(isset($_POST['save']))
		{
			$output = "";
			$ignoreTags="<br><b><i><p><img>";
			// Skapa en array med alla form-element
			$cleanTitle = strip_tags($_POST["title"], $ignoreTags);
			// Trevligt om annonsen har ett namn
			if ($cleanTitle!="")
				$ad[] = $cleanTitle;
			else
			{
				$ad[] = "Namnlös";
				$output = "<p><output class='alert'>Ogiltig titel.</output></p>";
			}
			// Enkel lösning:
			// Spara annonsen ändå, så försvinner inget
			// alternativ lösning är att spara undan den i någon form av
			// cache och klistra in istället för databasvärde
			$ad[] = strip_tags($_POST["description"], $ignoreTags);
			$ad[] = strip_tags($_POST["image"], $ignoreTags);
			$ad[] = strip_tags($_POST["id"], $ignoreTags);
			//
			$stmt = $db->prepare("UPDATE Ads SET title=?, description=?, image=? WHERE id=?"); // uppdatera ads med specifierat id
			$stmt->execute($ad);
			$output .= "<p><output class='success'>Uppdaterade annonsen. Rowcount=" . $stmt->rowCount() . ".</output></p>";

		}		
		// Hämta alla ads för listan
		$stmt = $db->prepare('SELECT * FROM Ads;');
		$stmt->execute();
		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$current = null;
		
		// Skapa rullgardinsmeny med alla stylesheets
		$select = "<select id='input1' name='ads' onchange='form.submit();'>";
		$select .= "<option value='-1'>Välj annons</option>"; // Första är standard
		// Lägg till filer från $files till menyn
		foreach($res as $ad) 
		{
		  $selected = "";
		  if(isset($_POST['ads']) && $_POST['ads'] == $ad['id']) 
		  {
			$selected = "selected";
			$current = $ad;
		  }
		  $select .= "<option value='{$ad['id']}' {$selected}>{$ad['title']} ({$ad['id']})</option>";
		}
		$select .= "</select>";
?>

<p>Redigera annonsfil.</p>
<!-- Form -->
<form method="post">
  <fieldset>
   <input type="hidden" name="id" value="<?php echo $current['id']; ?>">
    <p>
      <label for="input1">Annonser:</label><br>
	  <!-- meny -->
      <?php echo $select; ?> 
    </p>
    
	<p>
      <label for="input1">Titel:</label><br>
      <input type="text" class="text" name="title" value="<?php echo $current['title']; ?>">
    </p> 
	
	<p>
      <label for="input1">Bildlänk:</label><br>
      <input type="link" class="text" name="image" value="<?php echo $current['image']; ?>">
    </p>   
	
	<p>
      <textarea style="width:100%;" name="description"><?php echo $current['description']; ?></textarea>
    </p>
	
	<p>
		<input type="submit" name="save" value="Spara" <?php if(!isset($current['id'])) echo "disabled";  ?>>
		<input type="reset" value="Återställ">
	</p>

	<?php if(isset($output) && $output!="") echo $output; ?>
  </fieldset>

</form>  
<?php else: ?>
  <p>Du måste logga in för att kunna redigera annonser.</p>
  <?php endif; ?>  