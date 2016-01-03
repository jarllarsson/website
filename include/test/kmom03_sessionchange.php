<h2>Ändra värden i sessionen</h2>
<p>Den här sidan räknar upp med 1 varje gång du besöker den. Se värdet "counter" i session.</p>
<?php
$_SESSION['test'] = "Hello World!";

if(isset($_SESSION['counter'])) {
  $_SESSION['counter'] = $_SESSION['counter'] + 1;
}
else
{
  $_SESSION['counter'] = 1;
}
?>


