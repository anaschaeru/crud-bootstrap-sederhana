<?php
include "koneksi.php";

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$telpon = $_POST['telpon'];

mysqli_query($conn, "INSERT INTO tb_siswa VALUES ('$nisn','$nama','$jk','$telpon')");

header("Location: index.php");
