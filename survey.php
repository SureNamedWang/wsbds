
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
                    <li class="nav-item">
                        <a class="nav-link"  href="outlet.php">Outlet</a>
                    </li>
                    <li class="active" style="background-color: whitesmoke;">
                        <a class="nav-link" style="color: black;" href="survey.php">Survey</a>
                    </li>    
                </ul>
            </div>  
        </nav>
        <br>

        <!-- ISI -->
        <div class="container-fluid" style="padding-left: 0;padding-right: 0;">
            <form class="form-horizontal" action="#">
                <ul class="nav nav-tabs" role="tablist" style="color: black;background-color: #3efef8">
                    <li class="nav-item">
                        <a class="nav-link" href="#detail" role="tab" data-toggle="tab">Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#laris" role="tab" data-toggle="tab">Produk Terlaris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promo" role="tab" data-toggle="tab">Material Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#upline" role="tab" data-toggle="tab">Upline</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="detail">
                        <div class="form-group col-sm-12">
                            <label>Nomor Kuisioner*</label>
                            <input type="text" class="form-control" name="nomor" placeholder="Masukkan Nomor Kuisioner" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Surveyor*</label>
                            <input type="text" class="form-control" name="surveyor" placeholder="Masukkan Surveyor" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Tanggal*</label>
                            <input type="date" class="form-control" name="tanggal"" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Catatan</label>
                            <input type="text" class="form-control" name="catatan" placeholder="Catatan">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="laris">
                        <table class="table table-striped">
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
                                <tr>
                                    <td>1</td>
                                    <td>Sarung</td>
                                    <td>Behastex</td>
                                    <td>Atlas</td>
                                    <td><input type="checkbox" value="1"/></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="promo">
                        <div class="row">
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                        <tr><center>MERK</center></tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Produsen</th>
                                        <th>Merek</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="clickable-row">
                                            <td>Sarung</td>
                                            <td>Behastex</td>
                                            <td>Atlas</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                        <tr><center>PROMO</center></tr>
                                    <tr>
                                        <th>Material Promo</th>
                                        <th>Pilih?</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jam</td>
                                            <td><input type="checkbox" value="1"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="upline">
                        <div class="row">
                            <div class="col-sm-2">
                                <table class="table table-striped">
                                    <thead>
                                        <tr><center>MERK</center></tr>
                                    <tr>
                                        <th>Merek</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="clickable-row">
                                            <td>Atlas</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-5">
                                <label>Nomor Kuisioner*</label>
                                <input type="text" class="form-control" name="nomor" placeholder="Masukkan Nomor Kuisioner" required>
                                <label>Nomor Kuisioner*</label>
                                <input type="text" class="form-control" name="nomor" placeholder="Masukkan Nomor Kuisioner" required>
                            </div>
                            <div class="col-sm-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr><center>Upline</center></tr>
                                    <tr>
                                        <th>Material Promo</th>
                                        <th>Pilih?</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jam</td>
                                            <td><input type="checkbox" value="1"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
<script>

</script>

