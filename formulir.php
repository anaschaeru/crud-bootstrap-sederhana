<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Kurikulum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <a href="index.php" class="btn"><i class="bi bi-chevron-compact-left me-3"></i>Back</a>
        <div class="card card-body mt-3 p-4">
          <div class="border-bottom border-5 border-primary py-2">
            <h5>Form Add</h5>
          </div>
          <form class="mt-3" action="tambah-aksi.php" method="POST">
            <div class="mb-3">
              <label for="labelNamaSiswa" class="form-label">Full Name</label>
              <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
              <label for="labelNISN" class="form-label">N I S N</label>
              <input type="text" class="form-control" name="nisn">
            </div>
            <div class="mb-3">
              <label for="labelGender" class="form-label">Gender</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jk" value="L">
                <label class="form-check-label" for="flexRadioDefault1">
                  Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jk" value="P">
                <label class="form-check-label" for="flexRadioDefault1">
                  Female
                </label>
              </div>
            </div>
            <div class="mb-3">
              <label for="labelNISN" class="form-label">Number Phone</label>
              <input type="text" class="form-control" name="telpon">
            </div>
            <div class="d-flex justify-content-end mb-3 ">
              <button type="submit" class="btn btn-primary">Save!</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>