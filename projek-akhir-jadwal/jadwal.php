<?php
// Ambil data dari API
$url = 'https://api-dot-prakcloud1.et.r.appspot.com/jadwal/';
$data = file_get_contents($url);

// Proses data JSON
$jadwal = json_decode($data, true);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Jadwal</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:white;">Praktikum IF | 123210118</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-secondary" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link text-secondary" href="#">Lab</a>
                    <a class="nav-link text-secondary" href="#">Waktu</a>
                    <a class="nav-link text-light" href="#">Jadwal</a>
                </div>
            </div>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active text-secondary" aria-current="page" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="vh-100 bg-dark">
        <div class="d-flex justify-content-center h-100">
            <div class="container">
                <div class="d-flex justify-content-center h-100">
                    <div class="container text-center">
                        <br><br>
                        <div class="row" style="margin-left: 4%; margin-right: 4%">
                            <div class="col">
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>MK Praktikum</th>
                                            <th>Jurusan</th>
                                            <th>Lab</th>
                                            <th>Waktu</th>
                                            <td colspan="2">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Perulangan untuk menampilkan data jadwal
                                        $no = 1;
                                        foreach ($jadwal as $data) {
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['mk']; ?></td>
                                                <td><?= $data['jurusan']; ?></td>
                                                <td><?= $data['lab']; ?></td>
                                                <td><?= $data['waktu']; ?></td>
                                                <td><a href="edit.php?id=<?= $data['id_jadwal']; ?>"><button class="btn btn-outline-light">Edit</button></a></td>
                                                <td><a href="hapus.php?id=<?= $data['id_jadwal']; ?>"><button class="btn btn-outline-danger">Delete</button></a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-dark">
                                    <div class="row">
                                        <h2 style="text-align: center; padding-bottom: 4%;">Input Jadwal Praktikum</h2>
                                        <hr>
                                        <h6 style="text-align: center;">Buat jadwal praktikum sesuai dengan yang diinginkan</h6>
                                        <br><br><br>
                                        <form method="POST" action="submit_jadwal.php" style="margin-left: 2%;">
                                            <div class="row g-2">
                                                <div class="col-8">
                                                    <div class="mb-3">
                                                        <input type="text" name="mk" class="form-control bg-dark" placeholder="Masukkan MK Praktikum" style="color:white;">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="jurusan" id="inlineRadio1" value="IF">
                                                        <label class="form-check-label" for="inlineRadio1">IF</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="jurusan" id="inlineRadio2" value="SI">
                                                        <label class="form-check-label" for="inlineRadio2">SI</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <input type="text" name="lab" class="form-control bg-dark" placeholder="Masukkan Lab" style="color:white;">
                                            </div>

                                            <div class="mb-3">
                                                <input type="text" name="waktu" class="form-control bg-dark" placeholder="Masukkan Waktu" style="color:white;">
                                            </div>

                                            <br><br>
                                            <div class="row">
                                                <div class="col-xl">
                                                    <div class="d-grid gap-2"><button class="btn btn-outline-light btn-lg" type="submit">Submit</button></div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="d-grid gap-2"><button class="btn btn-outline-secondary btn-lg" type="reset">Reset</button></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>