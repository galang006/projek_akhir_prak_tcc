<!DOCTYPE html>
<html>

<head>
    <title>Edit Jadwal</title>
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
                    <a class="nav-link text-light" href="jadwal.php">Jadwal</a>
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
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="container-sm">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="p-3 mb-2 card text-white bg-dark">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <h1 style="text-align: center;">Edit Jadwal Praktikum</h1>
                                        <hr>
                                        <h6 style="text-align: center;">Ubah jadwal praktikum sesuai dengan yang diinginkan</h6>
                                        <br><br><br>
                                        <?php
                                        $id_jadwal = $_GET['id'];
                                        $url = "https://api-dot-prakcloud1.et.r.appspot.com/jadwal/$id_jadwal";
                                        $data = file_get_contents($url);
                                        $jadwal = json_decode($data, true);

                                        if ($jadwal && count($jadwal) > 0) {
                                            $jadwal = $jadwal[0]; // Ambil elemen pertama dari array
                                        ?>
                                            <form method="POST" action="edit_proses.php" style="margin-left: 2%;">
                                                <input type="hidden" name="id_jadwal" value="<?= $jadwal['id_jadwal']; ?>">
                                                <div class="row g-2">
                                                    <div class="col-8">
                                                        <div class="mb-3">
                                                            <input type="text" name="mk" class="form-control bg-dark" placeholder="Masukkan MK Praktikum" value="<?= $jadwal['mk']; ?>" style="color:white;">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="jurusan" id="inlineRadio1" value="IF" <?= ($jadwal['jurusan'] == 'if' ? 'checked' : '') ?>>
                                                            <label class="form-check-label" for="inlineRadio1">IF</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="jurusan" id="inlineRadio2" value="SI" <?= ($jadwal['jurusan'] == 'si' ? 'checked' : '') ?>>
                                                            <label class="form-check-label" for="inlineRadio2">SI</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="lab" class="form-control bg-dark" placeholder="Masukkan Nama Lab" value="<?= $jadwal['lab']; ?>" style="color:white;">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="waktu" class="form-control bg-dark" placeholder="Masukkan Waktu Praktikum" value="<?= $jadwal['waktu']; ?>" style="color:white;">
                                                </div>
                                                <div class="d-grid gap-2 pb-3">
                                                    <button class="btn btn-outline-light btn-lg" type="submit">Update</button>
                                                </div>
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-outline-light btn-lg" type="reset">Reset</button>
                                                </div>
                                            </form>
                                        <?php
                                        } else {
                                            echo "Data tidak ditemukan.";
                                        }
                                        ?>

                                    </div>
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