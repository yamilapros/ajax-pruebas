<?php

$mysqli = new mysqli("localhost","root","","ajax");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$sql = "SELECT * FROM personas";
$result = mysqli_query($mysqli, $sql);
//$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'pais' => $row['pais'],
        'edad' => $row['edad']
    );
}
//var_dump($json);
$data = $json;
echo $data;

