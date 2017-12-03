<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../openlayers4/css/ol.css" type="text/css">
    <script src="../../openlayers4/build/ol.js" type="text/javascript"></script>
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


    <div id="popup" class="ol-popup">
        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
        <div id="popup-content"></div>
    </div>
    <div id="map" class="map">
        <div id="gmap" style="height: 100%;width:100%;" ></div>
        <div id="olmap"  style="height: 100%;width:100%;" ></div>
    </div>
    <div style="padding: 20px; position: absolute; top: 0px; right: 0px;">
        <button><a href="index.php">Back</a></button>    
    </div>
    
    <script type="text/javascript">
        var directionsService;
        var directionsDisplay;

        var colorKuning = new ol.style.Fill({
            color: 'rgba(255, 255, 0, 0.2)'
        });
        var colorKuningKemerahan= new ol.style.Fill({
            color: 'rgba(154, 205, 50, 0.2)'
        });
        var colorMerah = new ol.style.Fill({
            color: 'rgba(255, 0, 0, 0.2)'
        });
        var garis=new ol.style.Stroke({
            color:'#000000',
            width:1.25
        });

        var tipe1 = new ol.style.Style({
            fill : colorKuning,
            stroke : garis
        });

        var tipe2 = new ol.style.Style({
            fill : colorKuningKemerahan,
            stroke : garis
        });

        var tipe3 = new ol.style.Style({
            fill : colorMerah,
            stroke : garis
        });

        var arrUkuran = [];

        <?php 
        include_once('class/connection.php');
        $sql = "SELECT u.No as idUkuran, o.propinsi as prop FROM outlet as o inner join ukuran_outlet as u on o.ukuran = u.No inner join provinces as p on o.propinsi = p.id inner join tipe_outlet as t on o.tipe = t.No";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $totalRow = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                arrUkuran['<?php echo $row["prop"] ?>']=<?php echo $row['idUkuran'] ?>;
                <?php
            }
        }
        ?>

        function render_tipe(feature,resolution){
            console.log(feature.get('KODE_PROP'))
            var ukuran = arrUkuran[feature.get('KODE_PROP')];
            if(ukuran==1) { 
                return tipe1;
            } else if(ukuran==2) { 
                return tipe2;
            } else if(ukuran==3) {
                return tipe3;
            } else {
                return null;
            }
        }



        var prop = new ol.layer.Vector({
            source: new ol.source.Vector({
                format: new ol.format.GeoJSON({
                    defaultDataProjection: 'EPSG:4326'
                }),
                url: 'indonesia_prop.geojson'
            }),
            style : render_tipe,
        });

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
                maxZoom: 12
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
            prop,
            ],
            view: view
        });

        view.setCenter(ol.proj.fromLonLat([117.6899509, -1.9048122]));
        view.setZoom(5);

        olMapDiv.parentNode.removeChild(olMapDiv);
        gmap.controls[google.maps.ControlPosition.TOP_LEFT].push(olMapDiv);

    </script>
</br>
</body>
</html>