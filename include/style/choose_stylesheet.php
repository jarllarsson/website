<?php
	// Läs in allt i mappen stylesheets
	$stylesheets = readDirectory("stylesheets/");
	// Skapa rullgardinsmeny med alla stylesheets
	$select = "<select id='input1' name='stylesheet' onchange='form.submit();'>";
	$select .= "<option value='-1'>Standard stylesheet</option>"; // Första är standard
	// Lägg till filer från $stylesheets till menyn
	foreach($stylesheets as $val) 
	{
	  $selected = "";
	  if(isset($_SESSION['stylesheet']) && $_SESSION['stylesheet'] == $val) 
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

<h2>Välj stylesheet</h2>
<p>Byt till något av de stylesheets som ligger i mappen <code>stylesheets/</code>.</p>
<!-- Form -->
<form method="post" action="?page=choose-stylesheet-process">
  <fieldset>
    <p>
      <label for="input1">Stylesheet:</label><br>
	  <!-- Stylesheetmeny -->
      <?php echo $select; ?> 
    </p>
    
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