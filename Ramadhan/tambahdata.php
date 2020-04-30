<?php 
include "database.php";

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];
$ayat = $_POST['ayat'];

$query = "INSERT INTO tadarus VALUES('','$nama', '$jenis', '$alamat', '$ayat')";
$data = $db->prepare($query);
$data->execute();

header("Location: tadarus.php");



?>
