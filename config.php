<?php

$dbhost = "localhost";
$password = "Faizqowy1.";
$dbname = "cv";
$dbuser = "root";

$conn = mysqli_connect($dbhost, $dbuser, $password, $dbname);
$querydata = $conn->query("select * from cv_data");
$data = $querydata->fetch_assoc();
$nama = $data['nama'];
$alamat = $data['alamat'];
$telepon = $data['telepon'];
$email = $data['email'];
$pendidikan = $data['pendidikan'];
$pengalaman_kerja = $data['pengalaman_kerja'];
$keterampilan = $data['keterampilan'];
$foto_path = $data['foto_path'];


// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }else{
//     echo "Connected successfully";
// }
