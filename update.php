<?php

include "koneksi.php";

$nisn_lama = $_GET['nisn'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$telpon = $_POST['telpon'];

$query = "UPDATE tb_siswa SET nisn='$nisn',nama='$nama',jk='$jk',telpon='$telpon' WHERE nisn='$nisn_lama'";
// var_dump($query);
// exit;

mysqli_query($conn, $query);

header("Location: index.php");
