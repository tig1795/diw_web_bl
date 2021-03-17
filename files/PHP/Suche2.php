<?php

session_start();
// Startseite hier können allgemeine Funktionen oder aktuelles angezeigt werden
$server = $_SERVER["SERVER_NAME"];
$script = $_SERVER["SCRIPT_NAME"];
require ( "funktionen.php" );

// Menükategorien: index rezepte magazin community videos dinner meinkochbuch
$title = "rezepte";
my_html_head ( $title );  

$name_der_db  = "deutsche_meister_im_fußball";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "deutsche_meister_1902_1963";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );


print <<<EOH
  
  <form>
  <br>
    Suchergebnisse vor Gründung der Bundesliga (1902 - 1963):<br>
    <br>
   
    <section>
        <p>
EOH;
            if(isset($_GET["search"])){
                $suchwort = $_GET["search"];
                $abfrage = "";
                $abfrage2 = "";
                $suchwort = explode(",", $suchwort); // String wird in einzelne Wörter unterteilt. Trennzeiche = Leerzeichen.
                for($i = 0; $i < sizeof($suchwort); $i++)
                {
                    $abfrage .= "`Meister` LIKE '%" . $suchwort[$i] . "%'";
                    $abfrage2 .= "`Saison` LIKE '%" . $suchwort[$i] . "%'";
                    if($i < (sizeof($suchwort) - 1)) {
                        $abfrage .= "OR"; 
                        $abfrage2 .= "OR";    
                    }
                }
                $db = @new mysqli('localhost', 'root', '', 'deutsche_meister_im_fußball');

                if(mysqli_connect_errno() == 0)
                {
                    $sql = "SELECT * FROM `deutsche_meister_1902_1963` WHERE ".$abfrage . "OR" . $abfrage2;
                    $ergebnis = $db->query($sql);

                    echo '<table border="1">';
                    while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC))
                    {
                        echo '<tr>';
                        echo "<td>". $zeile['ID'] . "</td>";
                        echo "<td>". $zeile['Saison'] . "</td>";
                        echo '<td><a href="rezept.php?rezept='.$zeile["ID"].'">'. $zeile['Meister'] . "</a></td>";
                        echo "<td>". $zeile['Endspieldatum'] . "</td>";
                        echo "<td>". $zeile['Endspielort'] . "</td>";
                        echo "<td>". $zeile['Endspielbegegnung'] . "</td>";
                        echo "<td>". $zeile['Ergebnis'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }

        

  print'  </section><br>';
    

?>

<?php

$title = "rezepte";

$name_der_db  = "deutsche_meister_im_fußball";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "deutsche_meister_1963_2020";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );


print <<<EOH
  
  <form>
  <br>
  Suchergebnisse nach Gründung der Bundesliga (1963 - 2020):<br>
    <br>
    <section>
        <p>
EOH;
            if(isset($_GET["search"])){
                $suchwort = $_GET["search"];
                $abfrage = "";
                $abfrage2 = "";
                $suchwort = explode(",", $suchwort); // String wird in einzelne Wörter unterteilt. Trennzeiche = Leerzeichen.
                for($i = 0; $i < sizeof($suchwort); $i++)
                {
                    $abfrage .= "`Meister` LIKE '%" . $suchwort[$i] . "%'";
                    $abfrage2 .= "`Saison` LIKE '%" . $suchwort[$i] . "%'";
                    if($i < (sizeof($suchwort) - 1)) {
                        $abfrage .= "OR"; 
                        $abfrage2 .= "OR";    
                    }
                }
                $db = @new mysqli('localhost', 'root', '', 'deutsche_meister_im_fußball');

                if(mysqli_connect_errno() == 0)
                {
                    $sql = "SELECT * FROM `deutsche_meister_1963_2020` WHERE ".$abfrage . "OR" . $abfrage2;
                    $ergebnis = $db->query($sql);

                    echo '<table border="1">';
                    while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC))
                    {
                        echo '<tr>';
                        echo "<td>". $zeile['ID'] . "</td>";
                        echo "<td>". $zeile['Saison'] . "</td>";
                        echo '<td><a href="rezept.php?rezept='.$zeile["ID"].'">'. $zeile['Meister'] . "</a></td>";
                        echo "<td>". $zeile['Tore'] . "</td>";
                        echo "<td>". $zeile['Punkte'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }

        

  print'  </section><br>';
  my_html_foot ( );

?>
