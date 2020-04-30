<?php 
include "database.php";

$id = $_GET['id'];


$query = "DELETE FROM tadarus WHERE tadarus.id = '$id'";
$data = $db->prepare($query);
$data->execute();

header("Location: tadarus.php");

?>