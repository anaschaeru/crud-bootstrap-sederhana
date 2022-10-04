<?php
include "koneksi.php";

mysqli_query($conn, "DELETE FROM tb_siswa WHERE nisn={$_GET['nisn']}");

header("Location: index.php");
