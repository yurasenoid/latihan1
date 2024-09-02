<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Pegawai</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center my-4">Tambah Pegawai</h3>
                <form action="processAddPegawai.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">Nomor Telp:</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK:</label>
                        <input type="text" name="nik" id="nik" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat (Kota):</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender:</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="">Pilih Gender...</option>
                            <option value="L">Laki Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan:</label>
                        <select name="jabatan" id="jabatan" class="form-control" required>
                            <option value="">Pilih Jabatan...</option>
                            <?php
                            include "koneksi.php";
                            $result = mysqli_query($conn, "SELECT * FROM jabatan");
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value='" . $row['id_jabatan'] . "'>" . $row['nama_jabatan'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <input type="submit" value="Tambah Pegawai" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
