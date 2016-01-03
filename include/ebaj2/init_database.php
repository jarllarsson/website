<?php 
// Creating the database and initiating it with content
echo "<h3>Skapar databas</h2>";

$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script

// Create a table, but only if it not already exists. 
$stmt = $db->prepare('
  CREATE TABLE IF NOT EXISTS Ads
  (
    id INTEGER PRIMARY KEY NOT NULL UNIQUE, 
    title TEXT, 
    description TEXT, 
    image TEXT
  );
');
echo "<p>Skapa tabell om den inte redan finns: <pre>" . $stmt->queryString . "</pre></p>";
$stmt->execute();


// Delete rows from the table. 
$stmt = $db->prepare('DELETE FROM Ads;');
echo "<p>Töm tabellen: <pre>" . $stmt->queryString . "</pre></p>";
$stmt->execute();


// Insert values into a table. 
echo "<p>Lägg defaultvärden i tabellen.</p>";
$stmt = $db->prepare("INSERT INTO Ads(title,description,image) VALUES(?,?,?)");

// Insert 3 ads
for ($i=0;$i<3;$i++)
{
	$ad = null;
	$ad[] = "Default-annons nr".($i+1);
	$ad[] = 'Detta är en default-annons. Lägg till egna annonser.
<i>Lorem</i>
<b>Ipsum</b>';
	$ad[] = "images/ebaj/".$i.".jpg";
	$stmt->execute($ad);
	echo "<p>Skapade " . $stmt->rowCount() . " rad.</p>";
}




?> 