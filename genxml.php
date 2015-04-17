<?php

require("config.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

// $connection=mysqli_connect ('localhost:8889', DB_USERNAME, DB_PASSWORD);
// if (!$connection) {  die('Not connected : ' . mysql_error());}
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );


// Set the active MySQL database

// $db_selected = mysql_select_db('root-hello', $connection);
// if (!$db_selected) {
//   die ('Can\'t use db : ' . mysql_error());
// }

// Select all the rows in the markers table

$sql = "SELECT * FROM photos WHERE 1";
$st = $conn->prepare( $sql );
$st->execute();
$row = $st->fetch();

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = $st->fetch()){
  // ADD TO XML DOCUMENT NODE
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("title",$row['title']);
  $newnode->setAttribute("image", $row['image']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  // $newnode->setAttribute("type", $row['type']);
}

echo $dom->saveXML();

?>