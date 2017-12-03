<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../openlayers4/css/ol.css" type="text/css">
    <script src="../openlayers4/build/ol.js" type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?v=3&amp;sensor=false&key=AIzaSyA5yxFpPgEksKyyOecCuUF1yvb-ntD8YVo"></script>
    <script src="Chart.bundle.js"></script>
    <script src="utils.js"></script>
    <title>BEHAESTEX</title>
    <style>
    .ol-popup {
        position: absolute;
        background-color: white;
        -webkit- filter: drop-shadow(0 1px 4px rgba(0,0,0,0.2));
        filter: drop-shadow(0 1px 4px rgba(0,0,0,0.2));
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #cccccc;
        bottom: 12px;
        left: -50px;
        min-width: 280px;
    }
    .ol-popup:after, .ol-popup:before {
        top: 100%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }
    .ol-popup:after {
        border-top- color: white;
        border-width: 10px;
        left: 48px;
        margin-left: -10px;
    }
    .ol-popup:before {
        border-top- color: #cccccc;
        border-width: 11px;
        left: 48px;
        margin-left: -11px;
    }
    .ol-popup- closer {
        text-decoration: none;
        position: absolute;
        top: 2px;
        right: 8px;
    }
    .ol-popup- closer:after {
        content: "✖";
    }
</style>
</head>
<body>
    <!-- NAVIGATION BAR -->
    <nav class="navbar bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php">PT.BEHAESTEX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav" style="text-align: center;">
                <li class="active" style="background-color: whitesmoke;">
                    <a class="nav-link" style="color: black;" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="outlet.php">Outlet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="survey.php">Survey</a>
                </li>    
            </ul>
        </div>
    </nav>

    <div style="padding-top: 10px; padding-left: 1%; padding-right: 1%">
        <h1>MAPS : </h1>
        <button><a href="mapoutlet.php">Outlet</a></button>
        <button><a href="maptipeoutlet.php">Tipe Outlet</a></button>
        <button><a href="mapukuranoutlet.php">Ukuran Outlet</a></button>
        <button><a href="mapmerklaris.php">Merk Laris Outlet</a></button>
    </div>

    
</br>
</body>
</html>