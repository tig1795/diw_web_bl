<?php
// Version 6.12.2018

//prüft ob in Eingaben in HTML Formulare verbotene Zeichen eingegeben werden
function my_check_input ( $string, $name ) {
  if ( preg_match ( "/<|%3C|>|%3E|;|%3B/", $string ) ) { //%3B = Semikolon, %3C = <, %3E = >
    echo "Ungültige Zeichen bei <i>$name</i>!";
	my_button_back ();
    exit;
  }	
}


// Falls man mal einen "Zurückbutton" braucht
// Nicht verwendet.
function my_button_back ( $step = "1" ) {
   print <<<___EndOfHtml
   <script language="JavaScript" type="text/javascript">
    document.write("<p><span class='nix'><input type='submit' value='zurück' onClick='history.go(-$step);'></span></p>")
   </script>
___EndOfHtml;
}

// wird wohl auch eher wenig gebraucht, aber wer weiß
// auch nicht benutzt
function my_file_to_array ( $datei ) {
  // Eine Datei wird in ein Array eingelesen und ausgegeben
  $fp = "$datei";
  
  if ( $file = fopen ( $fp, "r" ) ) {
  while ( !feof( $file ) ) {
    $lines[] = trim ( fgets ( $file ) );
    }
  } else {
    echo "Datei $datei konnte nicht geöffnet werden.";
    exit;
  }
  return $lines;
}

//um die issets abzukürzen und zu prüfen
//isset = Php-Funktion, überprüft, ob das $_REQUEST true oder false zurückgibt.
//$_REQUEST für Datenabrufung, die vorher mit method="post" zur Verfügung gestellt wurden.
function my_isset_post ( $text ) {
  if ( isset ( $_REQUEST["$text"] )) {
    $string = trim ( $_REQUEST["$text"] );
  } else {
    $string = "";
  } 
  return $string;
}

//für mysqli error checking
//$link enthält die DB Zugangsvaribalen,
//$ergebnis DB-Abfrage(SELECT * FROM ...) oder DB_Zugriff(INSERT Into...)
function my_sql_error ( $ergebnis, $link ) {
  if ( ! $ergebnis ) {
    printf("<br>Error: %s\n", mysqli_error( $link ) );
    exit;
  }	
}

//Datenbankverbindung für mysqli prüfen
function our_sql_connect ( $server, $benutzer, $passwort, $name_der_db ) {
  if ( $link = @mysqli_connect ( $server, $benutzer, $passwort, $name_der_db ) ) {
    //echo "<br>v ok"; 
	echo "";
  } else {
    echo "<br>v nicht ok";
    exit;
  }
  return $link;
}

// Filtert welche Punkte in der Menüleiste "active" sind und damit hervorgehoben werden sollen
// $title = Seite, prüft ob diese mit der Kategorie übereinstimmt.
function active_or_hover ($title, $kategorie){
	if ($title == $kategorie){
	print <<<EOH
	<li class="active">
EOH;
}else{
	print <<<EOH
	<li>
EOH;
}
}

// Statischer HTML Rahmen vor dem Seiteninhalt

// Menükategorien: index rezepte magazin community videos dinner meinkochbuch

function my_html_head ( $title) {	
  $server = $_SERVER["SERVER_NAME"]; //Abfragung der Servervariable
  print <<<EndOfHtml
<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Bundesliga</title>
      <link rel="stylesheet" href="../CSS/style.css">
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
EndOfHtml;
active_or_hover ($title, "index"); //$title = "index" stimmt auf der Startseite, deswegen Startseite class="active.
print <<<EOH
        <div class="nav-items">
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
EOH;

active_or_hover ($title, "deutsche meister");
print <<<EOH
            <li><a href="#"><i class="fa fa-trophy"></i> Deutsche Meister</a></li>
EOH;

active_or_hover ($title, "magazin");
print <<<EOH
            <li><a href="#">Statistik</a></li>
EOH;

active_or_hover ($title, "community");
print <<<EOH
            <li><a href="#">Vereine</a></li>
EOH;

active_or_hover ($title, "videos");
print <<<EOH
            <li><a href="#">Trophäe</a></li>
EOH;

active_or_hover ($title, "dinner");
print <<<EOH
            <li><a href="login2.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</a></li>
            </div>
EOH;

  
print <<<EOH
        <div class="search-icon"><span class="fa fa-search"></span></div>
EOH;

print <<<EOH
        <div class="cancel-icon"><span class="fa fa-times"></span></div>
EOH;

print <<<EOH
        <form action="Suche2.php" method="get">
          <input type="search" class="search-data" placeholder="Search" name="search" required/>
          <button type="submit" class="fa fa-search"></button>
        </form>
      </nav>
EOH;

print <<<EOH
  
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
  
  </body>
  EOH;
}




// Statischer HTML Fuss, nach dem Seiteninhalt
function my_html_foot () {
  print<<<EndOfHtml
  <hr>
  <br>
<div id="footer">
  <div id="left">Konzern<br>
  <br>
  <ul>
    <li><a href="#" title="AGB"> AGB</a><li>
    <li><a href="#" title="Jobs"> Jobs</a><li>
    <li><a href="#" title="Press"> Presse</a><li>
    <li><a href="#" title="Impressum"> Impressum</a><li>
    <li><a href="#" title="Datenschutz"> Datenschutz</a><li><br>
    <br>
  </ul>
  </div>

  <div id="center">Quicklinks<br>
  <br>
  <ul>
    <li><a href="Lieblingsrezepte2.php" title="Lieblingsrezpte"> Lieblingsrezepte</a><li><br>
    <br>
  </ul>
  </div>

  <div id="right">Newsletter<br>
  <br>
  <ul>
    <li><a href="#" title="Zum Newsletter anmelden"> Lieblingsrezepte</a><li><br>
    <br>
  </ul>
  </div>
  
  </div>

  </body>
</html>
EndOfHtml;
}


?>