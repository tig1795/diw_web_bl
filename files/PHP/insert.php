<?php

session_start();
// Skript um einen neuen Deutschen Meister im Fußball anzulegen
require ( "funktionen.php" );

$server = $_SERVER["SERVER_NAME"];
$script = $_SERVER["SCRIPT_NAME"];

$name_der_db  = "deutsche_meister_im_fußball";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "deutsche_meister_1963_2020";

$con = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );

if(!$con)
{
    echo 'Not Connected To Server';
}

if(mysqli_select_db($con, 'deutsche_meister_1963_2020'))
{
    echo 'Database not Selected';
}
$ID = $_POST['nummerierung'];
$Saison = $_POST['saison'];
$Meister = $_POST['meister'];
$Tore = $_POST['tore'];
$Punkte = $_POST['punkte'];

$sql = "INSERT INTO deutsche_meister_1963_2020 (ID, Saison, Meister, Tore, Punkte) VALUES ('$ID','$Saison','$Meister','$Tore','$Punkte')";

if(!mysqli_query($con, $sql))
{
    echo 'Not Inserted';
}
else{
    echo'Inserted';
}

header("refresh:2; url=deutsche_meister2.php");

?>