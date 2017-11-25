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
    <title>BEHAESTEX</title>
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
    <br>
    
    <div id="map" class="map">
        <div id="gmap" style="height: 100%;width:100%;" ></div>
        <div id="olmap"  style="height: 100%;width:100%;" ></div>
    </div>

    <script type="text/javascript">
        var directionsService;
        var directionsDisplay;

        var gmap = new google.maps.Map(document.getElementById('gmap'), {
            center: {lat: -7.2547, lng: 112.752},
            zoom: 14,
            disableDefaultUI: true,
            keyboardShortcuts: false,
            draggable: false,
            disableDoubleClickZoom: true,
            scroolwheel: false,
            streetViewControl: true
        });
        directionsService = new google.maps.DirectionsService;
        directionsDisplay = new google.maps.DirectionsRenderer;
        directionsDisplay.setMap(gmap);

        var view = new ol.View({
                // make sure the view doesn't go beyond the 22 zoom levels of Google Maps
                maxZoom: 5
            });
        view.on('change:center', function () {
            var center = ol.proj.transform(view.getCenter(), 'EPSG:3857', 'EPSG:4326');
            gmap.setCenter(new google.maps.LatLng(center[1], center[0]));
        });
        view.on('change:resolution', function () {
            gmap.setZoom(view.getZoom());
        });


        var olMapDiv = document.getElementById('olmap');

        var map = new ol.Map({
            target: olMapDiv,
            layers: [
            ],
            view: view
        });


        view.setCenter(ol.proj.fromLonLat([117.6899509, -1.9048122]));
        view.setZoom(12);

        olMapDiv.parentNode.removeChild(olMapDiv);
        gmap.controls[google.maps.ControlPosition.TOP_LEFT].push(olMapDiv);

    </script>
</br>
</body>
</html>