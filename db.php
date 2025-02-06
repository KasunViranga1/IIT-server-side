<?php 
$dbhost = "localhost;
$dbuser = "root";
$dbpass = "";
$dbname = "hometeq_db_tables";

// create a db connction

$connection = mysqli_connect($dbhost,$dbsuer, $dbpass, $dbname);
if(!$connection) {
    die("Connecion failed" . mysqli_error($connection));
}

// select the databaae

$selectDB = mysqli_select_db($connection, $dbnem):

?>