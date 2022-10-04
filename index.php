<?php
include "koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Kurikulum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <h4>CRUD Sederhana</h4>
        <div class="card mt-3">
          <div class="card-body">
            <h5>Data Siswa</h5>
            <a href="formulir.php" class="btn btn-primary btn-sm">Tambah Data</a>
            <table class="table table-striped table-hover mt-2">
              <thead>
                <tr>
                  <th>#</th>
                  <th>N I S N</th>
                  <th>Full Name</th>
                  <th>Gender</th>
                  <th>Number Phone</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM tb_siswa");
                while ($data = mysqli_fetch_object($query)) {
                  $no++;
                ?>
                  <tr>
                    <td>#</td>
                    <td><?= $data->nisn; ?></td>
                    <td><?= $data->nama; ?></td>
                    <td><?= $data->jk; ?></td>
                    <td><?= $data->telpon; ?></td>
                    <td>
                      <div class="btn-group">
                        <a href="formulir-edit.php?nisn=<?= $data->nisn; ?>" class="btn btn-primary btn-sm active" aria-current="page">Edit</a>
                        <a href="delete.php?nisn=<?= $data->nisn; ?>" class="btn btn-danger  btn-sm">Delete</a>
                      </div>
                    </td>
                  </tr>
                <?php
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>