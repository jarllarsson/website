<h2>Visa annons</h2>
<?php
		// Läs in allt i mappen data
		$path = dirname(__FILE__) . "/data/";
		$files = readDirectory($path);
		// Kolla så angiven stylesheet är ok
		$filename = null;
		if(isset($_POST['file']) && in_array($_POST['file'], $files))
			$filename = $path.$_POST['file'];
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

<!-- Form -->
<form method="post">
  <fieldset>
    <p>
      <label for="input1">Annonser:</label><br>
	  <!--meny -->
      <?php echo $select; ?> 
    </p>
    
	<div><?php if($filename) echo getFileContents($filename); ?></div>

  </fieldset>

</form>  