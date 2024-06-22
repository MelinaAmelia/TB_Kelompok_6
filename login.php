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
        <title>Login - ke Perpustakaan MTS Daruttaqwa Ar-rafi</title>
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
                                        <h3 class="text-center my-4">Login ke Perpustakaan MTS Daruttaqwa Ar-rafi</h3>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['login'])){
                                                $username = $_POST['username'];
                                                $password = md5($_POST['password']);

                                                $data = mysqli_query($koneksi, "SELECT * FROM user WHERE user_name='$username' AND password='$password'");
                                                $cek  = mysqli_num_rows($data);
                                                if($cek > 0){
                                                    $_SESSION['user'] = mysqli_fetch_array($data);
                                                    echo '<script>alert("Selamat datang, Login Berhasil"); location.href="index.php";</script>';
                                                }else{
                                                    echo '<script>alert("Maaf, Username/Password salah");</script>';
                                                }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUsername" type="text" name="username" placeholder="Enter username" />
                                                <label for="inputUsername">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="login" value="login">Login</button>
                                            </div>
                                            <div class="text-center mt-3">
                                                <a class="btn btn-danger" href="register.php">Register</a>
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
