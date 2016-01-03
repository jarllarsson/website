<h2>Redigera stylesheet</h2>
<?php if(userIsAuthenticated()): ?>
<?php
	// Läs in allt i mappen stylesheets
	$stylesPath = dirname(__FILE__) . "/../../stylesheets/";
	$stylesheets = readDirectory($stylesPath);
	// Kolla så angiven stylesheet är ok
	$filename = null;
	$writable = null;
	if(isset($_POST['stylesheet']) && in_array($_POST['stylesheet'], $stylesheets))
	{
	  $filename = $stylesPath.$_POST['stylesheet'];
	  if(is_writable($filename)) 
		$writable = true;
	  else
		$writable = false;
	}
	// Kolla i POST om sparning ska göras ( om spara-knappen har klickats)
	$saveResult = null;
	if(isset($_POST['save']))
		$saveResult  = putFileContents($filename, strip_tags($_POST['style-data']));

	// Skapa rullgardinsmeny med alla stylesheets
	$select = "<select id='input1' name='stylesheet' onchange='form.submit();'>";
	$select .= "<option value='-1'>Välj stylesheet</option>"; // Första är standard
	// Lägg till filer från $stylesheets till menyn
	foreach($stylesheets as $val) 
	{
	  $selected = "";
	  if(isset($_POST['stylesheet']) && $_POST['stylesheet'] == $val) 
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

<p>Redigera något av de stylesheets som ligger i mappen <code>stylesheets/</code>.</p>
<!-- Form -->
<form method="post">
  <fieldset>
    <p>
      <label for="input1">Stylesheet:</label><br>
	  <!-- Stylesheetmeny -->
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
	
	<!-- Visa nuvarande stylesheet -->
    <p>
      <?php 
      if(isset($_SESSION['stylesheet']))
        echo "Nuvarande stylesheet är: '{$_SESSION['stylesheet']}'.";
      else
        echo "Standard stylesheet används";
      ?>
    </p>

  </fieldset>

</form>  
<?php else: ?>
  <p>Du måste logga in för att få tillgång till stylesheet-editorn</p>
  <?php endif; ?>  