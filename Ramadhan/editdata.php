<?php 
include "database.php";

$id = $_GET['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];
$ayat = $_POST['ayat'];

$query = "UPDATE tadarus SET nama = '$nama', kelamin = '$jenis', alamat = '$alamat', ayat = '$ayat' WHERE tadarus.id = '$id'";
$data = $db->prepare($query);
$data->execute();

header("Location: tadarus.php");



?>
