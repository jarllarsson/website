<?php 	if(userIsAuthenticated()): ?>
<?php
	// Läs in allt i mappen data
	$path = dirname(__FILE__) . "/data/";
	$files = readDirectory($path);
	// Ta bort filen om delete-knappen klickades, verifierea input-data
	if(isset($_POST['delete'])) {

	  if(isset($_POST['file']) && in_array($_POST['file'], $files))
	  {
		$filename = $path . $_POST['file'];
		unlink($filename);
		$files = readDirectory($path);
		$res = "Filen raderades.";    
	  }
	  else
	  {
		$res = "Filen finns ej och kunde inte raderas.";    
	  }
	}
	//
	// Create a select/option-list based on the content of the array $files
	// 
	$select = "<select id='input1' name='file'>";
	foreach($files as $val) 
	{
	  
	  $select .= "<option value='{$val}'>{$val}</option>";
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
        
    <?php if(isset($res)): ?>
    <p><output class="info"><?php echo $res ?></output></p>
    <?php endif; ?>
        

  </fieldset>
</form>
<?php else: ?>
<p>Du måste logga in för att kunna skapa nya annonser.</p>
<?php endif; ?>  