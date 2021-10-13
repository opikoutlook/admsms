<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Administrasi Saldo SMS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />                                                                                                                             
        <style type="text/css">                                                                                                                                                  
        .masterheader{
            height:90px;
            background-color: #000;
        }
        input{
            margin-top: 10px;
        }                                                                                                                                                   
        form{
            padding-bottom: 20px;
        }
        .warn{
            color: #fff;
        }
        input[type=text]{
            border-radius:4px;
        }
        .judul{
            color:#fff;
        }
        .border{
            border:1px black solid;
            shadow:
        }
        </style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Administrasi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link" href="#tambahpelanggan">Tambah Pelanggan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#saldo">Cek Saldo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#topup">Topup</a></li>
                        <li class="nav-item"><a class="nav-link" href="#refund">Refund</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <div class="masterheader">
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col border"> 
                    <br>
                    <label><h3>Registrasi Baru</h3></label><br>
                    <form method="POST" action="daftar_pelanggan.php">
                    <div class="form-group">
                        <label>Tentukan ID Pelanggan</label><br>
                        <input type="text" name="id"><br>
                    </div>
                    <label>Nama Pelanggan</label><br>
                    <input type="text" name="nama"><br>
                    <label>Pilih Tanggal</label><br>
                    <input type="date" name="tgl"><br>
                    <label>Saldo Awal</label><br>
                    <input type="text" name="saldo_awal"><br>
                    <input type="submit" name="submit" value="Tambah Baru">
                    </form>
                </div>
                <div class="col bg-warning"> 
                    <br>
                    <label><h3>Topup Saldo</h3></label><br>
                    <form method="POST" action="topup.php">
                    <label require>Tentukan ID Pelanggan</label><br>
                    <input type="text" name="id"><br>
                    <label>Pilih Tanggal</label><br>
                    <input type="date" name="tgl"><br>
                    <label>Jumlah TopUp</label><br>
                    <input type="text" name="jumlah_topup"><br>
                    <input type="submit" name="submit" value="Topup">
                    </form>
                </div>
                <div class="col bg-danger"> 
                    <br>
                    <h3 class="judul">Refund Saldo</h3><br>
                    <form method="POST" action="refund.php">
                    <label>Tentukan ID Pelanggan</label><br>
                    <input type="text" name="id"><br>
                    <label>Tanggal</label><br>
                    <input type="date" name="tgl"><br>
                    <label>Keterangan</label><br>
                    <textarea name="keterangan"></textarea>
                    <label>Jumlah Refund</label><br>
                    <input type="text" name="refund"><br>
                    <input type="submit" name="submit" value="Refund">
                    </form>
                    
                </div>
                
            </div>

            <div class="row mt-4">
                <br>
                <hr>
                <div class="col-md-3 bg-success pt-3 warn">
                    *Catatan : </br>
                    Gunakan Id Pelanggan untuk Top Up dan Transaksi Refund sesuaikan dengan data di samping ini
                </div>
                <div class="col-md-9">
                    <h4>List Pelanggan</h4>
                    <?php
                        require_once('list_pelanggan.php');
                    ?>

                </div>
                
            </div>
            
        </div>




        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Morentz</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
      
        
        
        
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
