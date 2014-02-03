<?php

//$dbhost							= "75.126.26.119";
$dbhost							= "localhost";
$dbuser							= "root";
$dbpass							= "safipassword";
//$dbuser							= "lexpioneer";
//$dbpass							= "lex@pioneers";
$dbname							= "magnum_hiprojects";
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>