<h2>Redigera annons</h2>
<?php 	if(userIsAuthenticated()): ?>
<?php
		// Läs in allt i mappen data
		$path = dirname(__FILE__) . "/data/";
		$files = readDirectory($path);
		// Kolla så angiven fil är ok
		$filename = null;
		$writable = null;
		if(isset($_POST['file']) && in_array($_POST['file'], $files))
		{
		  $filename = $path.$_POST['file'];
		  if(is_writable($filename)) 
			$writable = true;
		  else
			$writable = false;
		}
		// Kolla i POST om sparning ska göras ( om spara-knappen har klickats)
		$saveResult = null;
		if(isset($_POST['save']))
			$saveResult  = putFileContents( $filename, strip_tags($_POST['style-data'], "<br><b><i><p><img>") );
		// Skapa rullgardinsmeny med alla stylesheets
		$select = "<select id='input1' name='file' onchange='form.submit();'>";
		$select .= "<option value='-1'>Välj fil</option>"; // Första är standard
		// Lägg till filer från $files till menyn
		foreach($files as $val) 
		{
		  $selected = "";
		  if(isset($_POST['file']) && $_POST['file'] == $val) 
		  {
			$selected = "selected";
		  }
		  // Skapa en option-entry för menyn med nuvarande värde($val)
		  // Sätt som "markerad" om ovanstående conditional registrerade nuvarande
		  // värde som det som används av sessionen:
		  $select .= "<option value='{$val}' {$selected}>{$val}</option>";
		}
		$select .= "</select>";
?>

<p>Redigera annonsfil.</p>
<!-- Form -->
<form method="post">
  <fieldset>
    <p>
      <label for="input1">Annonser:</label><br>
	  <!-- meny -->
      <?php echo $select; ?> 
    </p>
    
	<!-- textarea -->
	<p>
		<textarea class="input-area" name="style-data"><?php if($filename) echo getFileContents($filename); ?></textarea>
		<input type="submit" name="save" value="Spara" <?php if(!$writable) echo "disabled";  ?>>
		<input type="reset" value="Återställ">
	</p>
	
	<?php if($writable===false) echo "<p>Har inte skrivrättigheter till filen.</p>";  ?>
	<?php if(isset($saveResult )) echo "<p>$saveResult</p>"; ?>
  </fieldset>

</form>  
<?php else: ?>
  <p>Du måste logga in för att kunna redigera annonser.</p>
  <?php endif; ?>  