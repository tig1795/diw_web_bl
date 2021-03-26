<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bundesliga</title>
    <link rel="stylesheet" href="../CSS/style2.css">
    <link rel="stylesheet" href="../CSS/slide.css" type="text/css">
    <link rel="stylesheet" href="../CSS/Fußzeile.css" type="text/css">
	<link rel="stylesheet" href="../CSS/Lieblingsrezepte.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav>
      <div class="menu-icon"><span class="fa fa-bars"></span></div>
      <div class="logo">Bundesliga</div>
      <div class="nav-items">
          <li><a href="index2.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="deutsche_meister2.php"><i class="fa fa-trophy"></i> Deutsche Meister</a></li>
          <li><a href="EW_Tabelle2.php"><i class="fa fa-calculator"></i> Statistik</a></li>
          <li><a href="Siegestrophäe2.php" class="active"><i class="fa fa-trophy"></i> Siegestrophäe</a></li>
          <li><a href="About2.php"><i class="fa fa-info-circle"></i> About</a></li>
          <li><a href="logout.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Logout</a></li>

      </div>
      <div class="search-icon"><span class="fa fa-search"></span></div>
      <div class="cancel-icon"><span class="fa fa-times"></span></div>
      <form action="Suche2.php" method="get">
        <input type="search" class="search-data" placeholder="Search" name="search" required/>
        <button type="submit" class="fa fa-search"></button>
      </form>
    </nav>

    <script>
        const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");
        menuBtn.onclick = ()=>{
            items.classList.add("active");
            menuBtn.classList.add("hide");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
        cancelBtn.onclick = ()=>{
            items.classList.remove("active");
            menuBtn.classList.remove("hide");
            searchBtn.classList.remove("hide");
            cancelBtn.classList.remove("show");
            form.classList.remove("active");
            cancelBtn.style.color = "#ff3d00";            
        }
        searchBtn.onclick = ()=>{
            form.classList.add("active");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
    </script>
    </br>

    <h2>Die Triophäen der deutschen Fußballbundesliga</h2>
    </br>
      <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 2</div>
  <img src="../../images/Viktoria.jpg" style="width:100%">
  <div class="text">Victoria</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 2</div>
  <img src="../../images/Meisterschale.jpg" style="width:100%">
  <div class="text">Meisterschale</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
</div> 

<script src="../JavaScript/script.js"></script>
</br>

<div class="victoria">
<h2>Viktoria</h2>
</br>
<p>Im Gedenken an die im Rahmen der Weltausstellung von 1900 in Paris abgehaltenen Olympischen Spiele stiftete das "Komitee für die Beteiligung Deutschlands 
an den Olympischen Spielen 1900" dem Deutschen Fußball-Bund einen Wander-Ehrenpreis.</p> 
<p>Diese Trophäe in Gestalt der "Victoria" - die damals noch mit "c" geschrieben wurde - sollte alljährlich zwischen den Vereinen des Rugby- 
und den Vereinen des Fußball-Verbandes ausgespielt werden.</p>

<p>Die Trophäe verdankt ihren Namen der römischen Siegesgöttin Victoria. Diese ist auch mit einem Lorbeerkranz in der Hand auf einem Stein sitzend dargestellt.</p> 
<p>Am 31. Mai 1903 wurde in Hamburg-Altona zum ersten Mal der Deutsche Fußballmeister ausgespielt.</p>
<p>Der VfB Leipzig gewann die Premiere gegen den DFC Prag mit 7:2, so dass die Sachsen als Erste die "Viktoria" überreicht bekamen.</p> 
<p>Fortan war die Trophäe die Auszeichnung für den Deutschen Meister. Bis in den Wirren des 2. Weltkrieges die "Viktoria" verschollen ging.</p>
<p>In Westdeutschland wurde die Deutsche Meisterschaft 1948 wieder ausgespielt. Die "Viktoria" war freilich immer noch verschwunden.</p> 
<p>Also wurde ein Ersatz in Auftrag gegeben. Und seit 1949 wurde und wird die "Meisterschale" an den besten Fußball-Verein Deutschlands überreicht.</p>

<p>Inzwischen ist die "Viktoria" wieder aufgetaucht. Nach der Wiedervereinigung wurde die Trophäe wieder an den DFB übergeben.</p>
</div>
</br>
<div class="master">
<h2>Meisterschale</h2>
</br>
<p>Die Meisterschale ist die Ehrenschale des Deutschen Fußball-Bundes (DFB), die im Volksmund auch als "Salatschüssel" bezeichnet wird.</p> 
<p>Die beste Bundesliga-Mannschaft einer Saison bekommt die Wandertrophäe am Ende der Spielzeit für ein Jahr überreicht.</p> 
<p>Sie wurde erst 1949 angefertigt und ersetzte die im Krieg verschollene Viktoria.</p> 
<p>Der 1. FC Nürnberg konnte als erster deutscher Nachkriegsmeister 1948 die Schale noch nicht in Empfang nehmen.</p> 
<p>Für die ursprüngliche deutsche Meisterschale, im Durchmesser 50 Zentimeter groß, wurden Materialen im Wert von circa 9000 Euro verarbeitet.</p> 
<p>Der DFB beziffert den heutigen Wert auf etwa 25.000 Euro.</p>
<p>Die ursprüngliche Meisterschale besteht aus 5,5 Kilogramm Sterlingsilber und ist mit fünf großen und elf kleinen Turmalinen (insgesamt 175 Karat) besetzt.</p>
<p>Geschaffen wurde der Ehrenteller von Elisabeth Treskow in den Werkschulen Köln.</p>
<p>Auf der Meisterschale sind alle Deutschen Meister seit 1903 - beginnend mit dem VfB Leipzig - eingraviert.</p> 
<p>1981 war die Schale jedoch für neue Gravuren zu klein geworden, so daß ein weiterer Silberring untergearbeitet und mit Silberschrauben am ursprünglichen Ehrenteller befestigt wurde.</p>
<p>Im Jahr 2009 wurden durch Adolf Kunesch die vorhandenen fünf Gravurplatten der Trophäe durch neue und größere ersetzt, so dass jetzt drei statt bisher zwei Zeilen für die Gravuren zu Verfügung stehen.</p> 
<p>Nun finden die Namen der Meister bis voraussichtlich 2026 Platz, nachdem die ursprüngliche Erweiterung schon gegen 2011 ausgeschöpft gewesen wäre.</p>
<p>Das Gesamtgewicht der Schale nach der ersten Erweiterung betrug circa elf Kilogramm bei einem Durchmesser von 59 Zentimetern.</p>
</div>

</body>
</html>