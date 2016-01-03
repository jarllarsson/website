<?php 
include("include/config.php");
$pageTitle = "Mina redovisningar av kursmomenten";
$pageId = "report";
include("include/header.php"); 
?>
<!-- Main content -->
<div id="content">
	<!-- Article wrapper -->
	<div class="scale" id="wrapper">	
		<!-- Article -->
		<article class="page-article">
			<!-- Article header -->
			<header class="article-header">
				<h1>Redovisning</h1>
			</header>
			
			<!-- Separate sections of article -->
			
			<!-- Section -->
			<section id="kmom06-section" class="article-section">
				<header>
					<h2>Kmom06: PHP och SQLite</h2>
				</header>
				<div class="article-column">
						   <p>Det här momentet gick väldigt snabbt och förutom något syntaxfel här och där så stötte jag inte på några problem.
						   Detta är väl mycket tack vare att så pass mycket av annonstorget var klart sedan förra kursmomentet, så det räckte med att byta ut filhantering mot databaskommunikation.
						   Jag tycker det var ett bra sätt att dela upp momenten på.</p>
						   <p>Jag har läst en databaskurs förut (med MSSQL om jag minns rätt). Så efter man hade friskat upp minnet lite så flöt allt på bra.
						   Just SQLite och PDO var dock nytt för mig, men det var inga problem att komma in i med sql20-guiden, exempelkoden, 
						   samt PDO-delen av php-manualen som referenser.</p>
						   <p>Att databasen bestod av en fil kändes smidigt, iallafall för en mindre sida som denna.</p>
						   <p>Login: root Lösen: toor</p>
				</div>
			</section>	
			
			
			<!-- Section -->
			<section id="kmom05-section" class="article-section">
				<header>
					<h2>Kmom05: HTML-formulär och PHP</h2>
				</header>
				<div class="article-column">
						   <p>Mer jobb med detta moment, men jag tycker det var logiskt strukturerat, då många av uppgifterna var gjorda så att
							man kunde bygga ovanpå tidigare skrivna uppgifter. </p>
							<p>Jag bråkade lite med skrivrättigheterna för de skrivbara filerna till stylesheet-editorn. 
							Om jag skrivskyddade dem från att skrivas av PHP(chmod 444, då vid 644 kunde de fortfarande skrivas), så kunde jag inte uppdatera dom via FTP, utan att ändra skrivrättigheterna varje gång.
							Så jag gjorde helt enkelt så att man behöver logga in för all funktionalitet som ger skrivrättigheter(och behöll 644 som filrättighet för filerna). 
							Ger en liten säkerhet åtminstone, kände jag.</p>
							<p>Notera att ovanstående filrättigheter är för min egen server(bytegrove), när jag ombads flytta över till skolservern använde jag de filrättigheter som nämns i uppgiften, 777 för skrivbara mappar och 666 för skrivbara filer.
							Jag antar att skillnaden här beror på att php-sessionerna på de olika servrarna har olika privilegier?</p>
							<p>Jag använder mest PHP-manualen när jag behöver kolla upp någon funktion. Den kan även vara bra för oerfarna programmerare då de har kommentarer
							från användare, som delar med sig med tips. <a href="http://stackoverflow.com/">Stackoverflow.com</a> är en annan bra community(för programmering i allmänhet), 
							där vanliga och ovanliga problem ofta redan har diskuterats och lösts.</p>
							<p>Login: root Lösen: toor</p>
				</div>
			</section>	
			
			
			<!-- Section -->
			<section id="kmom04-section" class="article-section">
				<header>
					<h2>Kmom04: CSS och en style-väljare i PHP</h2>
				</header>
				<div class="article-column">
						   <p>Det var mest läsning i detta moment, och mycket av det som togs upp med CSS hade jag redan implementerat i moment 2.
							Jag har erfarenhet av CSS sen tidigare, men jag tycker ändå jag lär mig nya saker från uppgifterna.</p>
							Jag valde att följa tipset om att göra en minimalistisk stylesheet. Jag försökte göra sidan så liten och kompakt som möjligt och använde bara svart och vitt och lyckades dessutom hitta ett pixeltypsnitt med åäö. 
							Jag gjorde även en "gameboy"-variant med bara färgerna grön och mörkgrön.
							PHP-delen gick smidigt, men jag förstod inte riktigt vitsen med att göra en ny multisida för bara stylesheet-väljaren, men jag gissar att den ska utökas senare.
							Hade inga större problem, mest småfel pga felstavningar och liknande.</p>
				</div>
			</section>	
			
			
			<!-- Section -->
			<section id="kmom03-section" class="article-section">
				<header>
					<h2>Kmom03: Dynamisk webbplats med PHP</h2>
				</header>
				<div class="article-column">
						<p>Jag såg att det var en hel del steg i denna övning, så jag gjorde testsidan först. Jag tyckte det underlättade testandet.
						De separata testen i sig var bra och smart uppdelade och ledde logiskt upp till sista delen där man gjorde login-sidan.</p>
						<p>Jag har programmerat innan(bl.a; C++, C#, Java, Asm), och även arbetat lite med PHP förut, dock lite av och till, men jag känner 
						att det är ett av de enklare språken att lära sig syntaxen till.</p>
						<p>Jag tyckte php20-guiden var bra, den hjälpte till att väcka minnet lite, så man kom igång snabbt.
						Jag stötte inte på några större problem, allt gick smidigt.</p>
						<p>Användarnamn och lösenord för att testa login är:</p>
						<p>root<br>toor</p>
				</div>
			</section>	
			
			<!-- Section -->
			<section id="kmom02-section" class="article-section">
				<header>
					<h2>Kmom02: HTML-element och CSS-konstruktioner</h2>
				</header>
				<aside class="article-aside">
					<figure class="article-fig" id="f1">
						<img src="images/sketch.jpg" alt="Skiss">
						<figcaption>Skiss av layout.</figcaption>
					</figure>
				</aside>
				<div class="article-column">
					<p>Roligt moment! Den första delen av uppgiftsbeskrivningen var lite förvirrande till en början kände jag, då den nya, färdiga, exempelsidan presenterades direkt.
					Men efter jag läst igenom hela dokumentet så förstod jag hur det var upplagt, så inget större problem egentligen.</p>

					<p>Att sätta sig in i HTML5 och CSS3 gick smidigt då jag har arbetat med de tidigare versionerna förut, både som hobby och sommarjobb. Det var dock ett tag sen sist, så det har hunnit hända en del.
					Jag känner också att jag lär mig mer djupgående kunskaper nu, när jag gör en sida för att lära mig så mycket som möjligt, istället för att göra en sida med huvudfokus att "få den gjord".
					Jag gillade guiderna, jag sökte även efter information online. Style! var ett trevligt verktyg, och passade bra för att komma igång. När man var lite uppvärmd föredrog jag dock att sitta med firebug.
					Ett annat trevligt verktyg var <a href="http://www.cssportal.com/css3-text-shadow-generator/">CSS Portal:s shadow editor</a>.</p>

					<p>Jag gillar HTML5:s nya semantiska taggar, de gör koden mer lättläslig, och de nya funktionerna i CSS3 verkar lovande, dock fulla med barnsjukdomar. Att definiera gradients som funkar
					i alla webbläsare blev nästan löjligt (<a href="http://www.colorzilla.com/gradient-editor/">Colorzilla</a> var till stor nytta här), och som vanligt får man brottas med IE:s inkompatibilitets-legacy.
					En sak som jag verkligen gillar med CSS3 är möjligheten att importera typsnitt. De typsnitt jag använder är OpenSans och NewsCycle från <a href="http://www.google.com/webfonts">Google web fonts</a>.</p>

					
					
					<p>Jag kollade på diverse hemsidor för inspiration, bl.a. <a href="http://www.1stwebdesigner.com/inspiration/46-outstanding-web-layouts-from-deviantart-september-2009/">den här sidan</a>. 
					Jag skissade även upp lite löst hur jag ville strukturera sidan. Jag ville ha en stor banner bakom menyn, som håller sig centrerad och som tonas ut till bakgrundsfärgen. 
					Färgtoningen ville jag även skulle skalas med fönstret, samt ha min- och max-bredd. Det var en del krångel med detta moment då jag ville ha så få absolutstorlekar definierade i CSS:en som möjligt
					och hålla de få jag hade till samma klasser och inte sprida ut dem. Jag vet inte hur vanligt detta är, men jag tyckte det gav mig en bättre överblick.
					Bannerbilderna är diverse grejer jag har gjort tidigare och jag tyckte de piffade upp. Den nya loggan är baserad på Menger Sponge-fraktalen.</p>

					<p>Den lilla pilen som markerar vilken sida som är vald ritas ut helt med CSS, och utnyttjar hur borders ritas ut(varje sida är en likbent parallelltrapets, som kan skalas till en triangel). 
					Den är baserad på koden från <a href="http://nicolasgallagher.com/pure-css-speech-bubbles/demo/">denna sida</a>. 
					</p>
					
					<p>Strukturen har nästan inte ändrats alls, sidan är fortfarande kompatibel med den stylesheet som gjordes i förra uppgiften, och den inkluderas som alternative stylesheet.</p>
				</div>
			</section>
			
			<!-- Section -->
			<section id="kmom01-section" class="article-section">
				<header>
					<h2>Kmom01: Kom igång med HTML, CSS och PHP</h2>
				</header>
				<div class="article-column">
					<p>Jag tycker att det här momentet gick smidigt, bra förklaringar och lagomt stora steg mellan delmomenten. Jag arbetar i Windows 7 med WampServer. 
					För textredigering använder jag mig av Notepad++ och för FTP-arbete så använder jag dels NppFTP till Notepad++, samt FileZilla. </p>
					<p>De webbläsare jag använder är Firefox och Chrome. 
					Jag förhandsgranskar även i IE9 och på <a href="http://www.browsershots.org">browsershots.org</a>.</p>
					<p>Nav-taggen var en nyhet för mig, så det var intressant att läsa lite om resonerandet bakom den. 
					Den gör ju hemsidans struktur tydligare än om man använder listor.</p>
					<p>Då jag hörde att skolans servrar skulle vara lite trilskandes så valde jag att arbeta mot mitt 
					webhotellkonto som jag har sedan tidigare, så jag hade inga problem på den fronten.</p>
				</div>
			</section>
		</article>
		<!-- End of article -->
		
	</div>
</div>

<?php 
include("include/byline.php");
include("include/footer.php"); 
?>