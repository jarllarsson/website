<h2>Server</h2>
<p>Nuvarande adress är:<br />
<?php 
$u = getCurrentUrl();
echo "<a href='{$u}' title='permalink'>$u</a>"; 
?>
</p>
<p><code>$_SERVER</code> innehåller följande:</p>
<pre><?php print_r($_SERVER); ?></pre>


