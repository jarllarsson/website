<h2>Validering av inkommande</h2>
 <form method="post" action="?page=kmom03-validate">
  <fieldset>
   <legend>Formulär</legend>
   <p>
    <label for="input1">Användarkonto:</label><br>
    <input id="input1" class="text" type="text" name="account">
   </p>
   <p>
    <label for="input2">Lösenord:</label><br>
    <input id="input2" class="text pass" type="password" name="password">
   </p>
   <p>
    <input type="submit" name="doLogin" value="Login">
  </p>
 </fieldset>
</form>
<p>Du anropade sidan med följande querystring:
<code><?php echo htmlentities($_SERVER['QUERY_STRING']); ?></code></p>
<p><code>$_GET</code> innehåller följande:</p>
<pre><?php print_r($_GET); ?></pre>
<p><code>$_POST</code> innehåller följande:</p>
<pre><?php print_r($_POST); ?></pre>

<?php
if(isset($_POST['account'])) {
	$acc = $_POST['account'];
    echo "<p>Kontot är definerat.</p>";
	if(empty($acc))
		echo "<p>Inget kontonamn har angivits!</p>";
	else if(is_numeric($acc))
		echo "<p>Användarnamnet är numeriskt. Lycka till med att komma ihåg det!</p>";
	else {
		echo "<p>Användarnamnet är inte numeriskt.</p>";
		$scrub_acc=strip_tags($acc);
		if (strlen($scrub_acc)!=strlen($acc)) {
			$acc=$scrub_acc;
			if(empty($acc))
				echo "<p>Användarnamnet innehöll bara taggar. Ange ett annat användarnamn.";
			else
				echo "<p>Användarnamnet skrubbades efter taggar och läses nu: $acc</p>"; 
		}
		else
			echo "<p>Användarnamnet $acc innehöll inga taggar som kan hittas med strip_tags.</p>";
	}
		
} else {
    echo "<p>Kontot är EJ definerat.</p>";
}
?>