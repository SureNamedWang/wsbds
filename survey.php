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
        <script>
            var counter = 0;
            var idBarang = "";
            var idBarang2 = "";
            var arrPromo = [[], []];
            var arrUpline = [[], []];
            var isi = "";
            var i = 0;
            var j = 0;
            for (i = 1; i <= 15; i++) {
                arrPromo[i] = [];
                for (j = 1; j <= 12; j++) {
                    arrPromo[i][j] = false;
                }
            }
        </script>

    </head>
    <body style="background-color: graytext; color: white">
        <!-- NAVIGATION BAR -->
        <div class="container-fluid" style="padding-left: 0;padding-right: 0;">
            <div class="row">
                <div class="col-sm-12">
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
                                <li class="nav-item">
                                    <a class="nav-link"  href="outlet.php">Outlet</a>
                                </li>
                                <li class="active" style="background-color: whitesmoke;">
                                    <a class="nav-link" style="color: black;" href="survey.php">Survey</a>
                                </li>    
                            </ul>
                        </div>  
                    </nav>
                </div>
            </div>
        </div>

        <br>

        <!-- ISI -->
        <?php
        include_once ("class/connection.php");
        if (isset($_POST['submit'])) {
            $idSurvey = $_POST['nomor'];
            $surveyor = $_POST['surveyor'];
            $tanggal = $_POST['tanggal'];
            $catatan = $_POST['catatan'];
            $outlet = $_POST['outlet'];
            $error="";
            if ($idSurvey = "") {
                $error+="Mohon isi nomor survey \n";
            }
            if ($surveyor = "") {
                $error+="Mohon isi nama surveyor \n";
            }
            if ($tanggal = "") {
                $error+="Mohon isi tanggal survey";
            }
            if ($outlet = "") {
                $error+="Mohon pilih outlet yang di survey";
            }
            if($error=""){
                $sql = "INSERT INTO `survey_detail` (`id`, `surveyor`, `outlet`, `tanggal`, `catatan`) "
                    . "VALUES ('".$idSurvey."',"
                        . " '".$surveyor."',"
                        . " '".$outlet."',"
                        . " '".$tanggal."',"
                        . " '".$catatan."')";
                
            }
            
        }
        ?>
        <div class="container-fluid" style="padding-left: 5%;padding-right: 5%;">
            <form class="form-horizontal" name="formSurvey" method="post" action="survey.php">
                <ul class="nav nav-tabs" role="tablist" style="color: black;border-bottom-color: transparent;">
                    <li class="nav-item" style="width: 20%;">
                        <button style="border-right-color: black; width: 100%;" class="nav-link" href="#detail" role="tab" data-toggle="tab">Detail Survey</button>
                    </li>
                    <li class="nav-item" style="width: 20%;">
                        <button style="border-right-color: black; width: 100%;" class="nav-link" href="#laris" role="tab" data-toggle="tab">Produk Terlaris</button>
                    </li>
                    <li class="nav-item" style="width: 20%;">
                        <button style="border-right-color: black; width: 100%;" class="nav-link" href="#promo" role="tab" data-toggle="tab">Material Promo</button>
                    </li>
                    <li class="nav-item" style="width: 20%;">
                        <button disabled style="border-right-color: black; width: 100%;" id="tabupline" class="nav-link" href="#upline" role="tab" data-toggle="tab">Upline Produk</button>
                    </li>
                    <li class="nav-item" style="width: 20%;">
                        <input type="submit" class="nav-link" style="width: 100%;" name="submit" value="Simpan Survey"></button>
                    </li>
                </ul>
                <br>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="detail">
                        <div class="form-group col-sm-12">
                            <label>Nomor Kuisioner*</label>
                            <input type="text" class="form-control" name="nomor" placeholder="Masukkan Nomor Kuisioner">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Surveyor*</label>
                            <input type="text" class="form-control" name="surveyor" placeholder="Masukkan Surveyor">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Tanggal*</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Catatan</label>
                            <input type="text" class="form-control" name="catatan" placeholder="Catatan">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Outlet*</label>
                            <?php
                            $sql = "SELECT * FROM `outlet`";
                            ?>
                            <select id="cboOutlet" class="form-control" name="outlet">
                                <option value="">Pilih Outlet</option>
                                <?php
                                include ("class/fillCbo.php");
                                ?>
                            </select>
                            <script>
                                $("#cboOutlet").change(function () {
                                    alert($("#cboOutlet").val());
                                    var jalur = $("#cboOutlet").val();
                                    if (jalur == 1) {
                                        alert('jalur 1');
                                        $('#tabupline').prop('disabled', false);
                                    } else {
                                        alert('jalur bukan 1');
                                        $('#tabupline').prop('disabled', true);
                                    }
                                });
                            </script>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="laris">
                        <div class="row">
                            <div class="col-sm-9">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Produsen</th>
                                            <th>Merek</th>
                                            <th>Pilih?</th>
                                            <th>Urutan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM produk";
                                        include ("class/fillProduk.php");
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="promo">
                        <div class="row">
                            <div class="col-sm-6">
                                <table id="tblData" class="table table-bordered">
                                    <thead>
                                        <tr><center>MERK</center></tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Produsen</th>
                                        <th>Merek</th>
                                        <th>Pilih Promo</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr><center id='titlepromo'>PROMO</center></tr>
                                    <tr>
                                        <th>Material Promo</th>
                                        <th>Pilih?</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM material_promo";
                                        include ("class/fillPromo.php");
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="upline">
                        <div class="row">
                            <div class="col-sm-3">
                                <table id="tblMerkUpline" class="table table-bordered">
                                    <thead>
                                        <tr><center>MERK</center></tr>
                                    <tr><h6 style="background-color: crimson">PILIH MERK DULU!!!!</h6></tr>
                                    <tr>
                                        <th>Merek</th>
                                        <th>Pilih Merk</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-3">
                                <table class="table-bordered">
                                    <thead>
                                        <tr><h6 id="titleUpline">PILIH UPLINE</h6></tr>
                                    </thead>
                                    <tbody>
                                    <select id="cboUpline" class="form-control" name="outlet">
                                        <option value="">Pilih Outlet</option>
                                        <?php
                                        include ("class/fillUpline.php");
                                        ?>
                                    </select>
                                    <label>Urutan Ke-</label>
                                    <input id="urutanUpline" type="number" class="form-control" name="urutan">
                                    <div class="col-sm-1">
                                        <button type="button" id="btnSimpan">Simpan</button>    
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" id="btnReset">Reset</button> 
                                    </div>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-bordered" id="tblUpline">
                                    <thead>
                                        <tr><center>Upline</center></tr>
                                    <tr>
                                        <th></th>
                                        <th>Merk</th>
                                        <th>Nama Outlet</th>
                                        <th>Provinsi</th>
                                        <th>Kabupaten</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            $('#btnSimpan').on('click', function () {
                isi = $('#cboUpline').val();
                var arrIsi = isi.split('/');
                var outletUpline = arrIsi[1];
                var posisi = $('#urutanUpline').val();
                if (outletUpline == "") {
                    alert("Silahkan pilih outline yang akan di simpan");
                }
                if (posisi == "") {
                    alert("Silahkan masukan urutan upline yang akan di simpan");
                }
                if (outletUpline != "" && posisi != "") {
                    var tempUpline = '<tr>' +
                            '<td>' + posisi + '</td>' +
                            '<td>' + namaBarang2 + '</td>' +
                            '<td>' + arrIsi[1] + '</td>' +
                            '<td>' + arrIsi[2] + '</td>' +
                            '<td>' + arrIsi[3] + '</td>' +
                            '</tr>';
                    $("#tblUpline tbody").append(tempUpline);
                    arrUpline[idBarang2] = [];
                    arrUpline[idBarang2][posisi] = posisi + "/" + namaBarang2 + "/" + arrIsi[1] + "/" + arrIsi[2] + "/" + arrIsi[3];
                    alert(arrUpline[idBarang2].length);
                }
            });
            $('#btnReset').on('click', function () {
                $("#tblUpline tbody").html("");
                arrUpline[idbarang2] = [];
            });
        </script>
    </body>
</html>

