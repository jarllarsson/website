<?php 	if(userIsAuthenticated()): ?>
<?php
	// Läs in allt i mappen data
	$path = dirname(__FILE__) . "/data/";
	$files = readDirectory($path);
	
	// Skapa en fil om skapa-knappen har klickats
	if(isset($_POST['create'])) {
	  $filename = $path.basename(trim(strip_tags($_POST['filename']))); // ta bort tags, sedan whitespaces, sedan cd-instruktioner
	  if(empty($_POST['filename']))
	  {
		$res = "Filen skapades ej, filnamnet kan ej vara tomt. Välj ett annat filnamn.";
	  }
	  else if(is_file($filename)) 
	  {
		$res = "Filen skapades ej, den finns redan. Välj ett annat filnamn.";
	  }
	  else 
	  {
		file_put_contents($filename, null);
		$res = "Filen skapades.";
		$files = readDirectory($path);
	  }
	}


	//
	// Create a select/option-list based on the content of the array $files
	// 
	$select = "<select multiple id='input1' name='file'>";
	foreach($files as $val) 
	{
	  $select .= "<option value='{$val}'>{$val}</option>";
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
      <input id="input2" name="filename">
    </p>    
    
    <p>
      <input type="submit" name="create" value="Skapa">
      <input type="reset" value="Ångra">
    </p>
        
    <?php if(isset($res)): ?>
    <p><output class="info"><?php echo $res ?></output></p>
    <?php endif; ?>
        

  </fieldset>
</form>
<?php else: ?>
<p>Du måste logga in för att kunna skapa nya annonser.</p>
<?php endif; ?>  