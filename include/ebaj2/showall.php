<h2>Alla annonser</h2>
<?php
	// Anslut till databasen
	$db = new PDO("sqlite:$dbPath");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script
	
	$stmt = $db->prepare('SELECT * FROM Ads;');
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$table = "<table class='table-body'>";
    $table .= "<tr><th>Namn</th><th>Innehåll</th><th></th></tr>";
	// Lägg till filer från $files till menyn
	foreach($res as $ad) 
		  $table .= "<tr><td>".$ad['title']."</td><td><img src=".$ad['image']." alt='".$ad['title']."'></td><td class='td-body'>".$ad['description']."</td></tr>";
	$table .= "</table>";
?>

<div class="table-container"><?php echo $table; ?></div>

