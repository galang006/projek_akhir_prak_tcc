<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100 bg-dark">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="container-sm">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="p-3 mb-2 card text-white bg-dark">
                            <div class="row">
                                <h1 style="text-align: center;">Register Page</h1>
                                <hr>
                                <h6 style="text-align: center; margin-bottom: 10%;">Silakan buat akun terlebih dahulu</h6>
                                <?php
                                if (isset($_GET['message'])) {
                                    if ($_GET['message'] == "failed") {
                                        echo "Register gagal. Username atau password salah.";
                                    } 
                                }
                                ?>
                                <form method="POST" action="register_proses.php">
                                    <div class="mb-3">
                                        <input type="text" class="form-control bg-dark" id="Input1" name="username" placeholder="Masukkan username" style="color: white;">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control bg-dark" id="Input2" name="password" placeholder="Masukkan password" style="color: white;">
                                    </div>
                                    <br>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-outline-light" type="submit" name="">REGISTER</button>
                                    </div>
                                    <br>
                                    <p style="text-align: center;">Sudah punya akun?
                                        <a href="login.php" style="color:white;">Login di sini</a>
                                    </p>
                                </form>
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