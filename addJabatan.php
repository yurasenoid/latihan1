<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Jabatan</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center my-4">Tambah Jabatan</h3>
                <form action="processAddJabatan.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Jabatan:</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Jabatan...">
                    </div>
                    <div class="mb-3">
                        <label for="gaji" class="form-label">Gaji Pokok:</label>
                        <input type="text" name="gaji" id="gaji" class="form-control" placeholder="Masukkan Gaji Pokok...">
                    </div>
                    <div class="mb-3">
                        <label for="tunjangan" class="form-label">Tunjangan:</label>
                        <input type="text" name="tunjangan" id="tunjangan" class="form-control" placeholder="Masukkan Tunjangan...">
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Add" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
