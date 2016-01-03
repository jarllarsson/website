<h2>Visa annons</h2>
<?php
	// Anslut till databasen
	$db = new PDO("sqlite:$dbPath");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script
	
	// Skapa rullgardinsmeny av tabellen
	// hämta
	$stmt = $db->prepare('SELECT * FROM Ads;');
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$select = "<select id='input1' name='ads' onchange='form.submit();'>";
	$select .= "<option value='-1'>Välj Annons</option>";
	// fyll menyn
	foreach($res as $ad) {
	  $selected = "";
	  if(isset($_POST['ads']) && $_POST['ads'] == $ad['id']) {
		$selected = "selected";
		$current = $ad;
	  }
	  $select .= "<option value='{$ad['id']}' {$selected}>{$ad['title']} ({$ad['id']})</option>";
	}
	$select .= "</select>";

?>

<!-- Form -->
<form method="post">
  <fieldset>
    <p>
      <label for="input1">Annonser:</label><br>
	  <!--meny -->
      <?php echo $select; ?> 
    </p>
    
	<?php if(isset($current)): ?>
    <p>
      <div>
        <h2><?php echo $current['title']; ?></h2>
        <img src="<?php echo $current['image']; ?>" class="left" alt="<?php echo $current['title']; ?>">
        <p><?php echo $current['description']; ?></p>
      </div>
    </p>
  <?php endif; ?>

  </fieldset>

</form>  