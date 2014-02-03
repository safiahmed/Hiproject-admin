<?php

//$dbhost							= "75.126.26.119";
$dbhost							= "localhost";
$dbuser							= "root";
$dbpass							= "";
//$dbuser							= "lexpioneer";
//$dbpass							= "lex@pioneers";
$dbname							= "magnum_hiprojects";

try {
  $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
}
catch (PDOException $e) {
  // Handle the database connection error
} 


?>
