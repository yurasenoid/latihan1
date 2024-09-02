<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Edit Pegawai</title>
</head>

<body>
    <?php
    include "koneksi.php";
    // Fetch employee data based on the ID passed in the URL
    $qry_get_pegawai = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai = '" . $_GET['id_pegawai'] . "'");
    $data_pegawai = mysqli_fetch_array($qry_get_pegawai);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center my-4">Edit Pegawai</h3>
                <form action="processEditPegawai.php" method="post">
                    <input type="hidden" name="id_pegawai" value="<?= $data_pegawai['id_pegawai'] ?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" id="nama" value="<?= $data_pegawai['nama'] ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="no_telp" class="form-label">Nomor Telp:</label>
                        <input type="text" name="no_telp" id="no_telp" value="<?= $data_pegawai['no_telp'] ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK:</label>
                        <input type="text" name="nik" id="nik" value="<?= $data_pegawai['nik'] ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input type="text" name="alamat" id="alamat" value="<?= $data_pegawai['alamat'] ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender:</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="">Pilih Gender...</option>
                            <option value="L" <?= ($data_pegawai['gender'] == 'L') ? 'selected' : '' ?>>Laki Laki</option>
                            <option value="P" <?= ($data_pegawai['gender'] == 'P') ? 'selected' : '' ?>>Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" id="username" value="<?= $data_pegawai['username'] ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan:</label>
                        <select name="jabatan" id="jabatan" class="form-control" required>
                            <option value="">Pilih Jabatan...</option>
                            <?php
                            // Fetch jabatan options from database
                            $qry_jabatan = mysqli_query($conn, "SELECT * FROM jabatan");
                            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                                $selected = ($data_jabatan['id_jabatan'] == $data_pegawai['id_jabatan']) ? 'selected' : '';
                                echo "<option value='" . $data_jabatan['id_jabatan'] . "' " . $selected . ">" . $data_jabatan['nama_jabatan'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <input type="submit" value="Simpan Perubahan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
