
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BHS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: graytext; color: white">

        <!-- NAVIGATION BAR -->

        <nav class="navbar bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php">PT.BEHAESTEX</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav" style="text-align: center;">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="active" style="background-color: whitesmoke;">
                        <a class="nav-link" style="color: black;" href="javascript:void(0)">Outlet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="survey.php">Survey</a>
                    </li>    
                </ul>
            </div>  
        </nav>
        <br>

        <!-- ISI -->
        <h1 style="font-family: Arial Black;color: whitesmoke;text-align: center;font-weight: bold;text-decoration: underline">Modul Outlet</h1>
        <h5 style="color: red;font-weight: bold;">*) Mandatory Field</h5>	
        <h5 style="color: red;font-weight: bold;">**) Mandatory Field jika negara Indonesia</h5>

        <?php
        include_once ("class/connection.php");
        ?>
        <div class="container-fluid">
            <form class="form-horizontal" action="outlet.php">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Nama Outlet*</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Alamat*</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan E-mail">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Nomor Telepon*</label>
                        <input type="text" class="form-control" name="telp" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Kode Pos</label>
                        <input type="text" class="form-control" name="pos" placeholder="Masukkan Kode Pos">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Lokasi Outlet*</label>
                        <input type="text" class="form-control" name="lokasi" placeholder="Masukkan Lokasi Outlet" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Nama Pengelola*</label>
                        <input type="text" class="form-control" name="pengelola" placeholder="Masukkan Nama Pengelola" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Nama Pemilik*</label>
                        <input type="text" class="form-control" name="pemilik" placeholder="Masukkan Nama Pemilik" required>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan" placeholder="Masukkan Kelurahan">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" placeholder="Masukkan Kecamatan">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Kabupaten/Kota*</label>
                        <?php
                        $sql = "SELECT name as a FROM `regencies`";
                        ?>
                        <select class="form-control" name="kabupaten" required>
                            <option value="">Pilih Kabupaten/Kota</option>
                            <?php
                            include ("class/fillCbo.php");
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Propinsi**</label>
                        <?php
                        $sql = "SELECT name as a FROM `provinces`";
                        ?>
                        <select class="form-control" name="provinsi">
                            <option value="">Pilih Provinsi</option>
                            <?php
                            include ("class/fillCbo.php");
                            ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Negara*</label>
                        <?php
                        $sql = "SELECT country_name as a FROM `apps_countries`";
                        ?>
                        <select class="form-control" name="negara" required>
                            <option value="">Pilih Negara</option>
                            <?php
                            include ("class/fillCbo.php");
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Jalur Distribusi*</label>
                        <?php
                        $sql = "SELECT jalur_distribusi as a FROM `jalur_distribusi`";
                        ?>
                        <select class="form-control" name="jalur_distribusi" required>
                            <option value="">Pilih Jalur Distribusi</option>
                            <?php
                            include ("class/fillCbo.php");
                            ?>
                        </select>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="form-group col-sm-6" >
                        <label>Tipe Outlet*</label>
                        <?php
                        $sql = "SELECT tipe_outlet as a FROM `tipe_outlet`";
                        ?>
                        <select class="form-control" name="tipe_outlet" required>
                            <option value="">Pilih Tipe Outlet</option>
                            <?php
                            include ("class/fillCbo.php");
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Ukuran Outlet*</label>
                        <?php
                        $sql = "SELECT ukuran_outlet as a FROM `ukuran_outlet`";
                        ?>
                        <select class="form-control" name="ukuran_outlet" required>
                            <option value="">Pilih Ukuran Outlet</option>
                            <?php
                            include ("class/fillCbo.php");
                            ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Bangunan Outlet*</label>
                        <?php
                        $sql = "SELECT bangunan_outlet as a FROM `bangunan_outlet`";
                        ?>
                        <select class="form-control" name="bangunan_outlet" required>
                            <option value="">Pilih Bangunan Outlet</option>
                            <?php
                            include ("class/fillCbo.php");
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Foto Outlet *</label>
                        <input class="form-control" type="file" name="foto" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-sm-12"> 
                        <button type="submit" class="btn btn-default" style="width: 100%;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


