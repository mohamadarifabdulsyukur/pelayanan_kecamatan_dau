<?php
include 'koneksi.php';
include 'ceklogin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container fluit">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">
                                            Login Terlebih Dahulu
                                        </h3>
                                        <h6 class=" text-center small">
                                            Silahkan masukan Email dan Password yang sudah terdaftar
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                    <?php
                                    if($info){
                                    ?>
                                    <div class="alert alert-info" role="alert">
                                        <?php echo $info ?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if($eror){
                                    ?>                                        
                                    <div class="alert alert-danger" role="alert">
                                      <?php echo $eror ?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                        <form name= "formlog" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@gmail.com" />
                                                <label for="inputEmail">Email Address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="login" id="login">Masuk</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Jika belum terdaftar silahkan daftar akun disini</a></div>
                                        <div class="small"><a href="home.php">Kembali ke Home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
