<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - ke Perpustakaan MTS Daruttaqwa Ar-rafi</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <style>
            body {
                background: linear-gradient(to right, #6a11cb, #2575fc);
                color: #fff;
            }
            .card {
                border: none;
                border-radius: 1rem;
            }
            .card-header {
                background-color: transparent;
                border-bottom: none;
                font-weight: bold;
                font-size: 1.5rem;
                text-align: center;
                padding-bottom: 0;
            }
            .card-body {
                padding-top: 0;
            }
            .form-floating > .form-control, 
            .form-floating > .form-select {
                height: calc(3.5rem + 2px);
                padding: 1rem 0.75rem;
            }
            .form-floating > label {
                padding: 1rem 0.75rem;
            }
            .btn-primary, .btn-danger {
                width: 100%;
                padding: 0.75rem;
                font-size: 1rem;
                font-weight: bold;
                border-radius: 0.5rem;
                transition: background-color 0.3s, transform 0.3s;
            }
            .btn-primary:hover, .btn-danger:hover {
                background-color: #fff;
                color: #6a11cb;
                transform: scale(1.05);
            }
            .small {
                font-size: 0.9rem;
            }
        </style>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center my-4">Register Perpustakaan MTS Daruttaqwa Ar-rafi</h3>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['register'])){
                                                $nama = $_POST['nama'];
                                                $email = $_POST['email'];
                                                $alamat = $_POST['alamat'];
                                                $no_telepon = $_POST['no_telepon'];
                                                $username = $_POST['username'];
                                                $level = $_POST['level'];
                                                $password = md5($_POST['password']);

                                                $insert = mysqli_query($koneksi, "INSERT INTO user(nama, email, alamat, no_telepon, user_name, password, level) VALUES ('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                                                if($insert){
                                                    echo '<script>alert("Selamat, registrasi berhasil. Silahkan login.");location.href="login.php"</script>';
                                                }else{
                                                    echo '<script>alert("Registrasi gagal. Silahkan ulangi kembali.");</script>';
                                                }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="nama" placeholder="Masukkan Nama Lengkap" />
                                                <label class="small mb-1">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="email" placeholder="Masukkan Email" />
                                                <label class="small mb-1">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="no_telepon" placeholder="Masukkan No. Telepon" />
                                                <label class="small mb-1">No. Telepon</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label class="small mb-1">Alamat</label>
                                                <textarea name="alamat" rows="5" required class="form-control py-4"></textarea>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="username" placeholder="Masukkan Username" />
                                                <label class="small mb-1">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" required name="password" type="password" placeholder="Masukkan Password" />
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label class="small mb-1">Level</label>
                                                <select name="level" required class="form-control py-4">
                                                    <option value="admin">Admin</option>
                                                    <option value="user">User</option>
                                                </select>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            &copy; Perpustakaan MTS Daruttaqwa Ar-rafi 2024
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
