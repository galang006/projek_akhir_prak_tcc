<!DOCTYPE html>
<html>

<head>
    <title>Halaman Utama</title>
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
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php" style="color:grey;">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="vh-100 bg-dark">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="col-8">
                        <div class="p-3 mb-2 card text-white bg-dark">
                            <div class="row">
                                <h5 style="text-align: center;">Selamat Datang di</h5>
                                <h1 style="text-align: center;">Praktikum Informatika</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="d-grid gap-2"><button onclick="window.location.href='#'" class="btn btn-outline-light btn-lg" type="button">Lab</button></div>
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2"><button onclick="window.location.href='#'" class="btn btn-outline-light btn-lg" type="button">Waktu Praktikum</button></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="d-grid gap-2"><button onclick="window.location.href='jadwal.php'" class="btn btn-outline-light btn-lg" type="button">Jadwal Praktikum</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>