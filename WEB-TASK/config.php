<?php
$connection = new mysqli("localhost","root","","login");

if (! $connection){
    die("Error in connection".$connection->connect_error);
}
$result1 = $connection->query("SELECT * FROM register");
  $dbdata1 = array();
  while ( $row1 = $result1->fetch_assoc())  {
	$dbdata1[]=$row1;
  }
  $result2 = $connection->query("SELECT * FROM profile");
  $dbdata2 = array();
  while ( $row2 = $result2->fetch_assoc())  {
	$dbdata2[]=$row2;
  }
?>
