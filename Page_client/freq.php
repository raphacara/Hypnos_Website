<?php
//setting header to json

$con = mysqli_connect('localhost', 'root', '', 'hypnos') or die('impossible de se connecter à la base de données');

//query to get data from the table
$query = sprintf("SELECT id, freq, db, spo2 FROM chart");

//execute query
$result = mysqli_query($con, $query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$con->close();

//now print the data
print json_encode($data);

?>