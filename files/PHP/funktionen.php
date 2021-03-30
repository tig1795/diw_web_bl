<?php

//prüft ob in Eingaben in HTML Formulare verbotene Zeichen eingegeben werden
function my_check_input ( $string, $name ) {
  if ( preg_match ( "/<|%3C|>|%3E|;|%3B/", $string ) ) { //%3B = Semikolon, %3C = <, %3E = >
    echo "Ungültige Zeichen bei <i>$name</i>!";
	my_button_back ();
    exit;
  }	
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
?>