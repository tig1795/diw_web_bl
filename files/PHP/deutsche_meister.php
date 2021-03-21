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
      <div class="nav-items">
          <li><a href="index2.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="deutsche_meister.php" class="active"><i class="fa fa-trophy"></i> Deutsche Meister</a></li>
          <li><a href="EW_Tabelle.php"><i class="fa fa-calculator"></i> Statistik</a></li>
          <li><a href="#"><i class="fa fa-users"></i> Vereine</a></li>
          <li><a href="#"><i class="fa fa-trophy"></i> Siegestrophäe</a></li>
          <li><a href="login2.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</a></li>

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

</body>
</html>

<?php

session_start();
// Startseite hier können allgemeine Funktionen oder aktuelles angezeigt werden
$server = $_SERVER["SERVER_NAME"];
$script = $_SERVER["SCRIPT_NAME"];
require ( "funktionen.php" );


$name_der_db  = "deutsche_meister_im_fußball";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "deutsche_meister_1902_1963";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );


print <<<EOH
  
  <form>
  <br>
    <h2>Deutsche Meister vor Gründung der Bundesliga (1902 - 1963):</h2><br>
    <br>
   
    <section>
        <p>
EOH;

$db = @new mysqli('localhost', 'root', '', 'deutsche_meister_im_fußball');

$sql = "SELECT * FROM deutsche_meister_1902_1963";
$ergebnis = $db->query($sql);
    echo '<table border="1" class="gridtable">';
print <<<EOH
    <tr>
    <th>ID</th>
    <th>Saison</th>
    <th>Meister</th>
    <th>Endspieldatum</th>
    <th>Endspielort</th>
    <th>Enspielbegegnung</th>
    <th>Ergebnis</th>
    </tr>
EOH;

    while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC))
    {
        echo '<tr>';
        echo "<td>". $zeile['ID'] . "</td>";
        echo "<td>". $zeile['Saison'] . "</td>";
        echo "<td>". $zeile['Meister'] . "</td>";
        echo "<td>". $zeile['Endspieldatum'] . "</td>";
        echo "<td>". $zeile['Endspielort'] . "</td>";
        echo "<td>". $zeile['Endspielbegegnung'] . "</td>";
        echo "<td>". $zeile['Ergebnis'] . "</td>";
        echo "</tr>";
    }                
        echo "</table>";           
    

?>

<?php

$name_der_db  = "deutsche_meister_im_fußball";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "deutsche_meister_1963_2020";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );


print <<<EOH
  
  <form>
  <br>
    <h2>Deutsche Meister nach Gründung der Bundesliga (1963 - 2020):</h2><br>
    <br>
   
    <section>
        <p>
EOH;

$db = @new mysqli('localhost', 'root', '', 'deutsche_meister_im_fußball');

$sql = "SELECT * FROM deutsche_meister_1963_2020";
$ergebnis = $db->query($sql);
    echo '<table border="1" class="gridtable">';
print <<<EOH
    <tr>
    <th>ID</th>
    <th>Saison</th>
    <th>Meister</th>
    <th>Tore</th>
    <th>Punkte</th>
    </tr>;
EOH;
    while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC))
    {
        echo "<tr>";
        echo "<td>". $zeile['ID'] . "</td>";
        echo "<td>". $zeile['Saison'] . "</td>";
        echo "<td>". $zeile['Meister'] . "</td>";
        echo "<td>". $zeile['Tore'] . "</td>";
        echo "<td>". $zeile['Punkte'] . "</td>";
        echo "</tr>";
    }                
        echo "</table>";           
    

?>

	
